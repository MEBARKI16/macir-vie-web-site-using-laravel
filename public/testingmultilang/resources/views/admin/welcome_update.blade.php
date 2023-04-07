<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Accueil admin</title>
</head>

<body>
    @php
    $image_big="";
    $image_medium="";
    $image_small="";
    $image_mobile="";
    $titre1="Première compagnie privée spécialisée dans les assurances de personnes";
    $paragraph1="Macir Vie a été fondée le 11 août 2011, suite à la séparation des assurances de personnes et des
    assurances dommages. Grâce aux compétences d'une équipe chevronnée, la compagnie a bénéficié d'une connaissance
    approfondie du contexte social et économique algérien. C'est ainsi que Macir Vie a pu apporter une réelle valeur
    ajoutée sur le marché des assurances, en concevant des produits à la hauteur des attentes et besoins spécifiques de
    nos assurés, qu'ils soient professionnels ou particuliers";
    $image1="";
    $titre2="Pourquoi nous choisir ?";
    $paragraph2="Macir Vie fonde ses actions sur trois valeurs cardinales : la Fiabilité, la Proximité et l'Innovation.
    C'est en incarnant ces valeurs que nos équipes vous offrent un service de qualité au quotidien";
    $titre3="Services aux particuliers";
    $paragraph3="Macir Vie a développé des produits et des services sur-mesure, afin de répondre au mieux à vos besoins
    et ceux de vos proches en matière d'assurance de personnes";
    $titre4="Services aux professionnels";
    $paragraph4="Macir Vie a développé des produits et des services sur-mesure, afin de répondre au mieux aux besoins et
    attentes des entreprises et des professionnels en matière d'assurance de personnes";
    $titre5="Espace Agences de voyages";
    $paragraph5="Macir Vie met à disposition des agences de voyages conventionnées, un espace dédié pour la gestion des
    assurances de leurs clients. Cela leur permet de proposer des services et des séjours touristiques uniques,
    complets, qui répondent aux attentes d'une clientèle de plus en plus exigeante";
    $image2="";
    $image3="";
    if ($welcome!=null) {
    $titre1 = $welcome->titre1;
    $paragraph1 = $welcome->paragraph1;
    $titre2 = $welcome->titre2;
    $paragraph2 = $welcome->paragraph2;
    $titre3 = $welcome->titre3;
    $paragraph3 = $welcome->paragraph3;
    $titre4 = $welcome->titre4;
    $paragraph4 = $welcome->paragraph4;
    $titre5 = $welcome->titre5;
    $paragraph5 = $welcome->paragraph5;


    }
    @endphp
    <div class="container p-5">
        <h1>Modifier la page accueil</h1>
        <form action="/admin/welcome" method="POST" enctype="multipart/form-data" class="mt-5">
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
                <label for="image1">Image 1 </label>
                <input type="file" class="form-control form-control-file " id="image1" name="image1">
            </div>

            <div class="form-group mt-2">
                <label for="titre2">Titre 2</label>
                <input type="text" class="form-control" id="titre2" name="titre2" value="{{$titre2}}"
                    placeholder="Titre 2..." required>

            </div>
            <div class="form-group mt-2">
                <label for="paragraph2">Paragraphe 2</label>
                <textarea class="form-control" id="paragraph2" rows="3" name="paragraph2" placeholder="Paragraphe 2..."
                    required>{{$paragraph2}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="image2">Image 2 </label>
                <input type="file" class="form-control form-control-file " id="image2" name="image2">
            </div>
            <div class="form-group mt-2">
                <label for="titre3">Titre 3</label>
                <input type="text" class="form-control" id="titre3" name="titre3" value="{{$titre3}}"
                    placeholder="Titre 3..." required>

            </div>
            <div class="form-group mt-2">
                <label for="paragraph3">Paragraphe 3</label>
                <textarea class="form-control" id="paragraph3" rows="3" name="paragraph3" placeholder="Paragraphe 3..."
                    required>{{$paragraph3}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="titre4">Titre 4</label>
                <input type="text" class="form-control" id="titre4" name="titre4" value="{{$titre4}}"
                    placeholder="Titre 4..." required>

            </div>
            <div class="form-group mt-2">
                <label for="paragraph4">Paragraphe 4</label>
                <textarea class="form-control" id="paragraph4" rows="3" name="paragraph4" placeholder="Paragraphe 4..."
                    required>{{$paragraph4}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="titre1">Titre 5</label>
                <input type="text" class="form-control" id="titre5" name="titre5" value="{{$titre5}}"
                    placeholder="Titre 5..." required>

            </div>
            <div class="form-group mt-2">
                <label for="paragraph5">Paragraphe 5</label>
                <textarea class="form-control" id="paragraph5" rows="3" name="paragraph5" placeholder="Paragraphe 5..."
                    required>{{$paragraph5}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="image5">Image 5 </label>
                <input type="file" class="form-control form-control-file " id="image5" name="image5">
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