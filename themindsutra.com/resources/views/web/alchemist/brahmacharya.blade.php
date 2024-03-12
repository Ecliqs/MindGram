<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Brahmacharya</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Brahmacharya</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Brahmacharya is the Alchemist of Creativity. It  connect with your creative intelliegence by connecting the dots. It helps you transform the mundane to beautiful possibilities.</p>
                    <div class="row">
                        <div class="col-md-5 mb-3 p-5">
                            <img src="{{ asset('images/web/alchemists/four.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-7 mb-3 p-5">
                            <h2>Flow with Brahmachacharya</h2>
                            <h3>'Flow - the joy of life'</h3>
                            <p>- An Acrylic on canvas (36”*24” )painting by Dr. Shaifali Gupta. It  is inspired by flow which brings joy of life when practicing Brahmacharya.</p>
                        </div>
                    </div>
                    <p>Brahmacharya is the friend who helps focus our energies so that we find creative solutions in life.</p>
                    <p>Brahmacharya, the fourth Yama, invites us to experience Divine connectivity through creativity. Many artists and scientists believe that genius happens through them and not from them.</p>
                    <div class="row how">
                        <div class="col-md-3 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee10.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-9 mb-3 p-5">
                            <p><i>'What are you thinking about?'</i></p>
                            <p><i>'Nothing', smiled the Bumblee Bee, 'just being with you is amazing.'</i></p>
                        </div>
                    </div>
                    <h2>Elements of Brahmacharya</h2>
                    <div class="row how">
                        <div class="col-md-6 mb-3 p-5 text-center">
                            <p>Brahmacharya<br/>=<br/> Concentration<br/>+<br/>Creative Inspiration<br/>+</br/>Synchronicity<br/><br/><i class="fa fa-long-arrow-down"></i><br/>Genius (intelligence beyond human limits)</i></p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('images/web/elements/element4.jpg') }}" alt="">
                        </div>
                    </div>
                    <h3>Are you already friends with Brahmacharya?</h3>
                    <p>Take a self-reporting psychological assessment.</p>
                    <h4>Creativity assessment</h4>
                    <p class="principal"><a href="{{ route('creativityAssessment') }}">Assess</a> your creativity skills.</p>
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