<div>
    <livewire:filtrar-vacantes/>
    <div class="py-12 dark:text-gray-200">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl  mb-12">Nuestras vacantes disponibles</h3>

            <div class="bg-white dark:bg-gray-700 shadow-sm rounded p-6 divide-y divide-gray-200">
                @forelse ($vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1">
                            <a href="{{route('vacantes.show',$vacante->id)}}" class="text-3xl font-bold">
                                {{$vacante->titulo}}
                            </a>
                            <p class="text-base mb-1">{{$vacante->empresa}}</p>
                            <p class="text-base mb-1">{{$vacante->categoria->categoria}}</p>
                            <p class="text-base mb-1">{{$vacante->salario->salario}}</p>
                            <p class="text-base mb-1">Último día para postular: {{$vacante->ultimo_dia->format('d/m/Y')}}</p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a class="bg-indigo-600 p-3 uppercase font-bold rounded block text-center" href="{{route('vacantes.show',$vacante->id)}}">Ver vacante</a>
                        </div>
                    </div>
                @empty
                    <p>No hay vacantes aún</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
