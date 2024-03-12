<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Forgiveness Assessment (Aparigrah)</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Forgiveness Assessment (Aparigrah)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>    

    <section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright Laura Y. Thompson and C. R. Synder © August 1, 1999 HFS</p>
                    <p>Directions: In the course of our lives negative things may occur because of our own actions, the actions of others, or circumstances beyond our control. For some time after these events, we may have negative thoughts or feelings about ourselves, others, or the situation. Think about how you typically respond to such negative events. Next to each of the following items write the number (from the 7-point scale below) that best describes how you typically respond to the type of negative situation described.</p>
                    <p>There are no right or wrong answers. Please be as open as possible in your answers.</p>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <table class="table table-borderless text-center">
                                <thead>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Almost always<br/>false of me</td>
                                        <td></td>
                                        <td>More often<br/>false of me</td>
                                        <td></td>
                                        <td>More often<br/>true of me</td>
                                        <td></td>
                                        <td>Almost always<br/>true of me</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <style>
                        .questions p{font-size: 18px;font-weight:600; color: black;}
                        .answers{font-size: 16px;font-weight:600;display: flex;justify-content: space-between;}
                        .table { 
                            width: 100%; 
                            border-collapse: collapse;
                        }
                        @media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px){
                            /* Force table to not be like tables anymore */
                            .table table, .table thead, .table tbody, .table th, .table td, .table tr { 
                                display: block; 
                            }
                            /* Hide table headers (but not display: none;, for accessibility) */
                            .table thead tr { 
                                position: absolute;
                                top: -9999px;
                                left: -9999px;
                            }
                            .table td { 
                                /* Behave  like a "row" */
                                border: none;
                                border-bottom: 1px solid #eee; 
                                position: relative;
                                padding-left: 50%;
                                
                            }
                            .table td:before { 
                                /* Now like a table header */
                                position: absolute;
                                /* Top/left values mimic padding */
                                top: 6px;
                                left: 6px;
                                width: 45%; 
                                padding-right: 10px; 
                                white-space: nowrap;
                            }
                            .table td:nth-of-type(2):before {content: "Rather True";}
                            .table td:nth-of-type(3):before {content: "Rather False";}
                        }
                    </style>
                    <form class="test4" method="post">
                        <h2>Please fill below details.</h2>
                        <div class="row mt-5">
                            <div class="form-group col-md-4 mb-3">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name" oncopy="return false" onpaste="return false" required>
                            </div>
                            <div class="form-group col-md-4 mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" oncopy="return false" onpaste="return false" oninvalid="this.setCustomValidity('Please enter a valid email')" oninput="this.setCustomValidity('')" required>
                            </div>
                            <div class="form-group col-md-4 mb-3">
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" minlength="10" maxlength="10" oncopy="return false" onpaste="return false" pattern="[6-9]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" oninvalid="this.setCustomValidity('Please enter a valid mobile number')" oninput="this.setCustomValidity('')" required>
                            </div>
                        </div>
                        <table class="table mb-5">
                            <thead>
                                <tr>
                                    <th>Question</th>
                                    <th class="text-center">Your Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $data)
                                <tr>
                                    <td>{{ $data->question }}</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-control" type="text" name="answer{{ $data->id }}" id="answer{{ $data->id }}">
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <p>
                            <button type="submit" class="btn btn-primary">Calculate Score</button>
                            <button type="reset" class="btn btn-danger">Reset Form</button>
                        </p>
                        <p>
                            Your score on forgiveness test is:
                            <ul>
                                <li>Total HFS: <b class="hfs"></b></li>
                                <li>HFS Forgivenesss of Self: <b class="shfs"></b></li>
                                <li>HFS Forgiveness of Others: <b class="shfs"></b></li>
                                <li>HFS Forgiveness of Situations: <b class="chfs"></b></li>
                            </ul>
                        </p>
                    </form>
                    <p>HFS Scoring Instructions Four scores are calculated for the Heartland Forgiveness Scale (HFS): Total HFS (items 1-18), HFS Forgiveness of Self subscale (items 1-6), HFS Forgiveness of Others subscale (items 7-12), HFS Forgiveness of Situations subscale (items 13-18).</p>
                    <p>Scores for items 1, 3, 5, 8, 10, 12, 14, 16, & 18 are the same as the answer written by the person taking the HFS. Scores for items 2, 4, 6, 7, 9, 11, 13, 15, and 17 are reversed.</p>
                    <p>For example, an answer of 1 is given a score of 7 and an answer of 7 is given a score of 1.</p>
                    <p>The HFS consists of items that reflect a person's tendency to forgive him or herself, other people, and situations that are beyond anyone's control (e.g., a natural disaster). Scores for the Total HFS can range from 18 to 126. Scores for the three HFS subscales can range from 6 to 42.</p>
                    <h2>Total HFS</h2>
                    <p>One's score on the Total HFS indicates how forgiving a person tends to be of oneself, other people, and uncontrollable situations. Higher scores indicate higher levels of forgiveness, and lower scores indicate lower levels of forgiveness.</p>
                    <ul>
                        <li><b>A score of 18 to 54 </b>on the <b>Total HFS </b>indicates that one is usually unforgiving of oneself, others, and uncontrollable situations.</li>
                        <li><b>A score of 55 to 89 </b>on the <b>Total HFS </b>indicates that one is about as likely to forgive, as one is not to forgive oneself, others, and uncontrollable situations.</li>
                        <li><b>A score of 90 to 126 </b>on the <b>Total HFS </b>indicates that one is usually forgiving of oneself, others, and uncontrollable situations.</li>
                    </ul>
                    <h2>HFS Subscales</h2>
                    <p>One's score on the three HFS subscales indicate how forgiving a person tends to be of oneself (HFS Forgiveness of Self), other people (HFS Forgiveness of Others), or situations beyond anyone's control (HFS Forgiveness of Situations). Higher scores indicate higher levels of forgiveness, and lower scores indicating lower levels of forgiveness.</p>
                    <ul>
                        <li><b>A score of 6 to 18 </b>on <b>HFS Forgiveness of Self, HFS Forgiveness of Others, </b>or <b>HFS Forgiveness of Situations </b>indicates that one is usually unforgiving of oneself, other people, or uncontrollable situations, respectively.</li>
                        <li><b>A score of 19 to 29 </b>indicates that one is about as likely to forgive as to not forgive oneself, other people, or uncontrollable situations, respectively.</li>
                        <li><b>score of 30 to 42 </b>indicates that one is usually forgiving of oneself, other people, or uncontrollable situations, respectively.</li>
                    </ul>
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