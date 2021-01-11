@extends('layouts.layout')
@extends('layouts.navbar')
@extends('layouts.sidebar')
@extends('layouts.footer')

@section('content')
	<div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">Product</div>
                    </div>
                </div>
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Product</h4>

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @elseif(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    	<form method="POST" enctype="multipart/form-data" action="/products">
    										@csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset class="form-group">
                                                        <label for="name">Product<span>*</span> </label>
                                                        <input required type="text" name="name" id="name" class="form-control"  placeholder="Enter Product Name">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="gender">Gender<span>*</span></label>
                                                        <select required id="gender" name="gender" class="form-control">
                                                            <option value="0" selected disabled>Gender</option>
                                                            <option value="men">Men</option>
                                                            <option value="women">Women</option>
                                                        </select>
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="buy_link">Product Link<span>*</span></label>
                                                        <input required type="text" name="buy_link" id="buy_link" class="form-control"  placeholder="Enter Product Link">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="price">Price<span>*</span></label>
                                                        <input required type="number" name="price" id="price" class="form-control"  placeholder="Enter Product Link">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="cat_id">Category<span>*</span></label>
                                                        <select required id="cat_id" name="cat_id" class="form-control">
                                                            <option value="0" selected disabled>Category</option>
                                                            @foreach ($categorys as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </fieldset>
                                                </div>

                                                <div class="col-md-6">
                                                    
                                                    <fieldset class="form-group">
                                                        <label for="tag_id">Tag</label>
                                                        <select id="tag_id" name="tag_id" class="form-control">
                                                            <option value="0" selected disabled>Tag</option>
                                                            @foreach ($tags as $tag)
                                                                <option value="{{ $tag->id }}">
                                                                    {{ $tag->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="basic-form-9">Description</label>
                                                        <textarea id="basic-form-9" rows="4" class="form-control" name="description"></textarea>
                                                    </fieldset>
                                                
                                                    <fieldset class="form-group">
                                                        <label for="thumb">Thumbnail<span>*</span></label>
                                                        <div class="custom-file">
                                                            <input required="" type="file" class="custom-file-input" id="thumb" name="thumb">
                                                            <label class="custom-file-label" for="thumb">Choose file</label>
                                                            <img id="previewImg">
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label for="other_img">Other Images</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="other_img" name="other_img[]" multiple>
                                                            <label class="custom-file-label" for="other_img">Choose file</label>
                                                            <img id="previewImg">
                                                        </div>
                                                    </fieldset>
                                                </div>

                                            </div>
                                            <button id="form_submit" class="btn btn-primary" name="save" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->

                
                <!-- validations end -->


            </div>
        </div>
        <!-- END : End Main Content-->
    </div>
@endsection