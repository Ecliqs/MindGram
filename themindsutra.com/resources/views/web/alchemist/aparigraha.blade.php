<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Aparigraha</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Aparigraha</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Aparigraha is the Alchemist of Letting go. It  invites you to let go of things that bind you to make this journey of life lighter and easier. Aparigraha transforms regret to redemption.</p>
                    <div class="row">
                        <div class="col-md-4 mb-3 p-5">
                            <img src="{{ asset('images/web/alchemists/five.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-8 mb-3 p-5">
                            <h2>Freedom with Aparigraha</h2>
                            <h3>'Freedom: reaching higher skies'</h3>
                            <p>- An Acrylic on canvas (24”*24” )original painting by Dr. Shaifali Gupta. It  is inspired by freedom which ensues letting go when practicing Aparigraha.</p>
                        </div>
                    </div>
                    <p>Aparigraha is about making space in our lives for new beginnings after letting go of the junk that we may have accumulated in our lives. The accumulated stuff could be material, extra commitments, mental baggage, or belief systems.</p>
                    <div class="row how">
                        <div class="col-md-3 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee13.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-9 mb-3 p-5">
                            <p><i>(Bee watching the caterpillar change to a butterfly.) 'Letting go is the start of a beautiful journey', said the Bumblee Bee.</i></p>
                        </div>
                    </div>
                    <p>Aparigraha is our simple minded friend. Whenever we travel with this friend taking minimal things in a backpack, we experience true freedom.</p>
                    <p>Non-possessiveness, the fifth Yama, guides us to declutter our physical, mental, and emotional space. Many psychologists in their personal stories say that they were able to experience true freedom only when they let go of their emotional baggage.</p>
                    <h2>Elements of Aparigraha</h2>
                    <div class="row how">
                        <div class="col-md-6 mb-3 p-5 text-center">
                            <p>Aparigraha<br/>=<br/> Minimalism<br/>+<br/>Unattachment<br/>+</br/>Forgiveness<br/><i class="fa fa-long-arrow-down"></i><br/>Freedom of spirit</i></p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('images/web/elements/element5.jpg') }}" alt="">
                        </div>
                    </div>
                    <h3>Are you already friends with Aparigraha?</h3>
                    <p>Take a self-reporting psychological assessment.</p>
                    <h4>Forgiveness assessment</h4>
                    <p class="principal"><a href="{{ route('forgivenessAssessment') }}">Assess</a> your forgiveness skills.</p>
                    <div class="row how">
                        <div class="col-md-3 mb-3 p-5">
                            <img src="{{ asset('images/web/illustrations/bee26.jpg') }}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-md-9 mb-3 p-5">
                            <p><i>'I can't let go of the past', cried the bud to the flower.</i></p>
                            <p><i>'Bud', said the friendly flower, 'let go the past to enjoy your beautiful present.'</i></p>
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