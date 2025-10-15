<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use App\Http\Requests\StoreVacanteRequest;
use App\Http\Requests\UpdateVacanteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VacanteController extends Controller
{
    /**
     * Mostrar listado de vacantes activas (público)
     */
    public function index(Request $request)
    {
        $query = Vacante::activas();

        // Búsqueda por texto
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('titulo', 'like', "%{$search}%")
                  ->orWhere('empresa', 'like', "%{$search}%")
                  ->orWhere('descripcion', 'like', "%{$search}%");
            });
        }

        // Filtro por ubicación
        if ($request->filled('ubicacion')) {
            $query->where('ubicacion', $request->ubicacion);
        }

        // Filtro por tipo
        if ($request->filled('tipo')) {
            $query->where('tipo', $request->tipo);
        }

        $vacantes = $query->latest()->paginate(12);
        return view('vacantes.index', compact('vacantes'));
    }

    /**
     * Mostrar detalle de vacante (público)
     */
    public function show($id)
    {
        $vacante = Vacante::where('activa', true)->findOrFail($id);
        return view('vacantes.show', compact('vacante'));
    }

    /**
     * Mostrar listado de todas las vacantes (admin)
     */
    public function adminIndex()
    {
        $vacantes = Vacante::latest()->paginate(15);
        return view('vacantes.admin-index', compact('vacantes'));
    }

    /**
     * Mostrar formulario de creación (admin)
     */
    public function create()
    {
        return view('vacantes.create');
    }

    /**
     * Almacenar nueva vacante (admin)
     */
    public function store(StoreVacanteRequest $request)
    {
        $data = $request->validated();

        // Manejar subida de flyer
        if ($request->hasFile('flyer')) {
            $data['flyer'] = $this->uploadFlyer($request->file('flyer'));
        }

        Vacante::create($data);

        return redirect()->route('dashboard.vacantes.index')
            ->with('success', 'Vacante creada exitosamente.');
    }

    /**
     * Mostrar formulario de edición (admin)
     */
    public function edit($id)
    {
        $vacante = Vacante::findOrFail($id);
        return view('vacantes.edit', compact('vacante'));
    }

    /**
     * Actualizar vacante (admin)
     */
    public function update(UpdateVacanteRequest $request, $id)
    {
        $vacante = Vacante::findOrFail($id);
        $data = $request->validated();

        // Manejar subida de nuevo flyer
        if ($request->hasFile('flyer')) {
            // Eliminar flyer anterior si existe
            if ($vacante->flyer) {
                $this->deleteFlyer($vacante->flyer);
            }
            $data['flyer'] = $this->uploadFlyer($request->file('flyer'));
        }

        $vacante->update($data);

        return redirect()->route('dashboard.vacantes.index')
            ->with('success', 'Vacante actualizada exitosamente.');
    }

    /**
     * Eliminar vacante (admin)
     */
    public function destroy($id)
    {
        $vacante = Vacante::findOrFail($id);

        // Eliminar flyer si existe
        if ($vacante->flyer) {
            $this->deleteFlyer($vacante->flyer);
        }

        $vacante->delete();

        return redirect()->route('dashboard.vacantes.index')
            ->with('success', 'Vacante eliminada exitosamente.');
    }

    /**
     * Subir flyer
     */
    private function uploadFlyer($file)
    {
        $path = public_path('vacantesFlyers');
        
        // Crear directorio si no existe
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($path, $filename);

        return $filename;
    }

    /**
     * Eliminar flyer
     */
    private function deleteFlyer($filename)
    {
        $filePath = public_path('vacantesFlyers/' . $filename);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
    }
}
