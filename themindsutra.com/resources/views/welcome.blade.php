<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="DocWebIndia" />
    <title>Mindsutra | Welcome Page</title>
        
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

        <div id="carouselExampleIndicators" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/web/banner/banner1.jpg') }}" class="d-block w-100" alt="" width="100%" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/web/banner/banner2.jpg') }}" class="d-block w-100" alt="" width="100%" height="100%">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/web/banner/banner3.jpg') }}" class="d-block w-100" alt="" width="100%" height="100%">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    
    <section class="about mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">About Mindsutra</h2>
                    <h3 class="text-center">What is Mindsutra?</h3>
                    <p>Mindsutra is the science and skill  of transforming WOE to WOW!. It consists of 10 extensively researched psychological concepts which have roots in ancient Yogsutra and modern psychology. These 10 simple yet unique concepts help in:</p>
                    <ul>
                        <li>Paradigm shift in your world view and self image</li>
                        <li>Purposeful and Joyful living</li>
                        <li>Professional productivity and growth</li>
                        <li>Personal relationships and health management</li>
                    </ul>
                    <p>We usually think of Wows as an expression of admiration. However...</p>
                    <p>Wow is not just an emotion. Wow is a state of mind.</p>
                    <p>Wow is not just a state of aspiration, Wow is a state of inspiration.</p>
                    <p>Wow is not just inherited. Wow is created, nurtured and  maintained.</p>
                    <a href="{{ route('mindsutra') }}">Know More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="yoga">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="p-3 border mb-3 border-info rounded">
                        <h4><a href="{{ route('ahimsa') }}">Ahimsa</a></h4>
                        <div><p><strong>Flexibility Skill</strong></p></div>
                    </div>
                    <div class="p-3 border mb-3 border-info rounded">
                        <h4><a href="{{ route('satya') }}">Satya</a></h4>
                        <div><p><strong>Skills for clarity</strong></p></div>
                    </div>
                    <div class="p-3 border mb-3 border-info rounded">
                        <h4><a href="{{ route('asteya') }}">Asteya</a></h4>
                        <div><p><strong>Skills for originality</strong></p></div>
                    </div>
                    <div class="p-3 border mb-3 border-info rounded">
                        <h4><a href="{{ route('brahmacharya') }}">Brahmacharya</a></h4>
                        <div><p><strong>Skills for creativity</strong></p></div>
                    </div>
                    <div class="p-3 border mb-3 border-info rounded">
                        <h4><a href="{{ route('aparigraha') }}">Aparigraha</a></h4>
                        <div><p><strong>Skills for Letting go</strong></p></div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('images/web/yoga.jpg') }}" alt="Yoga" width="100%" height="100%">
                </div>
                <div class="col-md-4 mb-3">
                    <div class="p-3 border mb-3 border-info rounded">
                        <h4><a href="{{ route('shauch') }}">Shauch</a></h4>
                        <div><p><strong>Skills for authenticity</strong></p></div>
                    </div>
                    <div class="p-3 border mb-3 border-info rounded">
                        <h4><a href="{{ route('santosh') }}">Santosh</a></h4>
                        <div><p><strong>Skills for mindfulness</strong></p></div>
                    </div>
                    <div class="p-3 border mb-3 border-info rounded">
                        <h4><a href="{{ route('tapas') }}">Tapas</a></h4>
                        <div><p><strong>Skills for discipline</strong></p></div>
                    </div>
                    <div class="p-3 border mb-3 border-info rounded">
                        <h4><a href="{{ route('swadhyay') }}">Swadhyay</a></h4>
                        <div><p><strong>Skills for self improvement</strong></p></div>
                    </div>
                    <div class="p-3 border mb-3 border-info rounded">
                        <h4><a href="{{ route('ishwarPranidhan') }}">Ishwar Pranidhan</a></h4>
                        <div><p><strong>Skills for miraculous thinking</strong></p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="exercise">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h2 class="text-center">Mindsutra Book Clubs</h2>
                </div>
            </div>
            <div class="row">
                @foreach($events as $event)
                @if($event->event_type == 'Book Club')
                <div class="col-md-4 mb-3">
                    <div class="rounded h-100 bg-white">
                        <div class="ms-image">
                            <a href="#">
                                <img src="{{ asset('images/web/book-clubs/'.$event->image) }}" width="100%" height="100%" alt="Placeholder" title="Placeholder" loading="lazy" typeof="Image" class="image-style-listing-image">
                            </a>
                        </div>
                        <div class="ms-details p-3">
                            <div class="node-title">{{ $event->title }}</div>
                            <div class="ms-field_difficulty small"></div>
                            <div class="ms-field_time small">{{ $event->date }} at {{ $event->time }}</div>
                            <div class="ms-field_suitable_for">
                                <div class="ms-field_time small">{{ $event->description }}</div>
                                <span class="badge rounded-pill bg-dark">Venue: Zoom</span>
                            </div>
                            <a class="btn btn-buy btn-lg" data-bs-toggle="modal" data-bs-target="#register{{ $event->id }}">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="register{{ $event->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" enctype="multipart/form-data" action="{{ route('eventRegistration') }}">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name">
                                        <input type="hidden" class="event" name="event" value="<?php echo $event['id']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-buy btn-lg">Register Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="workshop mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Mindsutra Workshops</h2>
                </div>
            </div>
            <div class="row">
                @foreach($events as $event)
                @if($event->event_type == 'Workshop')
                <div class="col-md-4 mb-3">
                    <div class="rounded h-100 bg-white">
                        <div class="ms-image">
                            <a href="#">
                                <img src="{{ asset('images/web/workshops/'.$event->image ) }}" width="100%" height="100%" alt="{{ $event->title }}" title="{{ $event->title }}" loading="lazy" typeof="Image" class="image-style-listing-image">
                            </a>
                        </div>
                        <div class="ms-details text-center p-3">
                            <div class="node-title">{{ $event->title }}</div>
                            <div class="ms-field_difficulty small">{{ $event->description }}</div>
                            <div class="ms-field_time small">Date: {{ $event->date }} at {{ $event->time }}<br/>Venue: Zoom</div>
                            <a class="btn btn-buy btn-lg" data-bs-toggle="modal" data-bs-target="#register{{ $event->id }}">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="register{{ $event->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" enctype="multipart/form-data" action="{{ route('eventRegistration') }}">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name">
                                        <input type="hidden" class="workshop" name="workshop" value="<?php echo $event['id']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-buy btn-lg">Register Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-book mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">About the Book</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/about-book.jpg') }}" width="100%" height="100%" alt="Mindsutra is a book combining ancient wisdom and modern psychology." loading="lazy" typeof="Image" class="image-style-large">
                        </div>
                        <div class="col-md-8">
                            <div class="field_about_book_description lead mb-3"><p>This book is an attempt to introduce you to the 10 Mindsutra. Mindsutra are a combination of modern Psychology and ancient Yoga Sutras and help weave positivity into your life. Wherever possible, we have presented research on the effect of these Mindsutra on our health (at the cellular level).The 10 Mindsutra will make your relationship with life constructive and beautiful</p></div>
                            <div class="field_about_book_btn">
                                <a href="https://www.amazon.in/Mindsutra-SHAIFALI-GUPTA-MEGHNA-VARMA/dp/9393029024/ref=sr_1_1?crid=3VGSG47BN1S4G&keywords=mindsutra&qid=1656153558&sprefix=mindsutra%2Caps%2C192&sr=8-1" target="_blank" rel="noopener noreferrer" title="Buy Now" class="btn btn-buy btn-lg me-5">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="customers-testimonials" class="owl-carousel">
                        <!--TESTIMONIAL 1 -->
                        <div class="item">
                          <div class="shadow-effect">
                            <p>In today's world, we all are running a race and we really need but truly lack is peace of mind. The mantra of realise the peace is embedded in 'Mindsutra'. The book narrates the ancient indian philosophy wrapped with the facts of psychology and medical science. I really loved the book and highly recommend to read it.</p>
                          </div>
                          <div class="testimonial-name">- Arnab</div>
                        </div>
                        <!--TESTIMONIAL 2 -->
                        <div class="item">
                          <div class="shadow-effect">
                            <p>The book provides a well researched outlook of the ancient concepts glued in with relatable practical and anecdotal information to make it a simple and meaningful read.<br/>The background of the authors does lend in the good basis of scientific facts.</p>
                          </div>
                          <div class="testimonial-name">- Prerna Singhal</div>
                        </div>
                        <!--TESTIMONIAL 3 -->
                        <div class="item">
                          <div class="shadow-effect">
                            <p>The best part of this book is beautiful amalgamation of yoga and psychology. I have never come across this before. It’s a new concept to me at least.<br/>Both authors are health care professionals and following yoga personally and makes it more interesting. Beautifully written. A must read.</p>
                          </div>
                          <div class="testimonial-name">- Shyam</div>
                        </div>
                        <!--TESTIMONIAL 4 -->
                        <div class="item">
                          <div class="shadow-effect">
                            <p>Both writers are experienced Doctors and it's sufficient for purchase this book, detail review after a week. Thanks Amazon for delivery.</p>
                          </div>
                          <div class="testimonial-name">- Chander</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <form class="contact-form" method="post" action="{{ route('sendMessage') }}">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" oncopy="return false" onpaste="return false" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" oncopy="return false" onpaste="return false" oninvalid="this.setCustomValidity('Please enter a valid email')" oninput="this.setCustomValidity('')" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" minlength="10" maxlength="10" oncopy="return false" onpaste="return false" oninvalid="this.setCustomValidity('Please enter a valid mobile number')" oninput="this.setCustomValidity('')" pattern="[6-9]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>
                        <div class="form-group mb-3">
                            <textarea type="text" class="form-control" id="msg" name="msg" placeholder="Enter Your Message" rows="5" oncopy="return false" onpaste="return false"></textarea>
                        </div>
                        <div class="form-group text-center mb-3">
                            <input type="submit" class="btn btn-send" id="send" name="send" value="Send">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="contact-image">
                        <img src="{{ asset('images/web/contact-image.jpg') }}" alt="" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</body>
</html>
