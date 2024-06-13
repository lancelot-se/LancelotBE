<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>explorejobs</title>
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
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
                <a href="/explorejobs" style="color: black; font-family: 'DM Sans'; font-size: 15px; text-decoration: none;">Find a job</a>
            </div>
            <div class="col-2" id="readarticles" style="padding-top: 1.9rem">
                <i class="fa-solid fa-newspaper" style="font-size: 15px;"></i>
                <a href="" style="color: black; font-family: 'DM Sans'; font-size: 15px; text-decoration: none;">Read Articles</a>
            </div>
            <div class="col-1 pt-3">
                <!-- disini harusnya ada masukin profile circle, tapi bingung how!!  -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row align-items-center">
                        <div class="col-auto">
                            <a href="/homepage">
                                <i class="fa-solid fa-chevron-left" style="font-size: 20px; margin-top: 1.6rem; margin-left: 3.7rem; color: black"></i>
                            </a>    
                        </div>
                        <div class="col-auto">
                            <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 25px; font-weight: 600; margin-left: 2.5rem; margin-top: 2rem;">Explore Jobs</h3>
                        </div>
                </div>
            </div>

            <div class="col-12">
                <div class="filter-container">
                    <div class="category-head">
                        <ul>
                            <div class="category-title active" id="all">
                                <li>All</li>
                            </div>
                            <div class="category-title" id="graphicdesign">
                                <li>Graphic Design</li>
                            </div>
                            <div class="category-title" id="socialmedia">
                                <li>Social Media</li>
                            </div>
                            <div class="category-title" id="finance">
                                <li>Finance</li>
                            </div>
                            <div class="category-title" id="copywriting">
                                <li>Copywriting</li>
                            </div>
                            <div class="category-title" id="vover">
                                <li>Voice Over</li>
                            </div>
                            <div class="category-title" id="itengineer">
                                <li>IT & Engineering</li>
                            </div>
                        </ul>
                    </div>

                    <div class="posts-collect">
                        <div class="posts-main-container">
                            <div class="all graphicdesign">
                                <div class="post-img">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
            $categories1=json_decode($jobs[0]->category_name, true);// Logo Designing
            $categories2=json_decode($jobs[1]->category_name, true);// Website Branding
            $categories3=json_decode($jobs[2]->category_name, true);// Copywriting
            $categories4=json_decode($jobs[3]->category_name, true);// Auditing
            $categories5=json_decode($jobs[4]->category_name, true);// Photographer
            $categories6=json_decode($jobs[5]->category_name, true);// Script Writing
            $categories7=json_decode($jobs[6]->category_name, true);// Makeup Artist
            $categories8=json_decode($jobs[7]->category_name, true);// Designing Logo
            $categories9=json_decode($jobs[8]->category_name, true);// Video Voiceover
            $categories10=json_decode($jobs[9]->category_name, true);// Website Dev
             @endphp
            <div class="card" style="width: 15rem; margin-top: 2rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[0]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
               <a href="{{ route('jobs.showDetail', $jobs[0]->id) }}" style="text-decoration: none; color:black"> <h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem;">{{$jobs[0]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[0]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[0]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories1[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories1[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 2rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[1]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[1]->id) }}" style="text-decoration: none; color:black"> <h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem;">{{$jobs[1]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[1]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[1]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories2[0]}}</span>
        
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 2rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[2]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[2]->id) }}" style="text-decoration: none; color:black"> <h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem;">{{$jobs[2]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[2]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[2]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories3[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories3[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 2rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[3]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[3]->id) }}" style="text-decoration: none; color:black"> <h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem;">{{$jobs[3]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[3]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[3]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories4[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories4[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 2rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[4]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[4]->id) }}" style="text-decoration: none; color:black"> <h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem;">{{$jobs[4]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[4]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[4]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories5[0]}}</span>

                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 2rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[5]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[5]->id) }}" style="text-decoration: none; color:black"> <h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem;">{{$jobs[5]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[5]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[5]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories6[0]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 2rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[6]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[6]->id) }}" style="text-decoration: none; color:black"> <h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem;">{{$jobs[6]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[6]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[6]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories7[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories7[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 2rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[7]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href="{{ route('jobs.showDetail', $jobs[7]->id) }}" style="text-decoration: none; color:black"> <h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem;">{{$jobs[7]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[7]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[7]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories8[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories8[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 2rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[8]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href="{{ route('jobs.showDetail', $jobs[8]->id) }}"style="text-decoration: none; color:black"> <h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem;">{{$jobs[8]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[8]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[8]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories9[0]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 2rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[9]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href="{{ route('jobs.showDetail', $jobs[9]->id) }}" style="text-decoration: none; color:black"> <h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem;">{{$jobs[9]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[9]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[9]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories10[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories10[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
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
    <script src="{!! asset('/js/script.js') !!}"></script>
</body>
</html>