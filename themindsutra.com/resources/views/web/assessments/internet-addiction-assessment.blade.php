<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Internet Addiction Test (Asteya)</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Internet Addiction Test (Asteya)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Internet addiction test</h2>
                    <p>This questionnaire consists of 20 statements. After reading each statement carefully, based upon the 5-point Likert scale, please select the response (0, 1, 2, 3, 4 or 5) which best describes you. If two choices seem to apply equally well, circle the choice that best represents how you are most of the time during the past month. Be sure to read all the statements carefully before making your choice. The statements refer to offline situations or actions unless otherwise specified.</p>
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
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <p>Not Applicable = 0</p>
                        </div>
                        <div class="col-md-2 mb-3">
                            <p>Rarely = 1</p>
                        </div>
                        <div class="col-md-2 mb-3">
                            <p>Occasionally = 2</p>
                        </div>
                        <div class="col-md-2 mb-3">
                            <p>Frequently = 3</p>
                        </div>
                        <div class="col-md-2 mb-3">
                            <p>Often = 4</p>
                        </div>
                        <div class="col-md-2 mb-3">
                            <p>Always = 5</p>
                        </div>
                    </div>
                    <form class="test3" method="post">
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
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" minlength="10" maxlength="10" oncopy="return false" onpaste="return false" pattern="[6-9]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" oninvalid="this.setCustomValidity('Please enter a valid mobile number.')" required>
                            </div>
                            <div class="form-group col-md-4 mb-3">
                                <input type="text" class="form-control" id="internet_usage" name="internet_usage" placeholder="Do you use the Internet for work?" list="aclass" oncopy="return false" onpaste="return false" required>
                                <datalist id="aclass">
                                    <option value="Yes">
                                    <option value="No">
                                </datalist>
                            </div>
                        </div>
                        <table class="table mt-3 mb-5">
                            <thead>
                                <tr>
                                    <th>Question</th>
                                    <th class="text-center">Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $data)
                                <tr>
                                    <td>{{ $data->question }}</td>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <select class="form-control" type="text" name="answer{{ $data->id }}" id="answer{{ $data->id }}">
                                                <option value="" hidden> Select Your Answer </option>
                                                <option value="0">Not Applicable</option>
                                                <option value="1">Rarely</option>
                                                <option value="2">Occasionally</option>
                                                <option value="3">Frequently</option>
                                                <option value="4">Often</option>
                                                <option value="5">Always</option>
                                            </select>
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
                            Your score on internet addiction test is:
                            <input type="text" id="addiction_score" name="score">
                        </p>
                    </form>
                    <p>The IAT total score is the sum of the ratings given by the examinee for the 20 item responses. Each item is rated on a 5-point scale ranging from 0 to 5. The maximum score is 100 points. The higher the score is, the higher is the severity of your problem. Total scores that range from 0 to 30 points are considered to reflect a normal level of Internet usage; scores of 31 to 49 indicate the presence of a mild level of Internet addiction; 50 to 79 reflect the presence of a moderate level; and scores of 80 to 100 indicate a severe dependence upon the Internet.</p>
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