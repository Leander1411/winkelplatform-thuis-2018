<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>winkelplatform MKB</title>

    {{ HTML::style('css/page_style.css') }}
    {{ HTML::script('js/jquery.min.js') }}

    {{--  [css + js voor dropdown menu]  --}}
            {{--  bootstrap.min.css
            bootstrap.min.js
            jquery.min.js  --}}
    {{--  [/css + js voor dropdown menu]  --}}

</head>
<body>
    <div class="layout_container">
        <div class="header">
            @include('inc.header')
        </div>
        {{--  <div class="sidebar_main">  --}}
            {{--  <div class="sidebar">
                @include('inc.sidebar')
            </div>  --}}
            <div class="main">
                @include('inc.main')
            </div>
        {{--  </div>  --}}
        <div class="footer">
            @include('inc.footer')
        </div>
    </div>

    <div class="sidebar">
        @include('inc.sidebar')
    </div>
    {{ HTML::script('js/sidebar_filter.js') }}
</body>
</html>