@extends('admin.layouts.app')

@section('title','Admin Dashboard')

@section('contents')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="mb-4">
                    <h4>Welcome !</h4>
                    <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn
                            More</a></small>
                </div>
            </div>
        </div>
        <div class="row clearfix row-deck">
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Active users</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32 counter">31</h5>
                        <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Blog Posts</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32 counter">245</h5>
                        <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="number mb-0 font-32 counter">245</h5>
                        <span class="font-12">Measure How Fast... <a href="#">More</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection