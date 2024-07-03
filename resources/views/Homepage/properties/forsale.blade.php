@include('Homepage.layout.header')

<style>

 .search {
            height: 70px;
            background-color: #fff;
            padding: 10px;
            margin-bottom: 32px;
            border: 1px solid #1674C1;
            border-radius: 50px;
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-input {
            color: gray;
            border: 0;
            outline: 0;
            background: none;
            width: 0;
            margin-top: 5px;
            caret-color: transparent;
            line-height: 40px;
            transition: width 0.4s linear;
        }

        .search .search-input {
            padding: 0 10px;
            width: 550px;
            caret-color: #536bf6;
            font-size: 21px;
            font-weight: 300;
            color: black;
            transition: width 0.4s linear;
        }

        .search:hover>.search-icon {
            background: #1A237E;
            color: #fff;
        }

        .search-icon {
            height: 50px;
            width: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-color: #536bf6;
            border-radius: 50px;
            position: absolute;
            right: 15px;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .search {
                flex-direction: row;
                height: auto;
                padding: 5px;
                margin-bottom: 20px;
                margin-top: 20px;
            }

            .search .search-input {
                width: 100%;
                font-size: 18px;
            }

            .search-icon {
                height: 40px;
                width: 40px;
                right: 10px;
            }
        }

        @media (max-width: 576px) {
            .search {
                padding: 5px;
            }

            .search .search-input {
                font-size: 16px;
            }

            .search-icon {
                height: 35px;
                width: 35px;
                right: 5px;
            }
        }


</style>



<!-- Rooms Section Begin -->
<section class="rooms-section">
    <div class="container-fluid">
       <div class="row justify-content-center">
            <div class="col-md-8 col-sm-10 col-12">
                <form action="{{ route('properties.search') }}" method="GET" class="search">
                    <input type="text" class="search-input" placeholder="search here..." name="query">
                    <button type="submit" class="search-icon">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>

        
        <div class="row">
            @foreach($properties as $proper)
            <div class="col-lg-3 col-md-6 px-0">
                <div class="room-item">
                     <a href="{{route('view-properties', ['id'=>$proper->id])}}">
                    <div class="properties">
                         
                        <img src="{{asset('/storage/properties_img/' . $proper->image) }}" alt="">
                        <div class="properties-label">
                            <h6>
                                <span class="badge <?php echo $proper->type === 'Pre-Selling' ? 'bg-primary' : 'bg-info'; ?> text-white">
                                    {{ $proper->type }}
                                </span>
                            </h6>
                        </div>

                    </div>

                    <div class="ri-text">
                        <div class="item-details pt-1 d-block ">

                          
                                <h5 class="text-truncate">{{$proper->properties_name}}</h5>

                          
                            <h6 class="text-truncate">{{$proper->location}}</h6>
                        </div>
                    </div>
                      </a>

                </div>
            </div>
            @endforeach


            <div class="col-lg-12">
                <div class="room-pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>

@include('Homepage.layout.end')



</body>

</html>