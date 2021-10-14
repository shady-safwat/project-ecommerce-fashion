<!-- slideBar Start  -->
<div id="carouselExampleControls" class="carousel slide position-relative" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src=" {{asset('frontend/images/fashionslide1.jpg')}}" class="img-fluid  w-100" alt="fashionslide">
            <div class="carousel-caption position-absolute top-50 start-50 translate-middle">
                <h1 class="text-uppercase">smoothing is better</h1>
                <h2>Fashion Lorem</h2>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('frontend/images/fashionslide2.jpg') }}" class="img-fluid  w-100" alt="fashionslide">
            <div class="carousel-caption position-absolute top-50 start-50 translate-middle">
                <h1 class="text-uppercase">smoothing is better</h1>
                <h2>Fashion Lorem</h2>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('frontend/images/fashionslide3.jpg') }}" class="img-fluid  w-100" alt="fashionslide">
            <div class="carousel-caption position-absolute top-50 start-50 translate-middle">
                <h1 class="text-uppercase">smoothing is better</h1>
                <h2>Fashion Lorem</h2>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="control-prev-icon"><i class="fas fa-chevron-left"></i></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="control-next-icon"><i class="fas fa-chevron-right"></i></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- slideBar End  -->
