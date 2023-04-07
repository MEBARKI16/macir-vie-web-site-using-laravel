<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>MyM Voyages admin</title>
</head>

<body>
    @php
    $image_big="";
    $image_medium="";
    $image_small="";
    $image_mobile="";
    $titre_image="";
    $paragraph1="Dans un contexte de mondialisation de l’économie, plusieurs entreprises algériennes sont amenées à
    envoyer leurs collaborateurs et employés à l’étranger pour des formations, des séminaires, des négociations de
    contrats ou pour de nouveaux marchés. Malheureusement, ces derniers ne sont pas l’abri des incidents lors de leurs
    voyages d’affaires : accident, maladie, besoin de rapatriement… offrez leur la protection dont ils ont besoin en
    souscrivant à l’assurance voyage de Macir Vie";
    $titre1="Pourquoi souscrire ?";
    $titre2="3 bonnes raisons de nous choisir";
    $image="";
    $sous_paragraph11="L’assurance voyage dédiée aux entreprises prend en charge :";
    $sous_paragraph12="L’invalidité partielle ou totale";
    $sous_paragraph13="Le rapatriement du corps en cas de décès";
    $sous_paragraph14="La prise en charge des frais médicaux, pharmaceutiques et d’hospitalisation";
    $sous_paragraph15="Les soins dentaires d’urgence";
    $sous_paragraph16="Le retard d’un vol régulier";
    $sous_paragraph17="La perte de bagage";
    $sous_paragraph18="L’annulation du voyage";
    $sous_paragraph19="La défense juridique en cas d’accident";

    $titreBox1="UNE ASSURANCE EN LIGNE";
    $paragraphBox1="Afin de faciliter les procédures de souscriptions à vos collaborateurs, Macir vie leur donne la
    possibilité de le faire en quelques clics, grâce à l’e-paiement";
    $titreBox2="UNE ASSISTANCE 24H/24 ET 7J/7";
    $paragraphBox2="Que ce soit en Algérie ou à l’étranger, Macir Vie est toujours disponible pour vous écouter, vous
    conseiller et vous orienter en cas d’accident";
    $titreBox3="UNE PRISE EN CHARGE RAPIDE";
    $paragraphBox3="En cas d’imprévus ou d’incidents, Macir Vie met à votre disposition une aide matérielle immédiate";



    if ($assuranceVoyageProfessionnels!=null) {
    $paragraph1 = $assuranceVoyageProfessionnels->paragraph1;
    $titre1 = $assuranceVoyageProfessionnels->titre1;

    $titre2 = $assuranceVoyageProfessionnels->titre2;
    $titreBox1 = $assuranceVoyageProfessionnels->titreBox1;
    $paragraphBox1 = $assuranceVoyageProfessionnels->paragraphBox1;
    $titreBox2 = $assuranceVoyageProfessionnels->titreBox2;
    $paragraphBox2 = $assuranceVoyageProfessionnels->paragraphBox2;
    $titreBox3 = $assuranceVoyageProfessionnels->titreBox3;
    $paragraphBox3 = $assuranceVoyageProfessionnels->paragraphBox3;
    $sous_paragraph11 = $assuranceVoyageProfessionnels->sous_paragraph11;
    $sous_paragraph12 = $assuranceVoyageProfessionnels->sous_paragraph12;
    $sous_paragraph13 = $assuranceVoyageProfessionnels->sous_paragraph13;
    $sous_paragraph14 = $assuranceVoyageProfessionnels->sous_paragraph14;
    $sous_paragraph15 = $assuranceVoyageProfessionnels->sous_paragraph15;
    $sous_paragraph16 = $assuranceVoyageProfessionnels->sous_paragraph16;
    $sous_paragraph17 = $assuranceVoyageProfessionnels->sous_paragraph17;
    $sous_paragraph18 = $assuranceVoyageProfessionnels->sous_paragraph18;
    $sous_paragraph19 = $assuranceVoyageProfessionnels->sous_paragraph19;
    }
    @endphp

    <div class="container p-5">
        <h1>Modifier la page MyM Voyage Professionnels</h1>
        <form action="/admin/assurance_voyage_professionnels" method="POST" enctype="multipart/form-data" class="mt-5">
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
                <label for="titre_image">Image titre</label>
                <input type="file" class="form-control form-control-file " id="titre_image" name="titre_image">
            </div>
            <div class="form-group mt-2">
                <label for="paragraph1">Paragraphe 1</label>
                <textarea class="form-control" id="paragraph1" rows="3" name="paragraph1" placeholder="Paragraphe 1..."
                    required>{{$paragraph1}}</textarea>
            </div>

            <div class="form-group mt-2">
                <label for="titre2">Titre 1</label>
                <input type="text" class="form-control" id="titre1" name="titre1" value="{{$titre1}}"
                    placeholder="Titre 1..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph11">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph11" name="sous_paragraph11"
                    value="{{$sous_paragraph11}}" placeholder="texte..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph12">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph12" name="sous_paragraph12"
                    value="{{$sous_paragraph12}}" placeholder="texte..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph13">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph13" name="sous_paragraph13"
                    value="{{$sous_paragraph13}}" placeholder="texte..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph14">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph14" name="sous_paragraph14"
                    value="{{$sous_paragraph14}}" placeholder="texte..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph15">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph15" name="sous_paragraph15"
                    value="{{$sous_paragraph15}}" placeholder="texte..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph16">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph16" name="sous_paragraph16"
                    value="{{$sous_paragraph16}}" placeholder="texte..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph17">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph17" name="sous_paragraph17"
                    value="{{$sous_paragraph17}}" placeholder="texte..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph18">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph18" name="sous_paragraph18"
                    value="{{$sous_paragraph18}}" placeholder="texte..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph19">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph19" name="sous_paragraph19"
                    value="{{$sous_paragraph19}}" placeholder="texte..." required>
            </div>
            <div class="form-group mt-2">
                <label for="image">Image </label>
                <input type="file" class="form-control form-control-file " id="image" name="image">
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
            <div class="form-group mt-2">
                <label for="titreBox3">Titre Carré 3</label>
                <input required type="text" class="form-control" id="titreBox3" name="titreBox3" value="{{$titreBox3}}"
                    placeholder="Titre Carré 3...">
            </div>
            <div class="form-group mt-3">
                <label required for="paragraphBox3">Paragraphe Carré 3</label>
                <textarea class="form-control" id="paragraphBox3" rows="3" name="paragraphBox3"
                    placeholder="Paragraphe carré 3...">{{$paragraphBox3}}</textarea>
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
