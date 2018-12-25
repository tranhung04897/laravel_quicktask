<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@lang('task.title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{ Html::style(asset('js/app.js')) }}

        
        {{ Html::style("https://fonts.gstatic.com") }}
        {{ Html::style("https://fonts.googleapis.com/css?family=Nunito") }}
        {{ Html::style(asset('css/app.css')) }}
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
            </nav>
        </div>

        @yield('content')
    </body>
</html>
