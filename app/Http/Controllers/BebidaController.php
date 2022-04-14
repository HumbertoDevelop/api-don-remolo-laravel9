<?php

namespace App\Http\Controllers;

use App\Models\Bebida;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BebidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bebidas = Bebida::all();

        return Response()->json([
            "data" => $bebidas,
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
        $bebida = Bebida::create($request->all());

        return Response()->json([
            "data" => $bebida,
            "status" => Response::HTTP_OK
        ], status : Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function show(Bebida $bebida)
    {
        return Response()->json([
            "data" => $bebida,
            "status" => Response::HTTP_OK,
        ], status: Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function edit(Bebida $bebida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bebida $bebida)
    {
        $bebida->update($request->all());
        return Response()->json([
            "data" => $bebida,
            "status" => Response::HTTP_OK,
        ], status: Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bebida  $bebida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bebida $bebida)
    {
        $bebida->delete();
        return Response()->json([
            "data" => $bebida,
            "status" => Response::HTTP_OK,
        ], status: Response::HTTP_OK);
    }
}
