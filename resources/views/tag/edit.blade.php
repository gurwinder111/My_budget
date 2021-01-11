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
                        <div class="content-header">Tag</div>
                    </div>
                </div>
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Tag</h4>

                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    	<form method="POST" enctype="multipart/form-data" action="/tag/{{ $tag->id}}">
    										@csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="cat">Tag Name<span>*</span> </label>
                                                        <input required type="text" name="cat" id="cat" class="form-control"  placeholder="Enter Tag Name" value="{{ $tag->name}}">
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