<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex min-h-screen">

        @include('admin.partials.sidebar')

        <div class="flex-1 ml-64 flex flex-col min-h-screen">

            <header class="bg-white shadow p-4 sticky top-0 z-10">
                <h1 class="text-2xl font-semibold text-gray-800">@yield('title')</h1>
            </header>

            <main class="flex-1 p-6">
                @yield('content')
            </main>

        </div>
    </div>

</body>
</html>
