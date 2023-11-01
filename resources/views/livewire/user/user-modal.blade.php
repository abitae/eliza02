
    <div class="card">
        <div class="card-header bg-purple">
            <h3 class="card-title text-ligh">
                <i class="mr-1 fas fa-lg fa-bell"></i> Form Card
            </h3>
            <div class="card-tools">
                <button wire:click="$dispatch('closeModal')" type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-lg fa-times"></i> </button>
            </div>
        </div>
        <form wire:submit.prevent='save' autocomplete="off">
            <div class="card-body">
                <x-adminlte-input wire:model="form.name" name="name" label="Nombre" label-class="text-lightblue">
                    <x-slot name="bottomSlot">
                        @error('form.name')
                            <span class="text-sm text-red">
                                [{{ $message }}]
                            </span>
                        @enderror
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="email" wire:model="form.email" name="email" label="Email"
                    label-class="text-lightblue">
                    <x-slot name="bottomSlot">
                        @error('form.email')
                            <span class="text-sm text-red">
                                [{{ $message }}]
                            </span>
                        @enderror
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input type="password" wire:model="form.password" name="password" label="Password"
                    label-class="text-lightblue">
                    <x-slot name="bottomSlot">
                        @error('form.password')
                            <span class="text-sm text-red">
                                [{{ $message }}]
                            </span>
                        @enderror
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-select wire:model="form.role" name="role" label="Role" label-class="text-lightblue"
                    igroup-size="md">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-user"></i>
                        </div>
                    </x-slot>
                    @forelse ($roles as $role)
                        <option value="{{ $role }}">{{ $role }}</option>
                    @empty
                        <option>no data</option>
                    @endforelse
                </x-adminlte-select>
                @error('form.role')
                    <span class="text-sm text-red">
                        [{{ $message }}]
                    </span>
                @enderror
            </div>
            <div class=" card-footer">
                <x-adminlte-button  type="submit" icon="fas fa-lg fa-save" label="Save" />
                <x-adminlte-button wire:click="$dispatch('closeModal')" label="Cancel" />
            </div>
        </form>
    </div>

