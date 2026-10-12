<x-admin.layout>

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Students</h1>
            <p class="text-sm text-gray-500 mt-1">Kelola data siswa.</p>
        </div>
        <button type="button" class="mt-4 md:mt-0 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            + Tambah Siswa
        </button>
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
                    <option value="X PPLG 1">X PPLG 1</option>
                    <option value="X PPLG 2">X PPLG 2</option>
                    <option value="XI PPLG 1">XI PPLG 1</option>
                    <option value="XI PPLG 2">XI PPLG 2</option>
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
                        <th scope="col" class="px-6 py-4">ADDRESS</th> <!-- Ditambahkan -->
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
                        <td class="px-6 py-4">{{ $student['nis'] }}</td>
                        <td class="px-6 py-4">{{ $student['classroom'] }}</td>
                        <td class="px-6 py-4">{{ $student['address'] }}</td> <!-- Ditambahkan -->
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
