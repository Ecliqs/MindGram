<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Shauch</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Shauch</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Shauch is the Alchemist of Purity. It helps you align to your values and beliefs. Authenticity is vital for your mental wellness. Shauch transforms the quality of  our being from tamas to satva, that is, from passivity to purity.</p>
                    <div class="row">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/alchemists/six.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-6 mb-3 p-5">
                            <h2>Shauch - Purity</h2>
                            <h3>'Nature'</h3>
                            <p>- An Acrylic on canvas (18"*24")original painting by Dr. Shaifali Gupta. It  depicts the  purity of nature when practicing Shauch.</p>
                        </div>
                    </div>
                    <div class="row how">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee15.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <p><i>'What is the best thing you like?' asked the Bumblee Bee.</i></p>
                            <p><i>'A pure heart like yours', said the Friendly Flower.</i></p>
                        </div>
                    </div>
                    <p>Shauch is that pure hearted friend of ours who helps us cleanse the lens through which we see the world.</p>
                    <p>Purity is the first Niyama. It is a base on which the other Niyamas function. Shauch invites us to adopt practises that cleanse our thoughts and actions. Shauch is the foundation of modern psychology too. It says that we need to constantly question our thoughts and beliefs that we may be adopting subconsciously. And then make conscious choices to get rid of unhelpful ones.</p>
                    <h2>Elements of Shauch</h2>
                    <div class="row how">
                        <div class="col-md-6 mb-3 p-5 text-center">
                            <p><b>Shauch<br/>=<br/>Purity of body<br/>+<br/>Purity of thoughts<br/>+<br/>Purity of surroundings<br/><i class="fa fa-long-arrow-down"></i><br/>Authenticity</b></p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('images/web/elements/element6.jpg') }}" alt="">
                        </div>
                    </div>
                    <h3>Are you already friends with Shauch?</h3>
                    <p>A self-reporting psychological assessment/ framework for Satya.</p>
                    <h4>Authenticity assessment</h4>
                    <p class="principal"><a href="{{ route('authenticityAssessment') }}">Assess</a> your authenticity.</p>
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