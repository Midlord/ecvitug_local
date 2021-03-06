<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\History;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histories = History::where('user_id',auth()->user()->id)
                            ->latest()
                            ->get();

        return view('admin.histories.index',compact('histories'));
    }

}
