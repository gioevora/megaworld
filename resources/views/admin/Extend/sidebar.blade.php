<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main" style="background-color: #202A54;">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="{{asset('img/logo.png')}}" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white" style="font-size: 20px;">MEGAWORLD</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link text-white {{ request()->is('Admin/dashboard') ? 'active' : '' }}" href="/Admin/dashboard">
                    <div class="text-white text-center  me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-gauge fa-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-bold">Dashboard</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white {{ request()->is('Admin/Properties') ? 'active' : '' }}" href="/Admin/Properties">
                    <div class="text-white text-center  me-2 d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-building fa-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-bold">Appoinment</span>
                </a>
            </li>
            <li>
                <a class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#otherDisclosure" aria-expanded="false" aria-controls="otherDisclosure">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bag-shopping fa-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-bold">Properties</span>
                </a>

                <ul class="menu collapse" id="otherDisclosure" style="list-style: none; padding: 0;">
                    <li class="nav-item" style="padding-left: 10px;">
                        <a class="nav-link text-white {{ request()->is('Admin/Mall') ? 'active' : '' }}" style="text-decoration: none;  font-weight:bold;" href="/Admin/For-Sale">For Sale</a>
                    </li>
                    <li class="nav-item" style="padding-left: 10px;">
                        <a class="nav-link text-white" style="text-decoration: none;  font-weight:bold;" href="/Admin/For-Lease">For Lease</a>
                    </li>
                </ul>


            </li>

         
    
           
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('Admin/Awards') ? 'active' : '' }}" href="/Admin/Awards">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-newspaper fa-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-bold">Awards</span>
                </a>
            </li>
            





        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">

            <a class="btn w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button" style="background-color: #f6d200; font-weight:bold;">Log Out</a>
        </div>
    </div>
</aside>