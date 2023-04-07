<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PagesModels\agenceVoyageModel;

class agence_voyage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $agenceVoyage = agenceVoyageModel::latest()->first();
        return view("agence_voyage",['agenceVoyage'=>$agenceVoyage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agenceVoyage = agenceVoyageModel::latest()->first();
        return view('admin.agence_voyage_update',['agenceVoyage'=>$agenceVoyage]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agenceVoyage = agenceVoyageModel::find(1);
        if($agenceVoyage!=null){
            $agenceVoyage->update(['titre1'=>request('titre1'),
            'paragraph1'=>request('paragraph1'),
            'titre2'=>request('titre2'),
            'titreBox1'=>request('titreBox1'),
            'paragraphBox1'=>request('paragraphBox1'),
            'titreBox2'=>request('titreBox2'),
            'paragraphBox2'=>request('paragraphBox2')]);

            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $agenceVoyage->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $agenceVoyage->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $agenceVoyage->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $agenceVoyage->image_mobile=$fileName;
            }
            $agenceVoyage->save();
            
        }else{
            $agenceVoyage = new agenceVoyageModel();
            $agenceVoyage->titre1= request('titre1');
            $agenceVoyage->paragraph1= request('paragraph1');
            $agenceVoyage->titre2= request('titre2');
            $agenceVoyage->titreBox1= request('titreBox1');
            $agenceVoyage->paragraphBox1= request('paragraphBox1');
            $agenceVoyage->titreBox2= request('titreBox2');
            $agenceVoyage->paragraphBox2= request('paragraphBox2');
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $agenceVoyage->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $agenceVoyage->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $agenceVoyage->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $agenceVoyage->image_mobile=$fileName;
            }
            $agenceVoyage->save();
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
