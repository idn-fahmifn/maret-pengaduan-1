<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Respon Laporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-6">
                    {{-- judul pada card halaman --}}
                    <h4 class="text-lg font-semibold dark:text-gray-200 text-gray-700">Merespon Laporan {{$data->judul_laporan}}</h4>
                    <span class="text-sm dark:text-gray-200 text-gray-700">Memberikan respon terhadap laporan yang masuk.</span>
                    <form action="{{route('respon.store', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Ubah status laporan')" />
                            <select name="status" class="mt-1 block w-full bg-transparent dark:text-gray-200 rounded-md">
                                <option value="diproses">diproses</option>
                                <option value="selesai">selesai</option>
                                <option value="ditolak">ditolak</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-input-label for="isi_respon" :value="__('Isi Respon')" />
                            <textarea id="isi_respon" name="isi_respon" class="mt-1 block w-full bg-transparent dark:text-gray-200 rounded-md" cols="0" required autofocus>
                            </textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('isi_respon')" />
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-red-500 hover:bg-red-500 py-2 px-4 text-white text-sm rounded-md">Tambah Respon</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>