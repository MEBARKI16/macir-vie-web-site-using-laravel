<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>la saison des artistes | Macir Vie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/body-concours.css')}}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header p-0 d-flex justify-content-center">
                        <img width="67%" src="{{asset('assets/img/concours-banner-2.jpg')}}">
                    </div>
                    <div class="mt-3 hide-on-sucess">
                        <p class="m-0 p-0 text-center">Pour participer au jeu, veuillez introduire les informations suivantes:</p>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div id="form-container" class="col-lg-8 d-flex justify-content-center align-items-center">
                                    <form id="participateForm" enctype="multipart/form-data" class="hide-on-sucess justify-content-center align-items-center" action="{{ route('save-concours') }}" method="post">
                                        {{ csrf_field() }}
                                        <div id="hide-after-submit">
                                            <div class="form-group">
                                                <label for="nom">Nom: </label>
                                                <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="Nom" required>
                                                @error('nom')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="prenom">Prénom: </label>
                                                <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" id="prenom" placeholder="Prénom" required>
                                                @error('prenom')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email: </label>
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required>
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="tel">Numero de telephone: </label>
                                                <input type="text" pattern="0[5-7][0-9]{8}" class="form-control @error('tel') is-invalid @enderror" name="tel" id="tel" placeholder="Numero de telephone" required>
                                                @error('tel')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group custom-file">
                                                <label class="custom-file-label" for="piceJointe">Introduire la piece jointe: </label>
                                                <input type="file" name="file" class="custom-file-input @error('file') is-invalid @enderror" id="piceJointe" required>
                                                @error('file')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="news-letter-check" required>
                                                <label id="check-text" class="form-check-label" for="news-letter-check">
                                                    J'atteste avoir lu et accepté <a href="{{url('/fr/condition-concours')}}" target="_blank">les conditions générale de pariticipation</a>
                                                </label>
                                            </div>
                                            <div class="form-group d-flex justify-content-center align-items-center">
                                                <button type="submit" class="btn btn-success">Je participe!</button>
                                            </div>
                                        </div>
                                        <div id="progressGroupe" class="d-none form-group">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $(document).ready(function() {
                $('#participateForm').ajaxForm({
                    beforeSend: function() {
                        var percentage = '0';

                    },
                    uploadProgress: function(event, position, total, percentComplete) {
                        $('button').prop('disabled', true);
                        // $('#hide-after-submit').addClass('d-none');
                        $('#progressGroupe').removeClass('d-none');
                        $('.progress .progress-bar').css("visibility", "visible");
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage + '%', function() {
                            return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function(xhr) {
                        console.log('File has uploaded');
                        $('.hide-on-sucess').addClass('d-none');
                        $('#form-container').append('<div class="d-felx flex-column justify-content-center align-items-center"><div class="success-animation"><svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg></div><div><p class="text-center">Votre participation a été enregistrée avec succès.</p></div></div>');
                        }
                    });
                });
        });
    </script>
</body>



</html>
