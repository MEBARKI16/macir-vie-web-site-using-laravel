<?php

namespace App\Http\Controllers;

use App\PagesModels\AssuranceVoyageProfessionnelsModel;
use Illuminate\Http\Request;

class assu_voyage_pro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assuranceVoyageProfessionnels = AssuranceVoyageProfessionnelsModel::latest()->first();
        return view('assu_voyage_pro',["assuranceVoyageProfessionnels"=>$assuranceVoyageProfessionnels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assuranceVoyageProfessionnels = AssuranceVoyageProfessionnelsModel::latest()->first();
        return view('admin.assurance_voyage_pro_update',["assuranceVoyageProfessionnels"=>$assuranceVoyageProfessionnels]);
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assuranceVoyageProfessionnels = AssuranceVoyageProfessionnelsModel::find(1);
        if($assuranceVoyageProfessionnels!=null){
            $assuranceVoyageProfessionnels->update([
            'paragraph1'=>request('paragraph1'),
            'titre1'=>request('titre1'),
            'titreBox3'=>request('titreBox3'),
            'paragraphBox3'=>request('paragraphBox3'),
            'titre2'=>request('titre2'),
            'titreBox1'=>request('titreBox1'),
            'paragraphBox1'=>request('paragraphBox1'),
            'sous_paragraph11'=>request('sous_paragraph11'),
            'sous_paragraph12'=>request('sous_paragraph12'),
            'sous_paragraph13'=>request('sous_paragraph13'),
            'sous_paragraph14'=>request('sous_paragraph14'),
            'sous_paragraph15'=>request('sous_paragraph15'),
            'sous_paragraph16'=>request('sous_paragraph16'),
            'sous_paragraph17'=>request('sous_paragraph17'),
            'sous_paragraph18'=>request('sous_paragraph18'),
            'sous_paragraph19'=>request('sous_paragraph19'),
            'titreBox2'=>request('titreBox2'),
            'paragraphBox2'=>request('paragraphBox2')]);

            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->image=$fileName;
            }
            
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->image_mobile=$fileName;
            }
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->titre_image=$fileName;
            }
            $assuranceVoyageProfessionnels->save();
            
        }else{
            $assuranceVoyageProfessionnels = new AssuranceVoyageProfessionnelsModel();
            $assuranceVoyageProfessionnels->titre1= request('titre1');
            $assuranceVoyageProfessionnels->paragraph1= request('paragraph1');
            $assuranceVoyageProfessionnels->titre2= request('titre2');
            $assuranceVoyageProfessionnels->titreBox3= request('titreBox3');
            $assuranceVoyageProfessionnels->paragraphBox3= request('paragraphBox3');
            $assuranceVoyageProfessionnels->titreBox1= request('titreBox1');
            $assuranceVoyageProfessionnels->paragraphBox1= request('paragraphBox1');
            $assuranceVoyageProfessionnels->titreBox2= request('titreBox2');
            $assuranceVoyageProfessionnels->paragraphBox2= request('paragraphBox2');
            $assuranceVoyageProfessionnels->sous_paragraph11= request('sous_paragraph11');
            $assuranceVoyageProfessionnels->sous_paragraph12= request('sous_paragraph12');
            $assuranceVoyageProfessionnels->sous_paragraph13= request('sous_paragraph13');
            $assuranceVoyageProfessionnels->sous_paragraph14= request('sous_paragraph14');
            $assuranceVoyageProfessionnels->sous_paragraph15= request('sous_paragraph15');
            $assuranceVoyageProfessionnels->sous_paragraph16= request('sous_paragraph16');
            $assuranceVoyageProfessionnels->sous_paragraph17= request('sous_paragraph17');
            $assuranceVoyageProfessionnels->sous_paragraph18= request('sous_paragraph18');
            $assuranceVoyageProfessionnels->sous_paragraph19= request('sous_paragraph19');

            if($request->hasFile('image')){
                $fileName= $request->image->getClientOriginalName();
                $request->image->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->image=$fileName;
                
            }
            if($request->hasFile('image_big')){
                $fileName= $request->image_big->getClientOriginalName();
                $request->image_big->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->image_big=$fileName;
            }
            if($request->hasFile('image_medium')){
                $fileName= $request->image_medium->getClientOriginalName();
                $request->image_medium->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->image_medium=$fileName;
            }
            if($request->hasFile('image_small')){
                $fileName= $request->image_small->getClientOriginalName();
                $request->image_small->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->image_small=$fileName;
            }
            if($request->hasFile('image_mobile')){
                $fileName= $request->image_mobile->getClientOriginalName();
                $request->image_mobile->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->image_mobile=$fileName;
            }
            
            if($request->hasFile('titre_image')){
                $fileName= $request->titre_image->getClientOriginalName();
                $request->titre_image->storeAs('images',$fileName,'public');
                $assuranceVoyageProfessionnels->titre_image=$fileName;
            }
            
            $assuranceVoyageProfessionnels->save();
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
