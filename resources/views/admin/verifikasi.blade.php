@extends('admin.layouts.verifikasi-layout')

@section('title', 'Antrian Verifikasi')

@section('content')
  <div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold text-gray-800 mb-2">Antrian Verifikasi</h1>
    <p class="text-sm text-gray-500 mb-6">Tinjau data advokat</p>

    <table class="w-full text-left border-collapse">
      <thead class="bg-gray-100">
        <tr>
          <th class="p-3 border-b">NIA</th>
          <th class="p-3 border-b">Jenis</th>
          <th class="p-3 border-b">Diserahkan Oleh</th>
          <th class="p-3 border-b">Tanggal</th>
          <th class="p-3 border-b">Status</th>
          <th class="p-3 border-b">Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover:bg-gray-50">
          <td class="p-3 border-b">07-00941/PERADI-PUPA/III/17</td>
          <td class="p-3 border-b">Identitas</td>
          <td class="p-3 border-b">Dika Maul</td>
          <td class="p-3 border-b">19 Juni 2025</td>
          <td class="p-3 border-b">
            <span class="px-2 py-1 text-sm text-yellow-700 bg-yellow-100 rounded">Menunggu</span>
          </td>
          <td class="p-3 border-b">
            <a href="#" class="text-green-600 hover:underline">Setujui</a> |
            <a href="#" class="text-red-600 hover:underline">Tolak</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
