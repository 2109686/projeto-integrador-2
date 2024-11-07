<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipments;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipments::all();

        return view('admin.equipments.index', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.equipments.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'activity_date' => 'required|date',
            'input_time' => 'required|date_format:H:i',
            'output_time' => 'required|date_format:H:i',
            'equipment' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'serial_number' => 'required|string|max:255',
            'responsible' => 'required|string|max:15',
            'cpf' => 'required|string|max:14',
            'rg' => 'required|string|max:15',
            'company' => 'required|string|max:255',
        ]);

        $equipments = Equipments::create($validatedData);
        return redirect()
        ->route('equipments.index')
        ->with('message', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipments  $equipments
     * @return \Illuminate\Http\Response
     */
    public function show(Equipments $equipments)
    {
        return view('equipments.show', compact('equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipments  $equipments
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipments $equipments)
    {
        return view('equipments.edit', compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipments  $equipments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipments $equipments)
    {
        $validatedData = $request->validate([
            'activity_date' => 'required|date',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|date_format:H:i:s',
            'collaborator_name' => 'required|string|max:255',
            'cpf' => 'required|string|max:14',
            'activity_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
            'room' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'responsible' => 'required|string|max:255',
            'materials_used' => 'required|string|max:255',
            'cordage_length' => 'required|numeric|min:0|max:9999999999.99',
            'from_row' => 'required|string|max:10',
            'from_rack' => 'required|string|max:1',
            'to_row' => 'required|string|max:10',
            'to_rack' => 'required|string|max:1',
        ]);

        $equipments->update($validatedData);
        return redirect()->route('equipments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipments  $equipments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipments $equipments)
    {
        $equipments->delete();
        return redirect()->route('equipments.index');
    }
}
