<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Diagnosa</h5>
                <button wire:click.prevent="resetInputs()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input wire:model="idR" type="text" class="form-control" placeholder="Kode Relasi" hidden>
                    <div class="row mb-3">
                        <div class="form-group col-sm-6">
                            <label for="exampleFormControlSelect1">Diagnosa</label>
                            <select wire:model="kodeP" class="form-control" id="kodeP">
                                <option selected>Choose...</option>
                                @foreach ($diagnosas as $diagnosa)
                                    <option value={{$diagnosa->kode}} >{{$diagnosa->nama_diagnosa}}</option>
                                @endforeach
                            </select>
                            @error('kodeP') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleFormControlSelect1">Gejala</label>
                            <select wire:model="kodeG" class="form-control" id="kodeG">
                                <option selected>Choose...</option>
                                {{-- @foreach ($gejalas as $gejala)
                                    <option value={{$gejala->kode}} >{{$gejala->nama_gejala}}</option>
                                @endforeach --}}
                                @foreach ($gejalaFix as $kode => $nama)
                                    <option value={{$kode}} >{{$nama}}</option>
                                @endforeach
                            </select>
                            @error('kodeG') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="">
                        <label for="">Certainty Factor</label>
                        <input wire:model="cf" type="number" class="form-control" placeholder="Certainty Factor" step="0.10" max="0.99" min="0">
                        @error('cf') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button wire:click.prevent="resetInputs()" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button  wire:click.prevent="store()" type="submit" class="btn btn-success close-modal" data-bs-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>
