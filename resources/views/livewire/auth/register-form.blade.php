<form class="flex flex-col w-full p-6 gap-4">
    <x-forms.labeled-input type="text" label="Nama Lengkap" required="true" name="fullname"
        placeholder="Masukkan Nama Lengkap..." />
    <x-forms.labeled-input type="email" label="Email" required="true" name="email"
        placeholder="Masukkan Alamat Email..." />
    <x-forms.labeled-input type="password" label="Kata Sandi" required="true" name="password"
        placeholder="Masukkan Password..." />
    <div class="grid grid-cols-5 gap-2">
        <div class="col-span-3">
            <x-forms.labeled-input type="text" label="Alamat" required="true" name="alamat"
                placeholder="Masukkan Alamat..." />
        </div>
        <div class="col-span-2">
            <x-forms.labeled-input type="text" label="No Handphone" required="true" name="no_hp"
                placeholder="Masukkan No Handphone..." />
        </div>
    </div>
    <input class="bg-gradient-to-br from-blue-700 to-blue-500 px-2 py-2 rounded-md font-semibold text-white" type="submit" value="Daftar">
</form>
