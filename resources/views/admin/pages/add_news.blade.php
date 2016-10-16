@extends('admin.admin_master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" />
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN THEME CUSTOMIZER-->
            <div id="theme-change" class="hidden-phone">
                <i class="icon-cogs"></i>
                <span class="settings">
                    <span class="text">Theme Color:</span>
                    <span class="colors">
                        <span class="color-default" data-style="default"></span>
                        <span class="color-green" data-style="green"></span>
                        <span class="color-gray" data-style="gray"></span>
                        <span class="color-purple" data-style="purple"></span>
                        <span class="color-red" data-style="red"></span>
                    </span>
                </span>
            </div>
            <!-- END THEME CUSTOMIZER-->
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                Add new News
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{URL::to('/dashboard')}}">Home</a>
                    <span class="divider">/</span>
                </li>
                <li>
                    <a href="{{URL::to('/add_news')}}">Add New News</a>
                    <span class="divider">/</span>
                </li>

                <li class="pull-right search-wrap">
                    <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                        <div class="input-append search-input-area">
                            <input class="" id="appendedInputButton" type="text">
                            <button class="btn" type="button"><i class="icon-search"></i> </button>
                        </div>
                    </form>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN SAMPLE FORMPORTLET-->
            <div class="widget green">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>  </h4>
                    <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                    </span>
                </div>
                <h3 style="color: #74B749;">
                    <?php
                    $message = Session::get('message_success');
                    if ($message) {
                        echo $message;
                        Session::put('message_success', null);
                    }
                    ?>
                </h3>
                <div class="widget-body">

                    <!-- BEGIN FORM-->
                    {!! Form::open(['url' => '/save_news', 'method'=>'post', 'enctype'=>'multipart/from-data', 'files' => true ]) !!}
                    <div class="control-group">
                        <label class="control-label">News Tittle</label>
                        <div class="controls">
                            <input name="blog_title" type="text" class="span6  popovers" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Category</label>
                        <div class="controls">
                            <select name="category_id" class="span6 chzn-select" data-placeholder="Choose a Category" tabindex="1">
                                <option value=""></option>
                                @foreach($category_info as $c_info)
                                <option value="{{$c_info->category_id}}">{{$c_info->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">News Short Description</label>
                        <div class="controls">
                            <textarea class="span6" name="blog_short_description" rows="5"></textarea>
                        </div>
                    </div>
                    

                    <div class="control-group">
                        <label class="control-label">News Long Description</label>
                        <div class="controls">
                            <textarea class="span6 wysihtmleditor5" name="blog_long_description" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Image Upload</label>
                        <div class="controls">
                            <div data-provides="fileupload" class="fileupload fileupload-new">
                                <div style="width: 400px; height: 250px;" class="fileupload-new thumbnail">
                                    <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                </div>
                                <div style="max-width: 400px; max-height: 250px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="blog_image" class="default"></span>
                                    <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>
                                </div>
                            </div>
                            <span class="label label-important">NOTE!</span>
                            <span>
                                Upload A valid Photo jpg/png
                            </span>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Publication Status</label>
                        <div class="controls">
                            <select  class="span6 chzn-select"  name="publication_status" data-placeholder="Publication Status" tabindex="1">
                                <option value=""></option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn">Cancel</button>
                    </div>
                    {!! Form::close() !!}
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>


        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>

<script src="{{asset('admin_assets/js/jquery-1.8.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/chosen-bootstrap/chosen/chosen.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/uniform/jquery.uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/clockface/js/clockface.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap-daterangepicker/date.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
<script src="{{asset('admin_assets/js/form-component.js')}}"></script>
@endsection