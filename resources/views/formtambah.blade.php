@extends('layouts.minimal')

@section('title', 'formtambah')

@section('content')
<main class="max-w-4xl mx-auto p-6">
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <div>
            <h1 class="text-center text-3xl font-bold mt-10">Formulir</h1>
        </div>
        <form>
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email Aktif</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="full-name" class="block text-sm/6 font-medium text-gray-900">Nama
                                    Lengkap</label>
                                <div class="mt-2">
                                    <input type="text" name="full-name" id="full-name" autocomplete="name"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                        style="width: calc(100% - 32px);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="institusi" class="block text-sm/6 font-medium text-gray-900">Nama
                                Institusi</label>
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6"></div>
                                    <input type="text" name="institusi" id="institusi"
                                        class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="jurusan" class="block text-sm/6 font-medium text-gray-900">Jurusan/Program
                                Studi</label>
                            <div class="mt-2">
                                <input type="text" name="jurusan" id="jurusan"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="semester" class="block text-sm/6 font-medium text-gray-900">Semester</label>
                            <div class="mt-2">
                                <input type="text" name="semester" id="semester"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm/6 font-medium text-gray-900">Pilih Divisi
                                PKL</label>
                            <div class="mt-2 grid grid-cols-1">
                                <select id="country" name="country" autocomplete="country-name"
                                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    <option value="" disabled selected>Pilih Divisi</option>
                                    <option>Divisi1</option>
                                    <option>Divisi2</option>
                                    <option>Divisi3</option>
                                    <option>Divisi4</option>
                                    <option>Divisi5</option>
                                </select>
                                <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                    viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>


                        <div class="col-span-full">
                            <label for="photo" class="block text-sm/6 font-medium text-gray-900">Foto Diri</label>
                            <div class="mt-2 flex items-center gap-x-3">
                                <svg class="size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <button type="button" onclick="document.getElementById('file-input').click()"
                                    class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    Upload
                                </button>
                                <!-- Menambahkan atribut accept untuk membatasi hanya file gambar -->
                                <input type="file" id="file-input" class="hidden" accept="image/*"
                                    onchange="displayFileName()" />
                            </div>

                            <!-- Menampilkan nama file yang dipilih dan tombol Batal -->
                            <div id="file-info" class="mt-2 text-sm text-gray-600">
                                <span id="file-name">No file chosen</span>
                                <span id="cancel-file" class="text-blue-500 cursor-pointer hidden"
                                    onclick="cancelFile()"> Batal</span>
                            </div>
                        </div>


                        <div class="col-span-full">
                            <label for="link-surat" class="block text-sm/6 font-medium text-gray-900">Link Surat
                                Pengantar</label>
                            <div class="mt-2">
                                <input type="url" name="link-surat" id="link-surat"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                    placeholder="Masukkan link surat pengantar">
                            </div>
                            <p class="mt-2 text-xs text-gray-500">
                                Upload surat pengantar Anda dalam format PDF ke Google Drive, lalu kirim linknya.<br>
                                <strong>Note:</strong> Pastikan Anda mengizinkan akses untuk public.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" onclick="history.back()"
                    class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
</main>

@endsection