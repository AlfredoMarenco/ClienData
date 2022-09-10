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
            <label for="inputAddress">Desarrollo de interes</label>
            <select wire:model="development_id" class="form-control">
                <option value="" disabled selected>Selecciona un desarrollo</option>
                @foreach ($developments as $development)
                    <option value="{{ $development->id }}">{{ $development->name }}</option>
                @endforeach
            </select>
            @error('development_id')
                <span class="error text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputAddress">¿En qué horario te gustaría que te contactemos?</label>
            <input type="text" class="form-control" wire:model="time">
            @error('time')
                <span class="error text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputAddress">¿Cuánto deseas invertir?</label>
            <select wire:model="amount" class="form-control">
                <option value="" disabled selected>Selecciona una opción</option>
                <option value="$250,000 - $500,000">De $250,000 a $500,000</option>
                <option value="$500,000 - $1,000,000">De $500,000 a $1,000,000</option>
                <option value="$2,000,000">Hasta $2,000,000</option>
                <option value="$3,000,000">Hasta $3,000,000</option>
            </select>
            @error('amount')
                <span class="error text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputAddress">¿Es tu primera inversión? (Opcional)</label>
            <select wire:model="first_time" class="form-control">
                <option value="" disabled selected>Selecciona una opción</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
            @error('first_time')
                <span class="error text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label" for="gridCheck">
                    <input class="form-check-input" type="checkbox" wire:model="policy">
                    He leido <a href="" class="text-verde">aviso de privacidad.</a> y
                    estor de
                    acuerdo
                </label>
            </div>
            @error('policy')
                <span class="error text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success btn-block">Contactar</button>
    </form>
</div>
