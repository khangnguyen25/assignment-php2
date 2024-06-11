<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @include('layouts.partials.css')
    <title>@yield('title')</title>
</head>

<body>

    @include('layouts.partials.nav')
    <!-- CONTENT -->
    <section id="content">

        @include('layouts.partials.topbar')

        <!-- MAIN -->
        <main>
            @yield('content')
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    @include('layouts.partials.js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
