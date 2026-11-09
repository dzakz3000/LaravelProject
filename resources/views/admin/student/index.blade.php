<x-admin.layout>

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Students</h1>
            <p class="text-sm text-gray-500 mt-1">Kelola data siswa.</p>
        </div>

        <!-- Tombol yang sudah diperbaiki -->
        <button data-modal-target="modal-tambah-siswa" data-modal-toggle="modal-tambah-siswa" type="button" class="mt-4 md:mt-0 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            + Tambah Siswa
        </button>

        <!-- Background Modal Melayang -->
<div id="modal-tambah-siswa" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-900/50">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Kotak Konten Putih di Tengah -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">

            <!-- Bagian Header (Judul & Tombol Silang/Close) -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Data Siswa
                </h3>
                <!-- TAMBAHAN: onclick="document.getElementById('form-tambah-siswa').reset()" agar form kosong saat diclose -->
                <button type="button" onclick="document.getElementById('form-tambah-siswa').reset()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="modal-tambah-siswa">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Tutup modal</span>
                </button>
            </div>

            <!-- Bagian Body (Formulir Data) -->
            <!-- TAMBAHAN: id="form-tambah-siswa" agar bisa di-reset oleh tombol close -->
            <form id="form-tambah-siswa" action="{{ route('admin.student.store') }}" method="POST" class="p-4 md:p-5">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-1">

                    <!-- 1. Input Nama -->
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Siswa</label>
                        <!-- TAMBAHAN: value="{{ old('nama') }}" -->
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Ketik nama lengkap" required>
                    </div>

                    <!-- 2. Input NIS -->
                    <div>
                        <label for="nis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIS</label>
                        <!-- TAMBAHAN: value="{{ old('nis') }}" -->
                        <input type="number" name="nis" id="nis" value="{{ old('nis') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Contoh: 12345" required>
                    </div>

                    <!-- 3. Pilihan Kelas (Dropdown) -->
                    <div>
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <select id="kelas" name="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                            <option selected disabled value="">-- Pilih Kelas --</option>
                            <!-- TAMBAHAN: Pengecekan old() pada option menggunakan ternary operator -->
                            <option value="11 PPLG 1" {{ old('kelas') == '11 PPLG 1' ? 'selected' : '' }}>11 PPLG 1</option>
                            <option value="11 PPLG 2" {{ old('kelas') == '11 PPLG 2' ? 'selected' : '' }}>11 PPLG 2</option>
                            <option value="11 PPLG 3" {{ old('kelas') == '11 PPLG 3' ? 'selected' : '' }}>11 PPLG 3</option>
                        </select>
                    </div>

                    <!-- 4. Input Alamat -->
                    <div>
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <!-- TAMBAHAN: {{ old('alamat') }} diletakkan di antara tag textarea -->
                        <textarea id="alamat" name="alamat" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Ketik alamat lengkap siswa..." required>{{ old('alamat') }}</textarea>
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-2">
                    Simpan Data
                </button>
            </form>
        </div>
    </div>
</div>


    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden border border-gray-100 dark:border-gray-700">

        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 border-b dark:border-gray-700">
            <div class="w-full md:w-1/2">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari nama atau NIS..." required="">
                    </div>
                </form>
            </div>
            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">--Semua Kelas--</option>
                    <option value="11 PPLG 1">11 PPLG 1</option>
                    <option value="11 PPLG 2">11 PPLG 2</option>
                    <option value="11 PPLG 3">11 PPLG 3</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b dark:border-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-4">NO</th>
                        <th scope="col" class="px-6 py-4">NAME</th>
                        <th scope="col" class="px-6 py-4">NIS</th>
                        <th scope="col" class="px-6 py-4">CLASS</th>
                        <th scope="col" class="px-6 py-4">MAJOR</th>
                        <th scope="col" class="px-6 py-4">ADDRESS</th>
                        <th scope="col" class="px-6 py-4">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $student['name'] }}
                        </td>
                        <td class="px-6 py-4">{{ $student->nis}}</td>
                        <td class="px-6 py-4">{{ $student->classroom->name}}</td>
                        <td class="px-6 py-4">{{ $student->major}}</td>
                        <td class="px-6 py-4">{{ $student->address }}</td>
                        <td class="px-6 py-4">
                            @if(isset($student['status']) && $student['status'] == 'Inactive')
                                <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-1 rounded dark:bg-red-900 dark:text-red-300">Inactive</span>
                            @else
                                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded dark:bg-green-900 dark:text-green-300">Active</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
