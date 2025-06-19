@extends('admin.layouts.artikel-layout')

@section('title', 'Daftar Artikel')

@section('content')
  <div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Daftar Artikel</h1>

    <div class="mb-4">
      <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        + Tambah Artikel
      </a>
    </div>

    <table class="w-full text-left border-collapse">
      <thead class="bg-gray-100">
        <tr>
          <th class="p-3 border-b">Judul</th>
          <th class="p-3 border-b">Kategori</th>
          <th class="p-3 border-b">Tanggal</th>
          <th class="p-3 border-b">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover:bg-gray-50">
          <td class="p-3 border-b">Artikel Pertama</td>
          <td class="p-3 border-b">Berita</td>
          <td class="p-3 border-b">19 Juni 2025</td>
          <td class="p-3 border-b">
            <a href="#" class="text-blue-600 hover:underline">Edit</a> |
            <a href="#" class="text-red-600 hover:underline">Hapus</a>
          </td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="p-3 border-b">Artikel Kedua</td>
          <td class="p-3 border-b">Pengumuman</td>
          <td class="p-3 border-b">17 Juni 2025</td>
          <td class="p-3 border-b">
            <a href="#" class="text-blue-600 hover:underline">Edit</a> |
            <a href="#" class="text-red-600 hover:underline">Hapus</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
