<?php

namespace App\Http\Controllers;

use App\Models\Magazijn;
use Illuminate\Http\Request;

class MagazijnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $array = [
            'magazijn' => Magazijn::join('products', 'magazijns.product_id', '=', 'products.id')->select('magazijns.*', 'products.*', 'product_per_leverancier.*')
                ->join('product_per_leverancier', 'products.id', '=', 'product_per_leverancier.product_id')
                ->join('leveranciers', 'product_per_leverancier.leverancier_id', '=', 'leveranciers.id')
                ->select('magazijns.*', 'products.*', 'product_per_leverancier.*', 'leveranciers.*')
                ->orderBy('products.barcode', 'asc')
                ->get()
        ];

        //return the index of the magazijn
        return view('magazijn.index', $array);
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
    public function show(string $id)
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
