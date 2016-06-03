@extends('admin.layout.default')
@section('title', 'Login')
@section('body_class', 'login')

@section('pageCss')
    <link href="{{ asset('assets/css/admin/login3.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('template-item')
    <!-- BEGIN LOGO -->
    <div class="logo">
    	<a href="index.html">

    	</a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class="menu-toggler sidebar-toggler">
    </div>
    <!-- END SIDEBAR TOGGLER BUTTON -->

    <div class="content">
    	<!-- BEGIN LOGIN FORM -->
    	{{--{!! Form::open(['route' => 'login', 'method' => 'POST', 'class' => 'login-form']) !!}--}}
    	<Form action="{{route('login')}}" method="post" class="login-form">
        {!! csrf_field() !!}
    		<h3 class="form-title">Login to your account</h3>
    		@if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button class="close" data-close="alert"></button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
    		<div class="form-group">
    			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
    			<label class="control-label visible-ie8 visible-ie9">Username</label>
    			<div class="input-icon">
    				<i class="fa fa-user"></i>
    				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
    			</div>
    		</div>
    		<div class="form-group">
    			<label class="control-label visible-ie8 visible-ie9">Password</label>
    			<div class="input-icon">
    				<i class="fa fa-lock"></i>
    				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
    			</div>
    		</div>
    		<div class="form-actions">
    			<label class="checkbox">
    			<input type="checkbox" name="remember" value="1"/> Remember me </label>
    			<button type="submit" class="btn green-haze pull-right">
    			Login <i class="m-icon-swapright m-icon-white"></i>
    			</button>
    		</div>
    	</Form>
    	<!-- END LOGIN FORM -->
    </div>
@stop
@section('pageJs')
    <script src="{{ asset('assets/js/login.js')}}" type="text/javascript"></script>
    <script>
      Login.init();
    </script>
@stop