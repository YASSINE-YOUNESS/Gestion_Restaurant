
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>



    <!-- Inclure Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            margin-top: 50px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            border-radius: 15px 15px 0 0;
        }

        .card-body {
            padding: 30px;
        }

        .form-control {
            border-radius: 0px;
        }

        .btn-primary {
            background-color: #343a40;
            border: none;
            width: 300px;

        }

        .btn-primary:hover {
            background-color: #1d2124;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #868e96;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Inscription</h4>
                </div>





                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <!-- ======= Nom  =========-->
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom :</label>

                            <input id="nom" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>



                        <!-- ======= Email  =========-->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>








                        <!-- ======= Pass  =========-->
                        <div class="mb-3">
                            <label for="motDePasse" class="form-label">Mot de passe :</label>







                            <div class="input-group">
                                 <input id="motDePasse" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                <div class="input-group-append">
                                        <span class="input-group-text" id="togglePassword">
                                            <!-- Ajoutez ici l'icône que vous souhaitez, par exemple un œil -->



                                            <i class="fa-solid fa-eye">afficher</i>
                                        </span>
                                </div>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const passwordInput = document.getElementById('motDePasse');
                                    const passwordInputConfirm = document.getElementById('confirmerMotDePasse');
                                    const togglePasswordButton = document.getElementById('togglePassword');

                                    togglePasswordButton.addEventListener('click', function () {
                                        // Basculer entre le type de champ "password" et "text"
                                        if (passwordInput.type === 'password') {
                                            passwordInputConfirm.type = 'text';
                                            passwordInput.type = 'text';
                                        } else {
                                            passwordInput.type = 'password';
                                            passwordInputConfirm.type = 'password';
                                        }
                                    });
                                });
                            </script>










                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>





                        <!-- ======= Confirm Pass  =========-->
                        <div class="mb-3">
                            <label for="confirmerMotDePasse" class="form-label">Confirmer le mot de passe :</label>
                             <input id="confirmerMotDePasse" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>








                        <!-- ======= Button Register  =========-->

                        <div class="text-center">
                                 <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                        </div>

                    </form>
                    <p class="footer">Si vous avez déjà un compte ? <a href="/login">Connecter Maintenant</a>.</p>



                <!-- Inclure Bootstrap JS et Popper.js (optionnel) -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



