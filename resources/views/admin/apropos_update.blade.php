<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>A propos admin</title>
</head>

<body>
    @php
    $image_big="";
    $image_medium="";
    $image_small="";
    $image_mobile="";
    $smallImage1="";
    $smallImage2="";
    $smallImage3="";
    $titre1="Qui sommes-nous ?";
    $paragraph1=" Macir Vie est la première compagnie privée spécialisée dans les assurances de personnes en
    Algérie.Macir Vie a été fondée le 11 août 2011, suite à la séparation des assurances de personnes et des assurances
    dommages. Grâce aux compétences d’une équipe chevronnée, la compagnie a bénéficié d’une connaissance
    approfondie du contexte social et économique algérien. C’est ainsi que Macir Vie a pu apporter une réelle
    valeur ajoutée sur le marché des assurances, en concevant des produits à la hauteur des attentes et besoins
    spécifiques de nos assurés, qu’ils soient professionnels
    ou particuliers. Grâce à ces forces et à la volonté de l’ensemble de l’équipe, Macir Vie a pu relever de
    multiples défis, assurer une croissance constante, jusqu’à se hisser à la première place des compagnies
    d’assurance privées.";
    $titre2="Nos valeurs";
    $paragraph2=" Macir Vie fonde ses actions sur trois valeurs cardinales : la Fiabilité, la Proximité et
    l’Innovation. C’est
    en incarnant ces valeurs que nos équipes vous offrent un service de qualité au quotidien.";
    $paragraph3="Macir Vie, à travers sa spécialisation dans le domaine des assurances
    de personnes et sa solide expérience, vous garantit une fiabilité en toutes
    circonstances. Pour ce faire, notre compagnie met un point d’honneur
    à tenir ses engagements envers ses clients, afin de répondre à toutes les problématiques, notamment
    en termes de prise en charge des sinistres et de rapidité de remboursement.";
    $paragraph4="Macir Vie place la proximité avec
    ses Clients au cœur de ses
    préoccupations. Nos équipes veillent à être accessibles et disponibles pour prendre en charge vos requêtes dans les
    meilleures conditions.
    Avec un personnel dévoué, à l’écoute constante et à travers un respect sans faille de ses clients, notre
    compagnie vous est entièrement dédiée.";
    $paragraph5="L’innovation est le maître mot
    de Macir Vie. Nous retrouvons cette valeur à travers la volonté
    de concrétiser la transformation digitale des services d’assurances,
    mais également en proposant des produits inspirés par nos clients, pour répondre à leurs besoins. C’est
    pourquoi nous attachons une importance capitale au développement technologique, afin d’assurer une
    présence sur toutes les plateformes.";
    $titre3="Notre Vision";
    $paragraph6="“Devenir la première Insurtech en Algérie et être
    la compagnie de référence sur le marché
    des assurances de personnes.”";
    $titre4="Nos missions";
    $paragraph7=" Contribuer au développement du secteur
    des assurances en Algérie.Être présent pour vous et votre entreprise dans
    tous les moments difficiles que la vie peut réserver.Développer des services innovants pour
    répondre au mieux à vos besoins.";
    $titre5="Nos partenaires";
    $paragraph8="Macir Vie s’entoure au quotidien, de partenaires solides, de renommée internationale pour vous offrir
    la meilleure couverture et pour vous accompagner au mieux dans vos futurs projets";

    if($apropos!=null){
    $titre1=$apropos->titre1;
    $paragraph1=$apropos->paragraph1;
    $titre2=$apropos->titre2;
    $paragraph2=$apropos->paragraph2;
    $paragraph3=$apropos->paragraph3;
    $paragraph4=$apropos->paragraph4;
    $paragraph5=$apropos->paragraph5;
    $titre3=$apropos->titre3;
    $paragraph6=$apropos->paragraph6;
    $titre4=$apropos->titre4;
    $paragraph7=$apropos->paragraph7;
    $titre5=$apropos->titre5;
    $paragraph8=$apropos->paragraph8;



    }
    @endphp
    <div class="container p-5">
        <h1>Modifier la page à propos</h1>
        <form action="/admin/apropos" method="POST" enctype="multipart/form-data" class="mt-5">
            @csrf
            <div class="form-group mt-2">
                <label for="image">Image</label>
                <input type="file" class="form-control form-control-file " id="image" name="image">
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
                <label for="paragraph2">Paragraphe 2</label>
                <textarea class="form-control" id="paragraph2" rows="3" name="paragraph2" placeholder="Paragraphe 2..."
                    required>{{$paragraph2}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="smallImage1">Small image 1</label>
                <input type="file" class="form-control form-control-file " id="smallImage1" name="smallImage1">
            </div>
            <div class="form-group mt-2">
                <label for="smallImage2">Small image 2</label>
                <input type="file" class="form-control form-control-file " id="smallImage2" name="smallImage1">
            </div>
            <div class="form-group mt-2">
                <label for="smallImage3">Small image 3</label>
                <input type="file" class="form-control form-control-file " id="smallImage3" name="smallImage1">
            </div>

            <div class="form-group mt-2">
                <label for="paragraph3">Paragraphe 3</label>
                <textarea class="form-control" id="paragraph3" rows="3" name="paragraph3" placeholder="Paragraphe 3..."
                    required>{{$paragraph3}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="paragraph4">Paragraphe 4</label>
                <textarea class="form-control" id="paragraph4" rows="3" name="paragraph4" placeholder="Paragraphe 4..."
                    required>{{$paragraph4}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="paragraph5">Paragraphe 5</label>
                <textarea class="form-control" id="paragraph5" rows="3" name="paragraph5" placeholder="Paragraphe 5..."
                    required>{{$paragraph5}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="titre2">Titre 3</label>
                <input type="text" class="form-control" id="titre3" name="titre3" value="{{$titre3}}"
                    placeholder="Titre 3..." required>
            </div>
            <div class="form-group mt-2">
                <label for="paragraph6">Paragraphe 6</label>
                <textarea class="form-control" id="paragraph6" rows="3" name="paragraph6" placeholder="Paragraphe 6..."
                    required>{{$paragraph6}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="titre4">Titre 4</label>
                <input type="text" class="form-control" id="titre4" name="titre4" value="{{$titre4}}"
                    placeholder="Titre 4..." required>
            </div>
            <div class="form-group mt-2">
                <label for="paragraph7">Paragraphe 7</label>
                <textarea class="form-control" id="paragraph7" rows="3" name="paragraph7" placeholder="Paragraphe 7..."
                    required>{{$paragraph7}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="titre5">Titre 5</label>
                <input type="text" class="form-control" id="titre5" name="titre5" value="{{$titre5}}"
                    placeholder="Titre 5..." required>
            </div>
            <div class="form-group mt-2">
                <label for="paragraph8">Paragraphe 8</label>
                <textarea class="form-control" id="paragraph8" rows="3" name="paragraph8" placeholder="Paragraphe 8..."
                    required>{{$paragraph8}}</textarea>
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