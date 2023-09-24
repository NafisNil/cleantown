@extends('frontend.layout.master')
@section('title')
    Contact - Cleantown Panchbibi
@endsection
@section('content')
   <section class="contact-info mega-section mt-5">
        <div class="container">
            <div class="section-heading center-heading">
                <h2 class="section-title wow words splitting animated animated" data-splitting="words"
                    style="--word-total: 3; visibility: visible;"><span class="word" data-word="Our"
                        style="--word-index: 0;"><span class="word" data-word="Our"
                            style="--word-index: 0;">Our</span></span><span class="whitespace"></span><span class="word"
                        data-word="Contact" style="--word-index: 1;"><span class="word" data-word="Contact"
                            style="--word-index: 1;">Contact</span></span><span class="whitespace"></span><span
                        class="word" data-word="Info" style="--word-index: 2;"><span class="word" data-word="Info"
                            style="--word-index: 2;">Info</span></span></h2>
                <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"></p>
                <div class="line line-solid-main-color wow fadeIn" data-wow-delay="1s"
                    style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;"></div>
            </div>
            <div class="info-section ">
                <div class="row ">
                    <div class="col-12 col-lg-4 ">
                        <div class="info-panel wow fadeInUp" data-wow-delay=".2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><i
                                class="fas fa-map-marker-alt icon"></i>
                            <div class="info-content">
                                <h6 class="info-title">our locations</h6>
                                <p class="info-text">panchbibi municipality, joypurhat</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 ">
                        <div class="info-panel wow fadeInUp" data-wow-delay=".4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><i
                                class="fas fa-phone icon"></i>
                            <div class="info-content">
                                <h6 class="info-title">phone numbers</h6>
                                <p class="info-text"> <a class="tel link" href="tel:+8801736264465">+8801736264465</a><a
                                        class="tel link" href="tel:0123456789">(02) 9876543210</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 ">
                        <div class="info-panel wow fadeInUp" data-wow-delay=".6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"><i
                                class="fas fa-envelope icon"></i>
                            <div class="info-content">
                                <h6 class="info-title">Emails</h6>
                                <p class="info-text"> <a class="tel link"
                                        href="mailto:info@example.com">info@example.com</a><a class="tel link"
                                        href="mailto:support@example.com">support@example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-box">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="map-iframe" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=alexandria&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us  mega-section section-bg-shade" id="contact-us">
        <div class="container">
            <div class="section-heading center-heading">
                <h2 class="section-title wow words splitting animated animated" data-splitting="words"
                    style="--word-total: 3; visibility: visible;"><span class="word" data-word="Leave"
                        style="--word-index: 0;"><span class="word" data-word="Leave"
                            style="--word-index: 0;">Leave</span></span><span class="whitespace"></span><span class="word"
                        data-word="your" style="--word-index: 1;"><span class="word" data-word="your"
                            style="--word-index: 1;">your</span></span><span class="whitespace"></span><span class="word"
                        data-word="message" style="--word-index: 2;"><span class="word" data-word="message"
                            style="--word-index: 2;">message</span></span></h2>
                <!-- <p class="section-subtitle wow fadeInUp" data-wow-delay=".5s"
                  style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Sunt, architecto
                  cupiditate odio rerum est</p> -->
                <div class="line line-solid-main-color wow fadeIn" data-wow-delay="1s"
                    style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;"></div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-9  mx-auto wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <!--Form To have user messages-->
                    <div class="main-form-wraper">
                        <form class="main-form" id="contact-us-form" method="post"
                            action="https://amincodes.com/html/forsa/php/send-mail.php" autocomplete="off">
                            <div class="row ">
                                <div class="col-12 col-lg-6">
                                    <div class="input-wraper">
                                        <input class="text-input" id="user-name" name="UserName" type="text">
                                        <label for="user-name"> Name<span class="req">*</span>
                                        </label><span class="b-border"></span><i></i><span class="error-msg"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="input-wraper">
                                        <input class="text-input" id="user-email" name="UserEmail" type="email">
                                        <label for="user-email"> E-mail<span class="req">*</span>
                                        </label><span class="b-border"></span><i></i><span class="error-msg"></span>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="input-wraper">
                                        <input class="text-input" id="msg-subject" name="subject" type="text">
                                        <label for="msg-subject"> Subject<span class="req">*</span>
                                        </label><span class="b-border"></span><i></i><span class="error-msg"></span>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="input-wraper">
                                        <textarea class=" text-input" id="msg-text" name="message"></textarea>
                                        <label for="msg-text"> your message<span class="req">*</span>
                                        </label><span class="b-border"></span><i></i><span class="error-msg"> </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 submit-wraper">
                                    <button class=" ma-btn-primary" id="submit-btn" type="submit"
                                        name="UserSubmit">Send your message
                                    </button>
                                </div>
                                <div class="col-12 col-md-4 ">
                                    <p class="done-msg"> </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection