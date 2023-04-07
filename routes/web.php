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

Route::get('language/{locale}', function ($locale) {
    $equivilant_url = str_replace(url('/'), '', url()->previous());

    session(['locale' => $locale]);
    app()->setLocale($locale);

    $segments = array_filter(explode('/', $equivilant_url));
    array_shift($segments);
    array_unshift($segments, $locale);

    return redirect()->to(implode('/', $segments));
});

Auth::routes([
    "register" => false,
    "password.request" => false
]);

Route::get('/fr/admin/menu', 'HomeController@index');
Route::redirect('/', '/fr');
Route::redirect('/a-propos', '/fr/a-propos');
Route::redirect('/particuliers', '/fr/particuliers');
Route::redirect('/particuliers/assurance-voyage', '/fr/particuliers/assurance-voyage');
Route::redirect('/particuliers/garantie-accidents-vie', '/fr/particuliers/garantie-accidents-vie');
Route::redirect('/particuliers/assurance-hadj-omra', '/fr/particuliers/assurance-hadj-omra');
Route::redirect('/particuliers/assurance-credit-emprunteur', '/fr/particuliers/assurance-credit-emprunteur');
Route::redirect('/particuliers/tabibou-home', '/fr/particuliers/tabibou-home');
Route::redirect('/particuliers/macir-3ayeltek', '/fr/particuliers/macir-3ayeltek');
Route::redirect('/professionnels', '/fr/professionnels');
Route::redirect('/professionnels/assurance-voyage', '/fr/professionnels/assurance-voyage');
Route::redirect('/professionnels/assurance-groupe', '/fr/professionnels/assurance-groupe');
Route::redirect('/professionnels/assurance-credit-emprunteur', '/fr/professionnels/assurance-credit-emprunteur');
Route::redirect('/agences-voyages', '/fr/agences-voyages');
Route::redirect('/professionnels/plateformes-esante-eadherent', '/fr/professionnels/plateformes-esante-eadherent');
Route::redirect('/contact', '/fr/contact');
Route::redirect('/newsletter', '/fr/newsletter');
Route::redirect('/assurance-voyage', '/fr/particuliers/assurance-voyage');
Route::redirect('/hi-europa', '/fr/hi-europa');
Route::group([
    'prefix' => 'fr',
    'middleware' => 'set.locale'
], function () {
    Route::redirect('/من-نحن', '/a-propos');
    Route::redirect('/خواص', '/particuliers');
    Route::redirect('/خواص/تامين-سفر', '/particuliers/assurance-voyage');
    Route::redirect('/خواص/تامين-حوادث-الحياة', '/particuliers/garantie-accidents-vie');
    Route::redirect('/خواص/تامين-حج-عمرة', '/particuliers/assurance-hadj-omra');
    Route::redirect('/خواص/تأمين-المقترض', '/particuliers/assurance-credit-emprunteur');
    Route::redirect('/مهنيين', '/professionnels');
    Route::redirect('/مهنيين/تامين-سفر', '/professionnels/assurance-voyage');
    Route::redirect('/مهنيين/تامين-جماعي', '/professionnels/assurance-groupe');
    Route::redirect('/مهنيين/تأمين-المقترض', '/professionnels/assurance-credit-emprunteur');
    Route::redirect('/مهنيين/منصتي-الصحة-العضوية-الالكترونيتين', '/professionnels/plateformes-esante-eadherent');
    Route::redirect('/وكالات-السفر', '/agences-voyages');
    Route::redirect('/اتصلوا-بنا', '/contact');

    Route::get('/', 'accueil@index')->name('fr-accueil');
    Route::get('/a-propos', 'apropos@index')->name('fr-apropos');
    Route::get('/particuliers', 'particulier@index')->name('fr-particulier');
    Route::get('/particuliers/assurance-voyage', 'assu_voyage_part@index')->name('fr-part_assu-voyage');
    Route::get('/particuliers/garantie-accidents-vie', 'assu_accident_part@index')->name('fr-part_assu-accident');
    Route::get('/particuliers/assurance-hadj-omra', 'assu_hadj_part@index')->name('fr-part_assu-hadj');
    Route::get('/particuliers/assurance-credit-emprunteur', 'assu_creditemp_part@index')->name('fr-part_assu-creditemp');
    Route::get('/particuliers/tabibou-home', 'assu_tabibou_part@index')->name('fr-part_assu-tabibou');
    Route::get('/particuliers/macir-3ayeltek', 'assu_ayeltek_part@index')->name('fr-part_assu-ayeltek');
    Route::get('/professionnels', 'professionnel@index')->name('fr-professionnel');
    Route::get('/professionnels/assurance-voyage', 'assu_voyage_pro@index')->name('fr-pro_assu-voyage');
    Route::get('/professionnels/assurance-groupe', 'assu_groupe_pro@index')->name('fr-pro_assu-groupe');
    Route::get('/professionnels/assurance-credit-emprunteur', 'assu_creditemp_pro@index')->name('fr-pro_assu-creditemp');
    Route::get('/agences-voyages', 'agence_voyage@index')->name('fr-agence-voyage');
    Route::get('/professionnels/plateformes-esante-eadherent', 'plateformes@index')->name('fr-plateformes');
    Route::get('/contact', 'contact_reseau@index')->name('fr-contact-reseau');
    Route::get('/newsletter', 'Newsletter@index')->name('fr-news');
    Route::get('/mym-pass', function (Request $request) {
        return view('mym_pass');
    })->name('fr-mym-pass');
    // Route::get('/declaration-sinistre','declaration_sinistre@index')->name('fr-declaration-sinistre');
    Route::get('saison-des-artistes', 'ConcoursPochette@index')->name('fr-concours');
    Route::get('/condition-concours', function () {
        return view('concours_conditions');
    });
    Route::get('priere-voyage', function () {
        return view('priere_voyage');
    });
    Route::get('politique-confidentialite', function () {
        return view('politique_confidentialite');
    });
    Route::get('/hi-europa', 'LandingHiEuropaController@index')->name('hieuropa');
    Route::get('/mymemo', 'MyMemoListController@index')->name('fr-mymemo');
});

Route::group([
    'prefix' => 'ar',
    'middleware' => 'set.locale'
], function () {
    Route::redirect('/a-propos', '/ar/من-نحن');
    Route::redirect('/particuliers', '/ar/خواص');
    Route::redirect('/particuliers/assurance-voyage', '/ar/خواص/تامين-سفر');
    Route::redirect('/particuliers/garantie-accidents-vie', '/ar/خواص/تامين-حوادث-الحياة');
    Route::redirect('/particuliers/assurance-hadj-omra', '/ar/خواص/تامين-حج-عمرة');
    Route::redirect('/particuliers/assurance-credit-emprunteur', '/ar/خواص/تأمين-المقترض');
    Route::redirect('/professionnels', '/ar/مهنيين');
    Route::redirect('/professionnels/assurance-voyage', '/ar/مهنيين/تامين-سفر');
    Route::redirect('/professionnels/assurance-groupe', '/ar/مهنيين/تامين-جماعي');
    Route::redirect('/professionnels/assurance-credit-emprunteur', '/ar/مهنيين/تأمين-المقترض');
    Route::redirect('/professionnels/plateformes-esante-eadherent', '/ar/مهنيين/منصتي-الصحة-العضوية-الالكترونيتين');
    Route::redirect('/agences-voyages', '/ar/وكالات-السفر');
    Route::redirect('/contact', '/ar/اتصلوا-بنا');
    Route::redirect('/mym-pass', '/ar/mym-pass');

    Route::redirect('/hi-europa', '/ar/hi-europa');

    Route::get('/', 'accueil@index')->name('ar-accueil');
    Route::get('/من-نحن', 'apropos@index')->name('ar-apropos');
    Route::get('/خواص', 'particulier@index')->name('ar-particulier');
    Route::get('/خواص/تامين-سفر', 'assu_voyage_part@index')->name('ar-part_assu-voyage');
    Route::get('/خواص/تامين-حوادث-الحياة', 'assu_accident_part@index')->name('ar-part_assu-accident');
    Route::get('/خواص/تامين-حج-عمرة', 'assu_hadj_part@index')->name('ar-part_assu-hadj');
    Route::get('/خواص/تأمين-المقترض', 'assu_creditemp_part@index')->name('ar-part_assu-creditemp');
    Route::get('/خواص/tabibou-home', 'assu_tabibou_part@index')->name('ar-part_assu-tabibou');
    Route::get('/خواص/macir-3ayeltek', 'assu_ayeltek_part@index')->name('ar-part_assu-ayeltek');
    Route::get('/مهنيين', 'professionnel@index')->name('ar-professionnel');
    Route::get('/مهنيين/تامين-سفر', 'assu_voyage_pro@index')->name('ar-pro_assu-voyage');
    Route::get('/مهنيين/تامين-جماعي', 'assu_groupe_pro@index')->name('ar-pro_assu-groupe');
    Route::get('/مهنيين/تأمين-المقترض', 'assu_creditemp_pro@index')->name('ar-pro_assu-creditemp');
    Route::get('/وكالات-السفر', 'agence_voyage@index')->name('ar-agence-voyage');
    Route::get('/مهنيين/منصتي-الصحة-العضوية-الالكترونيتين', 'plateformes@index')->name('ar-plateformes');
    Route::get('/اتصلوا-بنا', 'contact_reseau@index')->name('ar-contact-reseau');
    Route::get('/newsletter', 'Newsletter@index')->name('ar-news');
    Route::get('/mym-pass', function (Request $request) {
        return view('mym_pass');
    })->name('ar-mym-pass');
    Route::get('/hi-europa', 'LandingHiEuropaController@index')->name('hieuropa');
    // Route::get('/declaration-sinistre','declaration_sinistre@index')->name('declaration-sinistre');
    Route::get('saison-des-artistes', 'ConcoursPochette@index')->name('concours');
    Route::get('/condition-concours', function () {
        return view('concours_conditions');
    });
    Route::get('priere-voyage', function () {
        return view('priere_voyage');
    });
    Route::get('politique-confidentialite', function () {
        return view('politique_confidentialite');
    });
    Route::get('/mymemo', 'MyMemoListController@index')->name('ar-mymemo');
});

Route::post('/contact-reseau', 'contact_reseau@store')->name('contactus');
Route::post('/', 'Newsletter@store')->name('newsletter');

Route::post('/saison-des-artistes', 'ConcoursPochette@store')->name('save-concours');
Route::post('/downloadMemoTome1', 'MyMemoController@download')->name('save-concours');
Route::post('/downloadMemo', 'MyMemoController@download');


//Admin routes
//Menu Admin

//Agence voyage
Route::get('/admin/agence_voyage', [agence_voyage::class, "create"])->middleware('auth');
Route::post('/admin/agence_voyage', [agence_voyage::class, "store"])->middleware('auth');
//A propos
Route::get('/admin/apropos', [apropos::class, "create"])->middleware('auth');
Route::post('/admin/apropos', [apropos::class, "store"])->middleware('auth');

//Page particuliers

Route::get('/fr/admin/particuliers', [particulier::class, "create"])->middleware('auth');
Route::post('/admin/particuliers', [particulier::class, "store"])->middleware('auth');


//Produits particuliers
Route::get('/fr/produits/particuliers', [produitspParticuliers::class, "index"])->middleware('auth');
Route::post('/admin/particuliers/add', [produitspParticuliers::class, "store"])->middleware('auth');
Route::delete('/admin/produits/particuliers/delete/{id}', [produitspParticuliers::class, "destroy"])->middleware('auth');


//Produits pro
Route::get('/fr/produits/professionnels', [produitsProfessionnels::class, "index"])->middleware('auth');
Route::post('/admin/professionnels/add', [produitsProfessionnels::class, "store"])->middleware('auth');
Route::delete('/admin/produits/professionnels/delete/{id}', [produitsProfessionnels::class, "destroy"])->middleware('auth');

//Protection Accidents particuliers
Route::get('/fr/admin/protection_accidents', [assu_accident_part::class, "create"])->middleware('auth');
Route::post('/admin/protection_accidents', [assu_accident_part::class, "store"])->middleware('auth');


//Crédit emprunteur particuliers
Route::get('/fr/admin/credit_particuliers', [assu_creditemp_part::class, "create"])->middleware('auth');
Route::post('/admin/credit_particuliers', [assu_creditemp_part::class, "store"])->middleware('auth');

//Hadj et omra particuliers
Route::get('/fr/admin/hadj_omra', [assu_hadj_part::class, "create"])->middleware('auth');
Route::post('/admin/hadj_omra', [assu_hadj_part::class, "store"])->middleware('auth');

//Assurance Voyage particuliers
Route::get('/fr/admin/assurance_voyage_particuliers', [assu_voyage_part::class, "create"])->middleware('auth');
Route::post('/admin/assurance_voyage_particuliers', [assu_voyage_part::class, "store"])->middleware('auth');

//Assurance Voyage professionnels
Route::get('/fr/admin/assurance_voyage_professionnels', [assu_voyage_pro::class, "create"])->middleware('auth');
Route::post('/admin/assurance_voyage_professionnels', [assu_voyage_pro::class, "store"])->middleware('auth');


//Assurance Voyage professionnels
Route::get('/fr/admin/assurance_groupe', [assu_groupe_pro::class, "create"])->middleware('auth');
Route::post('/admin/assurance_groupe', [assu_groupe_pro::class, "store"])->middleware('auth');

//Assurance Crédit professionnels
Route::get('/fr/admin/credit_pro', [assu_creditemp_pro::class, "create"])->middleware('auth');
Route::post('/admin/credit_pro', [assu_creditemp_pro::class, "store"])->middleware('auth');
//professionnels
Route::get('/fr/admin/professionnels', [professionnel::class, "create"])->middleware('auth');
Route::post('/admin/professionnels', [professionnel::class, "store"])->middleware('auth');
//welcome
Route::get('/fr/admin/welcome', [accueil::class, "create"])->middleware('auth');
Route::post('/admin/welcome', [accueil::class, "store"])->middleware('auth');
//carousel
Route::get('/fr/admin/carousel', [carousel::class, "create"])->middleware('auth');
Route::post('/admin/carousel', [carousel::class, "store"])->middleware('auth');
//a propos
Route::get('/fr/admin/apropos', [apropos::class, "create"])->middleware('auth');
Route::post('/admin/apropos', [apropos::class, "store"])->middleware('auth');

Route::post('/presentation', 'PresentationController@store');
