<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Espace professionnels admin</title>
</head>

<body>
    <div class="container p-5">
        <h1>Modifier les produits de la page professionnels</h1>
        <form action="/admin/professionnels/add" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            <h3>Ajouter un produit professionnel</h3>
            <div class="form-group mt-2 ">
                <div class="form-group mt-2">
                    <label for="image">Image produit</label>
                    <input type="file" class="form-control form-control-file" required id="image" name="image">
                </div>

                <div class="form-group mt-2">
                    <label for="lien">Lien vers le page produit</label>
                    <input type="text" class="form-control" id="lien" name="lien" placeholder="Lien..." required>
                </div>
                <input type="submit" value="Ajouter" class="btn btn-primary" />
            </div>
        </form>

        <h3>Liste des produits professionnels</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Produit</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                <tr>
                    <td>
                        <img style="height: 150px" src="{{ asset('storage/images/'.$produit->image)}}"
                            alt="Third slide">
                    </td>
                    <td>
                        <div style="height: 150px;display: flex;justify-content: center;align-items: center">

                            <form action="/admin/produits/professionnels/delete/{{$produit->id}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-danger mr-5" id="" value="Supprimer">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div>
            <button class="btn btn-primary"> <a href="/fr/admin/menu" style="text-decoration: none;color:#fff;">Retour
                    menu admin</a></button>
        </div>

    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous">
    </script>
</body>

</html>