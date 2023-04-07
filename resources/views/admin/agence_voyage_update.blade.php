<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Agence voyage admin</title>
</head>

<body>
    @php
    $image_big="";
    $image_medium="";
    $image_small="";
    $image_mobile="";
    $titre1="Espace agences de voyages";
    $paragraph1=" Macir Vie met à disposition des agences de voyages conventionnées, un espace dédié pour la gestion des
    assurances de leurs clients. Cela leur permet de proposer des services et des séjours touristiques uniques,
    complets, qui répondent aux attentes d'une clientèle de plus en plus exigeante.
    Pour vous faciliter la conception de ces services et vous permettre d’offrir le meilleur à vos clients, Macir
    Vie a développé
    une plateforme en ligne, qui vous permet de gérer les contrats d’assurances voyages de tous vos clients.";

    $titre2="2 bonnes raisons d’utiliser l’espace agences de voyages";
    $titreBox1="UNE GESTION 100 % EN LIGNE";
    $paragraphBox1="L’espace vous permet de gérer les dossiers et les contrats d’assurance voyage de vos clients en
    quelques clics depuis votre bureau";
    $titreBox2="REMISES EXCEPTIONNELLES";
    $paragraphBox2="Rejoignez l’espace consacré aux agences de voyages et bénéficiez de remises exceptionnelles sur les
    tarifs des assurances voyages.";
    if ($agenceVoyage!=null) {
    $titre1 = $agenceVoyage->titre1;
    $paragraph1 = $agenceVoyage->paragraph1;
    $titre2 = $agenceVoyage->titre2;
    $titreBox1 = $agenceVoyage->titreBox1;
    $paragraphBox1 = $agenceVoyage->paragraphBox1;
    $titreBox2 = $agenceVoyage->titreBox2;
    $paragraphBox2 = $agenceVoyage->paragraphBox2;
    }
    @endphp
    <div class="container p-5">
        <h1>Modifier la page Agence de voyage</h1>
        <form action="/admin/agence_voyage" method="POST" enctype="multipart/form-data" class="mt-5">
            @csrf
            <div class="form-group mt-2">
                <label for="image_big">Image page Big</label>
                <input type="file" class="form-control form-control-file " id="image_big" name="image_big">
            </div>
            <div class="form-group mt-2">
                <label for="image_medium">Image page Medium</label>
                <input type="file" class="form-control form-control-file " id="image_medium" name="image_medium">
            </div>
            <div class="form-group mt-2">
                <label for="image_small">Image page Small</label>
                <input type="file" class="form-control form-control-file " id="image_small" name="image_small">
            </div>
            <div class="form-group mt-2">
                <label for="image_mobile">Image page Mobile</label>
                <input type="file" class="form-control form-control-file " id="image_mobile" name="image_mobile">
            </div>
            <div class="form-group mt-2">
                <label for="titre1">Titre 1</label>
                <input type="text" class="form-control" id="titre1" name="titre1" value="{{$titre1}}"
                    placeholder="Titre 1..." required>

            </div>
            <div class="form-group mt-2">
                <label for="paragraph1">Paragraphe 1</label>
                <textarea class="form-control" id="paragraph1" rows="3" name="paragraph1" placeholder="Paragraphe 1..."
                    required>{{$paragraph1}}</textarea>
            </div>

            <div class="form-group mt-2">
                <label for="titre2">Titre 2</label>
                <input type="text" class="form-control" id="titre2" name="titre2" value="{{$titre2}}"
                    placeholder="Titre 2..." required>
            </div>
            <div class="form-group mt-2">
                <label for="titreBox1">Titre Carré 1</label>
                <input type="text" required class="form-control" id="titreBox1" name="titreBox1" value="{{$titreBox1}}"
                    placeholder="Titre Carré 1...">
            </div>
            <div class="form-group mt-2">
                <label for="paragraphBox1">Paragraphe Carré 1</label>
                <textarea required class="form-control" id="paragraphBox1" rows="3" name="paragraphBox1"
                    placeholder="Paragraphe carré 1...">{{$paragraphBox1}}</textarea></div>
            <div class="form-group mt-2">
                <label for="titreBox2">Titre Carré 2</label>
                <input required type="text" class="form-control" id="titreBox2" name="titreBox2" value="{{$titreBox2}}"
                    placeholder="Titre Carré 2...">
            </div>
            <div class="form-group mt-2">
                <label required for="paragraphBox2">Paragraphe Carré 2</label>
                <textarea class="form-control" id="paragraphBox2" rows="3" name="paragraphBox2"
                    placeholder="Paragraphe carré 2...">{{$paragraphBox2}}</textarea>
            </div>

            <div class="d-flex justify-content-center ">
                <input type="submit" class="btn btn-primary mr-5" id="" value="Modifier">
                <button class="btn btn-primary ml-5"><a href="/fr/admin/menu"
                        style="text-decoration: none;color:#fff;">Annuler
                    </a></button>
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous">
    </script>
</body>

</html>