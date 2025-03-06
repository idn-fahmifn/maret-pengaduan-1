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
                    <span class="text-sm dark:text-gray-200 text-gray-700">Semua progress dan laporan saya, klik pada
                        judul untuk melihat detail</span>

                    {{-- form search dan button new laporan --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        {{-- search area --}}

                        <div class="">
                            <form action="#" method="get">
                                <div class="flex items-center">
                                    <input type="text" name="keyword" id="keyword" value="{{ Request::get('keyword') }}"
                                        placeholder="Cari laporan anda disini"
                                        class="rounded-l-md py-2 px-4 bg-transparent dark:text-gray-200 w-1/2 focus:outline-none">
                                    <button type="submit"
                                        class="bg-red-500 border border-red-500 hover:bg-red-600 text-white rounded-r-md py-2 px-4">Cari</button>
                                </div>
                            </form>
                        </div>
                        <div class="text-start sm:text-end md:text-end lg:text-end">
                            <a href="#"
                                class="text-md font-semibold bg-red-500 hover:bg-red-600 text-gray-200 py-2 px-4 rounded-md">Buat
                                Laporan</a>
                        </div>
                    </div>

                    {{-- Area tabel --}}

                    <div class="overflow-x-auto mt-6">
                        <table class="min-w-full bg-white dark:bg-transparent py-2">
                            <thead class="border border-x-0 border-gray-500">
                                <th class="py-2 px-4 text-gray-500 dark:text-gray-200 uppercase text-xs text-start">
                                    judul laporan</th>
                                <th class="py-2 px-4 text-gray-500 dark:text-gray-200 uppercase text-xs text-start">
                                    status</th>
                                <th class="py-2 px-4 text-gray-500 dark:text-gray-200 uppercase text-xs text-start">
                                    dibuat</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr class="border border-x-0 border-gray-500">
                                        <td class="py-2 px-4 text-gray-500 dark:text-gray-200 text-xs">
                                            {{$item->judul_laporan}}
                                        </td>

                                        <td class="py-2 px-4 text-gray-500 dark:text-gray-200 text-xs">
                                            @if ($item->status == 'pending')
                                                <span
                                                    class="bg-gray-400 py-1 px-4 text-xs uppercase rounded-full">pending</span>
                                            @elseif ($item->status == 'diproses')
                                                <span
                                                    class="bg-green-400 py-1 px-4 text-xs uppercase rounded-full">diproses</span>
                                            @elseif ($item->status == 'selesai')
                                                <span
                                                    class="bg-green-700 py-1 px-4 text-xs uppercase rounded-full">selesai</span>
                                            @else
                                                <span
                                                    class="bg-red-500 py-1 px-4 text-xs uppercase rounded-full">ditolak</span>
                                            @endif
                                        </td>
                                        
                                        <td class="py-2 px-4 text-gray-500 dark:text-gray-200 text-xs">
                                           {{$item->tanggal_laporan->diffForHumans()}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>