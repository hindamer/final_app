@extends('admin.layout')
@section('title','Edit')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Manage <small>Users</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List of Users</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <body>
                                        <form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{route('update',[$users->id])}}">
                                            @csrf
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Full Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users->name}}">
                                                </div>
                                            </div>
                                            @error('name')
                                            <div class="alert alert-danger" style="width: 49%; margin-left:305px;">{{$message}}</div>
                                            @enderror
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="username">Username<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{$users->username}}">

                                                </div>
                                            </div>
                                            @error('username')
                                            <div class="alert alert-danger" style="width: 49%; margin-left:305px;">{{$message}}</div>
                                            @enderror
                                            <div class="item form-group">
                                                <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{$users->email}}">
                                                </div>
                                            </div>
                                            @error('email')
                                            <div class="alert alert-danger" style="width: 49%; margin-left:305px;">{{$message}}</div>
                                            @enderror
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat" name="active" @checked($users->active)>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$users->password}}">
                                                </div>
                                            </div>
                                            @error('password')
                                            <div class="alert alert-danger" style="width: 49%; margin-left:305px;">{{$message}}</div>
                                            @enderror
                                            <div class="ln_solid"></div>
                                            <div class="item form-group">
                                                <div class="col-md-6 col-sm-6 offset-md-3">
                                                    <button class="btn btn-primary" type="button">Cancel</button>
                                                    <button type="submit" class="btn btn-success">Edit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </body>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection