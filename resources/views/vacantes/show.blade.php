<x-page-layout title="{{ $vacante->titulo }}">
    <section class="py-10 md:py-16 bg-gray-100">
        <div class="container">
            <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex flex-col lg:flex-row">
                    <!-- Información -->
                    <div class="lg:w-1/2 p-8">
                        <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ $vacante->titulo }}</h1>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                            @if($vacante->empresa)
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-fw fa-building text-primary mr-3 text-xl"></i>
                                    <div>
                                        <p class="text-sm text-gray-500 m-0">Empresa</p>
                                        <p class="font-semibold m-0">{{ $vacante->empresa }}</p>
                                    </div>
                                </div>
                            @endif
                            
                            @if($vacante->ubicacion)
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-fw fa-map-marker-alt text-primary mr-3 text-xl"></i>
                                    <div>
                                        <p class="text-sm text-gray-500 m-0">Ubicación</p>
                                        <p class="font-semibold m-0">{{ $vacante->ubicacion }}</p>
                                    </div>
                                </div>
                            @endif
                            
                            @if($vacante->tipo)
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-fw fa-clock text-primary mr-3 text-xl"></i>
                                    <div>
                                        <p class="text-sm text-gray-500 m-0">Tipo</p>
                                        <p class="font-semibold m-0">{{ $vacante->tipo }}</p>
                                    </div>
                                </div>
                            @endif
                            
                            @if($vacante->sueldo)
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-fw fa-dollar-sign text-primary mr-3 text-xl"></i>
                                    <div>
                                        <p class="text-sm text-gray-500 m-0">Sueldo</p>
                                        <p class="font-semibold m-0">${{ number_format($vacante->sueldo, 2) }}</p>
                                    </div>
                                </div>
                            @endif
                            
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-fw fa-calendar-alt text-primary mr-3 text-xl"></i>
                                <div>
                                    <p class="text-sm text-gray-500 m-0">Publicado</p>
                                    <p class="font-semibold m-0">{{ $vacante->created_at->format('d/m/Y') }}</p>
                                </div>
                            </div>
                        </div>
                    
                        @if($vacante->descripcion)
                            <div class="mb-6">
                                <h3 class="text-2xl font-bold text-gray-800 mb-3">Descripción</h3>
                                <div class="text-gray-700 leading-relaxed">
                                    {!! nl2br(e($vacante->descripcion)) !!}
                                </div>
                            </div>
                        @endif
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            @if($vacante->contacto)
                                <a href="mailto:{{ $vacante->contacto }}" class="btn btn-primary">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Postularme
                                </a>
                            @endif
                            <a href="{{ route('vacantes.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Volver a vacantes
                            </a>
                        </div>
                    </div>
                    <!-- Flyer/Imagen -->
                    <div class="lg:w-1/2 p-8">
                        @if($vacante->flyer)
                            <img src="{{ asset('vacantesFlyers/' . $vacante->flyer) }}" alt="{{ $vacante->titulo }}" class="w-full h-auto min-h-96 rounded-lg shadow">
                        @else
                            <div class="w-full h-96 bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-briefcase text-9xl text-gray-400"></i>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-page-layout>

