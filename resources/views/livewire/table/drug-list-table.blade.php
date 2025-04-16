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
        @if (is_null($obats) || empty($obats) || count($obats) < 1)
            <tr class="border-t-1 border-gray-300">
                <td colspan="6" class="pb-2 pt-4 text-center">Belum Ada Obat</td>
            </tr>
        @else
            @foreach ($obats as $obat)
                <tr>
                    <th class="py-2">{{ $loop->index + 1 }}</th>
                    <td class="py-2">{{ $obat->id }}</td>
                    <td class="py-2">{{ $obat->nama_obat }}</td>
                    <td class="py-2">{{ $obat->kemasan }}</td>
                    <td class="py-2">Belum Ditentukan</td>
                    <td class="py-2">
                        <button class="bg-blue-500 text-white px-3 py-1 rounded-md">Edit</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded-md">Delete</button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
