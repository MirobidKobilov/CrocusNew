@extends('admin.layouts.mainLayout')
@section('content')
    <h2>Add package</h2>
    <form action="/ru/admin/add-package" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="dashboard-box">
                    <div class="custom-field-wrap">
                        <div class="form-group">
                            @error('title')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <label>Title</label>
                            <input type="text" name="title" value="{{ @old('title') }}">
                        </div>
                        <div class="form-group">
                            @error('description')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <label>Description</label>
                            <textarea name="description">{{ @old('description') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="dashboard-box">
                    <div class="custom-field-wrap">
                        <div class="form-group">
                            @error('location')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <label>Location</label>
                            <input type="text" name="location" value="{{ @old('location') }}">
                        </div>
                        <div class="form-group">
                            @error('price_per_person')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <label>Price per person</label>
                            <input type="number" name="price_per_person" value="{{ @old('price_per_person') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="dashboard-box">
                    <div class="custom-field-wrap">
                        <div class="form-group">
                            @error('rating')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <label>Rating</label>
                            <input type="number" name="rating" value="{{ @old('rating') }}">
                        </div>
                        <div class="form-group">
                            @error('image')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="button-primary" style="border: none" type="submit">
                    Save
                </button>
            </div>
        </div>
    </form>
@endsection
