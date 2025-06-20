<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login Admin</h2>

    @if(session('error'))
      <div class="bg-red-100 text-red-600 p-2 rounded mb-4 text-sm">
        {{ session('error') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login.proses') }}">
      @csrf

      <div class="mb-4">
        <label class="block mb-1 text-gray-700">Email</label>
        <input type="email" name="email" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <div class="mb-6">
        <label class="block mb-1 text-gray-700">Password</label>
        <input type="password" name="password" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
        Login
      </button>
    </form>
  </div>

</body>
</html>
