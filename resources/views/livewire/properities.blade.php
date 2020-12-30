<div class="row justify-content-center mt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="font-bold">Care about people's approval and you will be their prisoner.</p>
                <br />
                <input type="text" wire:model="name" class="form-control" />
                <br />
                <p class="text-bold my-4">{{ strtoupper($name) }} - [{{ $this->len }}] chars long</p>
                <button class="btn btn-success" wire:click="resetName">Reset name</button>
            </div>
        </div>
    </div>
</div>