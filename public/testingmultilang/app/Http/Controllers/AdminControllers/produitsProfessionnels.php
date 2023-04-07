<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\PagesModels\ProduitsProfessionnelsModel;
use Illuminate\Http\Request;

class produitsProfessionnels extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = ProduitsProfessionnelsModel::all();
        return view('admin.professionnels_produits_index',["produits"=>$produits]);
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
        $produit = new ProduitsProfessionnelsModel();
        $produit->lien= request('lien');
        if($request->hasFile('image')){
            $fileName= $request->image->getClientOriginalName();
            $request->image->storeAs('images',$fileName,'public');
            $produit->image=$fileName;
            
        }
        $produit->save();
        return redirect("/fr/produits/professionnels");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = ProduitsProfessionnelsModel::find($id);
        $produit->delete();
        return redirect("fr/produits/professionnels");
    }
}
