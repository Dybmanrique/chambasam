<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

        @forelse ($vacantes as $vacante)
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between items-center">
                <div class="leading-10">
                    <a href="{{route('vacantes.show', $vacante->id)}}" class="text-xl font-bold">
                        {{ $vacante->titulo }}
                    </a>
                    <p class="">{{ $vacante->empresa }}</p>
                    <p>Último día: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
                </div>
                <div class="flex flex-col md:flex-row gap-3 items-strech mt-5 md:mt-0">
                    <a href="{{route('candidatos.index', $vacante)}}"
                        class="bg-slate-800 dark:bg-slate-500 py-2 px-4 rounded text-white dark:text-gray-300 text-xs font-bold uppercase text-center">
                        {{$vacante->candidatos->count()}} Candidatos
                    </a>
                    <a href="{{ route('vacantes.edit', $vacante->id) }}"
                        class="bg-blue-800  py-2 px-4 rounded text-white dark:text-gray-300 text-xs font-bold uppercase text-center">
                        Editar
                    </a>
                    <button wire:click="$dispatch('mostrarAlerta',  {{ $vacante->id }})"
                        class="bg-red-600 py-2 px-4 rounded text-white dark:text-gray-300 text-xs font-bold uppercase text-center">
                        Eliminar
                    </button>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm dark:text-white">No hay vacantes que mostrar</p>
        @endforelse
    </div>

    <div class="mt-7">
        {{ $vacantes->links() }}
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', (vacanteId) => {
            Swal.fire({
                title: "¿Estas seguro?",
                text: "Esta acción es irreversible!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, Eliminar!",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    //Eliminar vacante
                    @this.call('eliminarVacante',vacanteId);

                    Swal.fire({
                        title: "Eliminado!",
                        text: "La vacante se ha eliminado correctamente.",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@endpush
