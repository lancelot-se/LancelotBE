<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="script.js"></script>
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2  pt-5" style="padding-left: 5rem;">
                <img src="pics\logo lancelot.svg"  alt="logo lancelot">
            </div>
        </div>
        <div class="row" style="padding-top: 7rem;">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="container-fluid" style="border: 4px solid #516ed74d; border-radius: 15px">
                    <div class="row p-4">
                        <div class="col-12 col-md-6">
                            <img src="pics\image_login.png" class= "img-fluid" alt="image_login">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="display-6" style="font-family: 'DM Sans';font-weight: 550; text-align: center; padding-top: 5rem">Hello Again!</h1>
                                    </div>
                                    <div class="col-12 pt-5" >
                                        <form method="POST" action="{{route('login')}}" >
                                            @csrf
                                            <input type="email" name="email" class=" email_login form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="Enter email" style="height: 4.438rem; font-family:'DM Sans'; font-size:1.25rem; border:none;">
                                            <div class="input-group shadow  bg-white rounded ">
                                                <input name="password" class="input form-control email_login col-12" id="password" type="password"  placeholder="Password" style="height: 4.438rem; font-family:'DM Sans'; font-size:1.25rem; border:none; ">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" onclick="password_show_hide();" style="height: 4.438rem; background-color:transparent; border:none">
                                                      <i class="fas fa-eye" id="show_eye"></i>
                                                      <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row" style="padding-top: 3rem;">
                                                <div class="col-12">
                                                    <button type="submit" id="signinbtn" class="btn btn-primary btn-lg btn-block" style="background-color: #516ED7; padding:1rem; font-family: 'DM Sans'; font-weight: 500; font-size:1.25rem">
                                                        Sign In
                                                    </button>
                                                    <script>
                                                        const signinButton = document.querySelector('.signinbtn');
                                                        signinButton.addEventListener('mouseover', function () {
                                                            this.style.backgroundColor = '#ffffff'; // Change color on hover
                                                            this.style.color = '#516ed7'
                                                        });
                                                        signinButton.addEventListener('mouseout', function () {
                                                            this.style.backgroundColor = '#516ed7'; // Change color back on mouseout
                                                            this.style.color = '#ffffff'
                                                        });
            
                                                        signinButton.addEventListener('click', handleRegister);
                                                    </script>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row" style="padding-top: 1em;">
                                <div class="col-12">
                                    <h2 class="text-center" style="font-family: 'DM Sans'; font-size:1.5rem">
                                        Don’t have an account? <a href="/register" style="text-decoration: underline; color:#516ed7;" type="submit">Register</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <script src="{!! asset('/js/script.js') !!}"></script>
</body>
</html>