<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head', ['pageTitle' => 'About', 'metaTitle' => 'About us section for my Laravel tutorial site'])

<body>
    @include('partials.navbar')
    <h1>About</h1>
</body>
</html>