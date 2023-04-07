<?php

namespace App\Http\Controllers;

use App\PagesModels\HadjOmraModel;
use Illuminate\Http\Request;

class assu_hadj_part extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hadjOmra = HadjOmraModel::latest()->first();
        return view('assu_hadj_part',["hadjOmra"=>$hadjOmra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hadjOmra = HadjOmraModel::latest()->first();
        return view('admin.hadj_omra_update',["hadjOmra"=>$hadjOmra]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hadjOmra = HadjOmraModel::find(1);
        if($hadjOmra!=null){
            $hadjOmra->update([
            'paragraph1'=>request('paragraph1'),
            'paragraph2'=>request('paragraph2'),
            'titre2'=>request('titre2'),
            'paragraph3'=>request('paragraph3'),
            'sous_paragraph11'=>request('sous_paragraph11'),
            'sous_paragraph12'=>request('sous_paragraph12'),
            'sous_paragraph13'=>request('sous_paragraph13'),
            'sous_paragraph14'=>request('sous_paragraph14'),
            'sous_paragraph15'=>request('sous_paragraph15'),
            'sous_paragraph16'=>request('sous_paragraph16'),
                        
            ]);

            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $hadjOmra->image=$fileName;
            }
            
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $hadjOmra->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $hadjOmra->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $hadjOmra->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $hadjOmra->image_mobile=$fileName;
            }
            
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $hadjOmra->titre_image=$fileName;
            }
            $hadjOmra->save();
            
        }else{
            $hadjOmra = new HadjOmraModel();
            $hadjOmra->titre2= request('titre2');
            $hadjOmra->paragraph1= request('paragraph1');
            $hadjOmra->paragraph2= request('paragraph2');
            $hadjOmra->paragraph3= request('paragraph3');
            $hadjOmra->sous_paragraph11= request('sous_paragraph11');
            $hadjOmra->sous_paragraph12= request('sous_paragraph12');
            $hadjOmra->sous_paragraph13= request('sous_paragraph13');
            $hadjOmra->sous_paragraph14= request('sous_paragraph14');
            $hadjOmra->sous_paragraph15= request('sous_paragraph15');
            $hadjOmra->sous_paragraph16= request('sous_paragraph16');
            
            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $hadjOmra->image=$fileName;
                
            }
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $hadjOmra->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $hadjOmra->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $hadjOmra->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $hadjOmra->image_mobile=$fileName;
            }
            
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $hadjOmra->titre_image=$fileName;
            }
            $hadjOmra->save();
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
