<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center dark:bg-gray-700">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>
    @if (session()->has('mensaje'))
        <p
            class="uppercase rounded border border-green-800 bg-green-600 text-white font-bold p-2 my-3 w-full text-center">
            {{ session('mensaje') }}</p>
    @else
        <form wire:submit.prevent='postularme' class="w-96 mt-5" novalidate>
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum u hoja de vida')" />
                <x-text-input wire:model='cv' id="cv" class="block mt-1 w-full" accept=".pdf" type="file"
                    required />
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>
            <x-primary-button class=" ml-0">{{ __('Postularme') }}</x-primary-button>
        </form>
    @endif
</div>
