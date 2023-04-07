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
    $paragraph1="Voyagez en toute sérénité et confiance avec notre assurance voyage. Afin de parer à toute mauvaise
    surprise (accident, maladie, retard de vol...), Macir Vie met à votre disposition une assurance voyage qui vous
    couvre tout au long de votre séjour à l'étranger";
    $titre1="Pourquoi souscrire ?";
    $sous_titre1="Assistance à la famille";
    $sous_paragraph11="En cas d’accident , Macir Vie prend en charge :";
    $sous_paragraph12="Le rapatriement des enfants de moins de 12 ans se trouvant seuls avec l’assuré";
    $sous_paragraph13="Les frais de déplacement urgent de l’assuré, dû à un accident imprévu lors du voyage";
    $sous_paragraph14="La transmission de messages urgents aux proches de l’assuré";
    $sous_titre2="Assistance médicale et rapatriement";
    $sous_paragraph21="En cas de maladie ou accident à l’étranger Macir Vie :";
    $sous_paragraph22="Assure votre transport et/ou votre rapatriement selon les impératifs médicaux";
    $sous_paragraph23="Prend en charge les frais d’envoi de médicaments, sans limites";
    $sous_paragraph24="Prend en charge vos soins dentaires d’urgence";
    $sous_paragraph24="Assure la prolongation de votre séjour";
    $sous_paragraph25="Macir Vie fonde ses actions sur trois valeurs cardinales : la Fiabilité, la Proximité et
    l’Innovation. C’est en incarnant ces valeurs que nos équipes vous offrent un service de qualité au quotidien";

    $sous_titre3="Assistance juridique à l’étranger";
    $sous_paragraph31="Une caution pénale est versée aux tribunaux étrangers pour garantir la liberté provisoire de
    l’assuré, au cours de la procédure pénale engagée contre ce dernier suite à un accident de la circulation dans
    lequel le bénéficiaire conduisait personnellement le véhicule";
    $sous_paragraph32="Prise en charge des frais d’avocat et de défense juridique à l’étranger de l’assuré dans les
    procédures pénales ou civiles qui sont engagées contre ce dernier en cas d’accident de la circulation";

    $titre2="3 bonnes raisons de nous choisir";
    $image="";
    $titreBox1="SOUSCRIPTION EN LIGNE";
    $paragraphBox1="Elle est disponible en ligne sur notre site web en souscription directe, avec 15% de réduction, en
    utilisant seulement votre carte interbancaire (CIB)";
    $titreBox2="UNE ASSISTANCE 24H/24 ET 7J/7";
    $paragraphBox2="Pour qu'un voyage rime avec sérénité, nos équipes sont à votre disposition afin de vous assister et
    répondre à vos demandes 24h/24 et 7j/7";
    $titreBox3="ACCEPTÉE PAR LA MAJORITÉ DES CHANCELLERIES EUROPÉENNES";
    $paragraphBox3="Obligatoire lorsqu'il s'agit de voyager vers un pays de l'espace Schengen, l'Assurance Voyage de
    Macir Vie est une assurance acceptée par la majorité des chancelleries européennes présentes en Algerie";



    if ($assuranceVoyageParticuliers!=null) {
    $paragraph1 = $assuranceVoyageParticuliers->paragraph1;
    $titre1 = $assuranceVoyageParticuliers->titre1;
    $sous_titre1 = $assuranceVoyageParticuliers->sous_titre1;
    $sous_titre2 = $assuranceVoyageParticuliers->sous_titre2;
    $sous_titre3 = $assuranceVoyageParticuliers->sous_titre3;
    $sous_paragraph11 = $assuranceVoyageParticuliers->sous_paragraph11;
    $sous_paragraph12 = $assuranceVoyageParticuliers->sous_paragraph12;
    $sous_paragraph13 = $assuranceVoyageParticuliers->sous_paragraph13;
    $sous_paragraph14 = $assuranceVoyageParticuliers->sous_paragraph14;
    $sous_paragraph21 = $assuranceVoyageParticuliers->sous_paragraph21;
    $sous_paragraph22 = $assuranceVoyageParticuliers->sous_paragraph22;
    $sous_paragraph23 = $assuranceVoyageParticuliers->sous_paragraph23;
    $sous_paragraph24 = $assuranceVoyageParticuliers->sous_paragraph24;
    $sous_paragraph25 = $assuranceVoyageParticuliers->sous_paragraph25;
    $sous_paragraph31 = $assuranceVoyageParticuliers->sous_paragraph31;
    $sous_paragraph32 = $assuranceVoyageParticuliers->sous_paragraph32;
    $titre2 = $assuranceVoyageParticuliers->titre2;
    $titreBox1 = $assuranceVoyageParticuliers->titreBox1;
    $paragraphBox1 = $assuranceVoyageParticuliers->paragraphBox1;
    $titreBox2 = $assuranceVoyageParticuliers->titreBox2;
    $paragraphBox2 = $assuranceVoyageParticuliers->paragraphBox2;
    $titreBox3 = $assuranceVoyageParticuliers->titreBox3;
    $paragraphBox3 = $assuranceVoyageParticuliers->paragraphBox3;

    }
    @endphp

    <div class="container p-5">
        <h1>Modifier la page MyM Voyage Particuliers</h1>
        <form action="/admin/assurance_voyage_particuliers" method="POST" enctype="multipart/form-data" class="mt-5">
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
                <label for="image">Image </label>
                <input type="file" class="form-control form-control-file " id="image" name="image">
            </div>
            <div class="form-group mt-2">
                <label for="sous_titre1">Sous titre 1</label>
                <input type="text" class="form-control" id="sous_titre1" name="sous_titre1" value="{{$sous_titre1}}"
                    placeholder="Sous titre 1..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph11">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph11" name="sous_paragraph11"
                    value="{{$sous_paragraph11}}" placeholder="texte..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph12">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph12" name="sous_paragraph12"
                    value="{{$sous_paragraph12}}" placeholder="texte ..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph13">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph13" name="sous_paragraph13"
                    value="{{$sous_paragraph13}}" placeholder="texte ..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph14">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph14" name="sous_paragraph14"
                    value="{{$sous_paragraph14}}" placeholder="texte ..." required>
            </div>

            <div class="form-group mt-2">
                <label for="sous_titre2">Sous titre 2</label>
                <input type="text" class="form-control" id="sous_titre2" name="sous_titre2" value="{{$sous_titre2}}"
                    placeholder="Sous titre 2..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph21">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph21" name="sous_paragraph21"
                    value="{{$sous_paragraph21}}" placeholder="texte ..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph22">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph22" name="sous_paragraph22"
                    value="{{$sous_paragraph22}}" placeholder="texte ..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph23">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph23" name="sous_paragraph23"
                    value="{{$sous_paragraph23}}" placeholder="texte ..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph24">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph24" name="sous_paragraph24"
                    value="{{$sous_paragraph24}}" placeholder="texte ..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph25">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph25" name="sous_paragraph25"
                    value="{{$sous_paragraph25}}" placeholder="texte ..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_titre3">Sous titre 3</label>
                <input type="text" class="form-control" id="sous_titre3" name="sous_titre3" value="{{$sous_titre3}}"
                    placeholder="Sous titre 3..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph31">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph31" name="sous_paragraph31"
                    value="{{$sous_paragraph31}}" placeholder="texte ..." required>
            </div>
            <div class="form-group mt-2">
                <label for="sous_paragraph32">Texte </label>
                <input type="text" class="form-control" id="sous_paragraph32" name="sous_paragraph32"
                    value="{{$sous_paragraph32}}" placeholder="texte ..." required>
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
