<form wire:submit.prevent="store" class="flex flex-col w-full p-6 gap-3">
    @csrf
    <x-forms.labeled-input type="text" label="Nama Lengkap" required="true" name="fullname"
        placeholder="Masukkan Nama Lengkap..." model="fullname" />
    @error('fullname')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
    <x-forms.labeled-input type="email" label="Email" required="true" name="email"
        placeholder="Masukkan Alamat Email..." model="email" />
    @error('email')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
    <x-forms.labeled-input type="password" label="Kata Sandi" required="true" name="password"
        placeholder="Masukkan Password..." model="password" />
    @error('password')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
    <div class="grid grid-cols-5 gap-2">
        <div class="col-span-3">
            <x-forms.labeled-input type="text" label="Alamat" required="true" name="alamat"
                placeholder="Masukkan Alamat..." model="alamat" />
            @error('alamat')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-2">
            <x-forms.labeled-input type="text" label="No Handphone" required="true" name="no_hp"
                placeholder="Masukkan No Handphone..." model="no_hp" />
            @error('no_hp')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <button
        class="bg-gradient-to-br from-blue-700 to-blue-500 px-2 py-2 rounded-md font-semibold text-white">Daftar</button>
    @error('error')
        <p class="text-red-500 text-sm">{{ $error->message }} (Code {{ $er_code->message }})</p>
    @enderror
</form>
