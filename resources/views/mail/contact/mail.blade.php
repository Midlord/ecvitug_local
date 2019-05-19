<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="Colonish" content="">
  <title>Contact Email</title>
</head>

<body style="padding:0px;margin:0px;font-family:'Helvetica Neue', Sans-serif, Arial;background-image:url({{ asset('img/email-bg.jpg') }})">
<div style="margin:40px auto;text-align:center">
    <img src="{{ asset('images/hammer.png') }}" style="height:100px;width:auto">
</div>
<div style="width:100%;">
    <div style="width:600px; background-color:#ffffff;margin:0 auto;padding:35px;color:#333333">

        <p><b>Customer name: </b>{{ $request->contact_name }}</p>

        <p><b>From: </b> {{ $request->contact_email }}</p>
        <p style="word-wrap:break-word;"> <b>Message: </b> {{ $request->contact_msg }}</p>
    </div>
</div>
</body>
</html>