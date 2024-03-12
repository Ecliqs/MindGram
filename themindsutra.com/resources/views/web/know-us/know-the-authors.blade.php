<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Know The Authors</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Know The Authors</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="assessment">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <p>The authors of this book, both doctors connected because for them, health is not about being disease-free. Health is about being at ease with self, others and life. They integrate Eastern and Western mindfulness practices to offer a unique approach to 'joie de vivre' (a cheerful expression of joy and love in life).</p>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="rounded card bg-white">
                        <div class="image-box text-center">
                            <img class="rounded" src="{{ asset('images/web/authors/meghna-varma.jpg') }}" alt="Dr. Meghna Varma" width="200">
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2 class="text-center">Dr. Meghna Varma</h2>
                                <h3 class="text-center">MBBS &amp; MS(Ophthalmology), MBA (ISB)</h3>
                                <div class="data">
                                    <p>Dr. Meghna Varma, MS (Ophthal), MBA (ISB) completed her MBBS and MS(Ophthalmology) from KEM Hospital, Mumbai and went on to do cornea fellowship in LV Prasad Eye Institute, Hyderabad. After the onset of the progressive blinding disease (Retinitis Pigmentosa), she decided to switch careers and did her MBA from ISB, Hyderabad. She discovered the intelligence of Ayurveda and Yoga and responded to her inner calling of wanting to be a mental health professional by doing a psychiatry course from CMC Vellore. She currently practices as a psychotherapist with special interest in Yoga therapy. She stays at Hyderabad with her husband Dr. Shyam Varma, who is a well-established urosurgeon, and her six-year-old son Vihaan and one-year-old daughter Asmi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="rounded card bg-white">
                        <div class="image-box text-center">
                            <img class="rounded" src="{{ asset('images/web/authors/shaifali-gupta.jpg') }}" alt="Dr. Shaifali Gupta" width="200">
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2 class="text-center">Dr. Shaifali Gupta</h2>
                                <h3 class="text-center">MBBS &amp; MD (Pathology)</h3>
                                <div class="data">
                                    <p>Dr. Shaifali Gupta completed her MBBS from KEM Hospital Mumbai and MD (Pathology) from Seth VSGH, Ahmedabad. With over 21 years of experience she currently is Sr. Director, Lab services and heads accredited clinical and research labs at Cliantha Research Limited. Though always inclined, she ventured into art in 2012 with finger painting using oil on canvas. Over the years, she has experimented with acrylic and other mediums in her work for creative expression and exhibited her work numerous times. An active practitioner of Yog and meditation, she has been teaching meditation at her workplace and through social media channels. She stays at Ahmedabad with her husband Dr. Amit Gupta, who is a well-established paediatrician, and son Ansh, pursuing post graduation at Dartmouth College, USA.</p>
                                </div>
                            </div>
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