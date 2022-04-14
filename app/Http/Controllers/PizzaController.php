<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Pizza::all();

        return Response()->json([
            "data" => $pizzas,
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
        $pizza = Pizza::create($request->all());

        return Response()->json([
            "data" => $pizza,
            "status" => Response::HTTP_OK
        ], status : Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {
        return Response()->json([
            "data" => $pizza,
            "status" => Response::HTTP_OK,
        ], status: Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
        $pizza->update($request->all());
       return Response()->json([
           "data" => $pizza,
           "status" => Response::HTTP_OK,
       ], status: Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pizza $pizza)
    {
        $pizza->delete();
       return Response()->json([
           "data" => $pizza,
           "status" => Response::HTTP_OK,
       ], status: Response::HTTP_OK);
    }
}
