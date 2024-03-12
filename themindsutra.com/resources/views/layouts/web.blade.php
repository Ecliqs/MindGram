<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="DocWebIndia" />
    <title></title>
        
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="{{ asset('images/logo.png') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Mindsutra" />

    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="summary_large_image" />

    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.plyr.io/3.6.2/plyr.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="mb-5">
        <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" alt="" width="250" height="80"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars fa-2x"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-nav-scroll">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('allWorkshops') }}">Workshops</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside">Mindwork</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li class="dropstart">
                                    <a class="dropdown-item dropdown-toggle" href="!#" data-bs-toggle="dropdown">Assessments</a>
                                    <ul class="dropdown-menu shadow">
                                        <li><a class="dropdown-item" href="{{ route('assertivenessAssessment') }}">Assertiveness (Ahimsa)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('clarityAssessment') }}">Clarity (Satya)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('internetAddictionAssessment') }}">Originality (for Asteya)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('creativityAssessment') }}">Creativity (Bramhacharya)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('forgivenessAssessment') }}">Forgiveness (Aparigrah)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('authenticityAssessment') }}">Authenticity (Shauch)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('happinessAssessment') }}">Happiness (Santosh)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('gritAssessment') }}">Grit (Tapas)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('selfCareAssessment') }}">Learnability (Swadhyay)</a></li>
                                    </ul>
                                </li>
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="!#" data-bs-toggle="dropdown">Mind excercises</a>
                                    <ul class="dropdown-menu shadow">
                                        <li><a class="dropdown-item" href="{{ route('flexibilitySkills') }}">Flexibility skills (Ahimsa)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('skillsForClarity') }}">Skills for clarity (Satya)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('skillsForOriginality') }}">Skills for originality (Asteya)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('skillsForCreativity') }}">Skills for creativity (Bramhacharya)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('skillsForLettingGo') }}">Skills for letting go (Aparigraha)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('skillsForAuthenticity') }}">Skills for authenticity (Shauch)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('skillsForMindfulness') }}">Skills for mindfulness (Santosh)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('skillsForDiscipline') }}">Skills for discipline (Tapas)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('skillsForSelfImprovment') }}">Skills for self improvement (Swadhyay)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('skillsForMiraculousThinking') }}">Skills for miraculous thinking (Ishwar Pranidhan)</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('artTherapyExercises') }}">Art Exercises</a></li>
                                <li class="dropstart">
                                    <a class="dropdown-item dropdown-toggle" href="!#" data-bs-toggle="dropdown">Journalling Exercises</a>
                                    <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href="{{ route('therapeuticJournaling') }}">Therapeutic journaling</a></li>
                                        <li><a class="dropdown-item" href="{{ route('settingYourHealingIntentions') }}">Setting your healing intentions</a></li>
                                        <li><a class="dropdown-item" href="{{ route('creatingFoundationForChange') }}">Creating a foundation for change</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Bodywork</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="{{ route('breathwork') }}">Breathwork</a></li>
                                <li><a class="dropdown-item" href="{{ route('nutrition') }}">Nutrition</a></li>
                                <li><a class="dropdown-item" href="{{ route('integralSomaticTherapy') }}">Integral Somatic Therapy</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Energywork</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="{{ route('meditation') }}">Meditation</a></li>
                                <li><a class="dropdown-item" href="{{ route('music') }}">Music</a></li>
                                <li><a class="dropdown-item" href="{{ route('art') }}">Art</a></li>
                                <li><a class="dropdown-item" href="https://illustrations.themindsutra.com/" target="_blank" rel="noopener noreferrer" title="Mindsutra Illustrations">Illustrations</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blogs') }}">Blogs</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Social Media</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="{{ route('workshopReviews') }}">Workshop reviews</a></li>
                                <li><a class="dropdown-item" href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a class="dropdown-item" href="{{ route('youtube') }}">YouTube</a></li>
                                <li><a class="dropdown-item" href="{{ route('bookReviews') }}">Book Reviews</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Know Us</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="{{ route('knowTheAuthors') }}">Know the authors</a></li>
                                <li><a class="dropdown-item" href="{{ route('knowTheSpeakers') }}">Know our speakers</a></li>
                                <li><a class="dropdown-item" href="{{ route('knowSupportTeam') }}">Know our support team</a></li>
                                <li><a class="dropdown-item" href="{{ route('contactUs') }}">Contact us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Sign In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{ $slot }}

    <section class="social">
        <div class="middle">
            <a class="btn facebook" href="https://www.facebook.com/The-Mind-Sutra-106715745380192" target="_blank" rel="noopener noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a class="btn linkedin" href="https://www.instagram.com/the.mindsutra/" target="_blank" rel="noopener noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a class="btn pinterest" href="https://www.linkedin.com/in/dr-meghna-varma-66647623a/" target="_blank" rel="noopener noreferrer" title="Linkedin"><i class="fab fa-linkedin"></i></a>
            <a class="btn twitter" href="https://twitter.com/themindsutra10" target="_blank" rel="noopener noreferrer" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a class="btn youtube" href="https://www.youtube.com/channel/UCNwxIDDUG0ZUcA33ZfSLl4A" target="_blank" rel="noopener noreferrer" title="Youtube"><i class="fab fa-youtube"></i></a>
        </div>
    </section>

    <div class="float-container">
        <a href="https://www.amazon.in/Mindsutra-SHAIFALI-GUPTA-MEGHNA-VARMA/dp/9393029024/ref=sr_1_1?crid=3VGSG47BN1S4G&keywords=mindsutra&qid=1656153558&sprefix=mindsutra%2Caps%2C192&sr=8-1" target="_blank" rel="noopener noreferrer" title="Buy from Amazon"><i class="fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;&nbsp;Buy a book</a>
        <a href="{{ route('allEvents') }}"><i class="fa-solid fa-calendar-check"></i>&nbsp;&nbsp;&nbsp;Register for event</a>
        <a href="{{ route('allAssessments') }}"><i class="fa-solid fa-star"></i></i>&nbsp;&nbsp;&nbsp;Score your woe/wow</a>
    </div>

    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        (function($) { // Begin jQuery
            $(function() { // DOM ready
                // If a link has a dropdown, add sub menu toggle.
                $('nav ul li a:not(:only-child)').click(function(e) {
                $(this).siblings('.nav-dropdown').toggle();
                // Close one dropdown when selecting another
                $('.nav-dropdown').not($(this).siblings()).hide();
                e.stopPropagation();
                });
                // Clicking away from dropdown will remove the dropdown class
                $('html').click(function() {
                $('.nav-dropdown').hide();
                });
                // Toggle open and close nav styles on click
                $('#nav-toggle').click(function() {
                $('nav ul').slideToggle();
                });
                // Hamburger to X toggle
                $('#nav-toggle').on('click', function() {
                this.classList.toggle('active');
                });
            }); // end DOM ready
        })(jQuery); // end jQuery
    </script>
    <script>
        let totalNumber = document.querySelectorAll('.counter-text');
        let getNumber = Array.from(totalNumber)

        getNumber.map((viewNumber) => {
            console.log(viewNumber.dataset.number)
            let startCount = 0
            let counterUP = () => {
                startCount++
            viewNumber.innerHTML = `${startCount}`
            if(startCount == viewNumber.dataset.number){
                clearInterval(countStop)
            }
            }
            let countStop = setInterval(() => {
                counterUP()
            },13)
        })
    </script>
    <script>
        $(document).ready(function($) {
            "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 0,
                autoplay: true,
                dots:true,
                autoplayTimeout: 8500,
                smartSpeed: 450,
                responsive: {
                    0: {
                    items: 1
                    },
                    768: {
                    items: 2
                    },
                    1170: {
                    items: 3
                    }
                }
            });
        });
    </script>
    <script>
        // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200);    // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() {      // When arrow is clicked
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $('.image-popup-vertical-fit').magnificPopup({
                type: 'image',
                mainClass: 'mfp-with-zoom', 
                gallery:{
                    enabled:true
                },

                zoom: {
                    enabled: true, 
                    duration: 300, // duration of the effect, in milliseconds
                    easing: 'ease-in-out', // CSS transition easing function

                    opener: function(openerElement) {
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.test').on('submit', function(e){
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '/assertiveness-assessment-result',
                    dataType : 'json',
                    data: $(this).serialize(),
                    success: function (data) {
                        $(".flight").text();
                        $(".flight").text(data[0]);
                        $(".attack").text();
                        $(".attack").text(data[1]);
                        $(".manipul").text();
                        $(".manipul").text(data[2]);
                        $(".harmony").text();
                        $(".harmony").text(data[3]);
                        $('#flight2').val(data[0]);
                        $('#attack2').val(data[1]);
                        $('#manipul2').val(data[2]);
                        $('#harmony2').val(data[3]);
                        $('.create-chart').removeClass('d-none');
                    },
                    error: function(){
                        alert("Form submission failed!");
                    }
                });
            });
            $('.test2').on('submit', function(e){
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '/clarity-assessment-result',
                    dataType : 'json',
                    data: $(this).serialize(),
                    success: function (data) {
                        $('#clarity_score').val(data);
                    },
                    error: function(){
                        alert("Form submission failed!");
                    }
                });
            });
            $('.test3').on('submit', function(e){
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '/internet-addiction-test-result',
                    dataType : 'json',
                    data: $(this).serialize(),
                    success: function (data) {
                        $('#addiction_score').val(data);
                    },
                    error: function(){
                        alert("Form submission failed!");
                    }
                });
            });
            $('.test4').on('submit', function(e){
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '/forgiveness-assessment-result',
                    dataType : 'json',
                    data: $(this).serialize(),
                    success: function (data) {
                        $(".hfs").text();
                        $(".hfs").text(data[0]);
                        $(".shfs").text();
                        $(".shfs").text(data[1]);
                        $(".ohfs").text();
                        $(".ohfs").text(data[2]);
                        $(".chfs").text();
                        $(".chfs").text(data[3]);
                    },
                    error: function(){
                        alert("Form submission failed!");
                    }
                });
            });
            $('.test5').on('submit', function(e){
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '/authenticity-assessment-result',
                    dataType : 'json',
                    data: $(this).serialize(),
                    success: function (data) {
                        $(".sa").text();
                        $(".sa").text(data[0]);
                        $(".imp").text();
                        $(".imp").text(data[1]);
                        $(".bp").text();
                        $(".bp").text(data[2]);
                        $(".rt").text();
                        $(".rt").text(data[3]);
                    },
                    error: function(){
                        alert("Form submission failed!");
                    }
                });
            });
            $('.test6').on('submit', function(e){
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: 'grit-assessment-result',
                    dataType : 'json',
                    data: $(this).serialize(),
                    success: function (data) {
                        $(".grit").text();
                        $(".grit").text(data[0]);
                        $(".ci").text();
                        $(".ci").text(data[1]);
                        $(".pe").text();
                        $(".pe").text(data[2]);
                        $(".bgrit").text();
                        $(".bgrit").text(data[3]);
                        $(".amb").text();
                        $(".amb").text(data[4]);
                    },
                    error: function(){
                        alert("Form submission failed!");
                    }
                });
            });
        });
    </script>
    <script>
        function createChart(){
            var scoreCanvas = document.getElementById("scoreChart");
            let flight = document.getElementById("flight2").value;
            let attack = document.getElementById("attack2").value;
            let manipul = document.getElementById("manipul2").value;
            let harmony = document.getElementById("harmony2").value;

            Chart.defaults.color = "black";
            Chart.defaults.font.size = 18;

            var scoreData = {
                labels: [
                    "Harmonious assertiveness",
                    "Aggressive attitude (attack)",
                    "Manipulation",
                    "Passive attitude (flight)",
                ],
                datasets: [
                    {
                        label: "True",
                        backgroundColor: "#FFF17644",
                        borderColor: "black",
                        borderWidth: 1,
                        data: [harmony, attack, manipul, flight],
                    }
                ],
            };

            var chartOptions = {
                plugins: {
                    title: {
                        display: true,
                        align: "start",
                        text: "Attitude Score Chart",
                    },
                    legend: {
                        align: "start",
                    }
                },
                scales: {
                    r: {
                        pointLabels: {
                            font: {
                                size: 18
                            }
                        }
                    }
                }
            };

            var radarChart = new Chart(scoreCanvas, {
                type: "radar",
                data: scoreData,
                options: chartOptions,
            });

            document.getElementById("scoreChart").classList.remove("d-none");
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.8/plyr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5media/1.1.8/html5media.min.js"></script>
    <script>
        // Mythium Archive: https://archive.org/details/mythium/
        $(function ($) {
            "use strict";
            var supportsAudio = !!document.createElement("video").canPlayType;
            if (supportsAudio) {
                // initialize plyr
                var player = new Plyr("#audio1", {
                    controls: [
                        "restart",
                        "play",
                        "progress",
                        "current-time",
                        "duration",
                        "mute",
                        "volume",
                        "download"
                    ]
                });
                // initialize playlist and controls
                var index = 0,
                    playing = false,
                    mediaPath = "https://themindsutra.com/videos/",
                    extension = "",
                    tracks = [
                        {
                            track: 1,
                            name: "Say Hello to Mindsutra | Feat Saat Rang Ke Sapne",
                            duration: "0:37",
                            file: "mindsutra-start-compressed"
                        },
                        {
                            track: 2,
                            name: "Meet The Alchemist - Ahimsa | Feat Vaishnav Jan to Tene Kahiye",
                            duration: "0:48",
                            file: "ahimsa-compressed"
                        },
                        {
                            track: 3,
                            name: "Meet The Alchemist - Satya | Feat Ishwar Satya Hai",
                            duration: "1:15",
                            file: "satya-compressed"
                        },
                        {
                            track: 4,
                            name: "Meet The Alchemist - Asteya | Feat Ekla Cholo Re",
                            duration: "0:29",
                            file: "asteya-compressed"
                        },
                        {
                            track: 5,
                            name: "Meet The Alchemist - Brahmacharya | Feat Jyoti Kalash Chhalke",
                            duration: "0:31",
                            file: "brahmacharya-compressed"
                        },
                        {
                            track: 6,
                            name: "Meet The Alchemist - Aparigraha | Feat Musafir Hun Yaaron",
                            duration: "1:18",
                            file: "aparigraha-compressed"
                        },
                        {
                            track: 7,
                            name: "Meet The Alchemist - Shauch | Feat Itni Shakti Hume Dena Data",
                            duration: "0:38",
                            file: "shauch-compressed"
                        },
                        {
                            track: 8,
                            name: "Meet The Alchemist - Santosh | Feat Itti Si Hasi",
                            duration: "0:34",
                            file: "santosh-compressed"
                        },
                        {
                            track: 9,
                            name: "Meet The Alchemist - Tapas | Feat Ye Hausla Kaise Jhuke",
                            duration: "0:43",
                            file: "tapas-compressed"
                        },
                        {
                            track: 10,
                            name: "Meet The Alchemist - Swadhyay | Feat Humko Man Ki  Shakti",
                            duration: "0:40",
                            file: "swadhyay-compressed"
                        },
                        {
                            track: 11,
                            name:
                                "Meet The Alchemist - Ishwar Pranidhan | Feat Ek Nazar Dekha Tujhe",
                            duration: "1:26",
                            file: "ishwar-pranidhan-compressed"
                        },
                        {
                            track: 12,
                            name:
                                "Higher Self | Motivation",
                            duration: "2:07",
                            file: "higher-self-compressed"
                        },
                    ],
                    buildPlaylist = $.each(tracks, function (key, value) {
                        var trackNumber = value.track,
                            trackName = value.name,
                            trackDuration = value.duration;
                        if (trackNumber.toString().length === 1) {
                            trackNumber = "0" + trackNumber;
                        }
                        $("#plList").append(
                            '<li> \
                            <div class="plItem"> \
                                <span class="plNum">' +
                                trackNumber +
                                '.</span> \
                                <span class="plTitle">' +
                                trackName +
                                '</span> \
                                <span class="plLength">' +
                                trackDuration +
                                "</span> \
                            </div> \
                        </li>"
                        );
                    }),
                    trackCount = tracks.length,
                    npAction = $("#npAction"),
                    npTitle = $("#npTitle"),
                    audio = $("#audio1")
                        .on("play", function () {
                            playing = true;
                            npAction.text("Now Playing...");
                        })
                        .on("pause", function () {
                            playing = false;
                            npAction.text("Paused...");
                        })
                        .on("ended", function () {
                            npAction.text("Paused...");
                            if (index + 1 < trackCount) {
                                index++;
                                loadTrack(index);
                                audio.play();
                            } else {
                                audio.pause();
                                index = 0;
                                loadTrack(index);
                            }
                        })
                        .get(0),
                    btnPrev = $("#btnPrev").on("click", function () {
                        if (index - 1 > -1) {
                            index--;
                            loadTrack(index);
                            if (playing) {
                                audio.play();
                            }
                        } else {
                            audio.pause();
                            index = 0;
                            loadTrack(index);
                        }
                    }),
                    btnNext = $("#btnNext").on("click", function () {
                        if (index + 1 < trackCount) {
                            index++;
                            loadTrack(index);
                            if (playing) {
                                audio.play();
                            }
                        } else {
                            audio.pause();
                            index = 0;
                            loadTrack(index);
                        }
                    }),
                    li = $("#plList li").on("click", function () {
                        var id = parseInt($(this).index());
                        if (id !== index) {
                            playTrack(id);
                        }
                    }),
                    loadTrack = function (id) {
                        $(".plSel").removeClass("plSel");
                        $("#plList li:eq(" + id + ")").addClass("plSel");
                        npTitle.text(tracks[id].name);
                        index = id;
                        audio.src = mediaPath + tracks[id].file + extension;
                        updateDownload(id, audio.src);
                    },
                    updateDownload = function (id, source) {
                        player.on("loadedmetadata", function () {
                            $('a[data-plyr="download"]').attr("href", source);
                        });
                    },
                    playTrack = function (id) {
                        loadTrack(id);
                        audio.play();
                    };
                extension = audio.canPlayType("video/mp4")
                    ? ".mp4"
                    : audio.canPlayType("video/ogg")
                    ? ".ogg"
                    : "";
                loadTrack(index);
            } else {
                // no audio support
                $(".column").addClass("hidden");
                var noSupport = $("#audio1").text();
                $(".container").append('<p class="no-support">' + noSupport + "</p>");
            }
        });
    </script>
</body>
</html>