<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Santosh</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Santosh</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Santosh is the Alchemist of Mindfulness. It helps you celebrate each moment of your life. Santosh transforms contempt to contentment.</p>
                    <div class="row">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/alchemists/seven.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-6 mb-3 p-5">
                            <h2>Santosh - Mindfulness</h2>
                            <h3>'Hope'</h3>
                            <p>- An Acrylic on canvas (30”*36”) original painting by Dr. Shaifali Gupta. It  is inspired by the principle of acceptance, contentment and hope from which we need to operate for practicing Santosh.</p>
                        </div>
                    </div>
                    <div class="row how">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee16.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <p><i>'I love the small things', said the Bumblee Bee.</i></p>
                            <p><i>'They', said the Friendly Flower, 'create all the madic'.</i></p>
                        </div>
                    </div>
                    <h2>Elements of Santosh</h2>
                    <div class="row how">
                        <div class="col-md-6 mb-3 p-5 text-center">
                            <p><b>Santosh<br/>=<br/>Acceptance<br/>+<br/>Mindfulness<br/>+<br/>Gratitude<br/><i class="fa fa-long-arrow-down"></i><br/>Contentment</b></p>
                        </div>
                        <div class="col-md-6 p-5 mb-3">
                            <img src="{{ asset('images/web/elements/element7.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="row how">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee17.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <p><i>'What can I give you to make you happy?', asked the Friendly Flower.</i></p>
                            <p><i>'Nothing', nodded the Bumblee Bee, 'I am just happy being me'.</i></p>
                        </div>
                    </div>
                    <h3>Are you already friends with Santosh?</h3>
                    <p>Take a self-reporting psychological assessment. Mindfulness is the ability to stay focused, while being aware of your thoughts and surroundings and being able to recognize and move past distractions as they arise. Go through this mindfulness assessment to know how mindful you are.</p>
                    <h4>Happiness assessment</h4>
                    <p class="principal"><a href="#">Assess</a> your happiness scale.</p>
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