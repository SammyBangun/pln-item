@extends("layouts.minimal")

@section('title', 'PT BELAWAN NUSANTARA')

@section("content")

<div class="max-w-md w-full mx-auto bg-white shadow-lg rounded-lg p-6 my-5">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Profile Pengguna</h1>

    <!-- Menampilkan Data Pengguna -->
    <div class="space-y-4">
        <div>
            <label class="block text-gray-600 font-medium">Username:</label>
            <p class="text-gray-800">{{ $user->username }}</p>
        </div>
        <div>
            <label class="block text-gray-600 font-medium">Email:</label>
            <p class="text-gray-800">{{ $user->email }}</p>
        </div>
        <div>
            <label class="block text-gray-600 font-medium">ID Karyawan:</label>
            <p class="text-gray-800">{{ $user->id_karyawan }}</p>
        </div>
        <div>
            <label class="block text-gray-600 font-medium">Divisi:</label>
            <p class="text-gray-800">{{ $user->divisi }}</p>
        </div>
        <div>
            <label class="block text-gray-600 font-medium">Jabatan:</label>
            <p class="text-gray-800">{{ $user->jabatan }}</p>
        </div>
    </div>

    <!-- Tombol Logout -->
    <a href="{{route('edit', $user->id)}}" class=" block mt-6 text-center bg-red-500 text-white py-2 rounded-lg
        hover:bg-red-600">
        edit
    </a>
</div>
@endsection