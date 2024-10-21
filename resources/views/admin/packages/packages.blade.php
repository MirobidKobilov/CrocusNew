@extends('admin.layouts.mainLayout')
@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 fw-bold">Packages</h2>
        <a href="/ru/admin/add-package" class="button-primary">Add Tour</a>
    </div>
    <div class="dashboard-box">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif
        <div class="row">
            @if (count($packages) == 0)
                <h2 class="h2 text-center w-100">There is no any package !!!</h2>
            @else
                @foreach ($packages as $package)
                    <div class="grid-item col-md-6 col-lg-4">
                        <div class="package-wrap">
                            <figure class="feature-image">
                                <a href="#">
                                    <img src="/{{ $package->image }}" alt="">
                                </a>
                            </figure>
                            <div class="package-price">
                                <h6>
                                    <span>${{ $package->price_per_person }} </span> / per person
                                </h6>
                            </div>
                            <div class="package-content-wrap">
                                <div class="package-content">
                                    <h4 class="mb-2">
                                        <a href="/ru/{{ $package->slug }}">{{ $package->title }}</a>
                                    </h4>
                                    <p class="mb-2">
                                        {{ $package->short_description }}
                                    </p>
                                    <div class="content-details">
                                        <div class="rating-start" title="Rated 5 out of {{ $package->rating }}">
                                            <span></span>
                                        </div>
                                        {{-- <span class="review-text"><a href="#">1 review</a></span> --}}
                                    </div>
                                    <div class="button-container">
                                        <a href="/ru/admin/edit-package/{{ $package->id }}">
                                            <i class="far fa-edit"></i>
                                            Edit
                                        </a>
                                        <a href="#"><i class="far fa-trash-alt"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
@endsection
