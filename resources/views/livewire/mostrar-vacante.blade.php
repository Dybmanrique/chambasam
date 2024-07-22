<div class="p-10 dark:text-white">
    <div class="mb-5">
        <h3 class="font-bold text-3xl my-3">
            {{ $vacante->titulo }}
        </h3>
        <div class="md:grid md:grid-cols-2 dark:bg-gray-600 bg-gray-200 p-3 rounded">
            <p class="font-bold my-3">Empresa: <span class="normal-case font-normal">{{ $vacante->empresa }}</span></p>
            <p class="font-bold my-3">Último día de postulación: <span
                    class="normal-case font-normal">{{ $vacante->ultimo_dia->toFormattedDateString() }}</span></p>
            <p class="font-bold my-3">Categoría: <span
                    class="normal-case font-normal">{{ $vacante->categoria->categoria }}</span></p>
            <p class="font-bold my-3">Salario: <span
                    class="normal-case font-normal">{{ $vacante->salario->salario }}</span></p>
        </div>
    </div>
    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img class="rounded" src="{{ asset('storage/vacantes/' . $vacante->imagen) }}" alt="Imagen de la vacante">
        </div>
        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Descripción del puesto</h2>
            <p>{{ $vacante->descripcion }}</p>
        </div>
    </div>
    @guest
        <div class="mt-5 rounded dark:bg-gray-600 bg-gray-300 border border-dashed p-5 text-center">
            <p>
                ¿Desea aplicar a esta vacante? <a href="{{ route('register') }}"
                    class="font-bold text-indigo-600 dark:text-indigo-300">Obten una
                    cuenta para aplicar a esta y otras vacantes</a>
            </p>
        </div>
    @endguest

    @auth
        @cannot('create', App\Models\Vacante::class)
            <livewire:postular-vacante :vacante="$vacante" />
        @endcannot
    @endauth

</div>
