<!-- Featured Items Start -->
<div class="featuredItems mt-5">
    <div class="container-xxl container-xl container-lg container-md container-sm">
        <h2 class="featured-title text-center">Featured Items</h2>

        <!-- Navbar Start -->
        <nav class="navbar justify-content-center mb-5">
            <ul class="nav">
                <li class="nav-item me-lg-3">
                    <a  class="nav-link active nav-all"  aria-current="page" href="#all">All</a>
                </li>

                <li class="nav-item me-lg-3">
                    <a  class="nav-link nav-men" href="#men">Men</a>
                </li>

                <li class="nav-item me-lg-3">
                    <a class="nav-link  nav-women"  href="#women">Women</a>
                </li>

                <li class="nav-item me-lg-3">
                    <a  class="nav-link  nav-kids" href="#kids">Kids</a>
                </li>
            </ul>
        </nav>
        <!-- Navbar End -->

        <!-- Featured Cards Start -->
        <div class="featuredCards mb-5">
            <!-- Section All Start -->
            <section class="all sectionCards" id="all">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen1.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen1.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids1.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen2.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen2.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids2.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen3.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen3.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 9 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids1.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 10 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen4.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 11 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen4.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 12 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids4.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 13 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen5.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 14 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen5.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 15 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids5.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 16 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen6.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 17 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen6.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 18 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids6.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 19 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen7.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 20 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen7.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 21 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids7.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 22 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen8.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 23 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen8.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 24 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids8.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section All End -->

            <!-- Section Men Start -->
            <section class="men sectionCards" id="men">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen1.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen2.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen3.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen4.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen5.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen6.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen7.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredmen8.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section Men End -->

            <!-- Section Women Start -->
            <section class="women sectionCards" id="women">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen1.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen2.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen3.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen4.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen5.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen6.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen7.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredwomen8.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section Women End -->

            <!-- Section Kids Start -->
            <section class="kids sectionCards" id="kids">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids1.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids2.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids3.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids4.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids5.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids6.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$150.00</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids7.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8 -->
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="card position-relative mb-4">
                            <!-- card-thumbnail -->
                            <div class="card-thumbnail">
                                <!-- image -->
                                <img src="{{ asset('frontend/images/Featuredkids8.jpg') }}" class="img-fluid w-100 h-50" alt="featuredImage">
                                <!-- price -->
                                <div class="price position-absolute top-0 end-0">
                                    <p>$120.00</p>
                                </div>
                                <!-- discount -->
                                <div class="discount">
                                    <p>20%</p>
                                    <p>off</p>
                                </div>
                                <!-- view -->
                                <div class="view">
                                    <a class="eye-icon position-absolute top-50 start-50 translate-middle" href="#"><i class="far fa-eye"></i></a>
                                </div>
                            </div>

                            <!-- card-body -->
                            <div class="card-body">
                                <!-- card-title -->
                                <h3 class="card-title">Suspendisse et.</h3>
                                <!-- card-rating -->
                                <div class="card-rating">
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                    <i class="star-icon fas fa-star"></i>
                                </div>
                                <!-- card-media -->
                                <div class="card-media mt-3">
                                    <a class="media-icon me-2" href="#"><i class="fas fa-heart"></i></a>

                                    @if (Auth()->check())
                                        <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                                    @else
                                        <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                                    @endif

                                    <a class="media-icon me-2" href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section Kids End -->
        </div>
        <!-- Featured Cards End -->
    </div>
</div>
<!-- Featured Items End -->
