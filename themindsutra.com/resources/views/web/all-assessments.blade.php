<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Mindsutra Assessments</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Mindsutra Assessments</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <style>
        .schedule-warp{
            padding-right:20px;
            padding-left:20px;
            padding: 20px 30px;
            border: solid 1px #ddd;
            background-color: #f5f5f5;
            -webkit-transition: all 0.7s cubic-bezier(0.11, 0.6, 0.24, 0.89);
            transition: all 0.7s cubic-bezier(0.11, 0.6, 0.24, 0.89);
        }
        .schedule-warp a{
            text-decoration:none;  
        }
        .schedule{
            background-color:#fff;
        }
        .schedule-warp:hover {
            box-shadow: 0 6px 20px rgba(0,0,0,.07);
            border: solid 1px rgba(100,40,145,.97);
        }
        .schedule{
            padding:100px 0px;
            background-color: #ecedf0;
            font-family: 'Titillium Web';
        }
        .schedule-tag{
            color:#fff;
            background-color: #6164b2;
            padding:3px 8px;
            margin-right: 15px;
            width: 90px;
            font-family: 'Titillium Web';
            text-align: center;
        }
        .schedule-header span{
            display: inline-block;
            margin-right:25px;
        }
        .schedule-header{
            margin-bottom:80px;
        }
        .schedule-card{
            position: relative;
            margin-bottom: 0.7em;
        }
        .schedule-card:hover .insidebox {
            transform: scale(1.033);
            /* box-shadow: 0 5px 18px rgba(0, 0, 0, 0.1); */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .schedule-card:hover:after {
            background: #8a56d1;
            width: 25px;
        }
        .schedule-card:after {
            height: 2px;
            width: 22px;
            background: #ddd;
            content: '';
            position: absolute;
            top: 50%;
            left: -22px;
            transition: all 0.3s ease-in;
        }
        .insidebox { 
            box-shadow: 0 0px 5px rgba(0,0,0,.07);
            background: #ffffff;
            width: 100%;
            height: auto;
            display: flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -webkit-flex;
            display: -o-flex;
            -webkit-align-items: center;
            align-items: center;
            padding: 10px 20px;
            color: #6164B2;
            transition: all 0.2s ease-in;
        }
        .day-one{
            margin-bottom:50px;
            font-weight: bold;
            font-size: 20px;
            color: #6164B2;    
        }
    </style>
    <section class="event-schedule mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="schedule-warp">
                        <a href="{{ route('assertivenessAssessment') }}">
                            <div class="day-one">Assertiveness Assessment (Ahimsa)</div>
                                <div class="schedule-card">
                                    <div class="insidebox">
                                        <span class="schedule-start">Being assertive gives us a confident, respectful demeanor that allows you to communicate effectively with others. Practicing assertive communication helps improve our interactions.</span>                  
                                    </div> 
                                </div>
                            </div>
                        </a>
                    </div>    
                    <div class="col-md-6">
                        <div class="schedule-warp">
                            <a href="{{ route('clarityAssessment') }}">
                                <div class="day-one">Clarity Assessment (Satya)</div>
                                <div class="schedule-card">
                                    <div class="insidebox">
                                        <span class="schedule-start">Clarity of thoughts, actions and feelings can transform many of tour woes to wow! Satya or truth , will help you search and commit to your unique path to joy, curiosity, and purpose.</span>                  
                                    </div> 
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <section class="event-schedule mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="schedule-warp">
                        <a href="{{ route('internetAddictionAssessment') }}">
                            <div class="day-one">Internet Addiction Test (Asteya)</div>
                                <div class="schedule-card">
                                    <div class="insidebox">
                                        <span class="schedule-start">Asteya will decrease your dependency on other things or people. It is the reset reset formula for regaining better control over your mind. Asteya transforms FOMO into JOMO (Joy of Missing Out.</span>                  
                                    </div> 
                                </div>
                            </div>
                        </a>
                    </div>    
                    <div class="col-md-6">
                        <div class="schedule-warp">
                            <a href="{{ route('creativityAssessment') }}">
                                <div class="day-one">Creativity Assessment (Brahmacharya)</div>
                                <div class="schedule-card">
                                    <div class="insidebox">
                                        <span class="schedule-start">Brahmacharya is the Alchemist of Creativity. It connect with your creative intelliegence by connecting the dots. It helps you transform the mundane to beautiful possibilities.</span>                  
                                    </div> 
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <section class="event-schedule mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="schedule-warp">
                        <a href="{{ route('forgivenessAssessment') }}">
                            <div class="day-one">Forgiveness Assessment (Aparigrah)</div>
                                <div class="schedule-card">
                                    <div class="insidebox">
                                        <span class="schedule-start">Aparigraha is the Alchemist of Letting go. It invites you to let go of things that bind you to make this journey of life lighter and easier. Aparigraha transforms regret to redemption.</span>                  
                                    </div> 
                                </div>
                            </div>
                        </a>
                    </div>    
                    <div class="col-md-6">
                        <div class="schedule-warp">
                            <a href="{{ route('authenticityAssessment') }}">
                                <div class="day-one">Authenticity Assessment (Shauch)</div>
                                <div class="schedule-card">
                                    <div class="insidebox">
                                        <span class="schedule-start">Shauch helps you align to your values and beliefs. Authenticity is vital for your mental wellness. Shauch transforms the quality of our being from tamas to satva, that is, from passivity to purity.</span>                  
                                    </div> 
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <section class="event-schedule mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="schedule-warp">
                        <a href="{{ route('happinessAssessment') }}">
                            <div class="day-one">Happiness Assessment (Santosh)</div>
                                <div class="schedule-card">
                                    <div class="insidebox">
                                        <span class="schedule-start">Santosh is the Alchemist of Mindfulness. It helps you celebrate each moment of your life. Santosh transforms contempt to contentment.</span>                  
                                    </div> 
                                </div>
                            </div>
                        </a>
                    </div>    
                    <div class="col-md-6">
                        <div class="schedule-warp">
                            <a href="{{ route('gritAssessment') }}">
                                <div class="day-one">Grit Assessment (Tapas)</div>
                                <div class="schedule-card">
                                    <div class="insidebox">
                                        <span class="schedule-start">Tapas is the Alchemist of Self-Discipline. It helps you perform to our fullest potential. Tapas will transform you from a novice to pro.</span>                  
                                    </div> 
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <section class="event-schedule mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="schedule-warp">
                        <a href="{{ route('selfCareAssessment') }}">
                            <div class="day-one">Self Care Assessment (Swadhyay)</div>
                                <div class="schedule-card">
                                    <div class="insidebox">
                                        <span class="schedule-start">Self-care activities are the things you do to maintain good health and improve well-being. You'll ﬁnd that many of these activities are things you already do as part of your normal routine.</span>                  
                                    </div> 
                                </div>
                            </div>
                        </a>
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

</x-web-layout>