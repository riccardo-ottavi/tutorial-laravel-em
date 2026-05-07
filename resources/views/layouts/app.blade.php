<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head', ['pageTitle' => $pageTitle, 'metaTitle' => $metaTitle])

<body>
    @include('partials.navbar')
    <div>
        @yield('content')
    </div>
</body>
</html>