@extends('layouts.master')
 
@section('content')

<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./home"><i class="fa fa-home"></i> Home</a>
                        <span>FAQ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Faq Section Begin -->
    <section class="faq spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="faq__accordion">
                        <div class="section-title">
                            <span>customer support</span>
                            <h2>Frequently asked questions</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading active">
                                    <a data-toggle="collapse" data-target="#collapseOne">
                                       Lorem ipsum dolor sit amet ?</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">
                                        Lorem ipsum dolor sit amet ?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">
                                      Lorem ipsum dolor sit amet ?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFour">
                                       Lorem ipsum dolor sit amet ?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFive">
                                        Lorem ipsum dolor sit amet ?
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="faq__form">
                        <div class="section-title">
                            <span>ADD Question</span>
                            <h2>Have a question</h2>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <textarea placeholder="Question"></textarea>
                            <button type="submit" class="site-btn">Send Question</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Section End -->

    @endsection