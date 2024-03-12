<x-web-layout>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Mindsutra Music</h1>
                    <ul class="breadcrumb breadcrumb--classic">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a>Mindsutra Music</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        a, a:visited {
            color: #8cc3e6;
            outline: 0;
            text-decoration: underline;
        }
        a:hover, a:focus {
            color: #8cc3e6;
        }
        .add-bottom {
            margin-bottom: 2rem !important;
        }
        .left {
            float: left;
        }
        .right {
            float: right;
        }
        .center {
            text-align: center;
        }
        .hidden {
            display: none;
        }
        .no-support {
            margin: 2rem auto;
            text-align: center;
            width: 90%;
        }
        audio {
            display: none;
        }
        #audiowrap, #plwrap {
            margin: 0 auto;
        }
        #tracks {
            font-size: 0;
            position: relative;
            text-align: center;
        }
        #nowPlay {
            display: block;
            font-size: 0;
        }
        #nowPlay span {
            display: inline-block;
            font-size: 1.05rem;
            vertical-align: top;
        }
        #nowPlay span#npAction {
            padding: 21px;
            width: 30%;
        }
        #nowPlay span#npTitle {
            padding: 21px;
            text-align: right;
            width: 70%;
        }
        #plList li {
            cursor: pointer;
            display: block;
            margin: 0;
            padding: 21px 0;
        }
        #plList li:hover {
            background-color: #8cc3e6;
            color: #fff;
        }
        .plItem {
            position: relative;
        }
        .plTitle {
            left: 50px;
            overflow: hidden;
            position: absolute;
            right: 65px;
            text-overflow: ellipsis;
            top: 0;
            white-space: nowrap;
        }
        .plNum {
            padding-left: 21px;
            width: 25px;
        }
        .plLength {
            padding-left: 21px;
            position: absolute;
            right: 21px;
            top: 0;
        }
        .plSel,
        .plSel:hover {
            background-color: #8cc3e6;
            color: #fff;
            cursor: default !important;
        }
        #tracks a {
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 2.3rem;
            height: 40px;
            line-height: 0.2;
            margin: 0 5px 30px;
            padding: 12px;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        #tracks a:hover, #tracks a:active {
            background-color: rgba(0, 0, 0, 0.1);
            color: #fff;
        }
        #tracks a::-moz-focus-inner {
            border: 0;
            padding: 0;
        }
        .plyr--audio .plyr__controls {
            background-color: transparent;
            border: none;
            color: #8cc3e6;
            font-family: "Source Sans Pro", arial, sans-serif;
            padding: 20px 20px 20px 13px;
            width: 100%;
        }
        a.plyr__controls__item.plyr__control:hover,
        .plyr--audio .plyr__controls button:hover,
        .plyr--audio .plyr__controls button.tab-focus:focus,
        .plyr__play-large {
            background-color: rgba(0, 0, 0, 0.33);
        }
        .plyr__progress--played,
        .plyr__volume--display {
            color: rgba(0, 0, 0, 0.33);
        }
        .plyr--audio .plyr__progress--buffer,
        .plyr--audio .plyr__volume--display {
            background-color: rgba(0, 0, 0, 0.33);
        }
        .plyr--audio .plyr__progress--buffer {
            color: rgba(0, 0, 0, 0.33);
        }
        .plyr__controls .plyr__controls__item.plyr__time {
            font-size: 14px;
            margin-left: 7px;
        }
        #btnPrev, #btnNext{
            background-color: #8cc3e6;
            color: black;
        }
        @media only screen and (max-width: 600px) {
            #nowPlay span#npAction {
                display: none;
            }
            #nowPlay span#npTitle {
                display: block;
                text-align: center;
                width: 100%;
            }
        }
    </style>
    <!-- free downloadable music -->
    <section class="music">
        <div class="container">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="column add-bottom">
                    <div id="mainwrap">
                        <div id="nowPlay">
                            <span id="npAction">Paused...</span><span id="npTitle"></span>
                        </div>
                        <div id="audiowrap">
                            <div id="audio0">
                                <video id="audio1" preload controls>Your browser does not support HTML5 Video!</video>
                            </div>
                            <div id="tracks">
                                <a id="btnPrev">&larr;</a>
                                <a id="btnNext">&rarr;</a>
                            </div>
                        </div>
                        <div id="plwrap">
                            <ul id="plList"></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
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