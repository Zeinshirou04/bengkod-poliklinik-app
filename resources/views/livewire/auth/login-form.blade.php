<form class="flex flex-col w-full p-6 gap-4">
    <x-forms.labeled-input type="email" label="Email" required="true" name="email"
        placeholder="Masukkan Alamat Email..." />
    <x-forms.labeled-input type="password" label="Kata Sandi" required="true" name="password"
        placeholder="Masukkan Password..." />
    <input class="bg-gradient-to-br from-blue-700 to-blue-500 px-2 py-2 rounded-md font-semibold text-white"
        type="submit" value="Masuk">
</form>
