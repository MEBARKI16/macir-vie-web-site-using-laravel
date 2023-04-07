@extends('layouts.app')
@section('content')

<div>

    <div class="d-flex align-items-center flex-column w-100">
        <div class="card  card bg-light  mt-5" style="min-width: 55%;">
            <div class="card-header">
                <h3>
                    Modifier les pages particuliers</h3>
            </div>
            <div class="card-body">
                <div class="d-flex  flex-column">
                    <div class="mb-4">
                        <h5 class="card-title">Modifier la page particuliers</h5>
                        <button class="btn btn-primary"><a href="/fr/admin/particuliers"
                                style="text-decoration: none;color:#fff;">Particuliers</a></button>

                    </div>
                    <div class="mb-4">
                        <h5 class="card-title">Modifier la page MyM voyage particuliers</h5>
                        <button class="btn btn-primary"><a href="/fr/admin/assurance_voyage_particuliers"
                                style="text-decoration: none;color:#fff;"> MyM
                                voyage particuliers</a></button>

                    </div>
                    <div class="mb-4">
                        <h5 class="card-title">Modifier la page MyM protection accidents</h5>
                        <button class="btn btn-primary"><a href="/fr/admin/protection_accidents"
                                style="text-decoration: none;color:#fff;"> MyM
                                protection accidents</a></button>

                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">Modifier la page MyM Crédit particuliers</h5>
                        <button class="btn btn-primary"> <a href="/fr/admin/credit_particuliers"
                                style="text-decoration: none;color:#fff;">MyM
                                Crédit</a></button>

                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">Modifier la page MyM Hadj et Omra</h5>
                        <button class="btn btn-primary"> <a href="/fr/admin/hadj_omra"
                                style="text-decoration: none;color:#fff;">MyM Hadj
                                et Omra</a></button>

                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">Modifier les produits particuliers</h5>
                        <button class="btn btn-primary"> <a href="/fr/produits/particuliers"
                                style="text-decoration: none;color:#fff;">Produits particuliers</a></button>

                    </div>
                </div>
            </div>
        </div>
        <div class="card  card bg-light  mt-5" style="min-width: 55%;">
            <div class="card-header">
                <h3>
                    Modifier les pages professionnels</h3>
            </div>
            <div class="card-body">
                <div class="d-flex  flex-column">
                    <div class="mb-4">
                        <h5 class="card-title">Modifier la page professionnels</h5>
                        <button class="btn btn-primary"><a href="/fr/admin/professionnels"
                                style="text-decoration: none;color:#fff;">Professionnels</a></button>

                    </div>
                    <div class="mb-4">
                        <h5 class="card-title">Modifier la page MyM voyage professionnels</h5>
                        <button class="btn btn-primary"><a href="/fr/admin/assurance_voyage_professionnels"
                                style="text-decoration: none;color:#fff;"> MyM
                                voyage professionnels</a></button>

                    </div>
                    <div class="mb-4">
                        <h5 class="card-title">Modifier la page MyM Groupe</h5>
                        <button class="btn btn-primary"><a href="/fr/admin/assurance_groupe"
                                style="text-decoration: none;color:#fff;"> MyM
                                Groupe</a></button>

                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">Modifier la page MyM Crédit professionnels</h5>
                        <button class="btn btn-primary"> <a href="/fr/admin/credit_pro"
                                style="text-decoration: none;color:#fff;">MyM
                                Crédit professionnels</a></button>

                    </div>
                    <div class="mb-3">
                        <h5 class="card-title">Modifier les produits professionnels</h5>
                        <button class="btn btn-primary"> <a href="/fr/produits/professionnels"
                                style="text-decoration: none;color:#fff;">Produits professionnels</a></button>

                    </div>


                </div>
            </div>
        </div>
        <div class="card  card bg-light  mt-5" style="min-width: 55%;">
            <div class="card-header">
                <h3>
                    Autres pages</h3>
            </div>
            <div class="card-body">
                <div class="d-flex  flex-column">
                    <div class="mb-4">
                        <h5 class="card-title">Modifier Accueil</h5>
                        <div style="display: flex;">
                            <div class="mr-3">
                                <button class="btn btn-primary"><a href="/fr/admin/welcome"
                                    style="text-decoration: none;color:#fff;">Accueil</a></button>
                            </div>
                            <div class="ml-3">
                                <button class="btn btn-primary"><a href="/fr/admin/carousel"
                                    style="text-decoration: none;color:#fff;">Carousel</a></button>
                            </div>
                        </div>
                        

                    </div>
                    <div class="mb-4">
                        <h5 class="card-title">Modifier la page agences de voyages</h5>
                        <button class="btn btn-primary"><a href="/admin/agence_voyage"
                                style="text-decoration: none;color:#fff;"> Agences
                                de voyages</a></button>

                    </div>

                    <div class="mb-3">
                        <h5 class="card-title">Modifier la page A propos</h5>
                        <button class="btn btn-primary"><a href="/fr/admin/apropos"
                                style="text-decoration: none;color:#fff;"> A
                                propos</a></button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous">
    </script>
</div>
@endsection