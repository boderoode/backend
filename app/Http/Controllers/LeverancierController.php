<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        //make the join and then return the view

        
        $leverancier = Leverancier::join('product_per_leverancier', 'leveranciers.id', '=', 'product_per_leverancier.leverancier_id')
            ->join('products', 'product_per_leverancier.product_id', '=', 'products.id')
            ->select('leveranciers.*', 'product_per_leverancier.datum_levering', 'product_per_leverancier.aantal', 'product_per_leverancier.datum_eerstvolgende_levering', 'products.product_naam')
            ->where('leveranciers.id', '=', $id)
            ->groupBy('products.id', 'products.product_naam', 'leveranciers.id', 'leveranciers.leverancier_naam', 'product_per_leverancier.datum_levering', 'product_per_leverancier.aantal', 'product_per_leverancier.datum_eerstvolgende_levering')
            ->get();

        return view('leverancier.index', ['leverancier' => $leverancier]);
    }

    /**
     * Show the form for creating a new resource.00
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
    public function show(string $id = '1')
    {
        //make a dump for me
        // echo $id;exit();
        //only show the ones that match eachother's id
        $leverancier = Leverancier::join('product_per_leverancier', 'leveranciers.id', '=', 'product_per_leverancier.*')
            ->join('products', 'product_per_leverancier.product_id', '=', 'products.id')
            ->select('leveranciers.*', 'product_per_leverancier.*', 'product_per_leverancier.*', 'product_per_leverancier.*', 'products.*')
            ->where('products.id', '=', $id)
            ->get();

        return view('leverancier.show/{id}', ['leverancier' => $leverancier]);
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
