@extends('admin.layout.default')

@section('template-item')

    @section('header')
        @include('admin.element.header')
    @show
            <!-- BEGIN CONTAINER -->
    <div class="page-container">
        {{--page sidebar--}}
        @section('sidebar')
            @include('admin.element.sidebar')
        @show
        {{--end page sidebar--}}

        {{--page content--}}
        @yield('content')
        {{--end page content--}}
    </div>
@stop