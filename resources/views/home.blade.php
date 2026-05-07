<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head', ['pageTitle' => 'Homepage', 'metaTitle' => 'The Homepage for my Laravel tutorial site'])

<body>
    @include('partials.navbar')
    <h1>Homepage</h1>
</body>
</html>