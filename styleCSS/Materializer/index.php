<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta charset="UTF-8">

    <title>Materializer</title>

    <style>
        .card-image img{
            transition: transform 0.6s;
        }
        .card-image:hover{
            transform: scale(1.1);
           z-index: 1000;
        }
    </style>
</head>

<body>

    <?php require_once "header.php"; ?>

    <h1>Home</h1>
    <main>
        <div class="row">

            <div class="col s12 m3">
                <div class="card">
                    <span class="card-title">Card</span>

                    <div class="card-image">
                        <img src="Goku.webp" class="responsive-img">

                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>


            <div class="col s12 m3">
                <div class="card">
                    <span class="card-title">Card</span>

                    <div class="card-image">
                        <img src="Goku.webp" class="responsive-img">

                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>


            <div class="col s12 m3">
                <div class="card">
                    <span class="card-title">Card</span>

                    <div class="card-image">
                        <img src="Goku.webp" class="responsive-img">

                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>


            <div class="col s12 m3">
                <div class="card">
                    <span class="card-title">Card</span>

                    <div class="card-image">
                        <img src="Goku.webp" class="responsive-img">

                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>