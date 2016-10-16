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
                Contact US          
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{URL::to('/dashboard')}}">Home</a>
                    <span class="divider">/</span>
                </li>
                <li>
                    <a href="{{URL::to('/contact_us')}}">Contact Information</a>
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
                <div class="widget-body">
                    <!-- BEGIN FORM-->
                    {!! Form::open(['url' => '/save', 'method'=>'post', 'files' => true ]) !!}
                    
                    <div class="control-group">
                        <label class="control-label">Header Slogan</label>
                        <div class="controls">
                            <input name="slogan_header" type="text" class="span6  popovers" data-trigger="hover" data-content="Write Down Your Last Name like as Islam" data-original-title="Last Name" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Footer Slogan</label>
                        <div class="controls">
                            <input name="slogan_footer" type="text" class="span6  popovers" data-trigger="hover" data-content="Write Down Your Mobile No like as +8801723041050" data-original-title="Mobile No" />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Mobile No</label>
                        <div class="controls">
                            <input name="phone" type="text" class="span6  popovers" data-trigger="hover" data-content="Write Down Your First Name like as Md.Neamul" data-original-title="First Name" />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Address</label>
                        <div class="controls">
                            <textarea class="span6 " name="address" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <div class="input-icon left">
                                <i class="icon-envelope"></i>
                                <input name="email" class=" " type="text" placeholder="Email Address" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Facebook Address</label>
                        <div class="controls">
                            <div class="input-icon left">
                                <i class="icon-facebook"></i>
                                <input class=" " name="facebook" type="text" placeholder="Facebook Address" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">LinkedIn Address</label>
                        <div class="controls">
                            <div class="input-icon left">
                                <i class="icon-linkedin"></i>
                                <input class=" " name="linkedin" type="text" placeholder="Linkedin Address" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Google Plus Address</label>
                        <div class="controls">
                            <div class="input-icon left">
                                <i class="icon-google-plus"></i>
                                <input class=" " type="text" name="google_plus" placeholder="Google Plus Address" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Google Map</label>
                        <div class="controls">
                            <div class="input-icon left">
                                <i class="icon-map-marker"></i>
                                <input class=" " type="text" name="google_plus" placeholder="Google Map" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Image Upload</label>
                        <div class="controls">
                            <div data-provides="fileupload" class="fileupload fileupload-new">
                                <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                                    <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                </div>
                                <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="image" class="default"></span>
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
                        <label class="control-label">Image Upload</label>
                        <div class="controls">
                            <div data-provides="fileupload" class="fileupload fileupload-new">
                                <div style="width: 300px; height: 150px;" class="fileupload-new thumbnail">
                                    <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                </div>
                                <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="image" class="default"></span>
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
                        <label class="control-label">Image Upload</label>
                        <div class="controls">
                            <div data-provides="fileupload" class="fileupload fileupload-new">
                                <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                                    <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                </div>
                                <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="image" class="default"></span>
                                    <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>
                                </div>
                            </div>
                            <span class="label label-important">NOTE!</span>
                            <span>
                                Upload A valid Photo jpg/png
                            </span>
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
<!-- END CONTAINER -->
@endsection