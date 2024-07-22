
<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante' novalidate>
    <div>
        <x-input-label for="titulo" :value="__('Título vacante')" />
        
        <x-text-input wire:model="titulo" id="titulo" class="block mt-1 w-full" type="text" :value="old('titulo')" required
            autofocus autocomplete="titulo" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="salario" :value="__('Salario mensual')" />
        <select wire:model="salario" id="salario" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
            <option value="">-- Seleccione --</option>
            @foreach ($salarios as $salario)
            <option value="{{$salario->id}}">{{$salario->salario}}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select wire:model="categoria" id="categoria" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
            <option value="">-- Seleccione --</option>
            @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        
        <x-text-input wire:model="empresa" id="empresa" class="block mt-1 w-full" type="text" :value="old('empresa')" required
            autofocus autocomplete="empresa" />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día de postulación')" />
        
        <x-text-input wire:model="ultimo_dia" id="ultimo_dia" class="block mt-1 w-full" type="date" :value="old('ultimo_dia')" required
            autofocus autocomplete="ultimo_dia" />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripción')" />
        
        <textarea wire:model="descripcion" id="descripcion" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">{{old('ultimo_dia')}}</textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        
        <x-text-input wire:model="imagen_nueva" id="imagen" class="block mt-1 w-full" type="file" accept="image/*" required/>

        <div class="my-5">
            <x-input-label :value="__('Imagen actual')" />
            <img src="{{ asset('storage/vacantes/'. $imagen) }}" alt="{{ 'Imagen vacante '.$titulo }}">
        </div>
        <div class="my-5">
            @if ($imagen_nueva)
                Imagen nueva: <img class="rounded" src="{{ $imagen_nueva->temporaryUrl() }}" alt="">
            @endif
        </div>
        <x-input-error :messages="$errors->get('imagen_nueva')" class="mt-2" />
    </div>
    <x-primary-button class="ms-3 ml-0">{{ __('Guardar cambios') }}</x-primary-button>
</form>


