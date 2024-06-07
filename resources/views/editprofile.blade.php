<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/7563b17235.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
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
            <div class="col-2 pt-3">
                <a href="/homepage">
                    <img src="{{ asset('pics/logo lancelot.svg') }}" alt="logo lancelot" style="width: 150px; height: 50px; margin-left: 3.5rem;">
                </a>
              
            </div>
            <div class="col-6 pt-3">
                <input class="shadow p-3 mb-4 bg-white rounded col-12" type="text" placeholder="Search jobs" style="width: 40rem; height: 2.5rem; margin-top: 0.4rem; padding-left: 1rem; border-radius: 7px; border-style: none; font-family: 'DM Sans';">
                <!-- <i class="fa-solid fa-magnifying-glass" style="background-color: aqua; z-index: -1; margin-left: -2rem;"></i> -->
            </div>
            <div class="col-1" id="findajob" style="padding-top: 1.9rem;">
                <i class="fa-solid fa-briefcase" style="font-size: 15px;"></i>
                <a href="" style="color: black; font-family: 'DM Sans'; font-size: 15px; text-decoration: none;">Find a job</a>
            </div>
            <div class="col-2" id="readarticles" style="padding-top: 1.9rem">
                <i class="fa-solid fa-newspaper" style="font-size: 15px;"></i>
                <a href="" style="color: black; font-family: 'DM Sans'; font-size: 15px; text-decoration: none;">Read Articles</a>
            </div>
            <div class="col-1 pt-3">
                <img src="{{ asset('pics/profile_freelancer.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-11" style="background-color: #516ed7d8; height: 20rem; margin-top: 2rem; margin-left: 2.7rem; width: 84rem; ">
            </div>
        </div>
        <div class="row" style="background-color: none;">
            <div class="col-3">
                <div class="profile-contactinfo" style="margin-top: 3rem; margin-bottom: 2rem; margin-left: 2rem;">
                    <div class="contact-info" style="border-style: solid; height: 20rem; border-radius: 15px; border-color: rgb(179, 179, 179);">
                        <p class="phonenum" style="margin-left: 3.5rem;margin-top: 1.5rem; font-family: 'DM Sans';"><i class="fas fa-phone fa-flip-horizontal" style="margin-right: 1rem;"></i> {{auth()->user()->phone_number}}</p>
                
                        <p class="freelanceremail" style="margin-left: 3.5rem;margin-top: 1rem; font-family: 'DM Sans';"><i class="fas fa-envelope" style="margin-right: 1rem;"></i>{{auth()->user()->email}}</p>
                        <button class="btn btn-primary btn-block" style="background-color: #516ed7d8; width:10rem; border-radius: 50px; margin-left: 4.2rem; margin-top: 1rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); border-color: #516ed7d8;">PORTFOLIO</button>
                        <div id="ratingnum" class="col-4" style="background-color: none; margin-left: 2.3rem;">
                            <h2 style="font-family: 'DM Sans'; width: 4rem; font-size: 47px; margin-left: 0rem; margin-top: 2rem; font-weight: 300;">5.0</h2>
                        </div>
                        <div  id="ratingstar" class="col-6" style="background-color: none; margin-top: -4rem; margin-left: 7rem; font-family: 'DM Sans';">
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                            <p>23 reviews</p>
                        </div>
                    </div>
                </div>

                <div class="col-11" style="background-color: none; height: 25rem; width: 19rem; padding-top: 0.1rem; padding-bottom: 1rem; border-style: solid; border-radius: 15px; margin-left: 1.8rem; border-color: rgb(179, 179, 179);">
                    <div class="profile-settings" style="margin-top: 2rem; margin-bottom: 3rem; margin-left: 1rem; background-color: none; width: 15rem; font-family: 'DM Sans';">
                        <ul class="list-group">
                            <a href="favorites.html"><button class="btn btn-primary btn-block" style="border-style: solid; background: none; color: black; border-color: rgb(179, 179, 179); text-align: left; text-decoration: none; margin-bottom: 0.5rem;"><i class="fa-regular fa-heart" style="margin-left: 1rem; margin-right:1rem;"></i>Favorites<i class="fa-solid fa-chevron-right" style="margin-left: 4.5rem;"></i></button></a>
                            <a href="ongoingjobs.html"><button class="btn btn-primary btn-block" style="border-style: solid; background: none; color: black; border-color: rgb(179, 179, 179); text-align: left; margin-bottom: 0.5rem;"><i class="fa-solid fa-briefcase" style="margin-left: 1rem; margin-right:1rem;"></i>Ongoing Jobs<i class="fa-solid fa-chevron-right" style="margin-left: 2.3rem;"></i></button></a>
                            <a href="workhistory.html"><button class="btn btn-primary btn-block" style="border-style: solid; background: none; color: black; border-color: rgb(179, 179, 179); text-align: left;"><i class="fa-solid fa-book-bookmark" style="margin-left: 1rem; margin-right:1rem;"></i>Work History<i class="fa-solid fa-chevron-right" style="margin-left: 2.8rem;"></i></button></a>
                        </ul>
                        <h3 style="background-color: none; font-size: 22px; text-align: center; margin-top: 1.5rem; font-weight: 600;">Account Settings</h3>
                        <ul class="list-group">
                            <a href="/editprofile"><button class="btn btn-primary btn-block" style="border-style: solid; background: none; color: black; border-color: rgb(179, 179, 179); text-align: left; margin-top: 1rem; margin-bottom: 0.5rem;"><i class="fa-solid fa-pencil" style="margin-left: 1rem; margin-right:1rem;"></i>Edit Profile<i class="fa-solid fa-chevron-right" style="margin-left: 3.7rem;"></i></button></a>
                            <a href="/settings"><button class="btn btn-primary btn-block" style="border-style: solid; background: none; color: black; border-color: rgb(179, 179, 179); text-align: left; margin-bottom: 0.5rem;"><i class="fa-solid fa-gear" style="margin-left: 1rem; margin-right:1rem;"></i>Settings<i class="fa-solid fa-chevron-right" style="margin-left: 4.8rem;"></i></button></a>
                           
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')"><button type="submit" class="btn btn-primary btn-block" style="border-style: solid; background: rgba(251, 111, 111, 0.712); color: black; border-color: rgb(179, 179, 179); text-align: left; padding-left: 3.8rem;">Logout<i class="fa-solid fa-arrow-right-from-bracket" style="margin-left: 5.3rem;"></i></button></a>
                                
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9" style="margin-top: -4rem;">
                <div class="row" style="background-color: none; height: 25rem;">
                    <form action="{{ route('user.update', ['id' => $user->id]) }}"  method="POST" style="background-color: none;">
                        @csrf
                        <div class="row" style="background-color: none; margin-top: 1rem;">
                            <div class="dot" style="border-style: none; width: 7rem; height: 7rem; border-radius: 100px; background-color: rgb(179, 179, 179); margin-top: 0rem; margin-left: 30rem; cursor: pointer;"></div>
                        </div>
                        <div class="row" style="background-color: none; margin-top: 2rem; width: 45rem; margin-left: 12rem;">
                            <div class="col-11">
                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1.2rem; color: grey">Full Name</h3>
                            </div>
                            <div class="col-11 pt-3" style="margin-top: -1rem;">
                                <input type="text" name="name"class=" email_login form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="{{$user->name}}" style="height: 2.5rem; font-family:'DM Sans'; font-size: 0.85rem; border:none;">
                            </div>
                        </div>
                        <div class="row" style="background-color: none; margin-top: -0.5rem; width: 45rem; margin-left: 12rem;">
                            <div class="col-11">
                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1.2rem; color: grey">Email</h3>
                            </div>
                            <div class="col-11 pt-3" style="margin-top: -1rem;">
                                <input type="email" name="email" class=" email_login form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="{{$user->email}}" style="height: 2.5rem; font-family:'DM Sans'; font-size: 0.85rem; border:none;">
                            </div>
                        </div>
                        <div class="row" style="background-color: none; margin-top: -0.5rem; width: 45rem; margin-left: 12rem;">
                            <div class="col-11">
                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1.2rem; color: grey">Phone Number</h3>
                            </div>
                            <div class="col-11 pt-3" style="margin-top: -1rem;">
                                <input type="text" name="phone_number"class=" email_login form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="{{$user->phone_number}}" style="height: 2.5rem; font-family:'DM Sans'; font-size: 0.85rem; border:none;">
                            </div>
                        </div>
                        <div class="row" style="background-color: none; margin-top: -0.5rem; width: 45rem; margin-left: 12rem;">
                            <div class="col-11">
                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1.2rem; color: grey">Address</h3>
                            </div>
                            <div class="col-11 pt-3" style="margin-top: -1rem;">
                                <input type="text" name="address" class=" email_login form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="{{$user->address}}" style="height: 2.5rem; font-family:'DM Sans'; font-size: 0.85rem; border:none;">
                            </div>
                        </div>
                        <div class="row" style="background-color: none; margin-top: -0.5rem; width: 45rem; margin-left: 12rem;">
                            <div class="col-11">
                                <h3 class="display-6" style="font-family: 'DM Sans';font-weight: 500; padding-top: 0.5rem; font-size: 1.2rem; color: grey">Password</h3>
                            </div>
                            <div class="col-11 pt-3" style="margin-top: -1rem;">
                                <input type="password" name="password" class=" email_login form-control shadow p-3 mb-4 bg-white rounded col-12" placeholder="**********" style="height: 2.5rem; font-family:'DM Sans'; font-size: 0.85rem; border:none;">
                            </div>
                        </div>
                        <button style="width: 5rem; height: 2.5rem; color: #5D9426; font-family: 'DM Sans'; font-weight: 500; border-radius: 8px; border-color: none; border-style: none; background: #D0F5AB; margin-left: 30.5rem; margin-top: -4rem;">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="row" style="border-style: solid; width: 18.8rem; margin-left: 2rem; height: 26.5rem; border-radius: 15px; border-color: rgb(179, 179, 179);">
            <div class="col-md-3">
                <div class="profile-settings" style="margin-top: 3rem; margin-bottom: 2rem; margin-left: 1rem; background-color: none; width: 15rem; font-family: 'DM Sans';">
                    <ul class="list-group">
                        <a href="favorites.html"><button class="btn btn-primary btn-block" style="border-style: solid; background: none; color: black; border-color: rgb(179, 179, 179); text-align: left; text-decoration: none; margin-bottom: 0.5rem;"><i class="fa-regular fa-heart" style="margin-left: 1rem; margin-right:1rem;"></i>Favorites<i class="fa-solid fa-chevron-right" style="margin-left: 4.5rem;"></i></button></a>
                        <a href="ongoingjobs.html"><button class="btn btn-primary btn-block" style="border-style: solid; background: none; color: black; border-color: rgb(179, 179, 179); text-align: left; margin-bottom: 0.5rem;"><i class="fa-solid fa-briefcase" style="margin-left: 1rem; margin-right:1rem;"></i>Ongoing Jobs<i class="fa-solid fa-chevron-right" style="margin-left: 2.3rem;"></i></button></a>
                        <a href="workhistory.html"><button class="btn btn-primary btn-block" style="border-style: solid; background: none; color: black; border-color: rgb(179, 179, 179); text-align: left;"><i class="fa-solid fa-book-bookmark" style="margin-left: 1rem; margin-right:1rem;"></i>Work History<i class="fa-solid fa-chevron-right" style="margin-left: 2.8rem;"></i></button></a>
                    </ul>
                    <h3 style="background-color: none; font-size: 22px; text-align: center; margin-top: 1.5rem; font-weight: 600;">Account Settings</h3>
                    <ul class="list-group">
                        <a href="editprofile.html"><button class="btn btn-primary btn-block" style="border-style: solid; background: none; color: black; border-color: rgb(179, 179, 179); text-align: left; margin-top: 1rem; margin-bottom: 0.5rem;"><i class="fa-solid fa-pencil" style="margin-left: 1rem; margin-right:1rem;"></i>Edit Profile<i class="fa-solid fa-chevron-right" style="margin-left: 3.7rem;"></i></button></a>
                        <a href="settings.html"><button class="btn btn-primary btn-block" style="border-style: solid; background: none; color: black; border-color: rgb(179, 179, 179); text-align: left; margin-bottom: 0.5rem;"><i class="fa-solid fa-gear" style="margin-left: 1rem; margin-right:1rem;"></i>Settings<i class="fa-solid fa-chevron-right" style="margin-left: 4.8rem;"></i></button></a>
                        <a href="splashscreen.html"><button class="btn btn-primary btn-block" style="border-style: solid; background: rgba(251, 111, 111, 0.712); color: black; border-color: rgb(179, 179, 179); text-align: left; padding-left: 3.8rem;">Logout<i class="fa-solid fa-arrow-right-from-bracket" style="margin-left: 5.3rem;"></i></button></a>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
    <footer class="footer" style="background-color: #516ed7; height: 30rem; margin-top: 5rem;">
        <div class="container" style="background-color: black; height: 22rem; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
            <div class="row">
                <div class="col-lg-3" style="font-family: 'DM Sans'; margin-top: 8rem; margin-left: 4rem;">
                    <p style="color: grey;">Get in touch</p> 
                    <p style="color:white; margin-top: -1rem;">lancelot@customercare.com</p>
                    <p style="color:white; margin-top: -1rem;">lancelot@services.com</p>
                </div>
                <div class="col-lg-1" style="font-family: 'DM Sans'; margin-top: 8rem; margin-left: 13.5rem;">
                    <p style="color: grey;">Connect</p> 
                    <p style="color:white; margin-top: -1rem;">LinkedIn</p>
                    <p style="color:white; margin-top: -1rem;">Instagram</p>
                </div>
                <div class="col-lg-2" style="font-family: 'DM Sans'; margin-top: 8rem; margin-left: 21rem;">
                    <p style="color: grey;">Ventures</p> 
                    <p style="color:white; margin-top: -1rem;">Lancelot Avenue Bd.</p>
                    <p style="color:white; margin-top: -1rem;">Fresher Str. 99</p>
                    <p style="color:white; margin-top: -1rem;">10999 Sudirman, Jakarta</p>
                </div>
            </div>
        </div>
        <div class="container text-center" style="background-color: white; margin-top: 2rem; height: 4rem; width: 35rem; border-radius: 50px;">
            <div class="col-3" style="background-color: black; margin-top: 0.5rem; float:inline-start; margin-left: 0.5rem; border-radius: 50px; height: 3rem;">
                <p id="footer-1" style="color: white; align-items: center; margin-top: 0.7rem; font-family: 'DM Sans'; font-weight:500;">Profile</p>
            </div>
            <div class="col-3" style="margin-top: 0.5rem; float:inline-start; margin-left: 3.5rem; border-radius: 50px; height: 3rem;">
                <p id="footer-2" style="color: black; align-items: center; margin-top: 0.7rem; font-family: 'DM Sans'; font-weight:500;">Services</p>
            </div>
            <div class="col-3" style="margin-top: 0.5rem; float:inline-start; margin-left: 3.5rem; border-radius: 50px; height: 3rem;">
                <p id="footer-3" style="color: black; align-items: center; margin-top: 0.7rem; font-family: 'DM Sans'; font-weight:500;">Contact</p>
            </div>
        </div>
    </footer>
</body>
</html>