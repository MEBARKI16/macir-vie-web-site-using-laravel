<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>MyM Group admin</title>
</head>

<body>
    @php
    $image_big="";
    $image_medium="";
    $image_small="";
    $image_mobile="";
    $titre_image="";
    $paragraph1="Parce que vous êtes soucieux du bien-être de vos collaborateurs au sein de votre entreprise, Macir Vie
    met à votre disposition une assurance complète destinée à couvrir les salariés des entreprises ainsi que leurs
    familles durant leur quotidien";
    $titre1="Pourquoi souscrire ?";
    $paragraph2="Votre responsabilité en tant qu’employeur est de vous soucier du bien être de vos salariés et de vos
    collaborateurs. Pour vous aider à la garantir, nous vous proposons une assurance complète qui regroupe 3 garanties
    principales :";
    $sous_titre1="La Prévoyance";
    $paragraph3="Macir Vie garantit le versement d’une rente au bénéficiaire en cas de décès, d’invalidité ou
    d’incapacité de l’assuré, quelle qu’en soit la cause";

    $sous_titre2="La Complémentaire Santé";
    $paragraph4="Macir Vie prend en charge et rembourse les dépenses de santé de vos collaborateurs. Pour de simples
    consultations médicales, radiologie, analyses médicales, achats de médicaments ou pour des actes chirurgicaux";

    $sous_titre3="Les prestations sociales";
    $paragraph5="En plus de les accompagner dans les moments difficiles, Macir Vie offre à vos collaborateurs des primes
    pour célébrer les heureux moments de leur vie tels que le mariage, la naissance ou encore la circoncision de leurs
    enfants";

    $titre2="3 bonnes raisons de choisir l’Assurance Groupe de Macir Vie";
    $image="";
    $titreBox1="UNE GESTION 100 % EN LIGNE";
    $paragraphBox1="Afin de vous faciliter la gestion de vos dossiers / déclarations de sinistres, Macir Vie a développé
    E-santé / E-adhérent, 2 plateformes 100% web et totalement gratuite pour les clients bénéficiant d’une Assurance
    Groupe Macir Vie";
    $titreBox2="FIDÉLISEZ ET MOTIVEZ VOS EMPLOYÉS";
    $paragraphBox2="Pour vous aider à fidéliser et motiver vos employés et collaborateurs tout au long de leurs
    carrières, l’Assurance Groupe de Macir Vie vous promet une évidente satisfaction au sein de votre équipe";
    $titreBox3="PRISE EN CHARGE RAPIDE";
    $paragraphBox3="Macir vie vous assure une prise en charge rapide de vos déclarations de sinistres, et vous promet
    des interventions qui respectent les délais prévus dans le contrat";



    if ($assuranceGroup!=null) {
    $paragraph1 = $assuranceGroup->paragraph1;
    $paragraph2 = $assuranceGroup->paragraph2;
    $paragraph3 = $assuranceGroup->paragraph3;
    $paragraph4 = $assuranceGroup->paragraph4;
    $paragraph5 = $assuranceGroup->paragraph5;
    $titre1 = $assuranceGroup->titre1;
    $sous_titre1 = $assuranceGroup->sous_titre1;
    $sous_titre2 = $assuranceGroup->sous_titre2;
    $sous_titre3 = $assuranceGroup->sous_titre3;
    $titre2 = $assuranceGroup->titre2;
    $titreBox1 = $assuranceGroup->titreBox1;
    $paragraphBox1 = $assuranceGroup->paragraphBox1;
    $titreBox2 = $assuranceGroup->titreBox2;
    $paragraphBox2 = $assuranceGroup->paragraphBox2;
    $titreBox3 = $assuranceGroup->titreBox3;
    $paragraphBox3 = $assuranceGroup->paragraphBox3;

    }
    @endphp

    <div class="container p-5">
        <h1>Modifier la page MyM Groupe Professionnels</h1>
        <form action="/admin/assurance_groupe" method="POST" enctype="multipart/form-data" class="mt-5">
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
                <label for="paragraph2">Paragraphe 2</label>
                <textarea class="form-control" id="paragraph2" rows="3" name="paragraph2" placeholder="Paragraphe 2..."
                    required>{{$paragraph2}}</textarea>
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
                <label for="paragraph3">Paragraphe 3</label>
                <textarea class="form-control" id="paragraph3" rows="3" name="paragraph3" placeholder="Paragraphe 3..."
                    required>{{$paragraph3}}</textarea>
            </div>

            <div class="form-group mt-2">
                <label for="sous_titre2">Sous titre 2</label>
                <input type="text" class="form-control" id="sous_titre2" name="sous_titre2" value="{{$sous_titre2}}"
                    placeholder="Sous titre 2..." required>
            </div>

            <div class="form-group mt-2">
                <label for="paragraph4">Paragraphe 4</label>
                <textarea class="form-control" id="paragraph4" rows="3" name="paragraph4" placeholder="Paragraphe 4..."
                    required>{{$paragraph4}}</textarea>
            </div>

            <div class="form-group mt-2">
                <label for="sous_titre3">Sous titre 3</label>
                <input type="text" class="form-control" id="sous_titre3" name="sous_titre3" value="{{$sous_titre3}}"
                    placeholder="Sous titre 3..." required>
            </div>
            <div class="form-group mt-2">
                <label for="paragraph5">Paragraphe 5</label>
                <textarea class="form-control" id="paragraph5" rows="3" name="paragraph5" placeholder="Paragraphe 5..."
                    required>{{$paragraph5}}</textarea>
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
