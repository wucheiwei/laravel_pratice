<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>larvel 練習</title>
</head>
<body>
    <main >
        @if (session()->has('notice'))
            <div style="background-color:#01DF3A;">
                {{session()->get('notice')}}
            </div>
        @endif
        @yield('main')
    </main>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>