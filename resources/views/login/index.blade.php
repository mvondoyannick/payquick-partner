
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
    <body class="text-center">
        <form class="form-signin" id="form">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Identifiez-vous</h1>
            <label for="inputEmail" class="sr-only">Adresse Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Adresse Email" required autofocus>
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" id="send">Connexion</button>
            <p class="mt-5 mb-3 text-muted">&copy; PAYQUICK - 2017-2019</p>
        </form>
    </body>
    <script>
        $(document).ready(function(){
            console.log("Boonjour");

            //on recupere le formulaire
            $("send").preventDefault;

            //envoi des données du formulaire
            $("form").submit(function(arg){
               arg.preventDefault(); //on bloque tout
                var form = $(this);
                $.ajax({
                    type: form.attr('method'),
                    url: "https://bca9a868.ngrok.io/api/v1/internet/test/",
                    data: {
                        login:   $("#inputEmail").val(),
                        password:      $("#inputPassword").val()
                    }
                }).done(function(data){
                    if (data == true){
                        window.location = '{{url("/httpd")}}';
                    }
                }).fail(function(){
                    console.log("Une erreut est survenue");
                })
            });
        })
    </script>
</html>
