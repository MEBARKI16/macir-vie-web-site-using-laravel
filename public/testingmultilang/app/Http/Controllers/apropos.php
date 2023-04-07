<?php

namespace App\Http\Controllers;

use App\PagesModels\AproposModel;
use Illuminate\Http\Request;

class apropos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apropos =  AproposModel::latest()->first();

        return view('apropos',['apropos'=>$apropos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apropos =  AproposModel::latest()->first();
        return view('admin.apropos_update',['apropos'=>$apropos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apropos = AproposModel::find(1);
    
        if($apropos!=null){
            $apropos->update(['titre1'=>request('titre1'),
            'paragraph1'=>request('paragraph1'),'titre2'=>request('titre2'),
            'paragraph2'=>request('paragraph2'),'titre3'=>request('titre3'),
            'paragraph3'=>request('paragraph3'),'titre4'=>request('titre4'),
            'paragraph4'=>request('paragraph4'),'titre5'=>request('titre5'),
            'paragraph5'=>request('paragraph5'),
            'paragraph6'=>request('paragraph6'),
            'paragraph7'=>request('paragraph7'),
            'paragraph8'=>request('paragraph8'),]);
          
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $apropos->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $apropos->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $apropos->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $apropos->image_mobile=$fileName;
            }
            if($request->hasFile('smallImage1')   ){
                $fileName= $request->smallImage1->getClientOriginalName();
                $request->smallImage1->storeAs('images',$fileName,'public');
                $apropos->smallImage1=$fileName;
            }
            if($request->hasFile('smallImage2')   ){
                $fileName= $request->smallImage2->getClientOriginalName();
                $request->smallImage2->storeAs('images',$fileName,'public');
                $apropos->smallImage2=$fileName;
            }
            if($request->hasFile('smallImage3')   ){
                $fileName= $request->smallImage3->getClientOriginalName();
                $request->smallImage3->storeAs('images',$fileName,'public');
                $apropos->smallImage3=$fileName;
            }



            $apropos->save();
            
        }else{
            $apropos = new AproposModel();
            $apropos->titre1= request('titre1');
            $apropos->paragraph1= request('paragraph1');
            $apropos->titre2= request('titre2');
            $apropos->paragraph2= request('paragraph2');
            $apropos->titre3= request('titre3');
            $apropos->paragraph3= request('paragraph3');
            $apropos->titre4= request('titre4');
            $apropos->paragraph4= request('paragraph4');
            $apropos->titre5= request('titre5');
            $apropos->paragraph5= request('paragraph5');
            $apropos->paragraph6= request('paragraph6');
            $apropos->paragraph7= request('paragraph7');
            $apropos->paragraph8= request('paragraph8');
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $apropos->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $apropos->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $apropos->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $apropos->image_mobile=$fileName;
            }
            if($request->hasFile('smallImage1')   ){
                $fileName= $request->smallImage1->getClientOriginalName();
                $request->smallImage1->storeAs('images',$fileName,'public');
                $apropos->smallImage1=$fileName;
            }
            if($request->hasFile('smallImage2')   ){
                $fileName= $request->smallImage2->getClientOriginalName();
                $request->smallImage2->storeAs('images',$fileName,'public');
                $apropos->smallImage2=$fileName;
            }
            if($request->hasFile('smallImage3')   ){
                $fileName= $request->smallImage3->getClientOriginalName();
                $request->smallImage3->storeAs('images',$fileName,'public');
                $apropos->smallImage3=$fileName;
            }
           
            $apropos->save();
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
