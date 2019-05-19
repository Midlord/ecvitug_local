<?php

namespace App\Http\Controllers\Admin;
use Alert;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Log;
use App\Models\History as AuditTrail;
use Storage;
use DB;
use Config;
use Illuminate\Routing\Controller;
class BackupController extends Controller
{
    public function index()
    {
        $disk = Storage::disk('local');

        $files = $disk->files('Laravel');
        $backups = [];
        // make an array of backup files, with their filesize and creation date

        /*
         * Removed the path in file_name to fix the API download
         */
        foreach ($files as $k => $f) {
            // only take the zip files into account
            if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                $backups[] = [
                    'file_path' => $f,
                    'file_name' => str_replace('Laravel/', '', $f),
                    'file_size' => $disk->size($f),
                    'last_modified' => $disk->lastModified($f),
                ];
            }
        }
        
        // reverse the backups, so the newest one would be on top
        $backups = array_reverse($backups);
        
        return view("backup.backups")->with(compact('backups'));
    }

    public function importDB()
    {
        
        return view('backup.import');
    }

    public function create()
    {
        try {
            // start the backup process

            Config::set('mail.driver', 'log');

            Artisan::call('backup:run',['--only-db' => true]);

            // Artisan::call('backup:run');

            $output = Artisan::output();

            AuditTrail::create([
                'content' => 'Backup Database in at '.\Carbon\Carbon::now()->format('M d, Y h:i a').'',
                'user_id' => auth()->user()->id,
            ]);

            Config::set('mail.driver', 'smtp');


            toastr()->success('New Backup Created!');

            return redirect()->back();
        } catch (Exception $e) {
            Flash::error($e->getMessage());
            return redirect()->back();
        }
       

    }

    /**
     * Downloads a backup zip file.
     *
     * TODO: make it work no matter the flysystem driver (S3 Bucket, etc).
     */
    public function download($file_name)
    {
        /*
         * Included the full path of the file
         */
        $file = 'Laravel/' . $file_name;
        $disk = Storage::disk('local');
        if ($disk->exists($file)) {
            $fs = Storage::disk('local')->getDriver();
            $stream = $fs->readStream($file);
            return \Response::stream(function () use ($stream) {
                fpassthru($stream);
            }, 200, [
                "Content-Type" => $fs->getMimetype($file),
                "Content-Length" => $fs->getSize($file),
                "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
            ]);
        } else {
            abort(404, "The backup file doesn't exist.");
        }
    }

    /**
     * Deletes a backup file.
     */
    public function delete($file_name)
    {
        $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
        if ($disk->exists(config('laravel-backup.backup.name') . '/' . $file_name)) {
            $disk->delete(config('laravel-backup.backup.name') . '/' . $file_name);
            toastr()->success('Successfuly Delete!');
            return redirect()->back();
        } else {
            abort(404, "The backup file doesn't exist.");
        }
    }

    public function ImportDatabase(Request $request)
    {

        DB::unprepared(file_get_contents('C:/Users/user/Desktop/db-dumps/'.$request->fileName));

        


        toastr()->success('Tables imported successfully!');


        return redirect()->back();
    }
} 