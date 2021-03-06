@extends('admin.layouts.app')

@section('title','Admin Dashboard')

@section('contents')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="mb-4">
                    <h4>Welcome {{auth()->user()->firstname}}!</h4>
                    <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn
                            More</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-body">
    <div class="container-fluid">
        
        @if (session('successMessage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('successMessage')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <div class="row clearfix">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category List</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        @if ($categories->isEmpty())
                            <span>there is nothing in the database</span>
                        @else
                            <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="w30">&nbsp;</th>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Blogs</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key=> $category)
                                        <tr>
                                            <td>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </td>
                                            <td>{{$key+1}}</td>
                                            <td><a href="#">{{$category->name}}</a></td>
                                            <td>
                                                {{count(\App\Models\Blog::where('category_id',$category->id)->select('*')->get())}}
                                                {{-- {{\App\Models\Blog::where('category_id',$category->id)->pluck('id')->first()}} --}}
                                            </td>
                                            <td class="float-right">
                                                <a href="">edit</a>
                                                <a href="" class="ml-3 text-danger">delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category Form</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.category.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                
                                <x-inputs.text name="category_name" value="{{ old('category_name')}}" inputname="category_name" labelName="Category Name"/>

                                {{-- <x-inputs.text name="testing_name" value="{{ old('category_name')}}" inputname="testing_name"/> --}}

                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right m-t-20">
                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection