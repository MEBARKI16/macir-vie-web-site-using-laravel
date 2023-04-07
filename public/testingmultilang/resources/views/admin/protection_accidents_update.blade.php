<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>MyM protection accidents admin</title>
</head>

<body>
    @php
    $image_big="";
    $image_medium="";
    $image_small="";
    $image_mobile="";

    $titre_image="";
    $paragraph1="Il arrive parfois qu’un simple incident de la vie (privée ou professionnelle) entraîne des conséquences
    graves et durables, qui ne peuvent être surmontées sans la présence d’un tiers responsable. Macir Vie propose donc
    son assurance Garantie des Accidents de la vie, qui assure l’indemnisation en cas d'accident de la route, de
    bricolage, brûlure, chute, intoxication, ou autre aléa de la vie. Cette couverture permet d’indemniser les assurés,
    ainsi que leurs proches, en cas de décès ou d'accidents corporels, survenus au cours de leur vie privée ou
    professionnelle.

    La garantie des accidents de la vie est une assurance de personnes qui permet d’indemniser les assurés, ainsi que
    leurs proches, en cas de décès ou d'accidents corporels survenus au cours de leur vie privée ou professionnelle";
    $titre1="Pourquoi souscrire ?";
    $paragraph2="L’assurance garantie des accidents de la vie de Macir Vie permet de prendre en charge les conséquences
    d’un accident corporel sur votre vie et celle de votre famille en offrant une indemnisation des frais médicaux,
    hospitaliers, etc. Vous pouvez y souscrire de manière individuelle ou collective en incluant votre conjoint(e) et/ou
    vos enfants.";
    $image="";
    $titre2="Les avantages de l’assurance Garantie des Accidents de la Vie de Macir Vie";
    $titreBox1="UNE COUVERTURE INTERNATIONALE";
    $paragraphBox1="Avec l’Assurance Garantie des Accidents de la Vie de Macir Vie, vous êtes couverts partout dans le
    monde et pour des séjours pouvant aller jusqu’à 60 jours.";
    $titreBox2="UN NIVEAU D’INDEMNISATION IMPORTANT";
    $paragraphBox2="L’AGAV de Macir Vie vous offre une indemnisation pouvant atteindre 10 000 000 DA en cas de décès et
    1 000 000 DA pour tous vos frais médicaux, pharmaceutiques et hospitaliers.";



    if ($proctectionAccidents!=null) {
    $paragraph1 = $proctectionAccidents->paragraph1;
    $titre1 = $proctectionAccidents->titre1;
    $paragraph2 = $proctectionAccidents->paragraph2;
    $titre2 = $proctectionAccidents->titre2;
    $titreBox1 = $proctectionAccidents->titreBox1;
    $paragraphBox1 = $proctectionAccidents->paragraphBox1;
    $titreBox2 = $proctectionAccidents->titreBox2;
    $paragraphBox2 = $proctectionAccidents->paragraphBox2;

    }
    @endphp

    <div class="container p-5">
        <h1>Modifier la page Protection Accidents Particuliers</h1>
        <form action="/admin/protection_accidents" method="POST" enctype="multipart/form-data" class="mt-5">
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
                <label for="titre1">Titre 1</label>
                <input type="text" class="form-control" id="titre1" name="titre1" value="{{$titre1}}"
                    placeholder="Titre 1..." required>
            </div>
            <div class="form-group mt-2">
                <label for="paragraph2">Paragraphe 1</label>
                <textarea class="form-control" id="paragraph2" rows="3" name="paragraph2" placeholder="Paragraphe 2..."
                    required>{{$paragraph2}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="image">Image (540*x)</label>
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
