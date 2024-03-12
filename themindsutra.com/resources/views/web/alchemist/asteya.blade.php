<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Asteya</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Asteya</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Asteya is the Alchemist of originality. It will decrease your dependency on other things or people. It is the reset reset formula for regaining better control over your mind. Asteya transforms FOMO into JOMO (Joy of Missing Out.</p>
                    <div class="row">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/alchemists/three.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <h2>Asteya - joy of missing out JOMO</h2>
                            <h3>'Peace within in a busy city'</h3>
                            <p>- An Acrylic on canvas (24”*24”) painting by Dr. Shaifali Gupta. It  is inspired by the peace that we experience when we practice Asteya.</p>
                        </div>
                    </div>
                    <p>Asteya is the friend who prevents us from stealing our time and joy from ourselves. When we don't find joy even in binge watching or partying with friends or even when we have achieved worldly success, we can turn to Asteya for some sound advice. Asteya helps bring back the joy into our lives.</p>
                    <p>Asteya, the third Yama, invites us to be centred within ourselves. It is also a very apt psychological hack in the modern world of social media.</p>
                    <div class="row how">
                        <div class="col-md-3 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee8.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-9 mb-3 p-5">
                            <p><i>'I wish I looked perfect', said the drooping flower.</i></p>
                            <p><i>'It is the imperfections that make you perfect.'</i></p>
                        </div>
                    </div>
                    <h2>Elements of Asteya</h2>
                    <div class="row how">
                        <div class="col-md-6 mb-3 p-5 text-center">
                            <p><b>Ahimsa<br/>=<br/>Gaining Autonomy<br/>+<br/>Dopamine Detox<br/>+<br/>Selfless service<br/><i class="fa fa-long-arrow-down"></i><br/>Joy (not dependent on external factors)</b></p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('images/web/elements/element3.jpg') }}" alt="">
                        </div>
                    </div>
                    <h3>Are you already friends with Asteya?</h3>
                    <p>Take a self-reporting psychological assessment</p>
                    <h4>Originality assessment</h4>
                    <p class="principal"><a href="#">Assess</a> your dependency.</p>
                    <div class="row how">
                        <div class="col-md-3 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee25.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-9 mb-3 p-5">
                            <p><i>'Everyone's nectar seems sweeter than me', said the flower dejected.</i></p>
                            <p><i>'Never compare yourself with others. Everyone's nectar together', said the Bumblee Bee, 'makes my honey sweet'.</i></p>
                        </div>
                    </div>
                    <
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