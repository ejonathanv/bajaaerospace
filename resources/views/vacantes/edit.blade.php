<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Editar Vacante
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-9/12 mx-auto">
                <div class="bg-white p-7 rounded shadow">
                    <form action="{{ route('dashboard.vacantes.update', $vacante->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="titulo" class="block text-sm font-medium text-gray-700">Título *</label>
                            <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $vacante->titulo) }}" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                            @error('titulo')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="empresa" class="block text-sm font-medium text-gray-700">Empresa</label>
                            <input type="text" name="empresa" id="empresa" value="{{ old('empresa', $vacante->empresa) }}" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            @error('empresa')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="ubicacion" class="block text-sm font-medium text-gray-700">Ubicación</label>
                                <input type="text" name="ubicacion" id="ubicacion" value="{{ old('ubicacion', $vacante->ubicacion) }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                @error('ubicacion')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
                                <select name="tipo" id="tipo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Seleccionar tipo</option>
                                    <option value="Tiempo completo" {{ old('tipo', $vacante->tipo) == 'Tiempo completo' ? 'selected' : '' }}>Tiempo completo</option>
                                    <option value="Medio tiempo" {{ old('tipo', $vacante->tipo) == 'Medio tiempo' ? 'selected' : '' }}>Medio tiempo</option>
                                    <option value="Freelance" {{ old('tipo', $vacante->tipo) == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                                    <option value="Contrato" {{ old('tipo', $vacante->tipo) == 'Contrato' ? 'selected' : '' }}>Contrato</option>
                                    <option value="Prácticas" {{ old('tipo', $vacante->tipo) == 'Prácticas' ? 'selected' : '' }}>Prácticas</option>
                                    <option value="Por proyecto" {{ old('tipo', $vacante->tipo) == 'Por proyecto' ? 'selected' : '' }}>Por proyecto</option>
                                </select>
                                @error('tipo')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="sueldo" class="block text-sm font-medium text-gray-700">Sueldo</label>
                                <input type="number" step="0.01" name="sueldo" id="sueldo" value="{{ old('sueldo', $vacante->sueldo) }}" 
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                @error('sueldo')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="contacto" class="block text-sm font-medium text-gray-700">Contacto</label>
                                <input type="text" name="contacto" id="contacto" value="{{ old('contacto', $vacante->contacto) }}" 
                                       placeholder="Email o teléfono"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                @error('contacto')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                            <textarea name="descripcion" id="descripcion" rows="6" 
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('descripcion', $vacante->descripcion) }}</textarea>
                            @error('descripcion')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="flyer" class="block text-sm font-medium text-gray-700">Flyer/Imagen</label>
                            
                            @if($vacante->flyer)
                                <div class="mb-2">
                                    <img src="{{ asset('vacantesFlyers/' . $vacante->flyer) }}" alt="Flyer actual" class="h-32 w-auto rounded shadow">
                                    <p class="text-sm text-gray-500 mt-1">Imagen actual</p>
                                </div>
                            @endif
                            
                            <input type="file" name="flyer" id="flyer" accept="image/*"
                                   class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            <p class="text-xs text-gray-500 mt-1">Deja vacío si no deseas cambiar la imagen</p>
                            @error('flyer')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" name="activa" value="1" {{ old('activa', $vacante->activa) ? 'checked' : '' }}
                                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <span class="ml-2 text-sm text-gray-700">Vacante activa</span>
                            </label>
                            @error('activa')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('dashboard.vacantes.index') }}" class="btn btn-secondary">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                Actualizar Vacante
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

