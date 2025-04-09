@extends('layouts.authenticated-layout')

@section('content')
    <div class="w-full h-full">
        <section id="periksa-list-container" class="w-full h-full flex flex-col gap-12">
            <header class="w-min h-auto">
                <h2 class="text-5xl font-semibold text-blue-900">Periksa</h2>
            </header>
            <div id="periksa-table-container" class="w-full h-full rounded-md">
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
                                <th class="pb-4 pt-2">Nama Pasien</th>
                                <th class="pb-4 pt-2">Tanggal Periksa</th>
                                <th class="pb-4 pt-2">Catatan</th>
                                <th class="pb-4 pt-2">Biaya Periksa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t-1 border-gray-300">
                                <th class="pb-2 pt-4">1</th>
                                <td class="pb-2 pt-4">1</td>
                                <td class="pb-2 pt-4">Farras</td>
                                <td class="pb-2 pt-4">2025-05-02</td>
                                <td class="pb-2 pt-4">Kosong</td>
                                <td class="pb-2 pt-4">Rp. 24.000,-</td>
                            </tr>
                            <tr>
                                <th class="py-2">1</th>
                                <td class="py-2">1</td>
                                <td class="py-2">Farras</td>
                                <td class="py-2">2025-05-02</td>
                                <td class="py-2">Kosong</td>
                                <td class="py-2">Rp. 24.000,-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
