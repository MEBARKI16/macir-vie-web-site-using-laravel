<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PagesModels\ProtectionAccidentsModel;

class assu_accident_part extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proctectionAccidents = ProtectionAccidentsModel::latest()->first();
        return view('assu_accident_part',['proctectionAccidents'=>$proctectionAccidents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proctectionAccidents = ProtectionAccidentsModel::latest()->first();
        return view('admin.protection_accidents_update',['proctectionAccidents'=>$proctectionAccidents]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proctectionAccidents = ProtectionAccidentsModel::find(1);
        if($proctectionAccidents!=null){
            $proctectionAccidents->update([
            'paragraph1'=>request('paragraph1'),
            'paragraph2'=>request('paragraph2'),
            'titre1'=>request('titre1'),
            'titre2'=>request('titre2'),
            'titreBox1'=>request('titreBox1'),
            'paragraphBox1'=>request('paragraphBox1'),
            'titreBox2'=>request('titreBox2'),
            'paragraphBox2'=>request('paragraphBox2')]);

            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $proctectionAccidents->image=$fileName;
            }
            
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $proctectionAccidents->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $proctectionAccidents->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $proctectionAccidents->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $proctectionAccidents->image_mobile=$fileName;
            }
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $proctectionAccidents->titre_image=$fileName;
            }
            $proctectionAccidents->save();
            
        }else{
            $proctectionAccidents = new ProtectionAccidentsModel();
            $proctectionAccidents->titre1= request('titre1');
            $proctectionAccidents->paragraph1= request('paragraph1');
            $proctectionAccidents->paragraph2= request('paragraph2');
            $proctectionAccidents->titre2= request('titre2');
            $proctectionAccidents->titreBox1= request('titreBox1');
            $proctectionAccidents->paragraphBox1= request('paragraphBox1');
            $proctectionAccidents->titreBox2= request('titreBox2');
            $proctectionAccidents->paragraphBox2= request('paragraphBox2');
            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $proctectionAccidents->image=$fileName;
                
            }
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $proctectionAccidents->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $proctectionAccidents->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $proctectionAccidents->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $proctectionAccidents->image_mobile=$fileName;
            }
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $proctectionAccidents->titre_image=$fileName;
            }
            
            $proctectionAccidents->save();
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
