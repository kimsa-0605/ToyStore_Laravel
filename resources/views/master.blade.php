<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        @yield('css/title')
        <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
        
    </head>
    <body>
        <div class="container">
            <div class="container-content">
                @include('components.header')
                @yield('content')
                @include('components.footer')
                @include('components.script')
            </div>
        </div>
    </body>
</html>