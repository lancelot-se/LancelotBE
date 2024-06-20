<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/splashscreen.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/7563b17235.js" crossorigin="anonymous"></script>
    <title>Lancelot</title>
</head>
<body>
    <div id="header">
        <div id="header-contents">
            <div id="header-contentsleft">
                <div id="lancelot-logo">
                    <img src="/pics/logo lancelot.svg">
                </div>
            </div>
            <div id="header-contentsright">
                <div id="login" style="height: 2rem; width: 6rem;">
                    <a href="/login" style="text-decoration: none; color: black;">
                        <p style="padding-top: 0.35rem;">
                            Login
                        </p>
                    </a>
                </div>
                <div id="signup" style="height: 1.8rem; width: 6rem;">
                    <a href="/register" style="text-decoration: none;">
                        <p>
                            Sign up
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="splash-box-1">
        <div id="splash-box-1-content">
            <div id="splash-box-1-left">
                <div id="splash-box-1-left-up">
                    <img src="/pics/6963 1.svg" width="750px" height="550px" id="manlaptop">
                </div>
                <div id="searchbar">
                    <input type="text" name="searchbox" id="searchbox" placeholder="Find over 100,000+ jobs that suit you.">
                </div>
            </div>
            <div id="splash-box-1-right">
                <div id="texts">
                    <div id="textsabove">
                        <p id="theonly"> The only </p> <p id="freelancing"> freelancing </p>
                    </div>
                    <div id="textsbelow">
                        <p id="appyouneed"> 
                            app you need.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="splash-box-2">
        <div id="splash-box-2-content">
            <div id="splash-box-2-top">
                <p id="services">
                    Services
                </p>
            </div>
            <div id="splash-box-2-bottom">
                <div class="container">
                    <div class="slider-wrapper">
                      <button id="prev-slide" class="slide-button material-symbols-rounded">
                        chevron_left
                      </button>
                      <ul class="image-list">
                        <img class="image-item" src="pics/slider-1.svg" alt="img-1" />
                        <img class="image-item" src="pics/slider-2.svg" alt="img-2" />
                        <img class="image-item" src="pics/slider-3.svg" alt="img-3" />
                        <img class="image-item" src="pics/slider-4.svg" alt="img-4" />
                        <img class="image-item" src="pics/slider-5.svg" alt="img-5" />
                        <img class="image-item" src="pics/slider-6.svg" alt="img-6" />
                        <img class="image-item" src="pics/slider-7.svg" alt="img-7" />
                        <img class="image-item" src="pics/slider-8.svg" alt="img-8" />
                        <img class="image-item" src="pics/slider-9.svg" alt="img-9" />
                        <img class="image-item" src="pics/slider-10.svg" alt="img-10" />
                      </ul>
                      <button id="next-slide" class="slide-button material-symbols-rounded">
                        chevron_right
                      </button>
                    </div>
                    <div class="slider-scrollbar">
                      <div class="scrollbar-track">
                        <div class="scrollbar-thumb"></div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div id="splash-box-3">
        <div id="splash-box-3-content">
            <div id="splash-box-3-left">
                <p id="why-lancelot">
                    Why lancelot?
                </p>
                <p id="reasons">
                    <p id="reason-1">
                        <i class="fa-regular fa-square-check" id="check-mark" style="color: #000000;"></i>
                        Categories that suit your expertise.
                    </p>
                    <p id="reason-1">
                        <i class="fa-regular fa-square-check" id="check-mark" style="color: #000000;"></i>
                        Safe and guaranteed payment system.
                    </p>
                    <p id="reason-1">
                        <i class="fa-regular fa-square-check" id="check-mark"  style="color: #000000;"></i>
                        Job opportunities by verified companies.
                    </p>
                    <p id="reason-1">
                        <i class="fa-regular fa-square-check" id="check-mark" style="color: #000000;"></i>
                        Easily build CV and job experience.
                    </p>
                </p>
            </div>
            <div id="splash-box-3-right">
                <img src="pics/table-workplace-close-up-man-hands-home-working-typing-laptop.jpg" id="freelancingpics" width="650px" height="500px">
            </div>
        </div>
    </div>
    <script src="{!! asset('/js/splashscreen.js') !!}"></script>
</body>
</html>