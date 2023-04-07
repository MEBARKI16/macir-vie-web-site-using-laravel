<?php

namespace App\Http\Controllers;

use App\PagesModels\CreditProModel;
use Illuminate\Http\Request;

class assu_creditemp_pro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditPro = CreditProModel::latest()->first();

        return view('assu_creditemp_pro',['creditPro'=>$creditPro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $creditPro = CreditProModel::latest()->first();
        return view('admin.assurance_credit_pro_update',['creditPro'=>$creditPro]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $creditPro = CreditProModel::find(1);
        if($creditPro!=null){
            $creditPro->update([
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
                $creditPro->image=$fileName;
            }
            
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $creditPro->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $creditPro->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $creditPro->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $creditPro->image_mobile=$fileName;
            }
            
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $creditPro->titre_image=$fileName;
            }
            $creditPro->save();
            
        }else{
            $creditPro = new CreditProModel();
            $creditPro->titre2= request('titre2');
            $creditPro->paragraph1= request('paragraph1');
            $creditPro->paragraph2= request('paragraph2');
            $creditPro->titre3= request('titre3');
            $creditPro->titreBox1= request('titreBox1');
            $creditPro->paragraphBox1= request('paragraphBox1');
            $creditPro->titreBox2= request('titreBox2');
            $creditPro->paragraphBox2= request('paragraphBox2');
            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $creditPro->image=$fileName;
                
            }
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $creditPro->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $creditPro->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $creditPro->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $creditPro->image_mobile=$fileName;
            }
            
            
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $creditPro->titre_image=$fileName;
            }
            $creditPro->save();
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
