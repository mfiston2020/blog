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

<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">

            @forelse ($blogs as $item)
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Admin Design</h3>
                            <div class="card-options">
                                <label class="custom-switch m-0">
                                    <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <span class="tag tag-blue mb-3">Web Design</span>
                            <p>Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis temporibus!</p>
                            <div class="row">
                                <div class="col-5 py-1"><strong>Created:</strong></div>
                                <div class="col-7 py-1">09 Jun 2019 11:32AM</div>
                                <div class="col-5 py-1"><strong>Creator:</strong></div>
                                <div class="col-7 py-1">Nathan Guerrero</div>
                                <div class="col-5 py-1"><strong>Question:</strong></div>
                                <div class="col-7 py-1"><strong>23</strong></div>
                                <div class="col-5 py-1"><strong>Comments:</strong></div>
                                <div class="col-7 py-1"><strong>32</strong></div>
                                <div class="col-5 py-1"><strong>Bug:</strong></div>
                                <div class="col-7 py-1"><strong>5</strong></div>
                                <div class="col-5 py-1"><strong>Team:</strong></div>
                                <div class="col-7 py-1">
                                    <div class="avatar-list avatar-list-stacked">
                                        <img class="avatar avatar-sm" src="assets/images/xs/avatar1.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name">
                                        <img class="avatar avatar-sm" src="assets/images/xs/avatar2.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name">
                                        <img class="avatar avatar-sm" src="assets/images/xs/avatar3.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name">
                                        <img class="avatar avatar-sm" src="assets/images/xs/avatar4.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name">
                                        <img class="avatar avatar-sm" src="assets/images/xs/avatar5.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name">
                                        <span class="avatar avatar-sm">+8</span>
                                    </div>
                                </div>
                            </div>                                        
                        </div>
                        <div class="card-footer">
                            <div class="clearfix">
                                <div class="float-left"><strong>15%</strong></div>
                                <div class="float-right"><small class="text-muted">Progress</small></div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-red" role="progressbar" style="width: 15%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body text-center py-5">
                        <img src="{{ asset('dashboard/assets/images/search.svg')}}" class="width360 mb-3">
                        <h4>No Blog Post Found</h4>
                        <span>You can create one here:</span>
                        <hr>
                        <a href="{{ route('admin.blog.create')}}" class="btn btn-primary">
                            Create Blog Post
                        </a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>            
</div>

@endsection