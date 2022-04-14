<?php

namespace App\Http\Controllers;

use App\Models\Empanada;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmpanadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empanadas = Empanada::all();

        return Response()->json([
            "data" => $empanadas,
            "status" => Response::HTTP_OK
        ], status : Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empanada = Empanada::create($request->all());

        return Response()->json([
            "data" => $empanada,
            "status" => Response::HTTP_OK
        ], status : Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empanada  $empanada
     * @return \Illuminate\Http\Response
     */
    public function show(Empanada $empanada)
    {
        return Response()->json([
            "data" => $empanada,
            "status" => Response::HTTP_OK,
        ], status: Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empanada  $empanada
     * @return \Illuminate\Http\Response
     */
    public function edit(Empanada $empanada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empanada  $empanada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empanada $empanada)
    {
        $empanada->update($request->all());
       return Response()->json([
           "data" => $empanada,
           "status" => Response::HTTP_OK,
       ], status: Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empanada  $empanada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empanada $empanada)
    {
        $empanada->delete();
        return Response()->json([
            "data" => $empanada,
            "status" => Response::HTTP_OK,
        ], status: Response::HTTP_OK);
    }
}
