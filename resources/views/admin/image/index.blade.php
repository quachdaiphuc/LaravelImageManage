@extends('admin/layout/main')

@section('pageCss')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css')}}"/>
@stop

{{--Page content--}}
@section('content')
    <div class="page-content-wrapper">
    		<div class="page-content">
    			<!-- BEGIN PAGE HEADER-->
    			<h3 class="page-title">
    			Image Management
    			</h3>
    			<div class="page-bar">
    				<ul class="page-breadcrumb">
    					<li>
    						<i class="fa fa-home"></i>
    						<a href="">Home</a>
    						<i class="fa fa-angle-right"></i>
    					</li>

    					<li>
    						<a href="#">image list</a>
    					</li>
    				</ul>

    			</div>
    			<!-- END PAGE HEADER-->
    			<!-- BEGIN PAGE CONTENT-->
    			<div class="row">
    				<div class="col-md-12">
    					<label><input type="checkbox" id="inline">&nbsp;Inline editing</label>
    					<hr>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12">
    					<table id="list-image" class="table table-bordered table-striped">
    					<thead>
                            <tr class="headings">
                                <th>Image</th>
                                <th>Name</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
    					<tbody>
    					@foreach($files as $file)
                            <tr>
                                <td style="width:10%">
                                     <img width="80px" height="auto" src="{{ asset('assets/uploads/') . '/' . $file['basename'] }}" alt=""/>
                                </td>
                                <td style="width:30%">
                                    <a href="javascript:;" class="image" id="{{str_replace('.', '_', $file['basename'])}}" data-type="text" data-pk="{{$file['basename']}}" data-original-title="Enter image name">
                                    {{$file['filename']}} </a>.{{$file['extension']}}
                                    <br/>
                                    <span class="{{str_replace('.', '_', $file['basename'])}}"></span>
                                </td>
                                <td style="width:40%">
                                    <span class="text-muted">
                                    {{ asset('assets/uploads/') . '/' . $file['basename'] }} </span>
                                </td>
                                <td style="width: 10%" class="text-center">
                                    <button type="button" onclick="deleteImage('{{str_replace('.', '_', $file['basename'])}}')" class="btn red delete">
                                        <i class="fa fa-trash"></i>
                                        <span>Delete</span>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
    					</tbody>
    					</table>
    				</div>
    			</div>

    			<!-- END PAGE CONTENT-->
    		</div>
    	</div>
    	<!-- END CONTENT -->
@stop

@section('pageJs')
<script type="text/javascript" src="{{ asset('assets/global/plugins/jquery.mockjax.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/scripts/form-editable.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/admin/list-image.js')}}"></script>
<script>
FormEditable.init();
</script>
@stop