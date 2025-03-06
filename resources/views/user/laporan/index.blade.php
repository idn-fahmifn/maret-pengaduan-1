<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-6">

                    {{-- judul pada card halaman --}}
                    <h4 class="text-lg font-semibold dark:text-gray-200 text-gray-700">Laporan Saya</h4>
                    <span class="text-sm dark:text-gray-200 text-gray-700">Semua progress dan laporan saya, klik pada judul untuk melihat detail</span>

                    {{-- form search dan button new laporan --}}

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        {{-- search area --}}

                        <div class="">
                            <form action="#" method="get">
                                <div class="flex items-center">
                                    <input type="text" name="keyword" id="keyword" value="{{ Request::get('keyword') }}" placeholder="Cari laporan anda disini"
                                    class="rounded-l-md py-2 px-4 bg-transparent dark:text-gray-200 w-full focus:outline-none">
                                    <button type="submit" class="bg-red-500 border border-red-500 text-white rounded-r-md py-2 px-4">Cari</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
