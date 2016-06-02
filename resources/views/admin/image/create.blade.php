@extends('admin/layout/main')

@section('pageCss')
    <link href="{{ asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css')}}" rel="stylesheet"/>
    <link href="{{ asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css ')}}" rel="stylesheet"/>
@stop

{{--Page content--}}
@section('content')
    <div class="page-content-wrapper">
    		<div class="page-content">
    			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    				<div class="modal-dialog">
    					<div class="modal-content">
    						<div class="modal-header">
    							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    							<h4 class="modal-title">Modal title</h4>
    						</div>
    						<div class="modal-body">
    							 Widget settings form goes here
    						</div>
    						<div class="modal-footer">
    							<button type="button" class="btn blue">Save changes</button>
    							<button type="button" class="btn default" data-dismiss="modal">Close</button>
    						</div>
    					</div>
    					<!-- /.modal-content -->
    				</div>
    				<!-- /.modal-dialog -->
    			</div>
    			<!-- /.modal -->
    			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    			<!-- BEGIN STYLE CUSTOMIZER -->
    			<div class="theme-panel hidden-xs hidden-sm">
    				<div class="toggler">
    				</div>
    				<div class="toggler-close">
    				</div>
    				<div class="theme-options">
    					<div class="theme-option theme-colors clearfix">
    						<span>
    						THEME COLOR </span>
    						<ul>
    							<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
    							</li>
    							<li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
    							</li>
    							<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
    							</li>
    							<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
    							</li>
    							<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
    							</li>
    							<li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
    							</li>
    						</ul>
    					</div>
    					<div class="theme-option">
    						<span>
    						Layout </span>
    						<select class="layout-option form-control input-sm">
    							<option value="fluid" selected="selected">Fluid</option>
    							<option value="boxed">Boxed</option>
    						</select>
    					</div>
    					<div class="theme-option">
    						<span>
    						Header </span>
    						<select class="page-header-option form-control input-sm">
    							<option value="fixed" selected="selected">Fixed</option>
    							<option value="default">Default</option>
    						</select>
    					</div>
    					<div class="theme-option">
    						<span>
    						Top Menu Dropdown</span>
    						<select class="page-header-top-dropdown-style-option form-control input-sm">
    							<option value="light" selected="selected">Light</option>
    							<option value="dark">Dark</option>
    						</select>
    					</div>
    					<div class="theme-option">
    						<span>
    						Sidebar Mode</span>
    						<select class="sidebar-option form-control input-sm">
    							<option value="fixed">Fixed</option>
    							<option value="default" selected="selected">Default</option>
    						</select>
    					</div>
    					<div class="theme-option">
    						<span>
    						Sidebar Menu </span>
    						<select class="sidebar-menu-option form-control input-sm">
    							<option value="accordion" selected="selected">Accordion</option>
    							<option value="hover">Hover</option>
    						</select>
    					</div>
    					<div class="theme-option">
    						<span>
    						Sidebar Style </span>
    						<select class="sidebar-style-option form-control input-sm">
    							<option value="default" selected="selected">Default</option>
    							<option value="light">Light</option>
    						</select>
    					</div>
    					<div class="theme-option">
    						<span>
    						Sidebar Position </span>
    						<select class="sidebar-pos-option form-control input-sm">
    							<option value="left" selected="selected">Left</option>
    							<option value="right">Right</option>
    						</select>
    					</div>
    					<div class="theme-option">
    						<span>
    						Footer </span>
    						<select class="page-footer-option form-control input-sm">
    							<option value="fixed">Fixed</option>
    							<option value="default" selected="selected">Default</option>
    						</select>
    					</div>
    				</div>
    			</div>
    			<!-- END STYLE CUSTOMIZER -->
    			<!-- BEGIN PAGE HEADER-->
    			<h3 class="page-title">
    			Multiple File Upload <small>amazing file upload experience</small>
    			</h3>
    			<div class="page-bar">
    				<ul class="page-breadcrumb">
    					<li>
    						<i class="fa fa-home"></i>
    						<a href="index.html">Home</a>
    						<i class="fa fa-angle-right"></i>
    					</li>
    					<li>
    						<a href="#">Form Stuff</a>
    						<i class="fa fa-angle-right"></i>
    					</li>
    					<li>
    						<a href="#">Multiple File Upload</a>
    					</li>
    				</ul>
    				<div class="page-toolbar">
    					<div class="btn-group pull-right">
    						<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
    						Actions <i class="fa fa-angle-down"></i>
    						</button>
    						<ul class="dropdown-menu pull-right" role="menu">
    							<li>
    								<a href="#">Action</a>
    							</li>
    							<li>
    								<a href="#">Another action</a>
    							</li>
    							<li>
    								<a href="#">Something else here</a>
    							</li>
    							<li class="divider">
    							</li>
    							<li>
    								<a href="#">Separated link</a>
    							</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    			<!-- END PAGE HEADER-->
    			<!-- BEGIN PAGE CONTENT-->
    			<div class="row">
    				<div class="col-md-12">
    					<blockquote>
    						<p style="font-size:16px">
    							 File Upload widget with multiple file selection, drag&amp;drop support, progress bars and preview images for jQuery.<br>
    							 Supports cross-domain, chunked and resumable file uploads and client-side image resizing.<br>
    							 Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.
    						</p>
    					</blockquote>
    					<br>
    					<form id="fileupload" action="{{route('upload.image')}}" method="POST" enctype="multipart/form-data">
    						<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
    						<div class="row fileupload-buttonbar">
    							<div class="col-lg-7">
    								<!-- The fileinput-button span is used to style the file input field as button -->
    								<span class="btn green fileinput-button">
    								<i class="fa fa-plus"></i>
    								<span>
    								Add files... </span>
    								<input type="file" name="files[]" multiple="">
    								</span>
    								<button type="submit" class="btn blue start">
    								<i class="fa fa-upload"></i>
    								<span>
    								Start upload </span>
    								</button>
    								<button type="reset" class="btn warning cancel">
    								<i class="fa fa-ban-circle"></i>
    								<span>
    								Cancel upload </span>
    								</button>
    								<button type="button" class="btn red delete">
    								<i class="fa fa-trash"></i>
    								<span>
    								Delete </span>
    								</button>
    								<input type="checkbox" class="toggle">
    								<!-- The global file processing state -->
    								<span class="fileupload-process">
    								</span>
    							</div>
    							<!-- The global progress information -->
    							<div class="col-lg-5 fileupload-progress fade">
    								<!-- The global progress bar -->
    								<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
    									<div class="progress-bar progress-bar-success" style="width:0%;">
    									</div>
    								</div>
    								<!-- The extended global progress information -->
    								<div class="progress-extended">
    									 &nbsp;
    								</div>
    							</div>
    						</div>
    						<!-- The table listing the files available for upload/download -->
    						<table role="presentation" class="table table-striped clearfix">
    						<tbody class="files">
    						</tbody>
    						</table>
    					</form>
    					<div class="panel panel-success">
    						<div class="panel-heading">
    							<h3 class="panel-title">Demo Notes</h3>
    						</div>
    						<div class="panel-body">
    							<ul>
    								<li>
    									 The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).
    								</li>
    								<li>
    									 Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).
    								</li>
    								<li>
    									 Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).
    								</li>
    							</ul>
    						</div>
    					</div>
    				</div>
    			</div>
    			<!-- END PAGE CONTENT-->
    		</div>
    	</div>
@stop
@section('pageJs')
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <script id="template-upload" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td>
                <span class="preview"></span>
            </td>
            <td>
                <p class="name">{%=file.name%}</p>
                <strong class="error text-danger label label-danger"></strong>
            </td>
            <td>
                <p class="size">Processing...</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                    <button class="btn blue start" disabled>
                        <i class="fa fa-upload"></i>
                        <span>Start</span>
                    </button>
                {% } %}
                {% if (!i) { %}
                    <button class="btn red cancel">
                        <i class="fa fa-ban"></i>
                        <span>Cancel</span>
                    </button>
                {% } %}
            </td>
        </tr>
    {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
            {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-download fade">
                    <td>
                        <span class="preview">
                            {% if (file.thumbnailUrl) { %}
                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                            {% } %}
                        </span>
                    </td>
                    <td>
                        <p class="name">
                            {% if (file.url) { %}
                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                            {% } else { %}
                                <span>{%=file.name%}</span>
                            {% } %}
                        </p>
                        {% if (file.error) { %}
                            <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                        {% } %}
                    </td>
                    <td>
                        <span class="size">{%=o.formatFileSize(file.size)%}</span>
                    </td>
                    <td>
                        {% if (file.deleteUrl) { %}
                            <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                                <i class="fa fa-trash-o"></i>
                                <span>Delete</span>
                            </button>
                            <input type="checkbox" name="delete" value="1" class="toggle">
                        {% } else { %}
                            <button class="btn yellow cancel btn-sm">
                                <i class="fa fa-ban"></i>
                                <span>Cancel</span>
                            </button>
                        {% } %}
                    </td>
                </tr>
            {% } %}
        </script>

        <!-- BEGIN:File Upload Plugin JS files-->
        <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js')}}"></script>
        <!-- The Templates plugin is included to render the upload/download listings -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js')}}"></script>
        <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js')}}"></script>
        <!-- The Canvas to Blob plugin is included for image resizing functionality -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js')}}"></script>
        <!-- blueimp Gallery script -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js')}}"></script>
        <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js')}}"></script>
        <!-- The basic File Upload plugin -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js')}}"></script>
        <!-- The File Upload processing plugin -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js')}}"></script>
        <!-- The File Upload image preview & resize plugin -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js')}}"></script>
        <!-- The File Upload audio preview plugin -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js')}}"></script>
        <!-- The File Upload video preview plugin -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js')}}"></script>
        <!-- The File Upload validation plugin -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js')}}"></script>
        <!-- The File Upload user interface plugin -->
        <script src="{{ asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js ')}}"></script>
        <!-- The main application script -->
        <script src="{{ asset('assets/js/scripts/form-fileupload.js')}}"></script>
        <script>
            FormFileUpload.init();
        </script>
@stop