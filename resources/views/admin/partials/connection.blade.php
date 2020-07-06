 <!-- Sing in  Form -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connectez vous</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/form/css/style.css">
</head>
<body>

<div class="main">
 <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="/form/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="/action/inscription" class="signup-image-link">Creer  un compte</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Connectez vous</h2>
                        <form method="POST" class="register-form" id="login-form">
                            @csrf()
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Votre Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="mdp" id="your_pass" placeholder="Votre mot de passe"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Se connecter"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

</main>
        <!-- JS -->
    <script src="/form/vendor/jquery/jquery.min.js"></script>
    <script src="/form/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
