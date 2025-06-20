<aside class="w-64 bg-white shadow-md p-4">
    <h2 class="text-xl font-bold mb-4">MyAdvokat-Admin</h2>
    <ul class="space-y-2">
        <li><a href="/admin/dashboard" class="text-blue-600 hover:underline">Dashboard</a></li>
        <li><a href="/admin/artikel" class="text-blue-600 hover:underline">Artikel</a></li>
        <li><a href="/admin/verifikasi" class="text-blue-600 hover:underline">Verifikasi</a></li>
    </ul>

    <div class="pt-4 border-t mt-4">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="flex items-center gap-2 text-red-600 hover:underline text-sm">
        {{-- Icon Logout (opsional, bisa dihapus jika tidak pakai) --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 002 2h4a2 2 0 002-2V7a2 2 0 00-2-2h-4a2 2 0 00-2 2v1" />
        </svg>
        Logout
      </button>
    </form>
  </div>
</aside>
