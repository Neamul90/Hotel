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

        </div>
    </div>
    <!-- END PAGE HEADER-->
    <div class="row-fluid">
        <div class="metro-nav">
            <div class="metro-nav-block nav-block-orange">
                <a data-original-title="" href="{{ URL::to('/add_news') }}">
                    <i class="icon-user"></i>
                    <div class="info"></div>
                    <div class="status">Add New News</div>
                </a>
            </div>
            <div class="metro-nav-block nav-olive">
                <a data-original-title="" href="{{ URL::to('/news') }}">
                    <i class="icon-tags"></i>
                    <div class="info">{{ count($all_news_info) }}</div>
                    <div class="status">News</div>
                </a>
            </div>
        </div>

        <div class="widget red">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Dynamic Table</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <table class="table table-striped table-bordered" id="sample_1">
                    <thead>
                        <tr>
                            <th>News Id</th>
                            <th class="hidden-phone">News Title</th>
<!--                            <th class="hidden-phone">News Short Description</th>-->
                            <th class="hidden-phone">Publication Status</th>
                            <th class="hidden-phone">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                           

                        <?php foreach ($all_news_info as $v_category) { ?>
                            <tr class="odd gradeX">
                                <td><?php echo $v_category->blog_id; ?></td>
                                <td class="hidden-phone"><?php echo $v_category->blog_title; ?></td>
<!--                                <td class="hidden-phone"><?php echo $v_category->blog_short_description; ?></td>-->
                                <td class="center hidden-phone">
                                    <?php if ($v_category->publication_status == 1) { ?>
                                        <span class="label label-success">Published</span>
                                    <?php } else { ?>
                                        <span class="label label-danger">Unpublished</span>
                                    <?php } ?>
                                </td>
                                <td class="hidden-phone">
                                    <?php if ($v_category->publication_status == 1) { ?>
                                    <a class="btn btn-danger" href="{{URL::to('/unpublished-category/'.$v_category->category_id)}}" title="Unpublished category"><i class="icon-thumbs-down-alt"></i></a>
                                    <?php } else { ?>
                                        <a class="btn btn-success" href="{{URL::to('/published-category/'.$v_category->category_id)}}" title="Published category"><i class="icon-thumbs-up-alt"></i></a>
                                    <?php } ?>
                                        <a class="btn btn-primary" href="{{URL::to('/edit-category/'.$v_category->category_id)}}" title="Edit News"><i class="icon-edit-sign"></i></a>
                                        <a class="btn btn-inverse" href="{{URL::to('/news_view/'.$v_category->blog_id)}}" title="View News"><i class="icon-zoom-in"></i></a>
                                        <a class="btn btn-inverse" href="{{URL::to('/delete_news/'.$v_category->blog_id)}}" title="Delete News" onclick="return check_delete_info();"><i class="icon-remove"></i></a>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection