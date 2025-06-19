<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Panel Admin')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex min-h-screen">

        @include('admin.partials.sidebar')

        <main class="flex-1 p-6">
            @yield('content')
        </main>

    </div>

</body>
</html>
