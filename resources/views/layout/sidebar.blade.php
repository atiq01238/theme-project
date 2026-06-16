<div id="miniSidebar">
    <div class="brand-logo">
        <a class="d-none d-md-flex align-items-center gap-2" href="@@webRoot/index.html">
            <img src="{{ asset('/assets/images/brand/logo/logo-icon.svg')}}" alt="" />
            <span class="fw-bold fs-4  site-logo-text">Dasher</span>
        </a>
    </div>
    <ul class="navbar-nav flex-column  ">


        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="/"><span class="nav-icon"><svg
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                        <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                    </svg></span> <span class="text">Ecommerce</span></a>
        </li>





        <li class="nav-item">
            <div class="nav-heading">Pages</div>
            <hr class="mx-5 nav-line mb-1" />
        </li>
        <!-- Nav item -->

        <!-- Nav item -->
        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle d-flex align-items-center"  role="button"
                data-bs-toggle="dropdown" aria-expanded="false"
                style="padding:8px 12px; border-radius:10px; transition:0.2s;">

                <span class="me-2 d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                        <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                    </svg>
                </span>

                Authentication
            </a>

            <ul class="dropdown-menu"
                style="border:0; border-radius:12px; padding:8px; min-width:220px; box-shadow:0 12px 30px rgba(0,0,0,0.12);">

                <li>
                    <a class="dropdown-item" href="/auth/login" style="border-radius:8px; padding:10px 12px; transition:0.2s;">
                        Sign In
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="/auth/register" style="border-radius:8px; padding:10px 12px;">
                        Sign Up
                    </a>
                </li>

                {{-- <li>
                    <a class="dropdown-item" href="#" style="border-radius:8px; padding:10px 12px;">
                        Forget Password
                    </a>
                </li> --}}

                {{-- <li>
                    <a class="dropdown-item" href="#" style="border-radius:8px; padding:10px 12px;">
                        Reset Password
                    </a>
                </li> --}}

                

            </ul>
        </li>






        <!-- Nav item -->

        <!-- Nav item -->

        <!-- Nav item -->
        <li>
            <div class="text-center py-5 upgrade-ui ">
                <div>
                    <img src="{{ asset('/assets/images/avatar/avatar-1.jpg')}}" alt=""
                        class="avatar avatar-md rounded-circle">
                    <div class="my-3">
                        <h5 class="mb-1 fs-6">{{Auth::user()->name}}</h5>
                        <span class="text-secondary">Free Version - 1 Month</span>
                    </div>
                    <a href="#!" class="btn btn-primary d-none">Buy Pro</a>

                </div>

            </div>
        </li>

    </ul>

</div>


<div class="offcanvasNav offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">

        <a class="d-flex align-items-center gap-2" href="@@webRoot/index.html">
            <img src="@@webRoot/assets/images/brand/logo/logo-icon.svg" alt="" />
            <span class="fw-bold fs-4  site-logo-text">Dasher</span>
        </a>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">

    </div>
</div>