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

    <div class="site-navbar-wrap js-sticky-header" >
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
                        <ul class="primary" style="float:right; padding-right:50px;">
                            <li>
                                <a href="/township">TOWNSHIP</a>
                            </li>
                            <li>
                                <a href="/residence">RESIDENCES</a>
                            </li>
                            <li> <a href="/offices">PREMIER OFFICES</a></li>
                            <li>
                                <a href="/hotels">HOTELS</a>
                            </li>
                            <li>
                                <a href="/lifestyle-malls">LIFESTYLE MALLS</a>
                               
                            </li>
                            <li> <a href="/customer">CUSTOMER SERVICE</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="site-navbar-bottom">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="primary justify-content-center ">
                            <li> <a href="/company/corporate-profile">Company</a></li>
                            <li> <a href="/our-business">Our Business</a></li>
                            <li> <a href="/corporate-governance">Corporate Governance</a></li>
                            <li> <a href="/company-disclosures/general-information-sheet">Company Disclosures</a></li>
                            <li> <a href="/investor-relations-program">Investor Relations</a></li>
                            <li> <a href="/awards">Awards</a></li>
                            <li> <a href="/career">Carrers</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <div class="video-container">
        <img src="{{asset('img/company-disclosure.jpg')}}" alt="Background Image" style="background-size: cover; width: 100%;">
        <div class="title-header">
            <p style="font-size: 50px; text-align:start; margin-top:5%;">Company Disclosure</p>
        </div>
    </div>

    <main role="main" style="min-height: 400px;">
        <a id="main-content" tabindex="-1"></a>
        <div class="container">


            <!-- Two Columns -->
            <div class="row">
                <div class="col-md-8">
                    <div class="region region-two-col-main">



                        <article data-history-node-id="178" role="article" about="/investors/company-disclosures/general-information-sheet" class="node page-with-attachment node--type-page-with-attachment node--promoted node--view-mode-full">

                            <div class="company-page">
                                <h2 class="corporate-heading"><span class="field field--name-title field--type-string field--label-hidden">General Information Sheet</span>
                                </h2>

                                <div class="field field--name-field-reports field--type-entity-reference field--label-hidden field__items">
                                   @foreach($report as $docs)
                                    <div class="field__item">

                                        <div class="pdf-item">
                                            <div class="link-title-wrapper">
                                                <div class="title"><span class="fa fa-file-pdf">&nbsp;</span>
                                                    <a href="/investors/investors/gis-2023">
                                                        <span class="field field--name-title field--type-string field--label-hidden">{{$docs->name}}</span>

                                                    </a>
                                                </div>
                                                <div class="btn-wrapper btn-regular fright">
                                                    <a href="{{ route('view_document', ['id' => $docs->id]) }}">View</a>
                                                </div>
                                                <div class="clear">&nbsp;</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>


                            </div>

                        </article>


                    </div>

                </div>
                <div class="col-md-4">
                    <div class="region region-two-col-right">
                        <nav role="navigation" aria-labelledby="block-companydisclosures-menu" id="block-companydisclosures" class="block block-menu navigation main-nav menu--company-disclosures">

                            <h2 id="block-companydisclosures-menu">Company Disclosures</h2>

                            <ul class="menu">
                                <li class="menu-item menu-item--expanded menu-item--active-trail">

                                    <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        SEC Filings
                                    </a>

                                    <ul class="menu-expanded">
                                        <div class="collapse" id="collapseExample">
                                            <li class="menu-item menu-item--active-trail ps-4">
                                                <a href="/company-disclosures/general-information-sheet" data-drupal-link-system-path="node/178" class="is-active">General Information Sheet</a>
                                            </li>
                                            <li class="menu-item ps-4">
                                                <a href="/company-disclosures/information-statements">Information Statements</a>
                                            </li>
                                            <li class="menu-item ps-4">
                                                <a href="/company-disclosures/statement-changes">Statement of Changes</a>
                                            </li>
                                            <li class="menu-item ps-4">
                                                <a href="/company-disclosures/prospectus">Prospectus</a>
                                            </li>
                                            <li class="menu-item ps-4">
                                                <a href="/company-disclosures/annual-reports">Annual Reports</a>
                                            </li>
                                            <li class="menu-item ps-4">
                                                <a href="/company-disclosures/quarterly-reports">Quarterly Reports</a>
                                            </li>
                                            <li class="menu-item ps-4">
                                                <a href="/company-disclosures/current-reports">Current Reports</a>
                                            </li>
                                        </div>

                                    </ul>

                                </li>
                                <li class="menu-item">
                                    <a href="/company-disclosures/minutes-annual-stockholderss-meeting">Minutes of Annual Stockholders' Meeting</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/company-disclosures/notice-annual-or-special-stockholders-meeting" data-drupal-link-system-path="node/491">Notice of the Annual or Special Stockholder's Meeting</a>
                                </li>
                                <li class="menu-item menu-item--expanded">
                                    <a data-bs-toggle="collapse" href="#otherDisclosure" role="button" aria-expanded="false" aria-controls="otherDisclosure">
                                        Other Disclosure to SEC, PSE, and other Agencies
                                    </a>

                                    <ul class="menu collapse" id="otherDisclosure">
                                        <li class="menu-item ps-4">
                                            <a href="/company-disclosures/pse-clarifications-news-articles" data-drupal-link-system-path="node/152">PSE Clarifications on News Articles</a>
                                        </li>
                                        <li class="menu-item ps-4">
                                            <a href="/company-disclosures/public-ownership-reports" data-drupal-link-system-path="node/149">Public Ownership Reports</a>
                                        </li>
                                    </ul>
                                </li>


                            </ul>



                        </nav>

                    </div>

                </div>
            </div>


            <div class="clear"></div>
        </div>

    </main>

  


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
                                <li><a href="/awards">Awards</a></li>
                                <!-- <li><a class="out-sustainalibility" href="/megaworld-foundation" target="_blank">Megaworld Foundation</a></li> -->
                                <li class="social-logo"><a class="facebook" href="https://www.facebook.com/officialmegaworldcorp/" name="Facebook" target="_blank" id="Facebook"><i class="fab fa-facebook-f">&nbsp;</i></a></li>
                                <li class="social-logo"><a class="twitter" href="https://twitter.com/megaworld_corp" name="Twitter" target="_blank" id="Twitter"><i class="fab fa-twitter">&nbsp;</i></a></li>
                                <li class="social-logo"><a class="instagram" href="https://www.instagram.com/megaworld_corp" name="Instagram" target="_blank" id="Instagram"><i class="fab fa-instagram">&nbsp;</i></a></li>
                                <li class="social-logo"><a class="youtube" href="https://www.youtube.com/channel/UCyVGBzOvJo6a7RVIcZekUPA" name="Youtube" target="_blank" id="Youtube"><i class="fab fa-youtube">&nbsp;</i></a></li>
                            </ul>
                        </div>

                        <div class="copyright-logo-wrapper">
                            <div class="footer-logo"><a class="tott-footer" href="/talk-of-the-townships"><img alt="tott" data-entity-type="file" data-entity-uuid="b76968dc-8293-4937-a535-77e13d9afa1e" src="{{asset('img/tott-logo.png')}}" class="loaded"></a><a class="quill-award" href="/awards/corporate-awards-2020"><img alt="quill" data-entity-type="file" data-entity-uuid="54b594a8-5078-47c8-a5c0-143ea2823940" src="{{asset('img/quill_e1c0d19c9d4ce3b79527b5a4de22e6c6%20%281%29.png')}}" class="loaded"></a><a class="stevie-logo" href="/awards/corporate-awards-2019"><img alt="stev" data-entity-type="file" data-entity-uuid="62fa8278-cf84-48ce-bd6b-919387e7727f" src="{{asset('img/stevie.png')}}" class="loaded"></a></div>

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
                                <li><a href="/awards">Awards</a></li>
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
                            <div class="footer-logo"><a href="/talk-of-the-townships"><img alt="tott" data-entity-type="file" data-entity-uuid="b76968dc-8293-4937-a535-77e13d9afa1e" src="{{asset('img/tott-logo.png')}}" class="loaded"></a><a href="/awards/corporate-awards-2020">
                                    <img alt="quill" data-entity-type="file" data-entity-uuid="54b594a8-5078-47c8-a5c0-143ea2823940" src="{{asset('img/quill_e1c0d19c9d4ce3b79527b5a4de22e6c6%20%281%29.png')}}" class="loaded"></a><a class="stevie-logo" href="/awards/corporate-awards-2019">
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