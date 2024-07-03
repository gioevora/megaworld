<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Megaworld Corporation</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon" sizes="48x48">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v10.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

</head>

<body style="background-image: url('img/home-bg-pattern.png'); background-repeat:repeat; z-index: -2;">
    <div class="fb-customerchat" attribution="setup_tool" page_id=""></div>
    <div class="site-navbar-wrap js-sticky-header">
        <div class="site-navbar-top">
            <div class="px-4">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex mr-auto">
                            <img src="{{asset('img/logo-bottom_9b52579ef0df2bf9f180fd94502b91b2.png')}}" alt="Megaworld" width="250px">

                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <div class="mr-auto">
                            <a href="/career" class="p-2 pl-0">Careers</span></a>
                            <a href="/investors" class="p-2 pl-0">Investors</span></a>
                            <a href="/sustainability" class="p-2 pl-0">Sustainability</span></a>
                            <a href="tel:09924401097" class="text-white"><i class="fa-solid fa-phone fa-xl"></i></a>
                            <a href="https://web.telegram.org/#5645362073" class="text-white"><i class="fa-brands fa-telegram fa-xl"></i></a>
                            <a href="09924401097" class="text-white"><i class="fa-brands fa-facebook fa-xl"></i></a>
                            <a href="" class="text-white"><i class="fa-brands fa-whatsapp fa-xl"></i></a>
                            <a href="" class="text-white"><i class="fa-brands fa-viber fa-xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar">
            <div class="row align-items-right">
                <div class="col-12">
                    <nav>
                        <ul class="primary">
                            <li>
                                <a href="/township">FOR SALE</a>
                                <ul class="sub">
                                    <li><a href="/township/metro_manila">Metro Manila</a></li>
                                    <li><a href="/township/Luzon">Luzon</a></li>
                                    <li><a href="/township/Visayas">Visayas</a></li>
                                    <li><a href="/township/Mindanao">Mindanao</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/residence">FOR LEASE</a>
                                <ul class="sub">

                                    <li><a href="/residences/preselling">Pre-Selling</a></li>
                                    <li><a href="/residences/rfo">Ready for Occupancy</a></li>


                                </ul>
                            </li>
                            <li> <a href="/offices">PREMIER OFFICES</a></li>
                            <li>
                                <a href="/hotels">HOTELS</a>
                                <ul class="sub">
                                    <li><a href="/hotels/belmont-hotels">Belmont Hotels</a></li>
                                    <li><a href="/hotels/richmonde-hotels">Richmonde Hotels</a></li>
                                    <li><a href="/hotels/savoy-hotels">Savoy Hotels</a></li>
                                    <li><a href="/hotels/other-home-grown-brands">Other homegrown brands</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="/lifestyle-malls">LIFESTYLE MALLS</a>
                                <ul class="sub">
                                    <li><a href="/lifestyle-malls#lifstyle">Lifestyle Malls</a></li>
                                    <li><a href="/lifestyle-malls#community-mall">Community Malls</a></li>
                                    <li><a href="/lifestyle-malls#upandcoming">Up and coming</a></li>
                                </ul>
                            </li>
                            <li> <a href="/customer">CUSTOMER SERVICE</a></li>
                            <li> <a href="/corporate-governance">SEND PROPERTY</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="video-container">
        <video autoplay loop muted>
            <!-- Replace 'your-video.mp4' with the actual path or URL of your video -->
            <source src="{{asset('img/background.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="text-overlay">
            <p>THE PHILIPPINES' MOST AWARDED TOWNSHIP DEVELOPER</p>
            <button><a href="/investors">LEARN MORE</a></button>
        </div>
    </div>




    <section class="content mb-2">
        <div class="row g-0">
            <div class="col-sm-4 col-md-7 p-0" style="box-shadow: 25px 0 0 #1674C1, 45px 0 0 #64A2D5, 65px 0 0 #A8CBE7;">
                <img src="{{ asset('img/img1.png') }}" alt="" width="100%">
            </div>

            <div class="col-6 col-md-5" style="margin-top: 10%;">
                <div class="position-relative">
                    <p class="cont py-3 mb-0 text-start">Find the Perfect <b>Home for You</b></p>
                </div>

                <div class="form-group mb-2 text-center mt-4">
                    <select name="" id="">
                        <option value="">Location</option>
                        <option value="">All</option>
                        <option value="">Bacolod</option>
                        <option value="">Batangas</option>
                    </select>
                </div>

                <div class="form-group mb-2 text-center">
                    <select name="" id="">
                        <option value="">Type</option>
                        <option value="">High Rise</option>
                        <option value="">Bacolod</option>
                        <option value="">Batangas</option>
                    </select>
                </div>
                <button class="search-button">Search</button>
            </div>
        </div>

        <div class="container pt-4">
            <div class="col-md-12">
                <div class="yt-video embed-responsive embed-responsive-16by9" style="position: relative; padding-bottom: 56.25%; height: 0;">
                    <iframe src="https://www.youtube.com/embed/tMggCyIQ4sA" frameborder="0" allowfullscreen class="embed-responsive-item" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                </div>
            </div>

            <div class="town-video">
                <p class="py-2" style="font-size: 30px;">Talk of <b style="color: #0e5188;">the Town</b></p>
                <div class="row">
                    <div class="col-md-5 mb-2">
                        <div class="yt-video embed-responsive embed-responsive-16by9" style="position: relative; padding-bottom: 56.25%; height: 0;">
                            <iframe src="https://www.youtube.com/embed/uwEid4pWaqg?rel=0" frameborder="0" allowfullscreen class="embed-responsive-item" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <p>WATCH: Oh yes, October 6 is World Smile Day, and in Bacolod, the Masskara Festival fever has officially started! And, of course, The Upper East is once again at the center of the revelry! Time to see those MEGAWORLD SMILES in the City of Smiles!</p>
                        <p>#MegaworldSmiles<br>#MassKaraFestival2023<br>#MassKaraAtTheUpperEast<br>#Smilebrate<br>#SinadyaSaBacolod</p>
                        <button class="btn btn-primary">WATCH HERE</button>
                    </div>
                </div>
            </div>

            <div class="announcement">
                <p>News and Announcement</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card img-fluid position-relative" style="width:500px">
                            <img class="card-img-top" src="{{ asset('img/arcovia-hotel-image.png') }}" alt="Card image" style="width:100%">
                            <div class="announcement-text position-absolute bottom-0 w-100 bg-dark text-white p-3">
                                <p>Megaworld to build 2nd hotel in Pasig within Arcovia City</p>
                                <p class="description">Property Giant Megaworld, the country's largest developer and operation of...</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card img-fluid position-relative" style="width:500px">
                            <img class="card-img-top" src="{{ asset('img/paragua-sands-hotel-image.jpg') }}" alt="Card image" style="width:100%">
                            <div class="announcement-text position-absolute bottom-0 w-100 bg-dark text-white p-3">
                                <p>Megaworld to build 2nd hotel in Pasig within Arcovia City</p>
                                <p class="description">Property Giant Megaworld, the country's largest developer and operation of...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card img-fluid position-relative" style="width:500px">
                            <img class="card-img-top" src="{{ asset('img/baytown-palawan-image.jpg') }}" alt="Card image" style="width:100%">
                            <div class="announcement-text position-absolute bottom-0 w-100 bg-dark text-white p-3">
                                <p>Megaworld to build 2nd hotel in Pasig within Arcovia City</p>
                                <p class="description">Property Giant Megaworld, the country's largest developer and operation of...</p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <div class="btn-wrapper inview iv-delay1 inview-bottom inview-animate animate-iv-obj">
                <a class="button secondary-button icon-arrow-right" href="https://youtu.be/uwEid4pWaqg?si=hA_z_LfNhB_6r_Nv" target="_blank">
                    <span class="button-text">WATCH HERE</span>
                    <span class="icon-wrapper"><img class="loaded" src="https://www.megaworldcorp.com/sites/default/files/icons/arrow-transparent-blue.png"></span>
                </a>
            </div>


            <div class="home-stocks pt-4" style="background-image: url('img/stockfeed-bg.jpg')">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="heading">Stock Updates</h2>
                        <span class="stock-date">as of 02/21/24 15:05:08</span>
                        <span class="meg-title">MEG:PM</span>
                        <span class="phil-title">Philippines</span>

                        <div class="stock-label">
                            <span class="rate-arrow">
                                <img src="{{asset('img/rate-up.svg')}}" class="loaded">
                            </span>
                            <span class="rate  homeRate1">1.95</span>
                            <span class="currency">PHP</span>
                            <span class="stock-rate">0.01 0.52%</span>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="grid-wrap">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <img src="{{asset('img/open-price.svg')}}" class="loaded">
                                        <span class="item-title">Open Price</span>
                                        <span class="item-label">1.94</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <img src="{{asset('img/volume.svg')}}" class="loaded">
                                        <span class="item-title">Volume</span>
                                        <span class="item-label">8,451,000</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <img src="{{asset('img/day-range.svg')}}" class="loaded">
                                        <span class="item-title">Day Range</span>
                                        <span class="item-label">1.94-1.97</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <img src="{{asset('img/prev-close.svg')}}" class="loaded">
                                        <span class="item-title">Prev. Close</span><span class="item-label">1.94</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <img src="{{asset('img/market-cap.svg')}}" class="loaded">
                                        <span class="item-title">Value</span>
                                        <span class="item-label">16,512,000.00</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <img src="{{asset('img/week-range.svg')}}" class="loaded">
                                        <span class="item-title">52 Week Range</span><span class="item-label">1.91-2.16</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- <div id="home-malls" class="section-margin" style="display: block;">
                <div class="view view-malls view-id-malls view-display-id-block_2 js-view-dom-id-37ad2cdf9b8c8e861544b18dbd8032c3947685040131927c1e308cc928b60f5b">
                    <div class="view-content">
                        <div class="mall-slider-gallery">
                            <ul class="mall-gallery-slider-wrapper owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-5144px, 0px, 0px); transition: all 2s ease 0s; width: 12860px;">
                                        <div class="owl-item cloned" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/southwoods-mall/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Southwoods Mall</h4>
                                                                    <div>Laguna</div>
                                                                </div>
                                                                <img src="{{asset('img/swm_0_0.JPG')}}" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/twin-lakes-shopping-village/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Twin Lakes</h4>
                                                                    <div>Tagaytay</div>
                                                                </div>
                                                                <img src="{{asset('img/megaworld.jpg')}}" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/newport-mall/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Newport Mall</h4>
                                                                    <div>Pasay City</div>
                                                                </div>
                                                                <img src="{{asset('img/megaworld-newport-mall-newport-city-pasay_0_eb1e964ef2ce5c7e2a380a271d6247d8.jpg')}}" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/the-village-square-alabang/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">The Village Square Alabang</h4>
                                                                    <div>Alabang</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/6im96b641zs4exq9DuvSnMcsOzxlrLSOpITQm0utxgs/1546604589/sites/default/files/2018-11/megaworld-the-village-square-alabang_ea8ac358bfe36f7fe93b4d2f897a1e75.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/festive-walk-iloilo/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Festive Walk</h4>
                                                                    <div>Iloilo</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/B0Fmnb11s8MxBJpUoV6u7TKPmRbl7cO9pT4YoYBO2tc/1546604589/sites/default/files/2018-11/megaworld-festive-walk-mall-iloilo_0_0ef413af30d53f73ae0f9fbcba754590.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/uptown-bonifacio/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Uptown Mall</h4>
                                                                    <div>Taguig City</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/oxhSClcPi_BB1HCWkLPi5ZW06ehCIQScv22t3UecT6s/1546604570/sites/default/files/2018-06/mall-slider-3.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/eastwood-city/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Eastwood Mall</h4>
                                                                    <div>Quezon City</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/qo_vQF4NpGQ9fhCN_2i81epemo_p5rwghu_G7OngCSY/1546604570/sites/default/files/2018-06/mall-slider-1.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/mckinley-hill/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Venice Grand Canal</h4>
                                                                    <div>Taguig City</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/q_M2_A4uPGe5C6dcXDco_kdKGKkTXZXTtcdOd3l0qZM/1546604570/sites/default/files/2018-06/venicepiazza_0.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item notTinted active" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="{{asset('img/forbes.jpg')}}" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Forbes Town</h4>
                                                                    <div>Taguig City</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/9jb6cJV-YhV8BXzUiOHiFZhSRWokYk4lIG4P02Ytomg/1546604572/sites/default/files/2018-06/_MG_3124%20%281%29.jpg" width="671" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/lucky-chinatown/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Lucky Chinatown </h4>
                                                                    <div>Manila</div>
                                                                </div>
                                                                <img src="{{asset('img/Lucky_Chinatown_1.jpg')}}" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/southwoods-mall/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Southwoods Mall</h4>
                                                                    <div>Laguna</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/RffL_7H2aSNe5iR7k9keIzN_jDrsRy6liHr3FHjSBP4/1546604570/sites/default/files/2018-06/swm_0_0.JPG" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/twin-lakes-shopping-village/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Twin Lakes</h4>
                                                                    <div>Tagaytay</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/JituwI69iQDo4X-LSeIikAxWcKLxn3r0dVgYKDu5kjU/1546604589/sites/default/files/2018-11/megaworld-twin-lakes-mall-tagaytay_0_96ea4a72f6404738f87fb21f2605cd83.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/newport-mall/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Newport Mall</h4>
                                                                    <div>Pasay City</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/l0NY-ndk4VYdBpG3xa_u713LGm5MUJV1tnYdWP_JzDU/1546604589/sites/default/files/2018-11/megaworld-newport-mall-newport-city-pasay_0_eb1e964ef2ce5c7e2a380a271d6247d8.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/the-village-square-alabang/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">The Village Square Alabang</h4>
                                                                    <div>Alabang</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/6im96b641zs4exq9DuvSnMcsOzxlrLSOpITQm0utxgs/1546604589/sites/default/files/2018-11/megaworld-the-village-square-alabang_ea8ac358bfe36f7fe93b4d2f897a1e75.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/festive-walk-iloilo/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Festive Walk</h4>
                                                                    <div>Iloilo</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/B0Fmnb11s8MxBJpUoV6u7TKPmRbl7cO9pT4YoYBO2tc/1546604589/sites/default/files/2018-11/megaworld-festive-walk-mall-iloilo_0_0ef413af30d53f73ae0f9fbcba754590.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/uptown-bonifacio/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Uptown Mall</h4>
                                                                    <div>Taguig City</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/oxhSClcPi_BB1HCWkLPi5ZW06ehCIQScv22t3UecT6s/1546604570/sites/default/files/2018-06/mall-slider-3.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/eastwood-city/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Eastwood Mall</h4>
                                                                    <div>Quezon City</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/qo_vQF4NpGQ9fhCN_2i81epemo_p5rwghu_G7OngCSY/1546604570/sites/default/files/2018-06/mall-slider-1.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/mckinley-hill/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Venice Grand Canal</h4>
                                                                    <div>Taguig City</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/q_M2_A4uPGe5C6dcXDco_kdKGKkTXZXTtcdOd3l0qZM/1546604570/sites/default/files/2018-06/venicepiazza_0.jpg" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="{{asset('img/forbes.jpg')}}" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Forbes Town</h4>
                                                                    <div>Taguig City</div>
                                                                </div>
                                                                <img src="//megaworld-1da82.kxcdn.com/cdn/farfuture/9jb6cJV-YhV8BXzUiOHiFZhSRWokYk4lIG4P02Ytomg/1546604572/sites/default/files/2018-06/_MG_3124%20%281%29.jpg" width="671" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 643px;">
                                            <li class="gallery-slider-item">
                                                <div class="views-field views-field-field-link-to-website">
                                                    <div class="field-content"><a href="https://megaworld-lifestylemalls.com/mall/lucky-chinatown/" target="_blank">
                                                            <div class="bg-overlay"></div>
                                                            <div class="gallery-slider-item">
                                                                <div class="overlay-wrapper">
                                                                    <h4 class="title">Lucky Chinatown </h4>
                                                                    <div>Manila</div>
                                                                </div>
                                                                <img src="{{asset('img/Lucky_Chinatown_1.jpg')}}" width="675" height="450" alt="" typeof="Image" loading="lazy" class="loaded">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fas fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fas fa-chevron-right"></i></button></div>
                                <div class="owl-dots disabled"></div>
                            </ul>
                        </div>

                    </div>

                </div>

            </div> -->

            <div id="home-bottom">
                <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                    <section class="centered-heading" id="section-8">
                        <div class="container">
                            <div class="sub-heading inview iv-delay1 inview-bottom inview-animate animate-iv-obj">It All Starts Here</div>

                            <h2 class="heading inview iv-delay1 inview-bottom inview-animate underline-main animate-iv-obj">Be Part Of <span class="blue">Our Community</span></h2>
                        </div>

                        <div class="action-box-wrapper inview iv-delay1 inview-bottom inview-animate animate-iv-obj">
                            <div class="action-box image-wrapper"><img alt="buy" data-entity-type="file" data-entity-uuid="7966f830-5d1c-4b1e-a91d-ddb2d1734d88" src="{{asset('img/buy-resize_0_118f320d4623b425263c7b7c139a2053.jpg')}}" loading="lazy" class="loaded">
                                <div class="action-box-overlay">
                                    <div class="title">Flourishing Properties</div>
                                    <!-- <div class="title2">Live beyond standards</div> -->
                                </div>

                                <div class="title-box">
                                    <div class="desc">Live beyond standards</div>

                                    <div class="btn-wrapper"><a class="button primary-button" href="/residences" name="Residences" id="Residences"><span class="button-text">Invest</span> <span class="icon-wrapper"><img class="loaded" src="//megaworld-1da82.kxcdn.com/sites/default/files/icons/right-arrow-transparent.png" loading="lazy"></span> </a></div>
                                </div>
                            </div>

                            <div class="action-box image-wrapper"><img alt="Enjoy modern facilities" data-entity-type="file" data-entity-uuid="1ac9e3c8-726b-4fd1-8cfa-06ccf2e1ff3e" src="//megaworld-1da82.kxcdn.com/cdn/farfuture/bq44erwk20HCKxd--Z1gT4syGEXaNjdk4iZScJL75f0/1546604565/sites/default/files/inline-images/invest-resize_0.jpg" loading="lazy" class="loaded">
                                <div class="action-box-overlay">
                                    <div class="title">Best-in-class Offices</div>
                                </div>

                                <div class="title-box">
                                    <div class="desc">Enjoy modern facilities</div>

                                    <div class="btn-wrapper"><a class="button primary-button" href="/offices" name="Offices" id="Offices"><span class="button-text">Lease</span> <span class="icon-wrapper"><img class="loaded" src="//megaworld-1da82.kxcdn.com/sites/default/files/icons/right-arrow-transparent.png" loading="lazy"></span> </a></div>
                                </div>
                            </div>

                            <div class="action-box image-wrapper"><img alt="Experience hospitality" data-entity-type="file" data-entity-uuid="dbcd4137-99aa-4796-816a-2d5ac38204a4" src="//megaworld-1da82.kxcdn.com/cdn/farfuture/TtsUN--EP2wnv-k_Yaj2PR9UAD-lIiWxT9IlEa2tUuQ/1546604565/sites/default/files/inline-images/hotel-resize_0.jpg" loading="lazy" class="loaded">
                                <div class="action-box-overlay">
                                    <div class="title">Award-winning Hotels</div>
                                </div>

                                <div class="title-box">
                                    <div class="desc">Experience hospitality</div>

                                    <div class="btn-wrapper"><a class="button primary-button" href="/hotels" name="Hotels" id="Hotels"><span class="button-text">Stay</span> <span class="icon-wrapper"><img class="loaded" src="//megaworld-1da82.kxcdn.com/sites/default/files/icons/right-arrow-transparent.png" loading="lazy"></span> </a></div>
                                </div>
                            </div>

                            <div class="action-box image-wrapper"><img alt="join" data-entity-type="file" data-entity-uuid="624d29d4-f64c-4370-a5aa-4252cdf3a118" src="//megaworld-1da82.kxcdn.com/cdn/farfuture/H9L927WziHczVTCORbu5ya0ZN6G-izRhIVjzNaGcI7M/1550724880/sites/default/files/inline-images/join-resize_0_ee1eb682b7b8b325a8fd67624af1684c.jpg" loading="lazy" class="loaded">
                                <div class="action-box-overlay">
                                    <div class="title">Join Our Team</div>
                                </div>

                                <div class="title-box">
                                    <div class="desc">Exciting opportunities await</div>

                                    <div class="btn-wrapper"><a class="button primary-button" href="/careers" name="Careers" id="Careers"><span class="button-text">Apply</span> <span class="icon-wrapper"><img class="loaded" src="//megaworld-1da82.kxcdn.com/sites/default/files/icons/right-arrow-transparent.png" loading="lazy"></span> </a></div>
                                </div>
                            </div>

                            <div class="clear">&nbsp;</div>
                        </div>
                    </section>
                </div>


            </div>

        </div>
    </section>





    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<footer role="contentinfo">
    <div class="container">
        <div class="footer-content">
            <div class="region region-footer">

                <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                    <div class="desktop-footer">
                        <div class="footer-side-logo"><a href="/"><img alt="logo" data-entity-type="file" data-entity-uuid="7b7e1ba7-25bc-4297-b529-39c58cb662ff" src="{{asset('img/logo-bottom_9b52579ef0df2bf9f180fd94502b91b2.png')}}" class="loaded"></a></div>

                        <div class="footer-main-nav-wrapper">
                            <ul class="footer-main-nav">
                                <li><a href="/townships">Townships</a></li>
                                <li><a href="/residences">Residences</a></li>
                                <li><a href="/offices">Offices</a></li>
                                <li><a href="/hotels">Hotels</a></li>
                                <li><a href="/malls">Malls</a></li>
                                <li><a href="/investors">Investors</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>

                        <div class="footer-sub-nav-wrapper">
                            <ul class="footer-main-nav">
                                <li><a href="/company">Company</a></li>
                                <!-- <li><a href="/investors">Investor</a></li> --><!-- <li><a href="/investors/corporate-governance/manual-corporate-governance">Corporate Governance</a></li> -->
                                <li><a href="/careers">Careers</a></li>
                                <li><a href="/news-and-updates">News and Updates</a></li>
                                <li><a href="/videos">Videos</a></li>
                                <li><a href="https://www.megaworldcorp.com/investors/awards">Awards</a></li>
                                <!-- <li><a class="out-sustainalibility" href="/megaworld-foundation" target="_blank">Megaworld Foundation</a></li> -->
                                <li class="social-logo"><a class="facebook" href="https://www.facebook.com/officialmegaworldcorp/" name="Facebook" target="_blank" id="Facebook"><i class="fab fa-facebook-f">&nbsp;</i></a></li>
                                <li class="social-logo"><a class="twitter" href="https://twitter.com/megaworld_corp" name="Twitter" target="_blank" id="Twitter"><i class="fab fa-twitter">&nbsp;</i></a></li>
                                <li class="social-logo"><a class="instagram" href="https://www.instagram.com/megaworld_corp" name="Instagram" target="_blank" id="Instagram"><i class="fab fa-instagram">&nbsp;</i></a></li>
                                <li class="social-logo"><a class="youtube" href="https://www.youtube.com/channel/UCyVGBzOvJo6a7RVIcZekUPA" name="Youtube" target="_blank" id="Youtube"><i class="fab fa-youtube">&nbsp;</i></a></li>
                            </ul>
                        </div>

                        <div class="copyright-logo-wrapper">
                            <div class="footer-logo"><a class="tott-footer" href="/talk-of-the-townships"><img alt="tott" data-entity-type="file" data-entity-uuid="b76968dc-8293-4937-a535-77e13d9afa1e" src="{{asset('img/tott-logo.png')}}" class="loaded"></a><a class="quill-award" href="https://www.megaworldcorp.com/investors/awards/corporate-awards-2020"><img alt="quill" data-entity-type="file" data-entity-uuid="54b594a8-5078-47c8-a5c0-143ea2823940" src="{{asset('img/quill_e1c0d19c9d4ce3b79527b5a4de22e6c6%20%281%29.png')}}" class="loaded"></a><a class="stevie-logo" href="https://www.megaworldcorp.com/investors/awards/corporate-awards-2019"><img alt="stev" data-entity-type="file" data-entity-uuid="62fa8278-cf84-48ce-bd6b-919387e7727f" src="{{asset('img/stevie.png')}}" class="loaded"></a></div>

                            <div class="copyright"><span>© Megaworld Corporation. 2024. All rights reserved.</span>

                                <ul>
                                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/terms-use">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="back-top"><a href="#" id="backtop"><span>Back to Top</span><i class="fas fa-chevron-up">&nbsp;</i></a></div>
                    </div>


                    <div class="mobile-footer">
                        <div class="footer-main-nav-wrapper">
                            <ul class="footer-main-nav">
                                <li><a href="/townships">Townships</a></li>
                                <li><a href="/residences">Residences</a></li>
                                <!-- <li><a href="/offices">Offices</a></li> -->
                                <li><a href="/hotels">Hotels</a></li>
                                <li><a href="/malls">Malls</a></li>
                                <li><a href="/investors">Investors</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>

                        <div class="footer-sub-nav-wrapper">
                            <ul class="footer-main-nav">
                                <li><a href="/company">Company</a></li>
                                <!-- <li><a href="/investors">Investor</a></li> --><!-- <li><a href="/investors/corporate-governance/manual-corporate-governance">Corporate Governance</a></li> -->
                                <li><a href="/careers">Careers</a></li>
                                <li><a href="/news-and-updates">News and Updates</a></li>
                                <li><a href="/videos">Videos</a></li>
                                <li><a href="https://www.megaworldcorp.com/investors/awards">Awards</a></li>
                                <!-- <li><a class="out-sustainalibility" href="/megaworld-foundation" target="_blank">Megaworld Foundation</a></li> -->
                            </ul>
                        </div>

                        <div class="clear">&nbsp;</div>

                        <div class="footer-sub-nav-wrapper social-links">
                            <ul class="footer-main-nav">
                                <li class="social-logo"><a class="facebook" href="https://www.facebook.com/officialmegaworldcorp/" name="Facebook" target="_blank" id="Facebook"><i class="fab fa-facebook-f">&nbsp;</i></a></li>
                                <li class="social-logo"><a class="twitter" href="https://twitter.com/megaworld_corp" name="Twitter" target="_blank" id="Twitter"><i class="fab fa-twitter">&nbsp;</i></a></li>
                                <li class="social-logo"><a class="instagram" href="https://www.instagram.com/megaworld_corp" name="Instagram" target="_blank" id="Instagram"><i class="fab fa-instagram">&nbsp;</i></a></li>
                                <li class="social-logo"><a class="youtube" href="https://www.youtube.com/channel/UCyVGBzOvJo6a7RVIcZekUPA" name="Youtube" target="_blank" id="Youtube"><i class="fab fa-youtube">&nbsp;</i></a></li>
                            </ul>
                        </div>

                        <div class="copyright-logo-wrapper">
                            <div class="footer-logo"><a href="/talk-of-the-townships"><img alt="tott" data-entity-type="file" data-entity-uuid="b76968dc-8293-4937-a535-77e13d9afa1e" src="{{asset('img/tott-logo.png')}}" class="loaded"></a><a href="https://www.megaworldcorp.com/investors/awards/corporate-awards-2020">
                                    <img alt="quill" data-entity-type="file" data-entity-uuid="54b594a8-5078-47c8-a5c0-143ea2823940" src="{{asset('img/quill_e1c0d19c9d4ce3b79527b5a4de22e6c6%20%281%29.png')}}" class="loaded"></a><a class="stevie-logo" href="https://www.megaworldcorp.com/investors/awards/corporate-awards-2019">
                                    <img alt="stev" data-entity-type="file" data-entity-uuid="62fa8278-cf84-48ce-bd6b-919387e7727f" src="{{asset('img/stevie.png')}}" class="loaded"></a></div>

                            <div class="copyright"><span>© Megaworld Corporation. 2024. All rights reserved.</span>

                                <ul>
                                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/terms-use">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="back-top"><a href="#" id="backtop"><span>Back to Top</span><i class="fas fa-chevron-up">&nbsp;</i></a></div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</footer>

</html>