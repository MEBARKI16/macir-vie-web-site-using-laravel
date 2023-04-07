<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PagesModels\ParticuliersModel;
use App\PagesModels\ProduitsParticuliersModel;

class particulier extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $particuliers =  ParticuliersModel::latest()->first();
        $produits = ProduitsParticuliersModel::all();
        return view('particulier',['particuliers'=>$particuliers,"produits"=>$produits]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $particuliers =  ParticuliersModel::latest()->first();
       return view('admin.particuliers_update',['particuliers'=>$particuliers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $particuliers = ParticuliersModel::find(1);
    
        if($particuliers!=null){
            $particuliers->update(['titre1'=>request('titre1'),
            'paragraph1'=>request('paragraph1'),]);
          
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $particuliers->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $particuliers->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $particuliers->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $particuliers->image_mobile=$fileName;
            }
            if($request->hasFile('produit1')   ){
                $fileName= $request->produit1->getClientOriginalName();
                $request->produit1->storeAs('images',$fileName,'public');
                $particuliers->produit1=$fileName;
            }
            if($request->hasFile('produit2')   ){
                $fileName= $request->produit2->getClientOriginalName();
                $request->produit2->storeAs('images',$fileName,'public');
                $particuliers->produit2=$fileName;
            }
            if($request->hasFile('produit3')   ){
                $fileName= $request->produit3->getClientOriginalName();
                $request->produit3->storeAs('images',$fileName,'public');
                $particuliers->produit3=$fileName;
            }
            if($request->hasFile('produit4')   ){
                $fileName= $request->produit4->getClientOriginalName();
                $request->produit4->storeAs('images',$fileName,'public');
                $particuliers->produit4=$fileName;
            }
            



            $particuliers->save();
            
        }else{
            $particuliers = new ParticuliersModel();
            $particuliers->titre1= request('titre1');
            $particuliers->paragraph1= request('paragraph1');
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $particuliers->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $particuliers->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $particuliers->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $particuliers->image_mobile=$fileName;
            }
            if($request->hasFile('produit1')   ){
                $fileName= $request->produit1->getClientOriginalName();
                $request->produit1->storeAs('images',$fileName,'public');
                $particuliers->produit1=$fileName;
            }
            if($request->hasFile('produit2')   ){
                $fileName= $request->produit2->getClientOriginalName();
                $request->produit2->storeAs('images',$fileName,'public');
                $particuliers->produit2=$fileName;
            }
            if($request->hasFile('produit3')   ){
                $fileName= $request->produit3->getClientOriginalName();
                $request->produit3->storeAs('images',$fileName,'public');
                $particuliers->produit3=$fileName;
            }
            if($request->hasFile('produit4')   ){
                $fileName= $request->produit4->getClientOriginalName();
                $request->produit4->storeAs('images',$fileName,'public');
                $particuliers->produit4=$fileName;
            }
            $particuliers->save();
        }
        return redirect('/fr/admin/menu');
         
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
        //
    }
}
