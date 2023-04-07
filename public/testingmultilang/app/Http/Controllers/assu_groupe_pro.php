<?php

namespace App\Http\Controllers;

use App\PagesModels\AssuranceGroupProModel;
use Illuminate\Http\Request;

class assu_groupe_pro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assuranceGroup = AssuranceGroupProModel::latest()->first();
        return view('assu_groupe_pro',['assuranceGroup'=>$assuranceGroup]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assuranceGroup = AssuranceGroupProModel::latest()->first();
        return view('admin.assurance_groupe_pro',['assuranceGroup'=>$assuranceGroup]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assuranceGroup = AssuranceGroupProModel::find(1);
        if($assuranceGroup!=null){
            $assuranceGroup->update([
            'paragraph1'=>request('paragraph1'),
            'paragraph2'=>request('paragraph2'),
            'paragraph3'=>request('paragraph3'),
            'paragraph4'=>request('paragraph4'),
            'paragraph5'=>request('paragraph5'),
            'titre1'=>request('titre1'),
            'sous_titre1'=>request('sous_titre1'),
            'sous_titre2'=>request('sous_titre2'),
            'sous_titre3'=>request('sous_titre3'),
            'titreBox3'=>request('titreBox3'),
            'paragraphBox3'=>request('paragraphBox3'),
            'titre2'=>request('titre2'),
            'titreBox1'=>request('titreBox1'),
            'paragraphBox1'=>request('paragraphBox1'),
            'titreBox2'=>request('titreBox2'),
            'paragraphBox2'=>request('paragraphBox2')]);

            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $assuranceGroup->image=$fileName;
            }
            
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $assuranceGroup->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $assuranceGroup->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $assuranceGroup->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $assuranceGroup->image_mobile=$fileName;
            }
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $assuranceGroup->titre_image=$fileName;
            }
            $assuranceGroup->save();
            
        }else{
            $assuranceGroup = new AssuranceGroupProModel();
            $assuranceGroup->titre1= request('titre1');
            $assuranceGroup->paragraph1= request('paragraph1');
            $assuranceGroup->paragraph2= request('paragraph2');
            $assuranceGroup->paragraph3= request('paragraph3');
            $assuranceGroup->paragraph4= request('paragraph4');
            $assuranceGroup->paragraph5= request('paragraph5');
            $assuranceGroup->titre2= request('titre2');
            $assuranceGroup->sous_titre1= request('sous_titre1');
            $assuranceGroup->sous_titre2= request('sous_titre2');
            $assuranceGroup->sous_titre3= request('sous_titre3');
            $assuranceGroup->titreBox3= request('titreBox3');
            $assuranceGroup->paragraphBox3= request('paragraphBox3');
            $assuranceGroup->titreBox1= request('titreBox1');
            $assuranceGroup->paragraphBox1= request('paragraphBox1');
            $assuranceGroup->titreBox2= request('titreBox2');
            $assuranceGroup->paragraphBox2= request('paragraphBox2');
            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $assuranceGroup->image=$fileName;
                
            }
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $assuranceGroup->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $assuranceGroup->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $assuranceGroup->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $assuranceGroup->image_mobile=$fileName;
            }
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $assuranceGroup->titre_image=$fileName;
            }
            
            $assuranceGroup->save();
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
