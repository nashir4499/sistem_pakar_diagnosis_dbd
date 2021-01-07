<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gejala</h5>
                <button wire:click.prevent="resetInputs()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <input wire:model="kodeG" type="text" class="form-control" placeholder="Kode Gejala">
                        @error('kodeG') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nama Gejala" wire:model="namaG" >
                        @error('namaG') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="">
                        <textarea wire:model="ketG" class="form-control" placeholder="Keterangan" cols="30" rows="3"></textarea>
                        @error('ketG') <span class="text-danger">{{ $message }}</span>@enderror
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
