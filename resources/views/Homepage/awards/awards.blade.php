@include('Homepage.layout.header')

    

  <div class="video-container" style="position: relative;">
    <img src="{{asset('img/awards-landing.jpg')}}" alt="Background Image" style="background-size: cover; width: 100%;">
    <div class="title-header" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color:white;">
        <p style="font-size: 60px; font-weight:bold;">A Multi-awarded <br>Real Estate Developer</p>
        <div class="desc" style="font-size:1rem;">Megaworld continues to cement its status today as the Philippines’ best developer <br>and an undisputed industry leader with dozens of recognitions from various local and <br>international award-giving organizations.</div>
    </div>
</div>


    <main role="main" style="min-height: 656px;">

        <div class="container">
            <div class="text-center">
                <p style="margin-top:5%; color:#0e5188;">Delivering excellence and distinction from all fronts</p>
            </div>
            <div class="text-center">
                <p>The fact that the total number of awards under its belt at the moment far exceeds the number of years it has been present in the business speaks volumes about Megaworld’s continuing legacy of excellence.</p>

                <p>Amidst all of the accolades that came its way, the company strives to continue delivering best-in-class products and services to its residents, guests, and stakeholders—a commitment that it takes to heart every single day as it creates thriving, “future-proof,” and sustainable communities, one zip code after another.</p>
            </div>

            <div class="awards-landing">
                <h2 class="text-center pt-4">Best Developer in the Philippines</h2>
                <div class="logo-wrap justify-content-center ">
                    <div class="row">
                        @foreach($awards['best'] as $better)
                        <div class="col-md-3">
                            <div class="logo-item"><img src="{{asset('/storage/township_images/' . $better->image) }}">
                                <p class="logo-desc text-center ">{{$better->description}}</p>
                            </div>

                        </div>
                        @endforeach
                        
                    </div>

                </div>
            </div>
            <div class="awards-landing">
                <h2 class="text-center pt-4">International Awards</h2>
                <div class="logo-wrap">
                    <div class="row">
                        @foreach($awards['international'] as $inter)
                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="logo-item d-flex justify-content-center align-items-center">
                                <img src="{{asset('/storage/township_images/' . $inter->image) }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="awards-landing">
                <h2 class="text-center pt-4">Philippines Awards</h2>
                <div class="logo-wrap justify-content-center ">
                    <div class="row">
                        @foreach($awards['philippines'] as $phil)
                        <div class="col-md-3">
                            <div class="logo-item"><img src="{{asset('/storage/township_images/' . $phil->image) }}">
                                
                            </div>

                        </div>
                        @endforeach
                        
                    </div>

                </div>
            </div>



        </div>

    </main>





@include('Homepage.layout.end')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


</html>