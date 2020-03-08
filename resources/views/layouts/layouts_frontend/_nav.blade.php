<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">


            <div class="site-logo">
            <a href="{{route('index')}}" class="text-black"><span class="text-primary">HIMATIKA ITS</a>
            </div>

            <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{route('index')}}" class="nav-link">Home</a></li>
                        <li><a href="{{route('profile')}}" class="nav-link">Profile</a></li>
                        <li><a href="{{route('post')}}" class="nav-link">Post</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                        <li class="has-children">
                            <a href="{{route('index')}}" class="nav-link">Info Kemahasiswaan</a>
                            <ul class="dropdown arrow-top">
                                <li><a href="{{route('beasiswa')}}" class="nav-link">Beasiswa</a></li>
                                <li><a href="{{route('berita_terkini')}}" class="nav-link">Berita Terkini</a></li>
                                <li><a href="{{route('olimpiade')}}" class="nav-link">Olimpiade</a></li>
                                <li><a href="{{route('keprofesian')}}" class="nav-link">Keprofesian</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                    class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>

        </div>
    </div>

</header>
