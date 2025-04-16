<form wire:submit.prevent="store" class="w-full flex flex-col gap-4">
    <x-forms.labeled-input type="text" name="nama" label="Nama Obat" placeholder="Masukkan Nama Obat..."
        required="true" model="nama_obat" />
    <x-forms.labeled-input type="text" name="kemasan" label="Jenis Kemasan"
        placeholder="Masukkan Jenis Kemasan..." required="true" model="jenis_kemasan" />
    {{-- <x-forms.labeled-input type="number" name="harga" label="Harga Obat"
        placeholder="Masukkan Harga Obat..." required="true" model="harga" /> --}}
    <input type="submit" class="bg-blue-500 py-2 rounded-md text-white hover:cursor-pointer mt-2"
        value="Tambah">
</form>