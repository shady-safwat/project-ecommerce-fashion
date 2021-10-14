<!-- Trending Item Start -->
<div class="trendingItem">
    <div class="container-xxl container-xl container-lg container-md container-sm container-xs">
        <h2 class="title-trending text-center mb-5">Trending Item</h2>
        <div class="row">
            <!-- Card1 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card mb-lg-5 mb-md-5 ">
                    <img src="{{ asset('frontend/images/fashionTrending.jpg') }}" alt="trendingImg1">

                    <div class="price">
                        <p>$150.00</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card2 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card mb-lg-5 mb-md-5">
                    <img src="{{ asset('frontend/images/fashionTrending2.jpg') }}" alt="trendingImg2">

                    <div class="price">
                        <p>$150.00</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card3 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card mb-lg-5 mb-md-5">
                    <img src="{{ asset('frontend/images/fashionTrending3.jpg') }}" alt="trendingImg3">

                    <div class="price">
                        <p>$120.00</p>
                    </div>

                    <div class="discount">
                        <p>20%</p>
                        <p>OFF</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card4 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card mb-lg-5 mb-md-5">
                    <img src="{{ asset('frontend/images/fashionTrending4.jpg') }}" alt="trendingImg4">

                    <div class="price">
                        <p>$120.00</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card5 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card mb-lg-5 mb-md-5">
                    <img src="{{ asset('frontend/images/fashionTrending5.jpg') }}" alt="trendingImg5">

                    <div class="price">
                        <p>$150.00</p>
                    </div>

                    <div class="discount">
                        <p>20%</p>
                        <p>OFF</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card6 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card mb-lg-5 mb-md-5">
                    <img src="{{ asset('frontend/images/fashionTrending6.jpg') }}" alt="trendingImg6">

                    <div class="price">
                        <p>$150.00</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card7 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card mb-lg-5 mb-md-5">
                    <img src="{{ asset('frontend/images/fashionTrending7.jpg') }}" alt="trendingImg7">

                    <div class="price">
                        <p>$120.00</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card8 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="card mb-lg-5 mb-md-5">
                    <img src="{{ asset('frontend/images/fashionTrending8.jpg') }}" alt="trendingImg8">

                    <div class="price">
                        <p>$120.00</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card9 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12  hidden">
                <div class="card mb-lg-5 mb-md-5 ">
                    <img src="{{ asset('frontend/images/fashionTrending.jpg') }}" alt="trendingImg1">

                    <div class="price">
                        <p>$150.00</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card10 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12  hidden">
                <div class="card mb-lg-5 mb-md-5">
                    <img src="{{ asset('frontend/images/fashionTrending2.jpg') }}" alt="trendingImg2">

                    <div class="price">
                        <p>$150.00</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card11 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12  hidden">
                <div class="card  mb-lg-5 mb-md-5">
                    <img src="{{ asset('frontend/images/fashionTrending3.jpg') }}" alt="trendingImg3">

                    <div class="price">
                        <p>$120.00</p>
                    </div>

                    <div class="discount">
                        <p>20%</p>
                        <p>OFF</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card12 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12  hidden">
                <div class="card mb-lg-5 mb-md-5">
                    <img src="{{ asset('frontend/images/fashionTrending4.jpg') }}" alt="trendingImg4">

                    <div class="price">
                        <p>$120.00</p>
                    </div>

                    <div class="view">
                        <a href="#"class="eye-icon position-absolute top-50 start-50 translate-middle"><i class="far fa-eye"></i></a>
                    </div>
                    <div class="body-card">
                        <h2 class="subTitle-trending">Suspendisse et.</h2>
                        <div class="rating">
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                            <i class="star-icon fas fa-star"></i>
                        </div>

                        <div class="media mt-3">
                            <a href="#" class="media-icon me-2"><i class="fas fa-heart"></i></a>

                            @if (Auth()->check())
                                <a class="media-icon me-2" href="#"><i class="fas fa-shopping-cart"></i></a>
                            @else
                                <a class="media-icon me-2" href="{{route('login')}}"><i class="fas fa-shopping-cart"></i></a>
                            @endif

                            <a href="#" class="media-icon me-2"><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="buttons-trending text-center">
            <a href="javascript:void(0)" class="btn more text-uppercase">load more</a>
        </div>
    </div>
</div>
<!-- Trending Item End -->
