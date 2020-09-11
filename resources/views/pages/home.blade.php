@extends('layouts.master')
 
@section('content')
    
 
    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero__text">
                        <h5>Welcome To</h5>
                        <h2>Wellness Center</h2>
                        <a href="#" class="primary-btn-1">Get Started</a>
                        <a href="#" class="primary-btn second-bg">Download App</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Feature Section Begin -->
    <section class="feature feature--about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="us">
                    <div class="section-title center-title">
                        <span>Why choose us ?</span>
                        <h2>Our feature</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="feature__item">
                        <img src="img/feature/feature-1.png" alt="" width="72" height="75">
                        <h5>Informasi Obat-Obatan</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="feature__item">
                        <img src="img/feature/feature-2.png" alt="" width="72" height="75">
                        <h5>Medical Reports</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="feature__item">
                        <img src="img/feature/feature-3.png" alt="" width="72" height="75">
                        <h5>Doctors</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->
    {{-- opsi tampilan kedua --}}
    {{-- <!-- Feature Section Begin -->
    <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Wellness Center</span>
                            <h2>Why Us?</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua viverra maecenas facilisis. </p>
                        <a href="#" class="primary-btn second-bg">See More</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8" id="us">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature__item">
                                <img src="img/feature/feature-1.png" alt="" width="72" height="75" >
                                <h5>Informasi Obat-obatan</h5>
                            </div>
                            <div class="feature__item">
                                <img src="img/feature/feature-2.png" alt="" width="72" height="75">
                                <h5>Medical report</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature__item right-column">
                                <img src="img/feature/feature-3.png" alt="" width="72" height="75">
                                <h5>Doctors</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End --> --}}

    <!-- About Video Section Begin -->
    <section class="about-video">
        <div class="container" id ="info">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="about__video__bg set-bg" data-setbg="img/video-bg.jpg">
                        <a href="https://www.youtube.com/watch?v=a3Yn8kqYLSQ" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about__video__text">
                        <div class="section-title">
                            <span>Welcome to Wellness Center</span>
                            <h2>Our Information</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum vidnas accumsan lacus vel facilisis. </p>
                        <a href="#" class="primary-btn second-bg">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Video Section End -->

    <!-- Application Form Section Begin -->
    <section class="application-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span id ="form">Giving Best Options For You</span>
                        <h2>Application Form</h2>
                    </div>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input type="text" placeholder="Your Email">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input type="text" placeholder="Your Phone">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input type="text" class="datepicker_pop" placeholder="Date & time">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <select>
                            <option value="">Choose Specialistic</option>
                            <option value="">Refleksologi</option>
                            <option value="">Craniosacral</option>
                            <option value="">Yoga</option>
                            <option value="">Reiki</option>
                          
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <select>
                            <option value="">Pilih Keluhan</option>
                            <option value="">Flu</option>
                            <option value="">Batuk</option>
                            <option value="">Demam</option>
                        </select>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">ASK FOR RECOMMENDATION</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Application Form Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing spad set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span id="price">Get Special Offer</span>
                        <h2>Our Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <div class="pricing__item__title">
                            
                            <h2>Rp. 99k</h2>
                            <h5>Paket A</h5>
                        </div>
                        <ul>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                        </ul>
                        <a href="#" class="primary-btn second-bg">get Started</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <div class="pricing__item__title">
                            
                            <h2>Rp. 199k</h2>
                            <h5>Paket B</h5>
                        </div>
                        <ul>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                        </ul>
                        <a href="#" class="primary-btn second-bg">get Started</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <div class="pricing__item__title">
                            
                            <h2>Rp. 299k</h2>
                            <h5>Paket C</h5>
                        </div>
                        <ul>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                            <li>Konsultasi 3x</li>
                        </ul>
                        <a href="#" class="primary-btn second-bg">get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- LIST STAFF -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Our Great Team</span>
                        <h2>Our Staffs</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="team__all">
                        <a href="./structure" class="primary-btn second-bg">View all</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team.jpg" alt="" width='190' height='150' >
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID</h5>
                            <span>Owner</span>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team.jpg" alt="" width='190' height='150'>
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID</h5>
                            <span>Owner</span>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team.jpg" alt="" width='190' height='150'>
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID</h5>
                            <span>Owner</span>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team.jpg" alt="" width='190' height='150'>
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID</h5>
                            <span>Owner</span>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- LIST STAFF End -->
@endsection