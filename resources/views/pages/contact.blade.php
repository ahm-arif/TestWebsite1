@extends('layouts.master')

@section('content')
   
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./home"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Map Section Begin -->
    
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.782008244867!2d106.8114386147688!3d-6.1599434955401655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f67441733695%3A0xd5c8ccb5ba3f3a08!2sKetapang%20Business%20Centre%2C%20Jl.%20Kyai%20Haji%20Zainul%20Arifin%2C%20RT.8%2FRW.7%2C%20Krukut%2C%20Kec.%20Taman%20Sari%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011140!5e0!3m2!1sen!2sid!4v1599726669445!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0";
            height="400" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="contact__address">
                        <h4>Contact info</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <p><span>wellnesscenter@gmail.com</span><span>(021) 5409111</span></p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <p>Ketapang Business Centre, Jl. Kyai Haji Zainul Arifin, RT.8/RW.7, Krukut, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11140</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <p><span>Mon - Sat : 8:00am - 5:00pm</span><span>Sunday: Closed</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="contact__form">
                        <h4>Leave a message</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                            </div>
                            <textarea placeholder="Your message"></textarea>
                            <button type="submit" class="site-btn">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection