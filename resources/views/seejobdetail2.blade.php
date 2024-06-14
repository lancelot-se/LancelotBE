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
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center">
                        <div class="col-auto">
                            <a href="{{ route('jobs.showDetail', $jobdetail->id) }}">
                                <i class="fa-solid fa-chevron-left" style="font-size: 20px; margin-top: 1.6rem; margin-left: 3.7rem; color: black"></i>
                            </a>    
                        </div>
                        <div class="col-auto">
                            <h3 class="display-6" style="font-family: 'DM Sans'; font-size: 25px; font-weight: 600; margin-left: 2.5rem; margin-top: 2rem;">Job Detail</h3>
                        </div>
                </div>
            </div>
        </div>  
        @php
        $categoriesdetail=json_decode($jobdetail->category_name, true);// Logo Designing
    
         @endphp
        <div class="row">
            <div class="col-12" style="text-align: center; font-family: 'DM Sans'; font-size: 2.5rem; font-weight: 500;">
                Apply Job
            </div>
        </div>  
       
        <div class="row mt-5">
            <div class="col-1"></div>
            <div class="col-5" style="border: 2.55px solid #516ED7; border-radius: 12.75px; padding: 46px;">
                <div class="row">
                    <div class="col-12 pb-3">
                        <h2 style="color: #9E9E9E; font-size: 2rem; font-family: 'DM Sans';"><b>Job Name</b></h2>
                        <h3 style="font-size: 1.8rem; font-family: 'DM Sans'">{{$jobdetail->job_name}}</h3>
                    </div>
                    <div class="col-12 pb-3">
                        <div class="row">
                            @if (isset($categoriesdetail[0]))
                            <div class="col-5">
                                <div class="category-text" style="font-size: 1.25rem; font-family: 'DM Sans'; border: 0.8px solid #516ED7; border-radius: 8000px; padding: 5px 10px; text-align: center;">
                                    {{ $categoriesdetail[0] }}
                                </div>
                            </div>
                            @endif
                            @if (isset($categoriesdetail[1]))
                            <div class="col-3">
                                <div class="category-text" style="font-size: 1.25rem; font-family: 'DM Sans'; border: 0.8px solid #516ED7; border-radius: 8000px; padding: 5px 10px; text-align: center;">
                                    {{ $categoriesdetail[1] }}
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 pb-3">
                        <h2 style="color: #9E9E9E; font-size: 2rem; font-family: 'DM Sans';"><b>Job Desciption</b></h2>
                        <h3 style="font-size: 1.8rem; font-family: 'DM Sans'">{{$jobdetail->description}}</h3>
                    </div>
                    <div class="col-12 pb-3">
                        <h2 style="color: #9E9E9E; font-size: 2rem; font-family: 'DM Sans';"><b>Salary</b></h2>
                        <h3 style="font-size: 1.8rem; font-family: 'DM Sans'">Rp. {{$jobdetail->job_salary}},-</h3>
                    </div>
                    <div class="col-12 pb-3">
                        <h2 style="color: #9E9E9E; font-size: 2rem; font-family: 'DM Sans';"><b>Deadline</b></h2>
                        <h3 style="font-size: 1.8rem; font-family: 'DM Sans'">{{$jobdetail->job_deadline}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-5">
            
                <div class="col-12 pt-3">
                    <div class="salary-text" style="font-size: 2rem; font-family: 'DM Sans'; font-weight: 500">
                        Choose salary payment method
                    </div>
                </div>
                <script src="seejobdetail2.js" defer></script>
                
                <!-- hiks masi gabisa check buttonnya T-T -->
                <div class="row pb-4">
                    <div class="col-3">
                        <div class="input-group">
                            <div class="button-image col-12">
                                <input id="toggleable-radio" class="form-check-input" type="radio" name="payment_method_id" value="1" aria-label="Radio button for following text input">
                                <img src="{{asset('pics/gopaylogo 1.png')}}" alt="gopay-logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <div class="button-image col-12">
                                <input id="toggleable-radio" class="form-check-input" type="radio" value="DANA"  name="2" aria-label="Radio button for following text input">
                                <img src="{{asset('pics\danasvg 1.png')}}" alt="dana logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <div class="button-image col-12">
                                <input id="toggleable-radio" class="form-check-input" type="radio" value="OVO"  name="3" aria-label="Radio button for following text input">
                                <img src="{{asset('pics\ovologo 1.png')}}" alt="ovo-logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group">
                            <div class="button-image col-12">
                                <input id="toggleable-radio" class="form-check-input" type="radio" value="BCA"  name="4" aria-label="Radio button for following text input">
                                <img src="{{asset('pics\bcalogo.png')}}" alt="bca-logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 pb-1">
                    <div class="portofolio-text" style="font-size: 2rem; font-family: 'DM Sans'; font-weight: 500">
                        Upload your portofolio
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"  name="portfolio" aria-label="Upload">
                    </div>
                </div>
                <div class="col-12" style="margin-bottom: 15rem;"></div>
                <div class="col-12"">
                    <div class="row"">
                        <div class="container-fluid">
                            <div class="col-12" style="font-size: 2rem; font-family: 'DM Sans'">
                                <b>Posted By</b>
                            </div>
                            <div class="col-12 pt-3">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{asset('pics\profile_client.png')}}" alt="profile pict client">
                                    </div>
                                    <div class="col-8">
                                        <div class="col-12" style="font-size: 1.8rem; font-family: 'DM Sans'">
                                            <b>{{$jobdetail->client_name}}</b>
                                        </div>
                                        <div class="col-12" style="font-size: 1.8rem; font-family: 'DM Sans'">
                                            @if (isset($categoriesdetail[0]))
                                            {{ $categoriesdetail[0] }}
                                            @endif
                                            @if (isset($categoriesdetail[1]))
                                                @if (isset($categoriesdetail[0]))
                                                    , 
                                                @endif
                                                {{ $categoriesdetail[1] }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <div class="row">
            <div class="col-12" style="padding: 8rem;">
                <form action="{{ route('apply.job', $jobdetail->id) }}" method="POST">
                    @csrf
                    
                    <button class="btn btn-primary btn-lg btn-block" style="background-color: #516ED7; padding:1em; font-family: 'DM Sans'; font-weight: 500; font-size:1.25rem; color: white; text-decoration: none;" type="submit">
                        Apply
                    </button>
                 </form>
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