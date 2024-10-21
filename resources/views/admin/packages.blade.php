@extends('admin.layouts.mainLayout')
@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 fw-bold">Packages</h2>
        <a href="/ru/admin/add-package" class="button-primary">Add Tour</a>
    </div>
    <div class="dashboard-box">
        <div class="row">
            <div class="grid-item col-md-6 col-lg-4">
                <div class="package-wrap">
                    <figure class="feature-image">
                        <a href="#">
                            <img src="assets/images/img25.jpg" alt="">
                        </a>
                    </figure>
                    <div class="package-price">
                        <h6>
                            <span>$1,900 </span> / per person
                        </h6>
                    </div>
                    <div class="package-content-wrap">
                        <div class="package-content">
                            <h4>
                                <a href="#">Sunset view of beautiful lakeside resident</a>
                            </h4>
                            <div class="content-details">
                                <div class="rating-start" title="Rated 5 out of 5">
                                    <span></span>
                                </div>
                                <span class="review-text"><a href="#">1 review</a></span>
                            </div>
                            <div class="button-container">
                                <a href="#"><i class="far fa-edit"></i>Edit</a>
                                <a href="#"><i class="far fa-trash-alt"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item col-md-6 col-lg-4">
                <div class="package-wrap">
                    <figure class="feature-image">
                        <a href="#">
                            <img src="assets/images/img26.jpg" alt="">
                        </a>
                    </figure>
                    <div class="package-price">
                        <h6>
                            <span>$2,300 </span> / per person
                        </h6>
                    </div>
                    <div class="package-content-wrap">
                        <div class="package-content">
                            <h4>
                                <a href="#">Experience the natural beauty of island</a>
                            </h4>
                            <div class="content-details">
                                <div class="rating-start" title="Rated 5 out of 5">
                                    <span></span>
                                </div>
                                <span class="review-text"><a href="#">1 review</a></span>
                            </div>
                            <div class="button-container">
                                <a href="#"><i class="far fa-edit"></i>Edit</a>
                                <a href="#"><i class="far fa-trash-alt"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item col-md-6 col-lg-4">
                <div class="package-wrap">
                    <figure class="feature-image">
                        <a href="#">
                            <img src="assets/images/img27.jpg" alt="">
                        </a>
                    </figure>
                    <div class="package-price">
                        <h6>
                            <span>$1,500 </span>
                        </h6>
                    </div>
                    <div class="package-content-wrap">
                        <div class="package-content">
                            <h4>
                                <a href="#">Vacation to the water city of Portugal</a>
                            </h4>
                            <div class="content-details">
                                <div class="rating-start" title="Rated 5 out of 5">
                                    <span></span>
                                </div>
                                <span class="review-text"><a href="#">1 review</a></span>
                            </div>
                            <div class="button-container">
                                <a href="#"><i class="far fa-edit"></i>Edit</a>
                                <a href="#"><i class="far fa-trash-alt"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
