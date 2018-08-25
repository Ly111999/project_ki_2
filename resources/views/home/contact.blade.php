@extends('home.default')

@section('content')

    <div class="container contact_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active"><a href="/contact"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Map Container -->
        <div class="row">
            <div class="col">
                <div id="google_map">
                    <div class="map_container">
                        <div id="map" style="width:1000px;height:100%;">
                            <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59584.76303332001!2d105.75274551281466!3d21.030777741120836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b32bf94975%3A0x46774e6a4316d3f8!2zVknhu4ZOIMSQw4BPIFThuqBPIFFV4buQQyBU4bq-IEZQVA!5e0!3m2!1sen!2s!4v1535008032727"
                                    width="1110" height="506" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->

        <div class="row">

            <div class="col-lg-6 contact_col">
                <div class="contact_contents">
                    <h1>Contact Us</h1>
                    <p>There are many ways to contact us. You may drop us a line, give us a call or send an email,
                        choose what suits you the most.</p>
                    <div>
                        <p>0987 654 321</p>
                        <p>bamboleShop100818@gmail.com</p>
                    </div>
                    <div>
                        <p></p>
                    </div>
                    <div>
                        <p>Open hours: 8.00-23.00 Mon-Fri</p>
                        <p>Sunday: Closed</p>
                    </div>
                </div>

                <!-- Follow Us -->

                <div class="follow_us_contents">
                    <h1>Follow Us</h1>
                    <ul class="social d-flex flex-row">
                        <li><a href="https://www.facebook.com/Bambole-House-285200018723686/"
                               style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="https://twitter.com/login?lang=vi" style="background-color: #41a1f6"><i
                                        class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus"
                                                                             aria-hidden="true"></i></a></li>
                        <li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram"
                                                                             aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>

            <div class="col-lg-6 get_in_touch_col">
                <div class="get_in_touch_contents">
                    <h1>Get In Touch With Us!</h1>
                    <p>Fill out the form below to recieve a free and confidential.</p>
                    <form action="post">
                        <div>
                            <input id="input_name" class="form_input input_name input_ph" type="text" name="name"
                                   placeholder="Name" required="required" data-error="Name is required.">
                            <input id="input_email" class="form_input input_email input_ph" type="email" name="email"
                                   placeholder="Email" required="required" data-error="Valid email is required.">
                            <input id="input_website" class="form_input input_website input_ph" type="url" name="name"
                                   placeholder="Website" required="required" data-error="Name is required.">
                            <textarea id="input_message" class="input_ph input_message" name="message"
                                      placeholder="Message" rows="3" required
                                      data-error="Please, write us a message."></textarea>
                        </div>
                        <div>
                            <button id="review_submit" type="submit" class="red_button_1 message_submit_btn trans_300"
                                    value="Submit">send message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection
