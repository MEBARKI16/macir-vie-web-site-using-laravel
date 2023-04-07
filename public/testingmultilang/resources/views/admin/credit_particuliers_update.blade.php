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
    $paragraph1="Lorsque vous demandez un crédit bancaire, votre banque vous exige une garantie d’assurance qui couvre
    votre emprunt en cas d’invalidité ou de décès.
    L’assurance crédit emprunteur est une assurance obligatoire, qui prend en charge la totalité ou une partie des
    échéances de remboursement d’un crédit en cas de survenance de certains événements (décès, invalidité absolue et
    définitive)";
    $titre2="Pourquoi souscrire ?";
    $paragraph2="Macir Vie garantit le remboursement de la créance restante due, en cas de décès ou d’incapacité absolue
    définitive de l’assuré au moment de l’accident. Par ce biais, Macir Vie désintéresse le banquier et le bien devient
    la propriété des ayants droit. Macir Vie vous évite, ainsi, de perdre le bien financé et garantit le droit de
    propriété à votre famille qui sera ainsi protégée.";
    $image="";
    $titre3="Les avantages de l’assurance crédit emprunteur «particuliers» de Macir Vie";
    $titreBox1="UNE PROTECTION FINANCIÈRE POUR VOTRE FAMILLE";
    $paragraphBox1="Macir Vie assure votre emprunt en cas de décès, d’invalidité absolue et définitive et vous évite la
    transmission de vos dettes à votre famille.";
    $titreBox2="SOUSCRIPTION FACILE ET RAPIDE";
    $paragraphBox2="Afin de vous faire gagner du temps, Macir vie vous assure une souscription simple et rapide à votre
    assurance crédit emprunteur.";



    if ($creditParticuliers!=null) {
    $paragraph1 = $creditParticuliers->paragraph1;
    $titre2 = $creditParticuliers->titre2;
    $paragraph2 = $creditParticuliers->paragraph2;
    $titre3 = $creditParticuliers->titre3;
    $titreBox1 = $creditParticuliers->titreBox1;
    $paragraphBox1 = $creditParticuliers->paragraphBox1;
    $titreBox2 = $creditParticuliers->titreBox2;
    $paragraphBox2 = $creditParticuliers->paragraphBox2;

    }
    @endphp

    <div class="container p-5">
        <h1>Modifier la page MyM Crédit Particuliers</h1>
        <form action="/admin/credit_particuliers" method="POST" enctype="multipart/form-data" class="mt-5">
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
                    placeholder="Titre 1..." required>
            </div>
            <div class="form-group mt-2">
                <label for="paragraph2">Paragraphe 1</label>
                <textarea class="form-control" id="paragraph2" rows="3" name="paragraph2" placeholder="Paragraphe 2..."
                    required>{{$paragraph2}}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="image">Image </label>
                <input type="file" class="form-control form-control-file " id="image" name="image">
            </div>
            <div class="form-group mt-2">
                <label for="titre3">Titre 3</label>
                <input type="text" class="form-control" id="titre3" name="titre3" value="{{$titre3}}"
                    placeholder="Titre 3..." required>
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
                <button class="btn btn-primary ml-5"><a href="//fr/admin/menu"
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
