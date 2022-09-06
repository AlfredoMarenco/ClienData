<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="submit">
        @csrf
        <input type="hidden" wire:model="status_id">
        <input type="hidden" wire:model="user_id">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre(s)</label>
                <input type="text" class="form-control" wire:model="name">
                @error('name')
                    <span class="error text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Apellidos</label>
                <input type="text" class="form-control" wire:model="last_name">
                @error('last_name')
                    <span class="error text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-12">
                <label for="inputEmail4">Email</label>
                <input type="text" class="form-control" wire:model="email">
                @error('email')
                    <span class="error text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Teléfono</label>
            <input type="text" class="form-control" wire:model="phone">
            @error('phone')
                <span class="error text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label" for="gridCheck">
                    <input class="form-check-input" type="checkbox" wire:model="policy">
                    He leido <a href="" class="text-danger">aviso de privacidad.</a> y
                    estor de
                    acuerdo
                </label>
            </div>
            @error('policy')
                <span class="error text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">Contactar</button>
    </form>
</div>
