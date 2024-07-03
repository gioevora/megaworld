<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Megaworld Corporation</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon" sizes="48x48">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Fontawsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body style="background-image: url('img/home-bg-pattern.png'); background-repeat:repeat; z-index: -2;">

    <div class="site-navbar-wrap js-sticky-header">
        <div class="site-navbar-top">
            <div class="px-4">
                <div class="row align-items-center">
                    <div class="col-6 pt-2">
                        <div class="d-flex mr-auto">
                            <img src="{{asset('img/logo-bottom_9b52579ef0df2bf9f180fd94502b91b2.png')}}" alt="Megaworld" width="250px">
                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <div class="mr-auto">
                            <a href="/career" class="p-2 pl-0">Careers</span></a>
                            <a href="/investors" class="p-2 pl-0">Investors</span></a>
                            <a href="/sustainability" class="p-2 pl-0">Sustainability</span></a>
                            <span><img src="{{asset('img/search-svgrepo-com.svg')}}" alt="" style="width: 20px; padding:px;"></span>
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
                                <a href="/township">TOWNSHIP</a>
                                <ul class="sub">
                                    <li><a href="/township/metro_manila">Metro Manila</a></li>
                                    <li><a href="/township/Luzon">Luzon</a></li>
                                    <li><a href="/township/Visayas">Visayas</a></li>
                                    <li><a href="/township/Mindanao">Mindanao</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/residence">RESIDENCES</a>
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
                            <li> <a href="/corporate-governance">CORPORATE GOVERNANCE</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/mpo-banner_0.jpg')}}" class="d-block w-100" alt="...">
                <div class="offices">
                    <div class="row">
                        <div class="col-md-7">
                            <img src="{{asset('img/2019-08-23.png')}}" alt="" width="80%" style="margin:0">
                            <p class="banner-text">We offer topnotch spaces within our LEED (Leadership in Energy and Environmental Design)&nbsp;and IMMUNE-certified office towers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="container">
            <div class="text-center">
                <p style="font-size: 1.2rem; margin: 5% 15%;">As the Philippines’ largest office landlord, we are committed to building sustainable developments that also promote safe working environments for all of our tenants.</p>
            </div>


        </div>

        <div class="img-fluid">
            <img alt="Green Building" data-entity-type="file" data-entity-uuid="4dce4669-e878-4127-9553-fa095d8f9844" src="{{ asset('img/Green Building_1.jpg') }}" style="width: 100%; height: auto;" class="img-fluid">
        </div>

        <div class="container">
            <div class="text-center">
                <h2 style="margin-top: 5%; font-size:2rem;">OUR LEED AND IMMUNE-CERTIFIED PROPERTIES</h2>
                <div class="desc-medium">
                    <p>total of 17 office buildings located in four Megaworld townships in Metro Manila are LEED-certified, while 3 are IMMUNE-certified as of November 2022. Below is the full list:</p>
                </div>

            </div>

        </div>

        <div>
            <p><img alt="LEED buildings" data-entity-type="file" data-entity-uuid="0ef915b7-3fa7-409d-8bf8-c3eb231da047" src="{{asset('img/LEED%20poster_0.jpg')}}" style="width:100%; height:auto;" class="loaded"></p>
        </div>

        <div>
            <p><img alt="IMMUNE buildings" data-entity-type="file" data-entity-uuid="977b8b4a-aab7-4823-9cd9-599a3bd4c450" src="{{asset('img/IMMUNE%20poster_0.jpg')}}" style="width:100%; height:auto;" class="loaded"></p>
        </div>

        <div class="container">
            <div class="text-center">
                <h2 style="margin-top: 5%; font-size:2rem;">Success Happens Here Everyday</h2>
                <div class="desc-medium">
                    <p>We have launched more than 1.5 MILLION square meters of office space so far, sealing the feat as the country's largest office developer and landlord. <br>
                        <br>
                        With more than 200 companies chasing theirs and their employees' dreams, we will continue to develop the ideal environment for professionals to excel.
                    </p>
                </div>

            </div>

        </div>

        <div class="offices-landscape" style="background-image: url('/img/offices-landscape.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="grid-item">
                            <div class="value">1.5M</div>

                            <div class="info-desc">square meters in<br>
                                office spaces launched</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="grid-item">
                            <div class="value">200+</div>

                            <div class="info-desc">companies catered</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="grid-item">
                            <div class="value">70+</div>

                            <div class="info-desc">office towers<br>
                                completed</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="grid-item">
                            <div class="value">10+</div>

                            <div class="info-desc">cities served</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="tenant-5">
            <h2 class="heading">Biggest Office Portfolio Partners</h2>

            <div class="tenant-wrapper">

                <div class="tenant-item"><img alt="jp morgan logo" data-entity-type="file" data-entity-uuid="57d7bad9-566f-43e8-a89b-54f18d688828" src="{{asset('img/jpmc-logo-290x20px.png')}}" class="loaded"></div>

                <div class="tenant-item"><img alt="wells fargo logo" data-entity-type="file" data-entity-uuid="34f15fc8-8b1d-4b22-b3b8-3fd078584523" src="{{asset('img/wells-fargo3.png')}}" class="loaded"></div>

                <div class="tenant-item"><img alt="accenture logo" data-entity-type="file" data-entity-uuid="8dc143af-a907-49b2-b727-75d9d875bedc" src="{{asset('img/accenture3_0.png')}}" class="loaded"></div>

                <div class="tenant-item"><img alt="telus logo" data-entity-type="file" data-entity-uuid="77991735-24e5-4804-a960-e26c57854922" src="{{asset('img/telus3.png')}}" class="loaded"></div>

                <div class="tenant-item"><img alt="factset logo" data-entity-type="file" data-entity-uuid="e27f5107-837a-4116-b2a5-1a7000c2adf0" src="{{asset('img/factset3.png')}}" class="loaded"></div>

                <div class="tenant-item"><img alt="iqor logo" data-entity-type="file" data-entity-uuid="bf9eb863-327b-4dc2-bd0a-b412aecc2bf8" src="{{asset('img/iqor3.png')}}" class="loaded"></div>

                <div class="tenant-item"><img alt="carelon logo" data-entity-type="file" data-entity-uuid="68d35a59-12c5-4f3a-bcf1-e823c93f9019" src="{{asset('img/carelon3.png')}}" class="loaded"></div>

                <div class="tenant-item"><img alt="google logo" data-entity-type="file" data-entity-uuid="07298ee7-aa15-49ae-9395-4f09589ee987" src="{{asset('img/google3.png')}}" class="loaded"></div>

                <div class="tenant-item"><img alt="wns logo" data-entity-type="file" data-entity-uuid="77edf8cf-7eda-4993-989f-dbd10bd335b3" src="{{asset('img/wns3.png')}}" class="loaded"></div>

                <div class="tenant-item"><img alt="cognizant logo" data-entity-type="file" data-entity-uuid="d0d5fae8-30ee-4cbd-8bb0-cf8cd6fbaa32" src="{{asset('img/cognizant3.png')}}" class="loaded"></div>

                <div class="tenant-item">&nbsp;</div>

                <div class="tenant-item">&nbsp;</div>
            </div>
        </div>

        <div class="container">
            
        <div class="offices-grid">
            <div class="heading">Key Office Developments</div>

            <div class="row">
                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">Alliance Global Tower</div>

                        <div class="location">Uptown Bonifacio, Taguig City</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">The World Center</div>

                        <div class="location">Gil Puyat Avenue, Makati City</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">Petron Megaplaza</div>

                        <div class="location">Gil Puyat Avenue, Makati City</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">Cyber One</div>

                        <div class="location">Eastwood City, Libis, Quezon City</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">TechnoPlaza</div>

                        <div class="location">Eastwood City, Libis, Quezon City</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">Paseo Center</div>

                        <div class="location">Paseo, Makati City</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">Two World Square</div>

                        <div class="location">McKinley Hill, Taguig City</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">One Campus Place</div>

                        <div class="location">McKinley Hill, Taguig City</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">World Finance Plaza</div>

                        <div class="location">McKinley Hill, Taguig City</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">One World Center and Two World Center</div>

                        <div class="location">The Mactan Newtown, Lapu-Lapu City, Cebu</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">One Magellan</div>

                        <div class="location">The Mactan Newtown, Lapu-Lapu City, Cebu</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">One Global Center and Two Global Center</div>

                        <div class="location">Iloilo Business Park, Iloilo Business Park</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">One and Three Techno Place</div>

                        <div class="location">Iloilo Business Park</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">One, Two, Three West Campus and Five, Six and Eight West Campus</div>

                        <div class="location">McKinley West, Taguig City</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offices-item">
                        <div class="office">Uptown Place Towers 1, 2 and 3</div>

                        <div class="location">Uptown Bonifacio, Taguig City</div>
                    </div>
                </div>
            </div>
        </div>  

    </div>

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