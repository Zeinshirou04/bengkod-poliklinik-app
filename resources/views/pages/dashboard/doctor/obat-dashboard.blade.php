@extends('layouts.authenticated-layout')

@section('content')
    <div class="w-full h-full">
        <section id="obat-list-container" class="w-full h-full flex flex-col gap-12">
            <header class="w-min h-auto">
                <h2 class="text-5xl font-semibold text-blue-900">Obat</h2>
            </header>
            <div id="obat-table-container" class="w-full h-full rounded-md flex gap-4">
                <div class="w-4/6">
                    <div id="obat-table-container-header"
                        class="w-full h-14 bg-gradient-to-r from-blue-600 to-blue-500 rounded-t-md flex justify-between px-8">
                        <div id="obat-table-container-label" class="h-full text-white flex items-center">
                            <h3 class="font-semibold text-md">List Obat</h3>
                        </div>
                    </div>
                    <div id="obat-table" class="w-full bg-white px-8 py-4 rounded-b-md">
                        <table class="w-full text-left">
                            <thead>
                                <tr>
                                    <th class="pb-4 pt-2">No</th>
                                    <th class="pb-4 pt-2">ID Obat</th>
                                    <th class="pb-4 pt-2">Nama Obat</th>
                                    <th class="pb-4 pt-2">Kemasan</th>
                                    <th class="pb-4 pt-2">Harga</th>
                                    <th class="pb-4 pt-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t-1 border-gray-300">
                                    <th class="pb-2 pt-4">1</th>
                                    <td class="pb-2 pt-4">1</td>
                                    <td class="pb-2 pt-4">Paracetamol</td>
                                    <td class="pb-2 pt-4">Pil</td>
                                    <td class="pb-2 pt-4">Rp. 24.000,-</td>
                                    <td class="pb-2 pt-4">
                                        <button class="bg-blue-500 text-white px-3 py-1 rounded-md">Edit</button>
                                        <button class="bg-red-500 text-white px-3 py-1 rounded-md">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="py-2">2</th>
                                    <td class="py-2">2</td>
                                    <td class="py-2">Actived</td>
                                    <td class="py-2">Sirup</td>
                                    <td class="py-2">Rp. 32.000,-</td>
                                    <td class="py-2">
                                        <button class="bg-blue-500 text-white px-3 py-1 rounded-md">Edit</button>
                                        <button class="bg-red-500 text-white px-3 py-1 rounded-md">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="w-2/6">
                    <div id="obat-form-container-header"
                        class="w-full h-14 bg-gradient-to-r from-blue-600 to-blue-500 rounded-t-md flex justify-between px-8">
                        <div id="obat-table-container-label" class="h-full text-white flex items-center">
                            <h3 class="font-semibold text-md">Form Obat</h3>
                        </div>
                    </div>
                    <div id="obat-form" class="w-full bg-white px-8 py-4 rounded-b-md">
                        <form action="" class="w-full flex flex-col gap-4">
                            <x-forms.labeled-input name="nama" label="Nama Obat" placeholder="Masukkan Nama Obat..." required="true" />
                            <x-forms.labeled-input name="kemasan" label="Jenis Kemasan" placeholder="Masukkan Jenis Kemasan..." required="true" />
                            <x-forms.labeled-input type="number" name="harga" label="Harga Obat" placeholder="Masukkan Harga Obat..." required="true" />
                            <input type="submit" class="bg-blue-500 py-2 rounded-md text-white hover:cursor-pointer mt-2" value="Tambah">
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
