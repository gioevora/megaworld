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
                <img src="{{asset('img/bayshore-res-landing.jpg')}}" class="d-block w-100" alt="...">
                <div class="title-header">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="banner-header">Residences</p>
                            <p class="banner-text">Bayshore Residential Resort 2 Phase 2 is Megaworld’s new residential community project in Westside City which is, in turn, located within Entertainment City Manila, a 31-hectare tourism estate and entertainment complex in Manila Bay.&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="container">
            <div class="section" id="grid-region">
                <div class="block-heading" style="text-align: center;">
                    <div class="sub-heading">BUILDING COMMUNITIES</div>
                    <h2 class="heading">We are committed to giving you a home within a home</h2>
                    <div class="desc-medium">
                        <p>By design, our residences are not just mere habitats. Our blueprints show your enjoyment in mind&nbsp;and your utmost ease at the very heart of every development.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5"> <!-- Added p-3 for padding -->
                        <div class=" mb-3 position-relative">
                            <div class="img-zoom">
                                <img src="{{asset('img/18-avenue-de-triomphe-condominiums-arcovia-city-pasig-thumbnail-grid.jpg')}}" alt="">
                            </div>
                            <div class="box-overlay position-absolute top-0 start-0 p-3" style="transform: translate(10px, 0px);">
                                <div class="title" style="color: #fff;">18 Avenue De Triomphe</div>
                                <p class="text-white">Pasig City</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="mb-3 position-relative">
                            <div class="img-zoom">
                                <img src="{{asset('img/bayshore-residential-resort-condominiums-westside-city-paranaque-thumbnail-grid.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="box-overlay position-absolute top-0 start-0 p-3" style="transform: translate(10px, 0px);">
                                <div class="title" style="color: #fff;">Bayshore Residential Resort</div>
                                <p class="text-white">Paranaque</p>
                            </div>
                        </div>
                        <div class="mb-3 position-relative">
                            <div class="img-zoom">
                                <img src="{{asset('img/the-albany-condominiums-mckinley-west-fort-bonifacio-taguig-thumbnail-grid.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="box-overlay position-absolute top-0 start-0 p-3" style="transform: translate(10px, 0px);">
                                <div class="title" style="color: #fff;">The Albany</div>
                                <p class="text-white">Taguig City</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="mb-3 position-relative">
                            <div class="img-zoom">
                                <img src="{{asset('img/park-mckinley-west-condominiums-mckinley-west-fort-bonifacio-taguig-thumbnail-grid.jpg')}}" alt="">
                            </div>

                            <div class="box-overlay position-absolute top-0 start-0 p-3" style="transform: translate(10px, 0px);">
                                <div class="title" style="color: #fff;">Park mcKinley West</div>
                                <p class="text-white">Taguig City</p>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-5">
                        <div class="position-relative">
                            <div class="img-zoom">
                                <img src="{{asset('img/chelsea-parkplace-condominiums-capital-town-san-fernando-pampanga-thumbnail-grid.jpg')}}" alt="">
                            </div>

                            <div class="box-overlay position-absolute top-0 start-0 p-3" style="transform: translate(10px, 0px);">
                                <div class="title" style="color: #fff;">Chelsea Parkplace</div>
                                <p class="text-white">Pampanga</p>
                            </div>

                        </div>

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