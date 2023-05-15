<?php

namespace App\Http\Controllers;

use App\Models\Allergeen;
use Illuminate\Http\Request;

class AllergeenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $allergeen = [
            'allergeen' => Allergeen::join('product_per_allergeen', 'allergeens.id', '=', 'product_per_allergeen.allergeen_id')
                ->join('products', 'product_per_allergeen.product_id', '=', 'products.id')
                ->where('allergeens.id', '=', $id)
                ->select('allergeens.allergeen_naam', 'products.product_naam', 'products.barcode', 'allergeens.omschrijving')
                ->get(),
        ];

        //return the view of the allergeen index with the array
        return view('allergeen.index', $allergeen);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
