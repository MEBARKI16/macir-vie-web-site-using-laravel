<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Espace particuliers admin</title>
</head>

<body>
    @php
    $image_big="";
    $image_medium="";
    $image_small="";
    $image_mobile="";
    $titre1="Espace particuliers";
    $paragraph1="Macir Vie a développé des produits et des services sur-mesure, afin de répondre au mieux à vos besoins
    et ceux de vos proches en matière d'assurance de personnes";

    if ($particuliers!=null) {
    $titre1 = $particuliers->titre1;
    $paragraph1 = $particuliers->paragraph1;

    }
    @endphp
    <div class="container p-5">
        <h1>Modifier la page Particuliers</h1>
        <form action="/admin/particuliers" method="POST" enctype="multipart/form-data" class="mt-5">
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
                <label for="produit1">Produit 1</label>
                <input type="file" class="form-control form-control-file " id="produit1" name="produit1">
            </div>

            <div class="form-group mt-2">
                <label for="produit2">Produit 2</label>
                <input type="file" class="form-control form-control-file " id="produit2" name="produit2">
            </div>

            <div class="form-group mt-2">
                <label for="produit3">Produit 3</label>
                <input type="file" class="form-control form-control-file " id="produit3" name="produit3">
            </div>

            <div class="form-group mt-2">
                <label for="produit4">Produit 4</label>
                <input type="file" class="form-control form-control-file " id="produit4" name="produit4">
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