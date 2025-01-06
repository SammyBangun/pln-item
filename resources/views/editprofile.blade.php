@extends('layouts.minimal')

@section('title', 'halo')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-semibold text-center mb-6">Edit Data</h1>
    <form action="{{ route('update', $user->id) }}" method="POST">
        @csrf
        <div class="space-y-4">
            <div class="form-group">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" value="{{ $user->username }}"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required>
            </div>
            <div class="form-group">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required>
            </div>
            <div class="form-group">
                <label for="id_karyawan" class="block text-sm font-medium text-gray-700">ID Karyawan</label>
                <input type="number" id="id_karyawan" name="id_karyawan" value="{{ $user->id_karyawan }}"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required>
            </div>
            <div class="form-group">
                <label for="divisi" class="block text-sm font-medium text-gray-700">Divisi</label>
                <input type="text" id="divisi" name="divisi" value="{{ $user->divisi }}"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required>
            </div>
            <div class="form-group">
                <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" value="{{ $user->jabatan }}"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    required>
            </div>
            <div class="form-group">
                <label for="password" class="block text-sm font-medium text-gray-700">Password (Opsional)</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>
        <button type="submit"
            class="w-full mt-6 py-2 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Update</button>
    </form>
</div>

@endsection