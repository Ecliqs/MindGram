<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Self Care Assessment (Swadhyay)</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Self Care Assessment (Swadhyay)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Self-care activities are the things you do to maintain good health and improve well-being. You'll ﬁnd that many of these activities are things you already do as part of your normal routine.</p>
                    <p>In this assessment you will think about how frequently, or how well, you are performing different self-care activities. The goal of this assessment is to help you learn about your self-care needs by spotting patterns and recognizing areas of your life that need more attention.</p>
                    <p>There are no right or wrong answers on this assessment. There may be activities that you have no interest in, and other activities may not be included. This list is not comprehensive, but serves as a starting point for thinking about your self-care needs.</p>
                    <p>Download the below document for creativity assessment.</p>
                    <p><a href="{{ asset('pdfs/self-care-assessment.pdf') }}" class="btn btn-register"> Download Assessment Document </a></p>
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