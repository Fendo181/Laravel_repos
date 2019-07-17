<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
    <h1>Hello Laravel</h1>
    <div class="content">
        @if(Auth::check())
            {{ \Auth::user()->name }} さん、こんばんわ!
        @else
            ゲストさん、こんにちは！
        @endif
    </div>
    </body>
</html>
