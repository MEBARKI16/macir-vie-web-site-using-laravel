<?php

namespace App\Http\Controllers;

use App\PagesModels\CreditParticuliersModel;
use Illuminate\Http\Request;

class assu_creditemp_part extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditParticuliers = CreditParticuliersModel::latest()->first();
        return view('assu_creditemp_part',['creditParticuliers'=>$creditParticuliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $creditParticuliers = CreditParticuliersModel::latest()->first();
        return view('admin.credit_particuliers_update',['creditParticuliers'=>$creditParticuliers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $creditParticuliers = CreditParticuliersModel::find(1);
        if($creditParticuliers!=null){
            $creditParticuliers->update([
            'paragraph1'=>request('paragraph1'),
            'paragraph2'=>request('paragraph2'),
            'titre2'=>request('titre2'),
            'titre3'=>request('titre3'),
            'titreBox1'=>request('titreBox1'),
            'paragraphBox1'=>request('paragraphBox1'),
            'titreBox2'=>request('titreBox2'),
            'paragraphBox2'=>request('paragraphBox2')]);

            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $creditParticuliers->image=$fileName;
            }
            
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $creditParticuliers->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $creditParticuliers->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $creditParticuliers->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $creditParticuliers->image_mobile=$fileName;
            }
            
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $creditParticuliers->titre_image=$fileName;
            }
            $creditParticuliers->save();
            
        }else{
            $creditParticuliers = new CreditParticuliersModel();
            $creditParticuliers->titre2= request('titre2');
            $creditParticuliers->paragraph1= request('paragraph1');
            $creditParticuliers->paragraph2= request('paragraph2');
            $creditParticuliers->titre3= request('titre3');
            $creditParticuliers->titreBox1= request('titreBox1');
            $creditParticuliers->paragraphBox1= request('paragraphBox1');
            $creditParticuliers->titreBox2= request('titreBox2');
            $creditParticuliers->paragraphBox2= request('paragraphBox2');
            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $creditParticuliers->image=$fileName;
                
            }
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $creditParticuliers->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $creditParticuliers->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $creditParticuliers->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $creditParticuliers->image_mobile=$fileName;
            }
            
            
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $creditParticuliers->titre_image=$fileName;
            }
            $creditParticuliers->save();
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
