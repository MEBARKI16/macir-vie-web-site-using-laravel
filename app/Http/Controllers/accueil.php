<?php

namespace App\Http\Controllers;

use App\HeroSectionImages;
use App\PagesModels\ProduitsParticuliersModel;
use App\PagesModels\ProduitsProfessionnelsModel;
use App\PagesModels\WelcomeModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class accueil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $welcome =  WelcomeModel::latest()->first();
        $heroSectionImages = HeroSectionImages::where(function ($query) {
            $query->where('expirate', '>=', Carbon::now())
            ->orWhereNull('expirate');
        })->orderBy('order', 'asc')->get();
        $produitsPar = ProduitsParticuliersModel::all();
        $produitsPro = ProduitsProfessionnelsModel::all();
        return view('welcome',['welcome'=>$welcome,'heroSectionImages' => $heroSectionImages, 'produitsPar'=>$produitsPar,'produitsPro'=>$produitsPro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $welcome =  WelcomeModel::latest()->first();
       return view('admin.welcome_update',['welcome'=>$welcome]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $welcome = WelcomeModel::find(1);

        if($welcome!=null){
            $welcome->update(['titre1'=>request('titre1'),
            'paragraph1'=>request('paragraph1'),'titre2'=>request('titre2'),
            'paragraph2'=>request('paragraph2'),'titre3'=>request('titre3'),
            'paragraph3'=>request('paragraph3'),'titre4'=>request('titre4'),
            'paragraph4'=>request('paragraph4'),'titre5'=>request('titre5'),
            'paragraph5'=>request('paragraph5'),]);

            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $welcome->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $welcome->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $welcome->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $welcome->image_mobile=$fileName;
            }
            if($request->hasFile('image1')   ){
                $fileName= $request->image1->getClientOriginalName();
                $request->image1->storeAs('images',$fileName,'public');
                $welcome->image1=$fileName;
            }
            if($request->hasFile('image2')   ){
                $fileName= $request->image2->getClientOriginalName();
                $request->image2->storeAs('images',$fileName,'public');
                $welcome->image2=$fileName;
            }
            if($request->hasFile('image3')   ){
                $fileName= $request->image3->getClientOriginalName();
                $request->image3->storeAs('images',$fileName,'public');
                $welcome->image3=$fileName;
            }



            $welcome->save();

        }else{
            $welcome = new WelcomeModel();
            $welcome->titre1= request('titre1');
            $welcome->paragraph1= request('paragraph1');
            $welcome->titre2= request('titre2');
            $welcome->paragraph2= request('paragraph2');
            $welcome->titre3= request('titre3');
            $welcome->paragraph3= request('paragraph3');
            $welcome->titre4= request('titre4');
            $welcome->paragraph4= request('paragraph4');
            $welcome->titre5= request('titre5');
            $welcome->paragraph5= request('paragraph5');
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $welcome->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $welcome->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $welcome->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $welcome->image_mobile=$fileName;
            }
            if($request->hasFile('image1')   ){
                $fileName= $request->image1->getClientOriginalName();
                $request->image1->storeAs('images',$fileName,'public');
                $welcome->image1=$fileName;
            }
            if($request->hasFile('image2')   ){
                $fileName= $request->image2->getClientOriginalName();
                $request->image2->storeAs('images',$fileName,'public');
                $welcome->image2=$fileName;
            }
            if($request->hasFile('image3')   ){
                $fileName= $request->image3->getClientOriginalName();
                $request->image3->storeAs('images',$fileName,'public');
                $welcome->image3=$fileName;
            }

            $welcome->save();
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
