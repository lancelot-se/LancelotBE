<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
        <div class="row" style="padding-top: 3rem;">
            <div class="col-3">
            </div>
            <div class="col-12" style="background-color: none; align-content: center;">
                <h2 class="display-6;" style="font-family: 'DM Sans';font-weight: 500; padding-left: 55rem;">Get working with Lancelot.</h2>
            </div>
        </div>
        <div class="row" style="padding-top: 1rem;">
            <div class="col-3"></div>
            <div class="col-6" style="background-color: none; padding-left: 1.2rem; margin-left: 1rem;">
                <div class="container-fluid" style="border: 4px solid #516ed74d; border-radius: 15px; margin-bottom: 4rem;">
                    <div class="row p-4">
                        <div class="col-12 ">
                            <form method="POST" action="{{route('register')}}"> 
                                @if ($errors->any())
                                {{$errors->first()}}
                               @endif
                                @csrf
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1.5rem;">Full Name</h3>
                                            </div>
                                            <div class="col-12 pt-3">
                                                <input type="text" name="name" class=" full_name form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="Full Name" style="height: 3.5rem; font-family:'DM Sans'; font-size:1rem;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1.5rem;">Date of Birth</h3>
                                            </div>
                                            <div class="col-4 pt-3">
                                                <!-- <input type="text" class=" birth_day form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="DD" style="height: 3.5rem; font-family:'DM Sans'; font-size:1rem;"> -->
                                                <input type="date" name="dob" class=" birth_day form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="DD/MM/YYYY" style="height: 3.5rem;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 1rem; font-size: 1.5rem;">Address</h3>
                                            </div>
                                            <div class="col-12 pt-3">
                                                <input type="text" name ="address"class=" address form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="Address" style="height: 7rem; font-family:'DM Sans'; font-size:1rem; vertical-align: top;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1.5rem;">Email</h3>
                                            </div>
                                            <div class="col-12 pt-3">
                                                <input type="text" name="email" class=" full_name form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="Email" style="height: 3.5rem; font-family:'DM Sans'; font-size:1rem;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1.5rem;">Phone Number</h3>
                                            </div>
                                            <div class="col-12 pt-3">
                                                <input type="text" name="phone_number" class=" full_name form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="08123456789" style="height: 3.5rem; font-family:'DM Sans'; font-size:1rem;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1.5rem;">Password</h3>
                                            </div>
                                            <div class="col-12 pt-3" >
                                                    <div class="input-group shadow  bg-white rounded ">
                                                        <input name="password" class="input form-control email_login col-12" id="password" type="password"  placeholder="********" style="height: 3.5rem; font-family:'DM Sans'; font-size:1rem; border:none ">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" onclick="password_show_hide();" style="height: 3.5rem; background-color:transparent; border:none">
                                                            <i class="fas fa-eye" id="show_eye"></i>
                                                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="col-12">
                                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 2rem; font-size: 1.5rem;">Re-enter your password</h3>
                                            </div>
                                            <div class="col-12 pt-3" >
                                                    <div class="input-group shadow  bg-white rounded ">
                                                        <input name="password_confirmation" class="input form-control email_login col-12" id="password" type="password"  placeholder="********" style="height: 3.5rem; font-family:'DM Sans'; font-size:1rem; border:none ">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" onclick="password_show_hide2();" style="height: 3.5rem; background-color:transparent; border:none">
                                                            <i class="fas fa-eye" id="show_eye"></i>
                                                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 pt-3">
                                        <button class="register-btn" style="margin-left: 23.6rem; margin-top: 3rem; background-color: #516ed7; color: #ffffff; height: 3.5rem; width: 10rem; font-family: 'DM Sans'; border-color: #516ed7; border-style: solid; border-radius: 5px; transition: 0.3s; align-content: center;" type="submit">Register</button>
                                        <script>
                                            const registerButton = document.querySelector('.register-btn');
                                            registerButton.addEventListener('mouseover', function () {
                                                this.style.backgroundColor = '#ffffff'; // Change color on hover
                                                this.style.color = '#516ed7'
                                            });
                                            registerButton.addEventListener('mouseout', function () {
                                                this.style.backgroundColor = '#516ed7'; // Change color back on mouseout
                                                this.style.color = '#ffffff'
                                            });

                                            function handleRegister() {
                                                alert('Registration successful!');
                                                // You can add more functionality here, like redirecting to another page
                                            }

                                            registerButton.addEventListener('click', handleRegister);
                                        </script>
                                    </div>
                            </form>
                            <div class="col-12 pt-1">
                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1rem; margin-left: 21.5rem;">
                                    Have an account?
                                    <a href="/login" style="text-decoration: underline; color:#516ed7;">Sign in here</a>
                                </h3>
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