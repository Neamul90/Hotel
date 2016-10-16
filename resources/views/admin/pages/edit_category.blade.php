@extends('admin.admin_master')
@section('content')

<!-- BEGIN PAGE CONTAINER-->
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
                Edit Category
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{URL::to('/category')}}">Home</a>
                    <span class="divider">/</span>
                </li>
                <li>
                    <a href="#">Edit Category</a>
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
                    {!! Form::open(['url' => '/update_category', 'method'=>'post'  ]) !!}
                    <div class="control-group">
                        <label class="control-label">Category Name</label>
                        <div class="controls">
                            <input name="category_name" type="text"  class="span6  popovers" value="{{ $category_info->category_name}}"  />
                            <input name="category_id" type="hidden"  class="span6  popovers" value="{{ $category_info->category_id}}"  />

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Category Description</label>
                        <div class="controls">
                            <textarea class="span6 " name="category_description" rows="3">{{ $category_info->category_description}}</textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Publication Status</label>
                        <div class="controls">
                            <select  class="span6 chzn-select"  name="publication_status" data-placeholder="Publication Status" tabindex="1">
                            <?php if ($category_info->publication_status == 1) { ?>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>

                            <?php } else { ?>

                                    <option value="0">Unpublished</option>
                                    <option value="1">Published</option>

                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Update</button>
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
<!-- END CONTAINER -->
@endsection