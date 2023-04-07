<?php

namespace App\Http\Controllers;

use App\PagesModels\AssuranceVoyageParticuliersModel;
use Illuminate\Http\Request;
use Tree\Visitor\Visitor;

class assu_voyage_part extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assuranceVoyageParticuliers = AssuranceVoyageParticuliersModel::latest()->first();
        return view('assu_voyage_part',["assuranceVoyageParticuliers"=>$assuranceVoyageParticuliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $assuranceVoyageParticuliers = AssuranceVoyageParticuliersModel::latest()->first();
      return view('admin.assurance_voyage_particuliers_update',["assuranceVoyageParticuliers"=>$assuranceVoyageParticuliers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assuranceVoyageParticuliers = AssuranceVoyageParticuliersModel::find(1);
        if($assuranceVoyageParticuliers!=null){
            $assuranceVoyageParticuliers->update([
            'paragraph1'=>request('paragraph1'),
            'titre1'=>request('titre1'),
            'sous_titre1'=>request('sous_titre1'),
            'sous_titre2'=>request('sous_titre2'),
            'sous_titre3'=>request('sous_titre3'),
            'titreBox3'=>request('titreBox3'),
            'paragraphBox3'=>request('paragraphBox3'),
            'sous_paragraph11'=>request('sous_paragraph11'),
            'sous_paragraph12'=>request('sous_paragraph12'),
            'sous_paragraph13'=>request('sous_paragraph13'),
            'sous_paragraph14'=>request('sous_paragraph14'),
            'sous_paragraph21'=>request('sous_paragraph21'),
            'sous_paragraph22'=>request('sous_paragraph22'),
            'sous_paragraph23'=>request('sous_paragraph23'),
            'sous_paragraph24'=>request('sous_paragraph24'),
            'sous_paragraph25'=>request('sous_paragraph25'),
            'sous_paragraph31'=>request('sous_paragraph31'),
            'sous_paragraph32'=>request('sous_paragraph32'),
            'titre2'=>request('titre2'),
            'titreBox1'=>request('titreBox1'),
            'paragraphBox1'=>request('paragraphBox1'),
            'titreBox2'=>request('titreBox2'),
            'paragraphBox2'=>request('paragraphBox2')]);

            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->image=$fileName;
            }
            
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->image_mobile=$fileName;
            }
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->titre_image=$fileName;
            }
            $assuranceVoyageParticuliers->save();
            
        }else{
            $assuranceVoyageParticuliers = new AssuranceVoyageParticuliersModel();
            $assuranceVoyageParticuliers->titre1= request('titre1');
            $assuranceVoyageParticuliers->paragraph1= request('paragraph1');
            $assuranceVoyageParticuliers->titre2= request('titre2');
            $assuranceVoyageParticuliers->sous_titre1= request('sous_titre1');
            $assuranceVoyageParticuliers->sous_titre2= request('sous_titre2');
            $assuranceVoyageParticuliers->sous_titre3= request('sous_titre3');
            $assuranceVoyageParticuliers->titreBox3= request('titreBox3');
            $assuranceVoyageParticuliers->paragraphBox3= request('paragraphBox3');
            $assuranceVoyageParticuliers->titreBox1= request('titreBox1');
            $assuranceVoyageParticuliers->paragraphBox1= request('paragraphBox1');
            $assuranceVoyageParticuliers->titreBox2= request('titreBox2');
            $assuranceVoyageParticuliers->paragraphBox2= request('paragraphBox2');
            $assuranceVoyageParticuliers->sous_paragraph11= request('sous_paragraph11');
            $assuranceVoyageParticuliers->sous_paragraph12= request('sous_paragraph12');
            $assuranceVoyageParticuliers->sous_paragraph13= request('sous_paragraph13');
            $assuranceVoyageParticuliers->sous_paragraph14= request('sous_paragraph14');
            $assuranceVoyageParticuliers->sous_paragraph21= request('sous_paragraph21');
            $assuranceVoyageParticuliers->sous_paragraph22= request('sous_paragraph22');
            $assuranceVoyageParticuliers->sous_paragraph23= request('sous_paragraph23');
            $assuranceVoyageParticuliers->sous_paragraph24= request('sous_paragraph24');
            $assuranceVoyageParticuliers->sous_paragraph25= request('sous_paragraph25');
            $assuranceVoyageParticuliers->sous_paragraph31= request('sous_paragraph31');
            $assuranceVoyageParticuliers->sous_paragraph32= request('sous_paragraph32');
            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->image=$fileName;
                
            }
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->image_mobile=$fileName;
            }
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $assuranceVoyageParticuliers->titre_image=$fileName;
            }
            
            $assuranceVoyageParticuliers->save();
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
