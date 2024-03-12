<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Assertiveness Assessment (Ahimsa)</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Assertiveness Assessment (Ahimsa)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="details mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Being assertive gives us a confident, respectful demeanor that allows you to communicate effectively with others. Practicing assertive communication helps improve our interactions which would result in more effective team building, leadership and collaboration. Go through the assertiveness assessment to know yourself better.</p>
                    <h2>SELF-ASSESSMENT QUESTIONNAIRE</h2>
                    <p>Answer the following questionnaire by placing a cross that corresponds to you answer in the column below:</p>
                    <p><b>Rather true: </b>If you think or act this way most of the time</p>
                    <p><b>Rather false: </b>If you don't agree or rarely do what is described</p>
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
                    <form class="test" method="post">
                        <h2>Please fill below details.</h2>
                        <div class="row mt-5">
                            <div class="form-group col-md-4 mb-3">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name" oncopy="return false" onpaste="return false" required>
                            </div>
                            <div class="form-group col-md-4 mb-3">
                                <input type="text" class="form-control" id="gender" name="gender" placeholder="Your Gender" list="gclass" oncopy="return false" onpaste="return false" required>
                                <datalist id="gclass">
                                    <option value="Male">
                                    <option value="Female">
                                    <option value="Others">
                                </datalist>
                            </div>
                            <div class="form-group col-md-4 mb-3">
                                <input type="text" class="form-control" id="age" name="age" placeholder="Your Age (in years)" oncopy="return false" onpaste="return false" required>
                            </div>
                            <div class="form-group col-md-4 mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" oncopy="return false" onpaste="return false" oninvalid="this.setCustomValidity('Please enter a valid email')" oninput="this.setCustomValidity('')" required>
                            </div>
                            <div class="form-group col-md-4 mb-3">
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" minlength="10" maxlength="10" oncopy="return false" onpaste="return false" pattern="[6-9]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                            </div>
                        </div>
                        <table class="table mb-5">
                            <thead>
                                <tr>
                                    <th>Question</th>
                                    <th class="text-center">Rather True</th>
                                    <th class="text-center">Rather False</th>
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
                            Your score on assertiveness assessment:
                            <ul>
                                <li>Passive attitude: <b class="flight"></b></li>
                                <li>Aggressive attitude: <b class="attack"></b></li>
                                <li>Manipulation: <b class="manipul"></b></li>
                                <li>Harmonious assertiveness: <b class="harmony"></b></li>
                            </ul>
                        </p>
                    </form>
                    <p>
                        <a class="create-chart d-none btn btn-primary" onclick="createChart();">Create Chart</a>
                        <input type="hidden" id="flight2" value="">
                        <input type="hidden" id="attack2" value="">
                        <input type="hidden" id="manipul2" value="">
                        <input type="hidden" id="harmony2" value="">
                    </p>
                    <p>This questionnaire is taken from the book "Assertiveness" (D. Chalvin, Editions ESF, 1981).</p>
                    <p>The items of the questionnaire all correspond to an example of a passive (flight), aggressive (attack), manipulative or harmonious assertiveness. The list below indicates their distribution according to the 4 considered attitudes. Every time that you answered “Rather true” to a given question, you can add 1 point to the corresponding attitude. The total score is indicative of your tendency to adopt the corresponding attitude.</p>
                    <ul>
                        <li>Passive attitude (flight): 1, 7, 15, 16, 17, 25, 26, 35, 36, 37, 50, 51, 52, 59, 60</li>
                        <li>Aggressive attitude (attack): 4, 6, 10, 11, 20, 21, 28, 29, 30, 39, 40, 48, 49, 55, 56</li>
                        <li>Manipulation: 3, 5, 9, 12, 13, 19, 22, 31, 32, 41, 42, 46, 47, 54, 57</li>
                        <li>Harmonious assertiveness: 2, 8, 14, 18, 23, 24, 27, 33, 34, 38, 43, 44, 45, 53, 58</li>
                    </ul>
                    <div class="row">
                        <div class="col-md-12 p-5">
                            <canvas class="d-none" id="scoreChart" width="100%" height="400"></canvas>
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