<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>MyM Hadj et Omra accidents admin</title>
</head>

<body>
    @php
    $image_big="";
    $image_medium="";
    $image_small="";
    $image_mobile="";
    $titre_image="";
    $paragraph1="L’assurance Hadj et Omra s’adresse aux pèlerins qui accomplissent les rites du Hadj et de la Omra. Elle
    leur garantit une prise en charge et une assistance durant leur séjour dans les lieux Saints en cas d’accidents ou
    de maladies nécessitant une hospitalisation ou des soins.
    Macir Vie est la première assurance à avoir proposé ce type de contrat d’Assurance. Ce produit est l’exemple parfait
    d’une assurance non obligatoire, mais pourtant bien avantageuse et complète, qui permet de prodiguer toutes les
    facilités et répondre aux besoins de nos pèlerins.";
    $titre2="Pourquoi souscrire ?";

    $sous_paragraph11="Des frais médicaux suite à une maladie ou une lésion survenue durant le séjour de l’assuré lors
    du pèlerinage";
    $sous_paragraph12="Du transport ou rapatriement en cas de maladie ou lésion";
    $sous_paragraph13="Des soins dentaires d’urgence";
    $sous_paragraph14="Du transport ou rapatriement en cas de décès";
    $sous_paragraph15="De la transmission de messages urgents";
    $sous_paragraph16="De la perte du passeport, de documents de voyage et/ou du billet d’avion";
    $paragraph2="Avec l’assurance Hadj et Omra, Macir Vie vous accompagne durant votre pèlerinage et vous garantit la
    prise en charge";
    $image="";
    $titre3="Les avantages de l’assurance Garantie des Accidents de la Vie de Macir Vie";
    $paragraph3="Ce contrat d’assurance prend en charge les risques particuliers auxquels un pèlerin peut être exposé
    lors de son pèlerinage et fournit une assistance adaptée à chaque imprévu qui risque de lui arriver. Ceci permettra
    à l’assuré de se consacrer entièrement à son Hadj et de s’épanouir tout au long de son séjour.";


    if ($hadjOmra!=null) {
    $paragraph1 = $hadjOmra->paragraph1;
    $titre2 = $hadjOmra->titre2;
    $paragraph2 = $hadjOmra->paragraph2;
    $titre3 = $hadjOmra->titre3;
    $paragraph3 = $hadjOmra->paragraph3;
    $sous_paragraph11 = $hadjOmra->sous_paragraph11;
    $sous_paragraph12 = $hadjOmra->sous_paragraph12;
    $sous_paragraph13 = $hadjOmra->sous_paragraph13;
    $sous_paragraph14 = $hadjOmra->sous_paragraph14;
    $sous_paragraph15 = $hadjOmra->sous_paragraph15;
    $sous_paragraph16 = $hadjOmra->sous_paragraph16;

    }
    @endphp

    <div class="container p-5">
        <h1>Modifier la page Hadj et Omra Particuliers</h1>
        <form action="/admin/hadj_omra" method="POST" enctype="multipart/form-data" class="mt-5">
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
                <input type="text" class="form-control" id="titre2" name="titre2" value="{{$titre2}}"
                    placeholder="Titre 2..." required>
            </div>
            <div class="form-group mt-2">
                <label for="paragraph2">Paragraphe 2</label>
                <textarea class="form-control" id="paragraph2" rows="3" name="paragraph2" placeholder="Paragraphe 2..."
                    required>{{$paragraph2}}</textarea>
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
                <label for="image">Image </label>
                <input type="file" class="form-control form-control-file " id="image" name="image">
            </div>
            <div class="form-group mt-2">
                <label for="paragraph3">Paragraphe 3</label>
                <textarea class="form-control" id="paragraph3" rows="3" name="paragraph3" placeholder="Paragraphe 3..."
                    required>{{$paragraph3}}</textarea>
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
