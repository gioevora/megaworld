<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Megaworld Corporation</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon" sizes="48x48">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Fontawsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <div class="site-navbar-wrap" style="background-color:#1674c1">
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
                            <a href="#" class="p-2 pl-0">Careers</a>
                            <a href="#" class="p-2 pl-0">Investors</a>
                            <a href="#" class="p-2 pl-0">Sustainability</a>
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

        <div class="site-navbar-dropdown">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <p>Location
                            <span>
                                <select name="location" id="locationFilter">
                                    <option value="">All</option>
                                    <option value="Bacolod">Bacolod</option>
                                    <option value="Batangas">Batangas</option>
                                    <option value="Boracay">Boracay</option>
                                    <option value="Bulacan">Bulacan</option>
                                    <option value="Cavite">Cavite</option>
                                    <option value="Cebu">Cebu</option>
                                    <option value="Davao">Davao</option>
                                    <option value="Iloilo">Iloilo</option>
                                    <option value="Laguna">Laguna</option>
                                    <option value="Las Pinas">Las Pinas</option>
                                    <option value="Manila">Manila</option>
                                    <option value="Palawan">Palawan</option>
                                    <option value="Pampanga">Pampanga</option>
                                    <option value="Paranaque">Paranaque</option>
                                    <option value="Pasay">Pasay</option>
                                    <option value="Pasig">Pasig</option>
                                    <option value="Quezon City">Quezon City</option>
                                    <option value="Rizal">Rizal</option>
                                    <option value="Tagaytay">Tagaytay</option>
                                    <option value="Taguig">Taguig</option>
                                </select>
                            </span>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>Type
                            <span>
                                <select name="type" id="typeFilter">
                                    <option value="Belmont Hotels">Belmont Hotels</option>
                                    <option value="Richmonde Hotels">Richmonde Hotels</option>
                                    <option value="Savoy Hotels">Savoy Hotels</option>
                                    <option value="Other Homegrown Brands">Other Homegrown Brands</option>

                                </select>
                            </span>
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <main class="pt-4">
        <div class="container">
            <div>
                <ul id="townshipList" class="row">
                    @foreach($hotel as $town)
                    <li class="col-md-4" data-location="{{$town->location}}" data-type="{{$town->hotel_brand}}">
                        <div class="views-field views-field-view-node">
                            <span class="field-content">
                                <div class="residence-item">
                                    <a href="/townships/arden-botanical-estate">
                                        <div class="image-residence-block image-wrapper">
                                            <img src="{{asset('/storage/township_images/' . $town->image) }}" class="loaded" width="100%" height="100%">
                                            <div class="background-overlay"></div>
                                        </div>
                                        <div class="residence-info" style="height: 144px;">
                                            <div class="title-wrap">{{$town->name}}</div>
                                            <div class="desc-wrap">{{$town->location}}
                                                <br>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </span>
                        </div>
                    </li>
                    @endforeach

                </ul>
                <div id="noResultsMessage" style="display: none; text-align: center; margin-top: 10px; margin-bottom:10px">
                    No results found.
                </div>


            </div>

        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            // Handle filter changes
            $('#locationFilter, #typeFilter').on('change', function() {
                filterTownships();
            });

            function filterTownships() {
                var selectedLocation = $('#locationFilter').val();
                var selectedType = $('#typeFilter').val();

                console.log("Selected Location: " + selectedLocation);
                console.log("Selected Type: " + selectedType);

                var anyVisible = false; // Flag to track if any item is visible

                $('#townshipList li').each(function() {
                    var location = $(this).data('location');
                    var type = $(this).data('type');

                    console.log("Item Location: " + location);
                    console.log("Item Type: " + type);

                    var isVisible = true;

                    // Check if the item should be visible based on selected filters
                    if (selectedLocation !== 'All' && location !== selectedLocation) {
                        isVisible = false;
                    }

                    if (selectedType !== '' && type !== selectedType) {
                        isVisible = false;
                    }

                    // Toggle visibility
                    $(this).toggle(isVisible);

                    // Update flag if at least one item is visible
                    if (isVisible) {
                        anyVisible = true;
                    }
                });

                // Display message if no results are found
                if (!anyVisible) {
                    $('#noResultsMessage').css('display', 'block');
                } else {
                    $('#noResultsMessage').css('display', 'none');
                }
            }
        });
    </script>












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