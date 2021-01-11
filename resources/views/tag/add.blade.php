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
                                    	<form method="POST" enctype="multipart/form-data" action="/tag">
    										@csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <fieldset class="form-group">
                                                        <label for="name">Tag Name<span>*</span> </label>
                                                        <input required type="text" name="name" id="name" class="form-control"  placeholder="Enter Tag Name">
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