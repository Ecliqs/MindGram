<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Swadhyay</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Swadhyay</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Psychological correlate of Self improvement</h2>
                    <p>Swadhyay is the Alchemist of self improvement. It helps you update yourselves to navigate the ever- changing world around you. Swadhyay transforms Blamers to Bloomers.</p>
                    <div class="row">
                        <div class="col-md-5 mb-3 p-5">
                            <img src="{{ asset('images/web/alchemists/nine.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-7 mb-3 p-5">
                            <h2>Blooming with Swadhyay</h2>
                            <h3>'Bloom'</h3>
                            <p>- An Acrylic on canvas (30”*36”) original painting by Dr. Shaifali Gupta. from which we need to operate for practicing Swadhyay.</p>
                        </div>
                    </div>
                    <div class="row how">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee21.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <p><i>'How do you keep going?', asked the Friendly Flower seeing the Bee work hard.</i></p>
                            <p><i>'By taking small joy breaks', said the Bumblee Bee.</i></p>
                        </div>
                    </div>
                    <p>Swadhyaya helps to inspire us to smoothen your rough edges through introspection. The fourth Niyama is for self- improvement. Swadhyaya invites you to constantly upgrade ourselves through active learning, contemplation, and practising introspection. As you reflect upon yourself , you discover the hidden talents within.</p>
                    <div class="row how">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee22.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <p><i>'What are you celebrating?', asked the Friendly Flower.</i></p>
                            <p><i>'My time with myself', replied the Bumblee Bee.</i></p>
                        </div>
                    </div>
                    <h2>Elements of Swadhyay</h2>
                    <div class="row how">
                        <div class="col-md-6 mb-3 p-5 text-center">
                            <p><b>Swadhyay<br/>=<br/>Learning<br/>+<br/>Contemplating<br/>+<br/>Practicing<br/><i class="fa fa-long-arrow-down"></i><br/>Self-improvement</b></p>
                        </div>
                        <div class="col-md-6 p-5 mb-3">
                            <img src="{{ asset('images/web/elements/element9.jpg') }}" alt="">
                        </div>
                    </div>
                    <p>Swadhyaya is the friend that inspires us to smoothen our rough edges through introspection. The fourth Niyama is for self- improvement. Swadhyaya invites us to constantly upgrade ourselves through active learning, contemplation, and practising introspection. As we reflect upon ourselves , we discover the hidden talents within ourselves. According to positive psychology, self-introspection through journaling can be an important tool that helps us become the best version of ourselves.</p>
                    <h3>Are you already friends with Swadhyay?</h3>
                    <p>Take a self-reporting psychological assessment. Assessing ourselves for areas of improvement is a necessary activity for navigating a course through life. A conscious assessment of our goals, our behaviour, our relationships, our performance in all domains ultimately enables self-improvement. It allows us to expand our options in life. Go through this assessment to know more of the areas you could work on further.</p>
                    <h4>Swadhyay assessment</h4>
                    <p class="principal"><a href="{{ route('selfCareAssessment') }}">Assess</a> your self esteem.</p>
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