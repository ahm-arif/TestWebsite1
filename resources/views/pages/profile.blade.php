@extends('layouts.master')
 
@section('content')

{{-- untuk slideshow (opsional) --}}
{{-- <div class="slideshow-container">

  
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/slide/slide1.jpg" width = '1500px' height ='350px'>
    <div class="text">test</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/slide/slide2.jpg" width = '1500px' height ='350px'>
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/slide/slide3.jpg" width = '1500px' height ='350px'>
    
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br> --}}

<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./home"><i class="fa fa-home"></i> Home</a>
                        <span>Company Profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Company Profile</span>
                        <h2>WELLNESS CENTER</h2>
                    </div>
                    <div class="blog__large">
                        <div class="blog__large__pic">
                            <img src="img/blog/blog-large.jpg" alt="" width = '500' height='300'>
                        </div>
                        <div class="blog__large__text">
                            <span>Information</span>
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <ul>
                                <li>Wellness Center</li>
                                <li>Medical</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus...</p>
                        
                        </div>
                    </div>
                </div>
            </div>
            
 <!-- Feature Section Begin -->
    <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Wellness Center</span>
                            <h2>What We Provide</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua viverra maecenas facilisis. </p>
                      
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
    <!-- Feature Section End -->


    <!-- Register Start -->
 
                        <div class="sidebar__register">
                            <h5>REgister now</h5>
                            <form action="#">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Phone">
                                <input type="text" placeholder="Date & time" class="datepicker_pop">
                                <button type="submit" class="site-btn second-bg">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register End -->
                    
            </section>

@endsection