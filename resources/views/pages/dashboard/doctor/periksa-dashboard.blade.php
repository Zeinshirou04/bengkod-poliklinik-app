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
                                <th class="pb-4 pt-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (is_null($periksas))
                                <tr class="border-t-1 border-gray-300">
                                    <td colspan="5" class="pb-2 pt-4 text-center">Belum Ada Periksa</td>
                                </tr>
                            @else
                                @foreach ($periksas as $periksa)
                                    <tr>
                                        <th class="pb-2 pt-4">1</th>
                                        <td class="pb-2 pt-4">{{ $periksa->id }}</td>
                                        <td class="pb-2 pt-4">{{ $periksa->pasien->nama }}</td>
                                        @if (is_null($periksa->tgl_periksa))
                                            <td class="pb-2 pt-4">Belum Ditentukan</td>
                                        @else
                                            <td class="pb-2 pt-4">{{ $periksa->tgl_periksa }}</td>
                                        @endif
                                        @if (is_null($periksa->catatan))
                                            <td class="pb-2 pt-4">Belum Ditentukan</td>
                                        @else
                                            <td class="pb-2 pt-4">{{ $periksa->catatan }}</td>
                                        @endif
                                        <td class="py-2">
                                            <button class="bg-yellow-600 text-white px-3 py-1 rounded-md">Detail</button>
                                            <button class="bg-blue-500 text-white px-3 py-1 rounded-md">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded-md">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
