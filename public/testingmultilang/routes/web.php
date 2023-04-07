<?php

use Spatie\Sitemap\Tags\Url;
use App\Http\Controllers\accueil;
use App\Http\Controllers\carousel;
use App\Http\Controllers\apropos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Spatie\Sitemap\SitemapGenerator;
use App\Http\Controllers\particulier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\agence_voyage;
use App\Http\Controllers\professionnel;
use App\Http\Controllers\assu_hadj_part;
use App\Http\Controllers\assu_groupe_pro;
use App\Http\Controllers\assu_voyage_pro;
use App\Http\Controllers\assu_voyage_part;
use App\Http\Controllers\assu_accident_part;
use App\Http\Controllers\assu_creditemp_pro;
use App\Http\Controllers\assu_creditemp_part;
use App\Http\Controllers\AdminControllers\produitspParticuliers;
use App\Http\Controllers\AdminControllers\produitsProfessionnels;
use Illuminate\Http\Request;


$fr_routes = [
    'apropos'=>'a-propos',
    'particuliers'=>'particuliers',
    'assurance-voyage-part'=>'particuliers/assurance-voyage',
    'assurance-voyage-pro'=>'professionnels/assurance-voyage',
    'garantie-accidents-vie'=>'particuliers/garantie-accidents-vie',
    'assurance-hadj-omra'=>'particuliers/assurance-hadj-omra',
    'assurance-credit-emprunteur-part'=>'particuliers/assurance-credit-emprunteur',
    'assurance-credit-emprunteur-pro'=>'professionnels/assurance-credit-emprunteur',
    'professionnels'=>'professionnels',
    'assurance-groupe'=>'professionnels/assurance-groupe',
    'agences-voyages'=>'agences-voyages',
    'plateformes-esante-eadherent'=>'professionnels/plateformes-esante-eadherent',
    'contact'=>'contact',
    'newsletter'=>'newsletter',
    ''=>'',
];

$ar_routes = [
    'apropos'=>'a-propos',
    'particuliers'=>'particuliers',
    'assurance-voyage-part'=>'particuliers/assurance-voyage',
    'assurance-voyage-pro'=>'professionnels/assurance-voyage',
    'garantie-accidents-vie'=>'particuliers/garantie-accidents-vie',
    'assurance-hadj-omra'=>'particuliers/assurance-hadj-omra',
    'assurance-credit-emprunteur-part'=>'particuliers/assurance-credit-emprunteur',
    'assurance-credit-emprunteur-pro'=>'professionnels/assurance-credit-emprunteur',
    'professionnels'=>'professionnels',
    'assurance-groupe'=>'professionnels/assurance-groupe',
    'agences-voyages'=>'agences-voyages',
    'plateformes-esante-eadherent'=>'professionnels/plateformes-esante-eadherent',
    'contact'=>'contact',
    'newsletter'=>'newsletter',
    ''=>'',
];

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('language/{locale}', function ($locale) use($fr_routes, $ar_routes) {
    // in_array($locale, config('app.available_locales')) ?
    //         App::setLocale($locale) :
    //         App::setLocale(config('app.fallback_locale'));
    // dd(redirect()->back());
    // return redirect()->back();

    $equivilant_url = str_replace(url('/'), '', url()->previous());
    if (str_starts_with($equivilant_url, '/fr')) {
        $equivilant_url = substr($equivilant_url, 4);
        $equivilant_url = array_search($equivilant_url, $fr_routes);
        $equivilant_url = $ar_routes[$equivilant_url];
    } elseif (str_starts_with($equivilant_url, '/ar')) {
        $equivilant_url = substr($equivilant_url, 4);
        dd(utf8_encode($equivilant_url));
        $equivilant_url = array_search($equivilant_url, $ar_routes);
        $equivilant_url = $fr_routes[$equivilant_url];
    }
    $userLang = session('locale');

    session(['locale' => $locale]);
    app()->setLocale($locale);

    $segments = array_filter(explode('/', $equivilant_url));
    array_unshift($segments, $locale);
    // dd($segments);

    return redirect()->to(implode('/', $segments));
});

Auth::routes([
    "register"=>false,
    "password.request"=>false
]);

Route::get('/fr/admin/menu', 'HomeController@index');
Route::redirect('/','/fr');
Route::redirect('/a-propos','/fr/a-propos');
Route::redirect('/particuliers','/fr/particuliers');
Route::redirect('/particuliers/assurance-voyage','/fr/particuliers/assurance-voyage');
Route::redirect('/particuliers/garantie-accidents-vie','/fr/particuliers/garantie-accidents-vie');
Route::redirect('/particuliers/assurance-hadj-omra','/fr/particuliers/assurance-hadj-omra');
Route::redirect('/particuliers/assurance-credit-emprunteur','/fr/particuliers/assurance-credit-emprunteur');
Route::redirect('/particuliers/tabibou-home','/fr/particuliers/tabibou-home');
Route::redirect('/particuliers/macir-3ayeltek','/fr/particuliers/macir-3ayeltek');
Route::redirect('/professionnels','/fr/professionnels');
Route::redirect('/professionnels/assurance-voyage','/fr/professionnels/assurance-voyage');
Route::redirect('/professionnels/assurance-groupe','/fr/professionnels/assurance-groupe');
Route::redirect('/professionnels/assurance-credit-emprunteur','/fr/professionnels/assurance-credit-emprunteur');
Route::redirect('/agences-voyages','/fr/agences-voyages');
Route::redirect('/professionnels/plateformes-esante-eadherent','/fr/professionnels/plateformes-esante-eadherent');
Route::redirect('/contact','/fr/contact');
Route::redirect('/newsletter','/fr/newsletter');
Route::redirect('/assurance-voyage', '/fr/particuliers/assurance-voyage');

Route::group([
    'prefix' => 'fr',
    'middleware' => 'set.locale'
    ], function () {
    Route::get('/','accueil@index')->name('fr-accueil');
    Route::get('/a-propos','apropos@index')->name('fr-apropos');
    Route::get('/particuliers','particulier@index')->name('fr-particulier');
    Route::get('/particuliers/assurance-voyage','assu_voyage_part@index')->name('fr-part_assu-voyage');
    Route::get('/particuliers/garantie-accidents-vie','assu_accident_part@index')->name('fr-part_assu-accident');
    Route::get('/particuliers/assurance-hadj-omra','assu_hadj_part@index')->name('fr-part_assu-hadj');
    Route::get('/particuliers/assurance-credit-emprunteur','assu_creditemp_part@index')->name('fr-part_assu-creditemp');
    Route::get('/particuliers/tabibou-home','assu_tabibou_part@index')->name('fr-part_assu-tabibou');
    Route::get('/particuliers/macir-3ayeltek','assu_ayeltek_part@index')->name('fr-part_assu-ayeltek');
    Route::get('/professionnels','professionnel@index')->name('fr-professionnel');
    Route::get('/professionnels/assurance-voyage','assu_voyage_pro@index')->name('fr-pro_assu-voyage');
    Route::get('/professionnels/assurance-groupe','assu_groupe_pro@index')->name('fr-pro_assu-groupe');
    Route::get('/professionnels/assurance-credit-emprunteur','assu_creditemp_pro@index')->name('fr-pro_assu-creditemp');
    Route::get('/agences-voyages','agence_voyage@index')->name('fr-agence-voyage');
    Route::get('/professionnels/plateformes-esante-eadherent','plateformes@index')->name('fr-plateformes');
    Route::get('/contact','contact_reseau@index')->name('fr-contact-reseau');
    Route::get('/newsletter','Newsletter@index')->name('fr-news');
    // Route::get('/declaration-sinistre','declaration_sinistre@index')->name('fr-declaration-sinistre');
    Route::get('saison-des-artistes', 'ConcoursPochette@index')->name('fr-concours');
    Route::get('/condition-concours', function() {
        return view('concours_conditions');
    });
    Route::get('priere-voyage',function(){
        return view('priere_voyage');
    });
    Route::get('politique-confidentialite',function(){
        return view('politique_confidentialite');
    });
});

Route::group([
    'prefix' => 'ar',
    'middleware' => 'set.locale'
    ], function () {
    Route::get('/','accueil@index')->name('ar-accueil');
    Route::get('/a-propos','apropos@index')->name('ar-apropos');
    Route::get('/particuliers','particulier@index')->name('ar-particulier');
    Route::get('/particuliers/assurance-voyage','assu_voyage_part@index')->name('ar-part_assu-voyage');
    Route::get('/particuliers/garantie-accidents-vie','assu_accident_part@index')->name('ar-part_assu-accident');
    Route::get('/particuliers/assurance-hadj-omra','assu_hadj_part@index')->name('ar-part_assu-hadj');
    Route::get('/particuliers/assurance-credit-emprunteur','assu_creditemp_part@index')->name('ar-part_assu-creditemp');
    Route::get('/particuliers/tabibou-home','assu_tabibou_part@index')->name('ar-part_assu-tabibou');
    Route::get('/particuliers/macir-3ayeltek','assu_ayeltek_part@index')->name('ar-part_assu-ayeltek');
    Route::get('/professionnels','professionnel@index')->name('ar-professionnel');
    Route::get('/professionnels/assurance-voyage','assu_voyage_pro@index')->name('ar-pro_assu-voyage');
    Route::get('/professionnels/assurance-groupe','assu_groupe_pro@index')->name('ar-pro_assu-groupe');
    Route::get('/professionnels/assurance-credit-emprunteur','assu_creditemp_pro@index')->name('ar-pro_assu-creditemp');
    Route::get('/agences-voyages','agence_voyage@index')->name('ar-agence-voyage');
    Route::get('/professionnels/منصتي-الصحة-العضوية-الالكترونيتين','plateformes@index')->name('ar-plateformes');
    Route::get('/contact','contact_reseau@index')->name('ar-contact-reseau');
    Route::get('/newsletter','Newsletter@index')->name('ar-news');
    // Route::get('/declaration-sinistre','declaration_sinistre@index')->name('declaration-sinistre');
    Route::get('saison-des-artistes', 'ConcoursPochette@index')->name('concours');
    Route::get('/condition-concours', function() {
        return view('concours_conditions');
    });
    Route::get('priere-voyage',function(){
        return view('priere_voyage');
    });
    Route::get('politique-confidentialite',function(){
        return view('politique_confidentialite');
    });
});

Route::post('/contact-reseau','contact_reseau@store')->name('contactus');
Route::post('/', 'Newsletter@store')->name('newsletter');

Route::post('/saison-des-artistes', 'ConcoursPochette@store')->name('save-concours');


//Admin routes
//Menu Admin

//Agence voyage
Route::get('/admin/agence_voyage',[agence_voyage::class,"create"])->middleware('auth');
Route::post('/admin/agence_voyage',[agence_voyage::class,"store"])->middleware('auth');
//A propos
Route::get('/admin/apropos',[apropos::class,"create"])->middleware('auth');
Route::post('/admin/apropos',[apropos::class,"store"])->middleware('auth');

//Page particuliers

Route::get('/fr/admin/particuliers',[particulier::class,"create"])->middleware('auth');
Route::post('/admin/particuliers',[particulier::class,"store"])->middleware('auth');


//Produits particuliers
Route::get('/fr/produits/particuliers',[produitspParticuliers::class,"index"])->middleware('auth');
Route::post('/admin/particuliers/add',[produitspParticuliers::class,"store"])->middleware('auth');
Route::delete('/admin/produits/particuliers/delete/{id}',[produitspParticuliers::class,"destroy"])->middleware('auth');


//Produits pro
Route::get('/fr/produits/professionnels',[produitsProfessionnels::class,"index"])->middleware('auth');
Route::post('/admin/professionnels/add',[produitsProfessionnels::class,"store"])->middleware('auth');
Route::delete('/admin/produits/professionnels/delete/{id}',[produitsProfessionnels::class,"destroy"])->middleware('auth');

//Protection Accidents particuliers
Route::get('/fr/admin/protection_accidents',[assu_accident_part::class,"create"])->middleware('auth');
Route::post('/admin/protection_accidents',[assu_accident_part::class,"store"])->middleware('auth');


//Crédit emprunteur particuliers
Route::get('/fr/admin/credit_particuliers',[assu_creditemp_part::class,"create"])->middleware('auth');
Route::post('/admin/credit_particuliers',[assu_creditemp_part::class,"store"])->middleware('auth');

//Hadj et omra particuliers
Route::get('/fr/admin/hadj_omra',[assu_hadj_part::class,"create"])->middleware('auth');
Route::post('/admin/hadj_omra',[assu_hadj_part::class,"store"])->middleware('auth');

//Assurance Voyage particuliers
Route::get('/fr/admin/assurance_voyage_particuliers',[assu_voyage_part::class,"create"])->middleware('auth');
Route::post('/admin/assurance_voyage_particuliers',[assu_voyage_part::class,"store"])->middleware('auth');

//Assurance Voyage professionnels
Route::get('/fr/admin/assurance_voyage_professionnels',[assu_voyage_pro::class,"create"])->middleware('auth');
Route::post('/admin/assurance_voyage_professionnels',[assu_voyage_pro::class,"store"])->middleware('auth');


//Assurance Voyage professionnels
Route::get('/fr/admin/assurance_groupe',[assu_groupe_pro::class,"create"])->middleware('auth');
Route::post('/admin/assurance_groupe',[assu_groupe_pro::class,"store"])->middleware('auth');

//Assurance Crédit professionnels
Route::get('/fr/admin/credit_pro',[assu_creditemp_pro::class,"create"])->middleware('auth');
Route::post('/admin/credit_pro',[assu_creditemp_pro::class,"store"])->middleware('auth');
//professionnels
Route::get('/fr/admin/professionnels',[professionnel::class,"create"])->middleware('auth');
Route::post('/admin/professionnels',[professionnel::class,"store"])->middleware('auth');
//welcome
Route::get('/fr/admin/welcome',[accueil::class,"create"])->middleware('auth');
Route::post('/admin/welcome',[accueil::class,"store"])->middleware('auth');
//carousel
Route::get('/fr/admin/carousel',[carousel::class,"create"])->middleware('auth');
Route::post('/admin/carousel',[carousel::class,"store"])->middleware('auth');
//a propos
Route::get('/fr/admin/apropos',[apropos::class,"create"])->middleware('auth');
Route::post('/admin/apropos',[apropos::class,"store"])->middleware('auth');

Route::post('/presentation', 'PresentationController@store');





