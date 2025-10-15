<x-page-layout title="Vacantes">
    <section class="py-10 md:py-16 bg-gray-100">
        <div class="container">
            <div class="mb-10">
                <h1 class="text-4xl font-bold text-gray-800">Vacantes Disponibles</h1>
                <p class="text-gray-600 mt-2">Explora las oportunidades laborales en el sector aeroespacial</p>
            </div>

            <!-- Buscador -->
            <div class="mb-8">
                <form method="GET" action="{{ route('vacantes.index') }}" class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="w-1/4">
                            <label for="search" class="block text-sm font-medium text-gray-700 mb-2">Buscar por título o empresa</label>
                            <input type="text" name="search" id="search" value="{{ request('search') }}" 
                                   placeholder="Ej: Ingeniero, Tijuana..."
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent !m-0">
                        </div>
                        <div class="w-1/4">
                            <label for="ubicacion" class="block text-sm font-medium text-gray-700 mb-2">Ubicación</label>
                            <select name="ubicacion" id="ubicacion" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent !m-0">
                                <option value="">Todas las ubicaciones</option>
                                <option value="Tijuana" {{ request('ubicacion') == 'Tijuana' ? 'selected' : '' }}>Tijuana</option>
                                <option value="Mexicali" {{ request('ubicacion') == 'Mexicali' ? 'selected' : '' }}>Mexicali</option>
                                <option value="Ensenada" {{ request('ubicacion') == 'Ensenada' ? 'selected' : '' }}>Ensenada</option>
                                <option value="Remoto" {{ request('ubicacion') == 'Remoto' ? 'selected' : '' }}>Remoto</option>
                            </select>
                        </div>
                        <div class="w-1/4">
                            <label for="tipo" class="block text-sm font-medium text-gray-700 mb-2">Tipo</label>
                            <select name="tipo" id="tipo" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent !m-0">
                                <option value="">Todos los tipos</option>
                                <option value="Tiempo completo" {{ request('tipo') == 'Tiempo completo' ? 'selected' : '' }}>Tiempo completo</option>
                                <option value="Medio tiempo" {{ request('tipo') == 'Medio tiempo' ? 'selected' : '' }}>Medio tiempo</option>
                                <option value="Freelance" {{ request('tipo') == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                                <option value="Contrato" {{ request('tipo') == 'Contrato' ? 'selected' : '' }}>Contrato</option>
                                <option value="Prácticas" {{ request('tipo') == 'Prácticas' ? 'selected' : '' }}>Prácticas</option>
                                <option value="Por proyecto" {{ request('tipo') == 'Por proyecto' ? 'selected' : '' }}>Por proyecto</option>
                            </select>
                        </div>
                        <div class="w-1/4 flex items-end">
                            <button type="submit" class="btn btn-primary m-0 w-full">
                                <i class="fas fa-search mr-2"></i>
                                Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            @if($vacantes->count())
                <!-- Lista de vacantes -->
                <div class="space-y-4">
                    @foreach($vacantes as $vacante)
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-200 border-l-4 border-indigo-500">
                        <div class="p-6">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $vacante->titulo }}</h3>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 mb-4">
                                        @if($vacante->empresa)
                                            <div class="flex items-center text-gray-600">
                                                <i class="fas fa-fw fa-building text-indigo-600 mr-2"></i>
                                                <span class="font-medium">{{ $vacante->empresa }}</span>
                                            </div>
                                        @endif
                                        
                                        @if($vacante->ubicacion)
                                            <div class="flex items-center text-gray-600">
                                                <i class="fas fa-fw fa-map-marker-alt text-indigo-600 mr-2"></i>
                                                <span class="font-medium">{{ $vacante->ubicacion }}</span>
                                            </div>
                                        @endif
                                        
                                        @if($vacante->tipo)
                                            <div class="flex items-center text-gray-600">
                                                <i class="fas fa-fw fa-clock text-indigo-600 mr-2"></i>
                                                <span class="font-medium">{{ $vacante->tipo }}</span>
                                            </div>
                                        @endif
                                        
                                        @if($vacante->sueldo)
                                            <div class="flex items-center text-gray-600">
                                                <i class="fas fa-fw fa-dollar-sign text-indigo-600 mr-2"></i>
                                                <span class="font-medium">${{ number_format($vacante->sueldo, 2) }}</span>
                                            </div>
                                        @endif
                                        
                                        <div class="flex items-center text-gray-600">
                                            <i class="fas fa-fw fa-calendar-alt text-indigo-600 mr-2"></i>
                                            <span class="font-medium">{{ $vacante->created_at->format('d/m/Y') }}</span>
                                        </div>
                                    </div>
                                    
                                    @if($vacante->descripcion)
                                        <p class="text-gray-600 text-sm line-clamp-2">
                                            {{ Str::limit($vacante->descripcion, 150) }}
                                        </p>
                                    @endif
                                </div>
                                
                                <div class="mt-4 lg:mt-0 lg:ml-6">
                                    <a href="{{ route('vacantes.show', $vacante->id) }}" class="btn btn-primary">
                                        <i class="fas fa-eye mr-2"></i>
                                        Ver detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    {{ $vacantes->appends(request()->query())->links() }}
                </div>
            @else
                <div class="bg-white rounded-lg shadow p-10 text-center">
                    <i class="fas fa-search text-6xl text-gray-300 mb-4"></i>
                    <p class="text-gray-600">No se encontraron vacantes con los criterios de búsqueda.</p>
                    <a href="{{ route('vacantes.index') }}" class="btn btn-primary mt-4">
                        Ver todas las vacantes
                    </a>
                </div>
            @endif
        </div>
    </section>
</x-page-layout>

