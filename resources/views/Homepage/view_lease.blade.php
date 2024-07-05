@include('Homepage.layout.header')
    <!-- Header End -->

    <!-- content -->
    <section class="single-properties">

        <div class="container-fluid">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="img-left">
                        <!--<img src="{{asset('/storage/properties_img/' . $proper['image']) }}" />-->
                        <div id="propertyCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($image_filenames as $index => $filename)
                                    <div class="carousel-item @if($index == 0) active @endif">
                                        <img src="{{ asset('../storage/properties_img/' . $filename) }}">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#propertyCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#propertyCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title-view pt-1">
                            {{$proper->lease_name}}
                        </h4>

                        <div class="mb-4">
                            <span class="text-muted ">{{$proper->location}}</span>
                        </div>

                        <p>
                            <?php
                            $sentences = preg_split('/(?<=[.!?])\s+/', $proper->description, -1, PREG_SPLIT_NO_EMPTY);
                            foreach ($sentences as $sentence) {
                                echo $sentence . "<br><br>";
                            }
                            ?>
                        </p>



                    </div>

                    <div class="d-flex">
                        <button class="mb-2 m-2 " type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
                                </svg> Request Viewing
                            </span>
                        </button>

                        <button class="mb-2 m-2">
                            <a href="tel:09924401097">
                                <span>
                                    <i class="fa-solid fa-phone text-white p-1"></i> Call Us
                                </span>
                            </a>
                        </button>


                    </div>

            </div>
            </main>
        </div>
        </div>
    </section>

    <section class="other-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div data-aos="fade-up">
                        <div class="features">
                            <div class="unique-features">
                                <span class="text-header">Unique Features</span>
                                <p>
                                <ul style="margin-left: 8%;">
                                    <li>Residential and Lounge area</li>
                                    <li>(4) High-speed, interior-finished passengers elevators</li>
                                    <li>(1) Service elevator</li>
                                    <li>Closed-circuit TV (CCTV) monitoring for selected common areas</li>
                                    <li>Security command center for 24-hour monitoring of all building facilities</li>
                                    <li>Centralized Mail room</li>
                                    <li>Retail areas</li>
                                    <li>Automatic fire sprinkler system for all units</li>
                                    <li>Overhead water tank and underground cistern for ample water supply</li>
                                    <li>Standby power generator for common and selected areas</li>
                                    <li>Centralized building administrative and security office</li>
                                    <li>Multi-Level basement and podium parking</li>
                                </ul>
                                </p>

                            </div>
                        </div>

                    </div>

                    <div class="features">
                        <div class="unique-features">
                            <span class="text-header">Turnover Year</span>
                            <p>{{$proper->TOY}}</p>
                        </div>
                    </div>


                    <div class="features">
                        <div class="unique-features">
                            <span class="text-header">Details</span>
                            <p>{{$proper->type}}</p>
                            <p>{{$proper->meter}} square meters</p>
                        </div>
                    </div>
                  





                    <div data-aos="fade-up">
                        <div class="yt-video embed-responsive embed-responsive-16by9 mb-4" style="position: relative; padding-bottom: 56.25%; height: 0;">
                            <iframe src="https://www.youtube.com/embed/tMggCyIQ4sA" frameborder="0" allowfullscreen class="embed-responsive-item" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                        </div>
                    </div>
                    <!-- <img src="/img/inquiry.gif" alt=""> -->



                    <div class="location pt-4">
                        <h5 class="mb-3">Location</h5>
                        <p>{{$proper->location}}</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.850644548668!2d121.02448571525334!3d14.554729989823241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9097c2a5fb1%3A0xc4a35886f3bc44f8!2sMakati%2C%20Metro%20Manila%2C%20Philippines!5e0!3m2!1sen!2suk!4v1647865814121!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card sticky-card">
                        <div class="card-body">
                            <div class="title">
                                <div class="d-inline-block align-top mr-1">
                                    <img src="/img/conversation.png" alt="" width="50px">
                                </div>
                                <div class="d-inline-block align-top">
                                    <h4>Send an Inquiry</h4>
                                    <p>Need clarifications about this listing?</p>
                                </div>
                            </div>
                            <form method="post" action="{{ route('send.email') }}">
                                @csrf
                                <input type="hidden" name="properties" value="{{$proper->name}}">
                                <input type="hidden" name="location" value="{{$proper->location}}">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Juan Pedro" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="JuanPedro@gmail.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Your Message</label>
                                    <textarea id="message" name="message" cols="20" rows="3" class="form-control" placeholder="say something..." required></textarea>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="d-flex align-items-center justify-content-center mb-2 m-2 w-100">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                            </svg>
                                            Send Message
                                        </span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- content -->

    

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/img/inquiry.gif" alt="">
                    </div>
                    <div class="col-md-6" style="background-color:#F4F4F4;">
                        <div class="right-side">
                            <div class="title mb- pt-3">
                                <div class="d-inline-block align-top mr-1">
                                    <img src="/img/conversation.png" alt="" width="50px">
                                </div>
                                <div class="d-inline-block align-top">
                                    <h4>Request Viewing</h4>
                                    <p>Need to schedule a visit to this location?</p>
                                </div>
                            </div>

                            <form action="{{ route('send.visit') }}" method="post">
                                @csrf

                                <input type="hidden" name="properties" value="{{$proper->properties_name}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Juan Dela Cruz">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="number">Contact Number</label>
                                            <input type="number" name="number" class="form-control" placeholder="09924401097">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="juandelacruz@gmail.com">
                                        </div>
                                    </div>
                                    
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date">Pick a Date</label>
                                            <input type="date" name="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="time">Pick a Time</label>
                                            <input type="time" name="time" class="form-control">
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Tell us something..."></textarea>
                                </div>
                                
                                <button type="submit" class="d-flex align-items-center justify-content-center mb-4 m-2 w-100" style="margin-bottom: 16px;" >
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                        </svg>
                                        Submit Schedule
                                    </span>
                                </button>
                                
                                <small style="margin-bottom: 8px">Notes: Upon submitting your personal information, please note that we prioritize your privacy and security. We use this information solely for the purpose stated and do not share it with third parties without your explicit consent. For more details, please refer to our privacy policy.</small>
                            </form>




                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>





    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>(12) 345 67890</li>
                                <li>info.colorlib@gmail.com</li>
                                <li>856 Cordia Extension Apt. 356, Lake, United State</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <script>
        AOS.init();
    </script>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Js Plugins -->
    <script src="{{asset('/asset/css/user/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/asset/css/user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/asset/css/user/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/asset/css/user/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('/asset/css/user/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/asset/css/user/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('/asset/css/user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/asset/css/user/js/main.js')}}"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    </body>

    </html>