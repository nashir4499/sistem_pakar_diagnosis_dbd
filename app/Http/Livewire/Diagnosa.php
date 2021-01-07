<?php

namespace App\Http\Livewire;

use App\Models\Diagnosa as ModelsDiagnosa;
use Livewire\Component;

class Diagnosa extends Component
{
    public $diagnosas;
    public $kodeP, $namaP, $ketP;
    public $cari;

    public function render()
    {
        if ($this->cari) {
            $this->diagnosas = ModelsDiagnosa::where('kode', 'LIKE', "%$this->cari%")
                ->orWhere('nama_diagnosa', 'LIKE', "%$this->cari%")
                ->orWhere('keterangan', 'LIKE', "%$this->cari%")
                // ->orWhere('kategoris_id', 'LIKE', "%$this->cari%")
                // ->orWhereHas('kategori', function (Builder $query) {
                //     $query->where('nama', 'like', "%$this->cari%");
                // })
                ->get();
        } else {
            $this->diagnosas = ModelsDiagnosa::all();
        }
        return view('livewire.diagnosa');
    }

    public function resetInputs()
    {
        $this->kodeP = null;
        $this->namaP = null;
        $this->ketP = null;
    }

    public function store()
    {
        $this->validate([
            'kodeP' => 'required',
            'namaP' => 'required',
            // 'ketP' => 'required',
        ]);

        ModelsDiagnosa::updateOrCreate(['kode' => $this->kodeP], [
            'kode' => $this->kodeP,
            'nama_diagnosa' => $this->namaP,
            'keterangan' => $this->ketP,
        ]);

        session()->flash('info', $this->kodeP ? 'Diagnosa Berhasil Diedit' : 'Diagnosa Berhasil Ditambah');

        $this->resetInputs();

        $this->emit('userStore'); // Close model to using to jquery
    }

    public function edit($kode)
    {
        $diagnosa = ModelsDiagnosa::findOrFail($kode);
        $this->kodeP = $diagnosa->kode;
        $this->namaP = $diagnosa->nama_diagnosa;
        $this->ketP = $diagnosa->keterangan;
    }

    public function delete($kode)
    {
        ModelsDiagnosa::find($kode)->delete();
    }

    public function cek($test)
    {
        dd($test);
    }
}
