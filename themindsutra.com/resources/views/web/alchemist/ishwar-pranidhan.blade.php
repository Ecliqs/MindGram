<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Ishwar Pranidhan</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Ishwar Pranidhan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Psychological correlate of harmony</h2>
                    <p>Ishwar Pranidhan is the Alchemist of Miraculous thinking. It helps you become  a channel of the Divine and develop big picture thinking. Ishwar Pranidhan transforms our identity from self to Cosmic Self.</p>
                    <div class="row">
                        <div class="col-md-5 mb-3 p-5">
                            <img src="{{ asset('images/web/alchemists/ten.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-7 mb-3 p-5">
                            <h2>Experiencing creaturehood with Ishwar pranidhan</h2>
                            <h3>'Suryavansh - the sun rising in the womb of our hearts'</h3>
                            <p>- An oil on canvas (18"*24") original painting by Dr. Shaifali Gupta from which we need to operate for practicing Ishwar Pranidhan.</p>
                        </div>
                    </div>
                    <p>Ishwar Pranidhan helps you see the bigger picture. It guides you to partner with the Divine, declare your needs to the Divine and surrender completely, knowing completely that the Universe will connect the dots. It supports you with its limitless options which you might not be able to see, while making a choice. Thus, Ishwar Pranidhan empowers you as the creators of your own life.</p>
                    <div class="row how">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee23.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <p><i>'I am lost', said the Bumblee Bee.</i></p>
                            <p><i>'Just follow the Divine', said the Friendly Flower, 'it always knows the way.'</i></p>
                        </div>
                    </div>
                    <h2>Elements of Ishwar Pranidhan</h2>
                    <div class="row how">
                        <div class="col-md-6 mb-3 text-center">
                            <p><b>Ishwar Pranidhan<br/>=<br/>Big picture thinking<br/>+<br/>Co-creation<br/>+<br/>Unconditional Love<br/>+<br/>Surrender<br/><i class="fa fa-long-arrow-down"></i><br/>Bliss</b></p>
                        </div>
                        <div class="col-md-6 mb-3 p-5">
                            <img src="{{ asset('images/web/elements/element10.jpg') }}" alt="">
                        </div>
                    </div>
                    <h3>Are you already friends with Ishwar Pranidhan?</h3>
                    <h4>Miraculous Thinking assessment</h4>
                    <p class="principal"><a href="#">Assess</a> your big picture thinking.</p>
                    <div class="row how">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee24.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <p><i>'The storm is heavy', said the Friendly Flower, 'I am scared.'</i></p>
                            <p><i>'Don't resist the flow of the wind', said the Bumblee Bee, 'just go with the flow.'</i></p>
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

</x-web-layout>