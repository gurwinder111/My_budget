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
                        <div class="content-header">Category</div>
                    </div>
                </div>
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Manage Category</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <table id="mytable" class="table table-striped table-bordered display" style="width:100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Category Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               	@foreach ($categorys as $category)
                                                    <tr>
                                                        <td>{{ $category->id }}</td>
                                                        <td>{{ $category->name }}</td>
                                                        <td>
                                                            <a href="category/{{ $category->id }}/edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                            <a href="category/delete/{{ $category->id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Category Name</th>
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