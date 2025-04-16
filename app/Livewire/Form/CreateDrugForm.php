<?php

namespace App\Livewire\Form;

use App\Models\Item\Obat;
use Livewire\Component;

class CreateDrugForm extends Component
{

    public $nama_obat;
    public $jenis_kemasan;

    public function store()
    {
        try {
            Obat::create([
                'nama_obat' => $this->nama_obat,
                'kemasan' => $this->jenis_kemasan
            ]);
            $this->dispatch('daftarObatUpdated');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function render()
    {
        return view('livewire.form.create-drug-form');
    }
}
