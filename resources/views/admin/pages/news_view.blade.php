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
                Add new Category
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{URL::to('/dashboard')}}">Home</a>
                    <span class="divider">/</span>
                </li>
                <li>
                    <a href="{{URL::to('/add_category')}}">Add New Category</a>
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


    <div class="widget orange">
        <div class="widget-title">
            <h4><i class="icon-reorder"></i> Horizontal Description Lists</h4>
            <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
            </span>
        </div>
        <div class="widget-body">
            <?php foreach ($all_news_info as $v_category) { ?>

                <dl class="dl-horizontal">
                    <dt>News Id</dt>
                    <dd><?php echo $v_category->blog_id; ?></dd>
                    <dt>News Title</dt>
                    <dd><?php echo $v_category->blog_title; ?></dd>
                    <dt>Image</dt>
                    <dd> 
                        <img src="<?php echo $v_category->blog_image; ?>"  height="300" width="300">
                        <img src="{{asset('"/$v_category->blog_image/"') }}"  class="img-responsive" alt=""/>

                    </dd>

                    <dt>News Short Description</dt>
                    <dd><?php echo $v_category->blog_short_description; ?></dd>
                    <dt>News Long Description</dt>
                    <dd><?php echo $v_category->blog_long_description; ?></dd>

                </dl>
            <?php } ?>

        </div>
    </div>
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->
@endsection