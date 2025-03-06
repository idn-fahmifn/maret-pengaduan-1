<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buat Laporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-6">
                    {{-- judul pada card halaman --}}
                    <h4 class="text-lg font-semibold dark:text-gray-200 text-gray-700">Buat Laporan Baru</h4>
                    <span class="text-sm dark:text-gray-200 text-gray-700">Form mengajukan laporan baru, silakan masukan
                        laporan dibawah ini.</span>
                    <form action="#" method="post">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="judul_laporan" :value="__('Judul Laporan')" />
                            <x-text-input id="judul_laporan" name="judul_laporan" type="text" class="mt-1 block w-full bg-transparent" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('judul_laporan')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="dokumentasi" :value="__('Dokumentasi Laporan')" />
                            <x-text-input id="dokumentasi" name="dokumentasi" type="file" class="mt-1 block w-full bg-transparent" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('dokumentasi')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="detail_laporan" :value="__('Detail laporan')" />
                            <textarea id="detail_laporan" name="detail_laporan" class="mt-1 block w-full bg-transparent rounded-md" required autofocus></textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('detail_laporan')" />
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-red-500 hover:bg-red-500 py-2 px-4 text-white text-sm rounded-md">Buat Laporan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>