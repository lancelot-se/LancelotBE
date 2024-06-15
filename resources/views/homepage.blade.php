<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
                    <img src="pics/logo lancelot.svg" alt="logo lancelot" style="width: 150px; height: 50px; margin-left: 3.5rem;">
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
                <a href="/testing" style="color: black; font-family: 'DM Sans'; font-size: 15px; text-decoration: none;">Read Articles</a>
            </div>
            <div class="col-1 pt-3">
                <!-- disini harusnya ada masukin profile circle, tapi bingung how!!  -->
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-1"></div>
            <div class="col-12">
                <div class="container-fluid" style="height: 35rem;">
                    <div class="container" style="background-color: pink; height: 35rem;">
                        <div id="myCarousel" class="carousel slide" data-ride="false">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="image1.jpg" class="d-block w-100" alt="Image 1" style="height: 25rem; width: auto;">
                              </div>
                              <div class="carousel-item">
                                <img src="image2.jpg" class="d-block w-100" alt="Image 2" style="height: 25rem; width: auto;">
                              </div>
                              <div class="carousel-item">
                                <img src="image3.jpg" class="d-block w-100" alt="Image 3" style="height: 25rem; width: auto;">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style="margin-top: 8.5rem; margin-left: -3rem;">
                              <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" style="margin-top: 8.5rem; margin-right: -3rem;">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="down-part2">
         
        </div>
        <div class="row">
            <div class="col-10" style="background: linear-gradient(0.45turn,#607de7 35%, #cbd6fd); margin-left: 3.3rem; width: 82.4rem; height: 11rem; border-radius: 15px; margin-top: 2rem;">
                <div class="col-auto">
                    <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 35px; font-weight: 600; margin-top: 1.2rem; color: whitesmoke">Welcome to Lancelot, {{auth()->user()->name}}<img src="/pics/wavinghand.png" alt="" style="width: 2.5rem; height: 2.5rem; transform:scaleX(-1); margin-left: 0.5rem; margin-top: -0.5rem;"></h3>
                </div>
                <div class="col-auto" style="display: flex;">
            
                    <div class="col-6" style="background-color: rgba(245, 245, 245, 0.664); height: 3.8rem; border-radius: 10px; margin-top: 1rem; width: 38rem; cursor: pointer;">
                        <a href="{{ route('user.edit', ['id' => Auth::user()->id]) }}" style="text-decoration:none; color:black;">
                            <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 20px; font-weight: 400; padding-top: 1.1rem; padding-left: 5rem;">Complete your profile</h3>
                        </a>
                       
                    </div>
                    <div class="col-6" style="background-color: rgba(245, 245, 245, 0.664); height: 3.8rem; border-radius: 10px; margin-top: 1rem; width: 38rem; margin-left: 3rem; cursor: pointer;">
                        <a href="/explorejobs" style="text-decoration:none; color:black;">
                            <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 20px; font-weight: 400; padding-top: 1.1rem; padding-left: 5rem;">Get working now!</h3>
                        </a>
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
        @endphp


        <div class="row">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 25px; font-weight: 600; margin-left: 2.5rem; margin-top: 2rem;">Explore Popular Categories</h3>
                    </div>
                </div>
            </div>
            <div class="col-4" style="font-family: 'DM Sans'; font-size: 18px; margin-left: 0.5rem; width: 21rem">
                <ul id="ulli"style="list-style: none; margin-top: 1rem;">
                    <li id="gd" style="margin-top: 1.5rem; border-style: solid; padding-left: 2rem; height: 3rem; align-content: center; border-radius: 10px; width: 17rem; cursor: pointer; border-color: rgba(158, 157, 157, 0.747);">{{$categories[0]->category_name}}</li>
                    <li id="socmed" style="margin-top: 1.5rem; border-style: solid; padding-left: 2rem; height: 3rem; align-content: center; border-radius: 10px; width: 17rem; cursor: pointer; border-color: rgba(158, 157, 157, 0.747);">{{$categories[1]->category_name}}</li>
                    <li id="finance" style="margin-top: 1.5rem; border-style: solid; padding-left: 2rem; height: 3rem; align-content: center; border-radius: 10px; width: 17rem; cursor: pointer; border-color: rgba(158, 157, 157, 0.747);">{{$categories[2]->category_name}}</li>
                    <li id="itengineering" style="margin-top: 1.5rem; border-style: solid; padding-left: 2rem; height: 3rem; align-content: center; border-radius: 10px; width: 17rem; cursor: pointer; border-color: rgba(158, 157, 157, 0.747);">{{$categories[3]->category_name}}</li>
                    <li id="voiceover" style="margin-top: 1.5rem; border-style: solid; padding-left: 2rem; height: 3rem; align-content: center; border-radius: 10px; width: 17rem; cursor: pointer; border-color: rgba(158, 157, 157, 0.747);">{{$categories[4]->category_name}}</li>
                </ul>
            </div>
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1rem; border-radius: 10px; cursor: pointer; border-color: none; height:fit-content;">
                <img class="card-img-top" src="{{asset($jobs[0]->job_image)}}" alt="Card image cap" style="width: 100%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color:grey;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href= "{{ route('jobs.showDetail', $jobs[0]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[0]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[0]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[0]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories1[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories1[1]}}</span>
                <i id="hearticon" class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1rem; border-radius: 10px; cursor: pointer; border-color: none; height:fit-content;">
                <img class="card-img-top" src="{{asset($jobs[0]->job_image)}}" alt="Card image cap" style="width: 100%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color:grey;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href="{{ route('jobs.showDetail', $jobs[0]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[0]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[0]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[0]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories1[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories1[1]}}</span>
                <i id="hearticon" class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1rem; border-radius: 10px; cursor: pointer; border-color: none; height:fit-content;">
                <img class="card-img-top" src="{{asset($jobs[0]->job_image)}}" alt="Card image cap" style="width: 100%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color:grey;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href="{{ route('jobs.showDetail', $jobs[0]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[0]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[0]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[0]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories1[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories1[1]}}</span>
                <i id="hearticon" class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1rem; border-radius: 10px; cursor: pointer; border-color: none; height:fit-content;">
                <img class="card-img-top" src="{{asset($jobs[0]->job_image)}}" alt="Card image cap" style="width: 100%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color:grey;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href="{{ route('jobs.showDetail', $jobs[0]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[0]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[0]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[0]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories1[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories1[1]}}</span>
                <i id="hearticon" class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
           
            
           
         </div>
       
        <div class="row">
            <div class="col-12">
                <!-- <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 25px; font-weight: 600; margin-left: 3rem; margin-top: 2rem;">Explore Jobs</h3>
                <i class="fa-solid fa-chevron-right"></i> -->
                <div class="row align-items-center">
                    <div class="col-auto">
                        <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 25px; font-weight: 600; margin-left: 2.5rem; margin-top: 2rem;">Explore Jobs</h3>
                    </div>
                    <div class="col-auto">
                        <a href="/explorejobs">
                            <i class="fa-solid fa-chevron-right" style="font-size: 20px; margin-top: 1.6rem; margin-left: 70.6rem; color: black"></i>
                        </a>    
                    </div>
                </div>

            </div>
            
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[0]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href="{{ route('jobs.showDetail', $jobs[0]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[0]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[0]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[0]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories1[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories1[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[1]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href="{{ route('jobs.showDetail', $jobs[1]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[1]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[1]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[1]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories2[0]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[2]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[2]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[2]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[2]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[2]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories3[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories3[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[3]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[3]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[3]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[3]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[3]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories4[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories4[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[4]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[4]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[4]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[4]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[4]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories5[0]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 25px; font-weight: 600; margin-left: 3rem; margin-top: 2rem;">Explore Jobs</h3>
                <i class="fa-solid fa-chevron-right"></i> -->
                <div class="row align-items-center">
                    <div class="col-auto">
                        <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 25px; font-weight: 600; margin-left: 2.4rem; margin-top: 2rem;">Recommended For You</h3>
                    </div>
                    <div class="col-auto">
                        <a href="/explorejobs">
                        <i class="fa-solid fa-chevron-right" style="font-size: 20px; margin-top: 1.6rem; margin-left: 63rem; color: black;"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[0]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[0]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[0]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[0]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[0]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories1[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories1[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[1]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href="{{ route('jobs.showDetail', $jobs[1]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[1]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[1]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[1]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories2[0]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[2]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[2]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[2]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[2]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[2]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories3[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories3[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[3]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                <a href="{{ route('jobs.showDetail', $jobs[3]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[3]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[3]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[3]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories4[0]}}</span>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px;">{{$categories4[1]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <div class="card" style="width: 15rem; margin-top: 1rem; margin-left: 1.8rem; border-radius: 10px; cursor: pointer; border-color: #516ed7;">
                <img class="card-img-top" src="{{asset($jobs[4]->job_image)}}" alt="Card image cap" style="width: 100%; height: 46%; align-self: center; margin-top: 0.5rem; border-radius: 10px; border-style: solid; border-color: #516ed7;">
                <div class="card-body" style="font-family: 'DM Sans';">
                    <a href="{{ route('jobs.showDetail', $jobs[4]->id) }}" style="text-decoration: none;"><h5 class="card-title" style="font-weight: 600; margin-left: -0.5rem; color: black;">{{$jobs[4]->job_name}}</h5></a>
                <p class="clientposter" style="margin-top: -0.5rem; font-size: 15px; margin-left: -0.5rem;">{{$jobs[4]->client_name}}</p>
                <p class="card-text" style="margin-left: -0.5rem;">Rp. {{$jobs[4]->job_salary}},-</p>
                <span class="badge badge-pill badge-primary" style="background-color: #516ed7; border-radius: 50px; font-size: 13px; margin-left: -0.5rem;">{{$categories5[0]}}</span>
                <i class="fa-regular fa-heart" style="font-size: 20px; float: right; padding-top: 0.15rem;"></i>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 25px; font-weight: 600; margin-left: 3rem; margin-top: 2rem;">Explore Jobs</h3>
                <i class="fa-solid fa-chevron-right"></i> -->
                <div class="row align-items-center">
                    <div class="col-auto">
                        <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 25px; font-weight: 600; margin-left: 3rem; margin-top: 2rem;">Articles</h3>
                    </div>
                    <div class="col-auto">
                        <a href="articles.html">
                        <i class="fa-solid fa-chevron-right" style="font-size: 20px; margin-top: 1.6rem; margin-left: 74.4rem; color: black;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-top: 1rem; margin-left: 3.8rem; border-radius: 10px; font-family: 'DM Sans';">
                <img class="card-img-top" src="pics/article-1.jpg" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px; margin-left: -0.8rem; width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: 600; font-size: 18px;">How AI Impacts Freelancers: A Review</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-top: 1rem; margin-left: 3.5rem; border-radius: 10px; font-family: 'DM Sans';">
                <img class="card-img-top" src="pics/article-1.jpg" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px; margin-left: -0.8rem; width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: 600; font-size: 18px;">Improving Your Skills as a Freelancer</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-top: 1rem; margin-left: 3.5rem; border-radius: 10px; font-family: 'DM Sans';">
                <img class="card-img-top" src="pics/article-1.jpg" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px; margin-left: -0.8rem; width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: 600; font-size: 18px;">How AI Impacts Freelancers: A Review</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-top: 1rem; margin-left: 3.5rem; border-radius: 10px; font-family: 'DM Sans';">
                <img class="card-img-top" src="pics/article-1.jpg" alt="Card image cap" style="border-top-left-radius: 10px; border-top-right-radius: 10px; margin-left: -0.8rem; width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: 600; font-size: 18px;">How AI Impacts Freelancers: A Review</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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