<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Laporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-6">

                    {{-- judul pada card halaman --}}
                    <h4 class="text-lg font-semibold dark:text-gray-200 text-gray-700">Detail Laporan</h4>
                    <span class="text-sm dark:text-gray-200 text-gray-700">Detail laporan {{$data->judul_laporan}}
                    </span>

                    <div class="overflow-x-auto mt-6">
                        <table class="min-w-full bg-white dark:bg-transparent py-2">
                            <tbody>
                                <tr class="border border-gray-500 text-gray-800 dark:text-gray-200">
                                    <td class="text-sm font-semibold py-1 px-4">Judul Laporan</td>
                                    <td class="text-sm font-md py-1 px-4">{{$data->judul_laporan}}</td>
                                    <td rowspan="4" class="py-1 px-4">
                                        <img src="{{asset('storage/images/laporan/' . $data->dokumentasi)}}" width="300"
                                            alt="Dokumentasi laporan">
                                    </td>
                                </tr>
                                <tr class="border border-gray-500 text-gray-800 dark:text-gray-200">
                                    <td class="text-sm font-semibold py-1 px-4">Tanggal Laporan</td>
                                    <td class="text-sm font-md py-1 px-4">
                                        {{ date('D, d-m-Y', strtotime($data->tanggal_laporan))}}
                                    </td>
                                </tr>
                                <tr class="border border-gray-500 text-gray-800 dark:text-gray-200">
                                    <td class="text-sm font-semibold py-1 px-4">Status</td>
                                    <td class="text-sm font-md py-1 px-4">{{$data->status}}</td>
                                </tr>
                                <tr class="border border-gray-500 text-gray-800 dark:text-gray-200">
                                    <td class="text-sm font-semibold py-1 px-4">Detail Laporan</td>
                                    <td class="text-sm font-md py-1 px-4">{{$data->detail_laporan}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-4 mb-6">
                            <form action="" method="post">
                                @csrf 
                                <a href="" class="text-red-500 border border-red-500 py-2 px-4">edit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="py-4 px-4">
                        {{-- judul pada card halaman --}}
                        <h4 class="text-lg font-semibold dark:text-gray-200 text-gray-700">Detail Respon</h4>
                        <span class="text-sm dark:text-gray-200 text-gray-700">3 menit yang lalu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>