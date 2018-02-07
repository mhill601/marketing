<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.header')
    </head>
    <body>
    	@include('partials.navigation')
        <div>
            <div class="content">
                @yield('content')
            </div>
        </div>
            @include('partials.footer')
    </body>
</html>