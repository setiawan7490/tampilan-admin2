@extends('admin.layouts.dashboard.index-layout')

@section('title', 'Dashboard')

@section('content')
  <div class="bg-white-50 border border-gray-200 rounded-lg p-6 shadow-md mb-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Dashboard</h1>
    <p class="text-gray-600">Dashboard-admin</p>
  </div>

  <div class="bg-grey-50 border border-white-200 rounded-lg p-6 shadow-md flex justify-between items-center">
    <div>
      <h2 class="text-xl font-semibold text-black-700">Profil Advokat</h2>
      <p class="text-gray-600">Clara Wijaya</p>
      <p class="text-sm text-gray-500">Terakhir aktif 2 jam lalu</p>
    </div>
    
    <div>
      <button class="bg-red-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow">
        Segera Aktifkan Akun
      </button>
    </div>
  </div>
@endsection
