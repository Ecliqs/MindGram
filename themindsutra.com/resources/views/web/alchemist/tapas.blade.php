<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Tapas</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Tapas</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Tapas is the Alchemist of Self-Discipline. It helps you perform to our fullest potential. Tapas will transform you from a novice to pro.</p>
                    <div class="row">
                        <div class="col-md-5 mb-3 p-5">
                            <img src="{{ asset('images/web/alchemists/eight.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-7 mb-3 p-5">
                            <h2>Tapas : Our efforts are the sunshine of our lives</h2>
                            <h3>'Work'</h3>
                            <p>- An Acrylic on canvas (30”*36”) original painting by Dr. Shaifali Gupta. It  is inspired by the grit and discipline from which we need to operate for practicing Santosh.</p>
                        </div>
                    </div>
                    <p>Tapas says that we grow only when we move out of our comfort zone. It recommends self-discipline and focus on our long term goals as a method to do so. Tapas inspires us to improve our will power, i.e., the ability to say Yes to things we want in our lives and a firm No to things we want to eliminate from our lives. Many psychology studies prove that the ability to delay gratification and tolerate discomfort is directly correlated to success in the long term.</p>
                    <div class="row how">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee18.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <p><i>'How', asked the Friendly Flower, 'do you keep working?'</i></p>
                            <p><i>'I just take another step', said the Bumblee Bee, 'when I am most tired'.</i></p>
                        </div>
                    </div>
                    <div class="row how">
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('images/web/illustrations/bee19.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <p><i>'I you don't try, you'll never know how to fly', asked the Friendly Flower.</i></p>
                        </div>
                    </div>
                    <div class="row how">
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('images/web/illustrations/bee20.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <p><i>'Oh just when you were about to give up', said the Bumblee Bee, 'you have changed'.</i></p>
                        </div>
                    </div>
                    <h2>Elements of Tapas</h2>
                    <div class="row how">
                        <div class="col-md-6 mb-3 p-5 text-center">
                            <p><b>Tapas<br/>=<br/>Self Discipline<br/>+<br/>Focus<br/>+<br/>Sacrifice (of transient pleasures)<br/><i class="fa fa-long-arrow-down"></i><br/>Success</b></p>
                        </div>
                        <div class="col-md-6 p-5 mb-3">
                            <img src="{{ asset('images/web/elements/element8.jpg') }}" alt="">
                        </div>
                    </div>
                    <h3>Are you already friends with Tapas?</h3>
                    <p>Take a self-reporting psychological assessment. A disciplined life is categorized by performance, productivity, and better use of time. Self-discipline, inhibiting our headlong urges and passions, is very important. Go through this self discipline assessment to know how mindful you are.</p>
                    <h4>Happiness assessment</h4>
                    <p class="principal"><a href="{{ route('gritAssessment') }}">Assess</a> your grit scale.</p>
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