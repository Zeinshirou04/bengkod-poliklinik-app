@extends('layouts.authenticated-layout')

@section('content')
    <div class="w-full h-full">
        <section id="periksa-list-container" class="w-full h-full flex flex-col gap-12">
            <header class="w-min h-auto">
                <h2 class="text-5xl font-semibold text-blue-900">Periksa</h2>
            </header>
            <div id="periksa-table-container" class="w-full h-full rounded-md flex gap-4">
                <div class="w-4/6">
                    <div id="periksa-table-container-header"
                        class="w-full h-14 bg-gradient-to-r from-blue-600 to-blue-500 rounded-t-md flex justify-between px-8">
                        <div id="periksa-table-container-label" class="h-full text-white flex items-center">
                            <h3 class="font-semibold text-md">List Periksa</h3>
                        </div>
                    </div>
                    <div id="periksa-table" class="w-full bg-white px-8 py-4 rounded-b-md">
                        <table class="w-full text-left">
                            <thead>
                                <tr>
                                    <th class="pb-4 pt-2">No</th>
                                    <th class="pb-4 pt-2">ID Periksa</th>
                                    <th class="pb-4 pt-2">Tanggal Periksa</th>
                                    <th class="pb-4 pt-2">Catatan</th>
                                    <th class="pb-4 pt-2">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t-1 border-gray-300">
                                    <th class="pb-2 pt-4">1</th>
                                    <td class="pb-2 pt-4">1</td>
                                    <td class="pb-2 pt-4">2025-05-05</td>
                                    <td class="pb-2 pt-4">Tolong Puasa</td>
                                    <td class="pb-2 pt-4">Belum Ditentukan</td>
                                </tr>
                                <tr>
                                    <th class="py-2">2</th>
                                    <td class="py-2">2</td>
                                    <td class="py-2">2025-06-06</td>
                                    <td class="py-2">Jangan Makan Pedas</td>
                                    <td class="py-2">Rp. 32.000,-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="w-2/6">
                    <div id="periksa-form-container-header"
                        class="w-full h-14 bg-gradient-to-r from-blue-600 to-blue-500 rounded-t-md flex justify-between px-8">
                        <div id="periksa-table-container-label" class="h-full text-white flex items-center">
                            <h3 class="font-semibold text-md">Form Periksa</h3>
                        </div>
                    </div>
                    <div id="periksa-form" class="w-full bg-white px-8 py-4 rounded-b-md">
                        <form action="" class="w-full flex flex-col gap-4">
                            <x-forms.labeled-input name="nama-pasien" label="Nama Pasien"
                                placeholder="Masukkan Nama Anda..." required="true" />
                            <x-forms.labeled-input type="option" name="id-dokter" label="Pilih Dokter"
                                required="true">
                                <option value="test">Dokter 1</option>
                            </x-forms.labeled-input>
                            <input type="submit" class="bg-blue-500 py-2 rounded-md text-white hover:cursor-pointer mt-2"
                                value="Daftar">
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
