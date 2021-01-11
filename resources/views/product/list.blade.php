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
                                    <h4 class="card-title">Manage Product</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <table id="mytable" class="table table-striped table-bordered display" style="width:100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Category</th>
                                                    <th>Tag</th>
                                                    <th>Thumbnail</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               	@foreach ($products as $product)
                                                    <tr>
                                                        <td>{{ $product->name }}</td>
                                                        <td>Rs. {{ $product->price }}</td>
                                                        <td>{{ $product->cat_name }}</td>
                                                        <td>{{ $product->tag_name }}</td>
                                                        <td>
                                                            <img class="zoom" src="{{ asset($product->thumb) }}">
                                                        </td>
                                                        <td>
                                                            <a href="products/{{ $product->id }}/edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                            <a href="products/delete/{{ $product->id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Category</th>
                                                    <th>Tag</th>
                                                    <th>Thumbnail</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>

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