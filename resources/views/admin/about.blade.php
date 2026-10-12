<x-admin.layout>
    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">
            {{ $title }}
        </h1>

        <div class="mt-4 space-y-3 text-gray-700 dark:text-gray-300">
            <p><span class="font-medium">Nama:</span> {{ $nama }}</p>
            <p><span class="font-medium">Hobi:</span> {{ $hobi }}</p>
            <p>
                <span class="font-medium">Repository:</span>
                <a href="{{ $repository }}" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline">
                    {{ $repository }}
                </a>
            </p>
        </div>
    </div>
</x-admin.layout>
