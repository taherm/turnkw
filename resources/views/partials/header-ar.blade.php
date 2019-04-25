<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Tasaweeq" width="120" height="35" data-sticky-width="120" data-sticky-height="35" data-sticky-top="33" src="{{asset('uploads/logo.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li><a href="http://instagram.com/tsaweeq" target="_blank" title="Instagram">
                                        <i class="fa fa-instagram fa-2x"></i>
                                    </a></li>

                                <li><a href="http://twitter.com/tasaweeq" target="_blank" title="Linkedin">
                                        <i class="fa fa-twitter fa-2x"></i>
                                    </a></li>
                                <li>
                                <li><a href="https://www.linkedin.com/company/tasaweeq" target="_blank" title="Linkedin">
                                        <i class="fa fa-linkedin fa-2x"></i>
                                    </a></li>
                                <li>
                                    <a class="nav-link" href="/">
                                        English
                                    </a>

                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="header-row">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="">
                                            <a class="nav-link" href="/home-ar">
                                                الرئيسية
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="nav-link" href="/about-ar">
                                                عن تساويق </a>
                                        </li>

                                        @foreach($cat as $item)
                                        @if($item->services->count())

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" onclick="return false" style="cursor:default" href="/">
                                                {{$item->title_ar}}
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($item->services as $submenu)
                                                <li>
                                                    <a class="dropdown-item" href="{{url('services_ar/'.$submenu->id)}}">{{$submenu->title_ar}}</a>
                                                </li>
                                                @endforeach
                                            </ul>

                                        </li>

                                        @else
                                        <li class="">
                                            <a class="nav-link" href="/">
                                                {{$item->title_ar}}
                                            </a>

                                        </li>

                                        @endif
                                        @endforeach


                                        <li class="">
                                            <a class="nav-link" href="/workspace-ar">
                                                نطاق العمل </a>
                                        </li>
                                        <li class="">
                                            <a class="nav-link" href="/clients-ar">
                                                عملاءنا </a>
                                        </li>

                                        {{-- <li class="">
														<a class="nav-link" href="/blog-ar">
المدونة														</a>
													</li>  --}}



                                        <li class="">
                                            <a class="nav-link" href="/contact-ar">
                                                إتصل بنا </a>

                                        </li>


                                        <li class="">
                                            <a class="nav-link" href="/careers-ar">
                                                وظائف </a>

                                        </li>

                                        {{-- <li class="">
                                            <a class="nav-link" href="/">
                                                English
                                            </a>

                                        </li>   --}}

                                        {{-- <li class="">
                                            <a href="#" target="_blank" title="Search">
                                                <i class="fa fa-search"></i>
                                            </a>


                                        </li>    --}}

                                    </ul>
                                </nav>
                            </div>

                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>