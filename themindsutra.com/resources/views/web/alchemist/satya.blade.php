<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Satya</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Satya</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Satya is the Alchemist of Clarity.</p>
                    <p>Clarity of thoughts, actions and feelings can transform many of tour woes to wow! Satya or truth , will help you search and commit to your unique path to joy, curiosity, and purpose.</p>
                    <div class="row">
                        <div class="col-md-2 mb-3 p-5">
                            <img src="{{ asset('images/web/alchemists/two.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-10 mb-3 p-5">
                            <h2>Clarity with Satya</h2>
                            <h3>'Inner eye'</h3>
                            <p>- An Acrylic on canvas (36”*12” radius) painting by Dr. Shaifali Gupta.</p>
                        </div>
                    </div>
                    <p>Inner truth or Satya is the second Yama of Yoga. Interestingly, modern psychologists and world leaders today agree with this: We perform our best when we have a purpose aligned with our inner truth.</p>
                    <p>Satya and Ahimsa are like two alchemists who make our lives fulfilling amd happy.. Truth makes nonviolence very powerful, while non-violence prevents our truthfulness from being hurtful. Satya or Clarity  is the alchemist who knows us in and out and helps us grow in our life purpose. Satya helps us to make important life decisions. It helps us be more truthful to ourselves and others without hurting them.</p>
                    <div class="row how">
                        <div class="col-md-3 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee5.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-9 mb-3 p-5">
                            <p><i>'I just love Being me', said the Bumblee Bee jumping from one to the other.</i></p>
                        </div>
                    </div>
                    <h2>Elements of Satya</h2>
                    <div class="row how">
                        <div class="col-md-6 mb-3 p-5 text-center">
                            <p><b>Ahimsa<br/>=<br/>Self-knowledge<br/>+<br/>Commitment to life purpose<br/><i class="fa fa-long-arrow-down"></i><br/>Living our life purpose</b></p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('images/web/elements/element2.jpg') }}" alt="">
                        </div>
                    </div>
                    <h3>Are you already friends with Satya?</h3>
                    <p>A self-reporting psychological assessment/ framework for Satya.</p>
                    <h4>Clarity assessment</h4>
                    <p>When we have clarity about the purpose in your life, we feel a sense of satisfaction and connectedness which can help us reach higher levels of well-being. Go through the clarity assessment to know yourself better.</p>
                    <p class="principal"><a href="{{ route('clarityAssessment') }}">Assess</a> your clarity skills.</p>
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