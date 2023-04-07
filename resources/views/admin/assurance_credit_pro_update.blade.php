<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>MyM crédit pro</title>
</head>

<body>
    @php
    $image_big="";
    $image_medium="";
    $image_small="";
    $image_mobile="";

    $titre_image="";
    $paragraph1="L’assurance crédit emprunteur est une assurance obligatoire et indispensable lors d’un prêt bancaire
    pour sécuriser et garantir votre remboursement, notamment les crédits immobiliers, d’investissement ou
    d’exploitation. En cas de décès ou d’invalidité, l’avenir de votre entreprise reste protégé avec Macir Vie qui
    s’occupe de rembourser votre crédit auprès de votre banque";
    $titre2="Pourquoi souscrire ?";
    $paragraph2="Que vous soyez chef d’entreprise, libéral, commerçant ou même artisan, une assurance crédit emprunteur
    vous sera demandée lors de la contraction d’un crédit bancaire qui rentre dans le cadre de votre activité
    professionnelle (Immobilier, d’investissement ou d’exploitation). Celle-ci pourra prévoir le remboursement de vos
    prêts si vous n’êtes plus en mesure d’assumer votre crédit en cas de décès ou d’invalidité. Cette assurance peut
    être aussi souscrite lors d’un prêt que vous aurez accordé à vos collaborateurs";
    $image="";
    $titre3="Les avantages de l’assurance-crédit emprunteur de Macir Vie";
    $titreBox1="SOUSCRIPTION FACILE ET RAPIDE";
    $paragraphBox1="Afin de vous faire gagner du temps, Macir vie vous assure une souscription simple et rapide à votre
    assurance crédit emprunteur";
    $titreBox2="VOUS ÉVITE LA TRANSMISSION DE VOS DETTES";
    $paragraphBox2="Macir Vie assure votre emprunt en cas de décès, d’invalidité absolue et définitive et vous évite la
    transmission de vos dettes à vos proches";



    if ($creditPro!=null) {
    $paragraph1 = $creditPro->paragraph1;
    $titre2 = $creditPro->titre2;
    $paragraph2 = $creditPro->paragraph2;
    $titre3 = $creditPro->titre3;
    $titreBox1 = $creditPro->titreBox1;
    $paragraphBox1 = $creditPro->paragraphBox1;
    $titreBox2 = $creditPro->titreBox2;
    $paragraphBox2 = $creditPro->paragraphBox2;

    }
    @endphp

    <div class="container p-5">
        <h1>Modifier la page MyM Crédit Professionnels</h1>
        <form action="/admin/credit_pro" method="POST" enctype="multipart/form-data" class="mt-5">
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
