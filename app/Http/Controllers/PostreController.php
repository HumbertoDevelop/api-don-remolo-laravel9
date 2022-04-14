<?php

namespace App\Http\Controllers;

use App\Models\Postre;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postres = Postre::all();

        return Response()->json([
            "data" => $postres,
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
        $postre = Postre::create($request->all());

        return Response()->json([
            "data" => $postre,
            "status" => Response::HTTP_OK
        ], status : Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postre  $postre
     * @return \Illuminate\Http\Response
     */
    public function show(Postre $postre)
    {
        return Response()->json([
            "data" => $postre,
            "status" => Response::HTTP_OK,
        ], status: Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postre  $postre
     * @return \Illuminate\Http\Response
     */
    public function edit(Postre $postre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postre  $postre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postre $postre)
    {
        $postre->update($request->all());
        return Response()->json([
            "data" => $postre,
            "status" => Response::HTTP_OK,
        ], status: Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postre  $postre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postre $postre)
    {
        $postre->delete();
       return Response()->json([
           "data" => $postre,
           "status" => Response::HTTP_OK,
       ], status: Response::HTTP_OK);
    }
}
