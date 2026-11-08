<x-admin.layout>
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Classrooms</h1>
            <p class="text-sm text-gray-500 mt-1">Kelola data kelas dan jurusan.</p>
        </div>
        <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
            + Tambah Kelas
        </button>
    </div>

    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden border border-gray-100 dark:border-gray-700">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b dark:border-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-4">No</th>
                        <th scope="col" class="px-6 py-4">Nama Kelas</th>
                        <th scope="col" class="px-6 py-4">Major</th>
                        <th scope="col" class="px-6 py-4">Jumlah Siswa</th>
                        <th scope="col" class="px-6 py-4">Daftar Nama Siswa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classrooms as $index => $classroom)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 align-top">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-bold text-gray-900 dark:text-white">
                            {{ $classroom->name }}
                        </td>
                        <td class="px-6 py-4 text-gray-900 dark:text-white">
                            {{ $classroom->major }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300 px-2 py-1 rounded text-xs font-medium">
                                {{ $classroom->students->count() }} Siswa
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                                @foreach($classroom->students as $student)
                                    <li>{{ $student->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
