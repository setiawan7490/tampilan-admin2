<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>@yield('title', 'Verifikasi')</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

  <div class="flex min-h-screen">

    {{-- Sidebar --}}
    @include('admin.partials.sidebar')

    {{-- Main Content --}}
    <main class="flex-1 p-6">
      @yield('content')
    </main>

  </div>

</body>
</html>
