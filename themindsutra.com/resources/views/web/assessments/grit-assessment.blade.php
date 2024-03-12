<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Grit Assessment (Tapas)</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Grit Assessment (Tapas)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Directions for taking the Grit Scale: Please respond to the following 17 items. Be honest - there are no right or wrong answers!</p>
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
                    <form class="test6" method="post">
                        <h2>Please fill below details.</h2>
                        <div class="row mt-5">
                            <div class="form-group col-md-4 mb-3">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group col-md-4 mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group col-md-4 mb-3">
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
                            </div>
                        </div>
                        <table class="table mt-3 mb-5">
                            <thead>
                                <tr>
                                    <th>Question</th>
                                    <th class="text-center">Very much like me</th>
                                    <th class="text-center">Mostly like me</th>
                                    <th class="text-center">Somewhat like me</th>
                                    <th class="text-center">Not much at all like me</th>
                                    <th class="text-center">Not like me at all</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $data)
                                <tr>
                                    <td>{{ $data->question }}</td>
                                    <?php
                                        $split = explode (",", $data->answer_options);
                                        foreach($split as $split){
                                    ?>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="answer{{ $data->id }}" id="answer{{ $data->id }}" value="<?php echo $split; ?>">
                                        </div>
                                    </td>
                                    <?php
                                        }
                                    ?>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <p>
                            <button type="submit" class="btn btn-primary">Calculate Score</button>
                            <button type="reset" class="btn btn-danger">Reset Form</button>
                        </p>
                        <p>
                            Your score on grit assessment:
                            <ul>
                                <li>Grit: <b class="grit"></b></li>
                                <li>Consistency of Interest: <b class="ci"></b></li>
                                <li>Perseverance of Effort: <b class="pe"></b></li>
                                <li>Brief Grit Scale score: <b class="bgrit"></b></li>
                                <li>Ambition: <b class="amb"></b></li>
                            </ul>
                        </p>
                    </form>
                    <ul>
                        <li>
                            <p>For questions 1, 2, 4, 6, 8, 11, 12, 14, 15, and 17, assign the following points:</p>
                            <p>5 = Very much like me</p>
                            <p>4 = Mostly like me</p>
                            <p>3 = Somewhat like me</p>
                            <p>2 = Not much at all like me</p>
                            <p>1 = Not like me at all</p>
                        </li>
                        <li>
                            <p>For questions 3, 5, 7, 9, 10, 13, and 16, assign the following points:</p>
                            <p>1 = Very much like me</p>
                            <p>2 = Mostly like me</p>
                            <p>3 = Somewhat like me</p>
                            <p>4 = Not much at all like me</p>
                            <p>5 = Not like me at all</p>
                        </li>
                    </ul>
                    <p>Grit is calculated as the average score for items 2, 3, 5, 6, 7, 8, 9, 10, 11, 14, 16, and 17. The Consistency of Interest subscale is calculated as the average score for items 3, 5, 7, 9, 10, and 16. The Perseverance of Effort subscale is calculated as the average score for items 2, 6, 8, 11, 14, and 17. The Brief Grit Scale score is calculated as the average score for items 3, 6, 7, 8, 9, 10, 11, and 17. Ambition is calculated as the average score for items 1, 4, 12, 13, and 15.</p>
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