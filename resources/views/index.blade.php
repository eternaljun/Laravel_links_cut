<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Short Link</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="antialiased">
    <div class="container" style="margin-top: 100px; width: 40%; ">
        @if (Session::has('success'))
            <div class="alert alert-success">
                <p>{{Session::get('success')}}</p>
            </div>
        @endif
        <p style="font-size: 1.5rem;">Paste the link here:</p>
        <form method="post" action="{{ route('shortlink.create') }}" >
            @csrf
            <div class="input-group-mb-3">
                <input type="text" name="link" style="vertical-align: middle;" class="form-control" placeholder="URL">
                <div class="input-group-append">
                    <input type="submit" class="btn btn-primary" value="Submit" style="margin-top: 10px;">
                </div>
            </div>
        </form>
    </div>
</body>
