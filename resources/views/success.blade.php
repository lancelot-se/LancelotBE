<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>see job detail</title>
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
                    <img src="{{asset('pics/logo lancelot.svg')}}" alt="logo lancelot" style="width: 150px; height: 50px; margin-left: 3.5rem;">
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
                <img src="pics\profile_freelancer.png" alt="">
            </div>
        </div>
        @php
        $categoriesdetail=json_decode($jobdetail->category_name, true);// Logo Designing
    
         @endphp
        <div class="row" style="background-color: none; margin-top: 4rem; height: 50rem;">
            <div class="col-11" style="background-color: none; margin-left: 3.7rem; border-style: solid; border-color: #516ed7; border-radius: 15px; display: flex;">
                <div class="col-5" style="background-color: black; border-style: solid; border-radius: 10px; height: 48rem; margin-top: 0.8rem;">
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: whitesmoke; margin-left: 1rem; margin-top: 1rem; font-weight: 600;">Application Summary</h3>
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: grey; font-size: 23px; margin-left: 1rem; font-weight: 600; margin-top: 3.5rem;">Job Name</h3>
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: whitesmoke; font-size: 20px; margin-left: 1rem; font-weight: 600; margin-top: 0rem;">{{$jobdetail->job_name}}</h3>
                    
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: grey; font-size: 23px; margin-left: 1rem; font-weight: 600; margin-top: 2rem;">Job Category</h3>
                  

                    <span>
                        @if (isset($categoriesdetail[0]))
                        <h3 style="font-family: 'DM Sans'; background-color: none; color: whitesmoke; font-size: 20px; margin-left: 1rem; font-weight: 600; margin-top: 0rem;"> {{ $categoriesdetail[0] }}</h3>
                         
                        @endif
                       @if (isset($categoriesdetail[1]))
                       @if (isset($categoriesdetail[0])), 
                        @endif
                        <h3 style="font-family: 'DM Sans'; background-color: none; color: whitesmoke; font-size: 20px; margin-left: 1rem; font-weight: 600; margin-top: 0rem;"> {{ $categoriesdetail[1] }}</h3>
                        @endif
                    </span>
                    
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: grey; font-size: 23px; margin-left: 1rem; font-weight: 600; margin-top: 2rem;">Job Description</h3>
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: whitesmoke; font-size: 20px; margin-left: 1rem; font-weight: 600; margin-top: 0rem;">{{$jobdetail->description}}</h3>

                    <h3 style="font-family: 'DM Sans'; background-color: none; color: grey; font-size: 23px; margin-left: 1rem; font-weight: 600; margin-top: 2rem;">Salary</h3>
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: whitesmoke; font-size: 20px; margin-left: 1rem; font-weight: 600; margin-top: 0rem;">Rp. {{$jobdetail->job_salary}},-</h3>

                    <h3 style="font-family: 'DM Sans'; background-color: none; color: grey; font-size: 23px; margin-left: 1rem; font-weight: 600; margin-top: 2rem;">Deadline</h3>
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: whitesmoke; font-size: 20px; margin-left: 1rem; font-weight: 600; margin-top: 0rem;">{{$jobdetail->job_deadline}}</h3>
                    
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: grey; font-size: 23px; margin-left: 1rem; font-weight: 600; margin-top: 2rem;">Applicant Name</h3>
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: whitesmoke; font-size: 20px; margin-left: 1rem; font-weight: 600; margin-top: 0rem;">{{auth()->user()->name}}</h3>

                    <h3 style="font-family: 'DM Sans'; background-color: none; color: grey; font-size: 23px; margin-left: 1rem; font-weight: 600; margin-top: 2rem;">Applicant Phone Number</h3>
                    <h3 style="font-family: 'DM Sans'; background-color: none; color: whitesmoke; font-size: 20px; margin-left: 1rem; font-weight: 600; margin-top: 0rem;">{{auth()->user()->phone_number}}</h3>
                </div>
                <div class="col-7" style="border-style: solid; border-radius: 10px; height: 48rem; margin-top: 0.8rem; margin-left: 1rem; width: 45.5rem; border-color: grey;">
                    <i class="fa-solid fa-circle-check" style="color: #2fa242; background-color: none; font-size: 10rem; margin-top: 15rem; margin-left: 17rem;"></i>
                    <h3 style="font-family: 'DM Sans'; background-color: none; justify-content: center; font-weight: 600; font-size: 25px; text-align: center; margin-top: 1rem;">We have successfully received <br> your application</h3>
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