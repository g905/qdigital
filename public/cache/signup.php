<?php class_exists('Template') or exit; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/assets/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/lib/slick/slick.css"/>
    </head>
    <body>
        <div class="bg-dark py-2">
    <div class="container">
        <div class="d-flex flex-col flex-lg-row justify-content-between">
            <div class="logo">
                <img src="assets/logo-q.png" alt="logo" style="max-height: 80px">
            </div>
            <div class="d-flex flex-col justify-content-center">
                <nav class="navbar navbar-dark">
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">
                                howto compile php here

                            </a>
                        </li>
                        <li class="nav-item mx-2"><a class="nav-link" href="/">main</a></li>
                        <li class="nav-item mx-2"><a class="nav-link" href="/about">about</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
        <main>
            
<div class="container">
    <h1>Signup</h1>
    <p>This is a signup page</p>
</div>

<div class="container">

    <div class="signup-form-container">
        <form class="signup-form" action="" method="post" >
            <div class="form-group mb-3">
                <label for="name">name</label>
                <input type="text" name="name" id="name" placeholder="name">
            </div>
            <div class="form-group mb-3">
                <label for="email">email</label>
                <input type="email" name="email" id="email" placeholder="email">
            </div>
            <div class="form-group mb-3">
                <label for="pass">pass</label>
                <input type="password" name="pass" id="pass" placeholder="pass">
            </div>
            <div class="form-group">
                <button class="btn btn-warning" type="submit">signup</button>
            </div>
        </form>
    </div>

</div>


        </main>
        <footer class="bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="d-flex justify-content-center">
            footer
        </div>
    </div>
</footer>
        <div id='loader' style='display: none; position: fixed; top:0; left:0;right:0; min-height: 100%; text-align: center; opacity: 0.5; background: black;'>
    <div class="transform  rotateY">
        <div style="position: absolute; height: 100%; top: 0; bottom:0; left: 0; right:0; font-size: 8rem; font-weight: 800">loading</div>
    </div>
</div>

<style>
    #loader {
        position: relative;
        display: inline-block;
        height: 120px;
        margin: 0 2em 2em 0;
        opacity: .7;
        border-radius: 5px;
        background: #E4E1E4;
        -webkit-perspective: 400px;
        perspective: 400px;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .transform {
        position: fixed;
        width: 100%;
        top: 40%;
        -webkit-animation: notransform 3s infinite;
        animation: notransform 3s infinite;
        transform-origin: center;
    }

    .rotateY {
        -webkit-transform: rotateY(360deg);
        -ms-transform: rotateY(360deg);
        transform: rotateY(360deg);
        animation-delay: 0;
    }
    @-webkit-keyframes notransform {
        100% {transform: none;}
    }
    @keyframes notransform {
        100% {transform: none;}
    }
</style>
        <script src="/assets/lib/jquery/jquery-3.6.1.min.js"></script>
        <script src="/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/lib/slick/slick.min.js"></script>
        <script src="assets/js/app.js"></script>

        
<script>
    let form = $(".signup-form");
    form.on('submit', (e) => {
        e.preventDefault();
        $.ajax({
            url: '/signup',
            type: 'post',
            data: form.serialize(),
            success: (data) => {
                if (data.length > 0) {
                    console.log(data);
                    return false;
                }
                location.href = "/login";
            },
            error: (err) => {
                console.log(err);
            },
            beforeSend: function () {
                $('#loader').show();
            },
            complete: function () {
                $('#loader').hide();
            }
        });
    });
</script>


    </body>
</html>






