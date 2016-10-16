@extends('admin.admin_master')
@section('content')
<script src="{{asset('admin_assets/js/countries.js')}}"></script>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
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
            <h3 class="page-title">
                Add new Staff
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{URL::to('/dashboard')}}">Home</a>
                    <span class="divider">/</span>
                </li>
                <li>
                    <a href="{{URL::to('/add_staff')}}">Add Admin</a>
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
        </div>
    </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="row-fluid">
        <div class="span12">
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
                    {!! Form::open(['url' => '/save_staff', 'method'=>'post', 'files' => true ]) !!}
                    <div class="control-group">
                        <label class="control-label">Firstname</label>
                        <div class="controls">
                            <input name="firstname" type="text" class="span6  popovers" data-trigger="hover" data-content="Write Down Your First Name like as Md.Neamul" data-original-title="First Name" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Lastname</label>
                        <div class="controls">
                            <input name="lastname" type="text" class="span6  popovers" data-trigger="hover" data-content="Write Down Your Last Name like as Islam" data-original-title="Last Name" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Mobile No</label>
                        <div class="controls">
                            <input name="mobile" type="text" class="span6  popovers" data-trigger="hover" data-content="Write Down Your Mobile No like as +8801723041050" data-original-title="Mobile No" />
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
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input type="text" name="password" class="span6  popovers" data-trigger="hover" data-content="Write Down Your Password" data-original-title="Password" />
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
                        <label class="control-label">Website Address</label>
                        <div class="controls">
                            <div class="input-icon left">
                                <i class="icon-link"></i>
                                <input class=" " name="website" type="text" placeholder="Website Url" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Skype Address</label>
                        <div class="controls">
                            <div class="input-icon left">
                                <i class="icon-skype"></i>
                                <input class=" " type="text" name="skype" placeholder="Skype Address" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Currency Input</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on">$</span><input class=" " type="text" /><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Designation</label>
                        <div class="controls">
                            <select name="occupation" class="span6 chzn-select" data-placeholder="Choose a Category" tabindex="1">
                                <option value=""></option>
                                <option value="Web Designer">Web Designer</option>
                                <option value="Web Developer">Web Developer</option>
                                <option value="Software">Software</option>
                                <option value="Market Analiser">Market Analiser</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Country</label>
                        <div class="controls">
                            <select  name="country" class="span6 chzn-select" data-placeholder="Choose a Category" tabindex="1">
                                <option> </option>
                                <script type="text/javascript">
selectCountry();
                                </script>

                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Address</label>
                        <div class="controls">
                            <textarea class="span6 " name="address" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">About</label>
                        <div class="controls">
                            <textarea class="span6 " name="about" rows="3"></textarea>
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
                </div>
            </div>
        </div>

    </div>
</div>
<div style='text-align:center;'>
</div>


@endsection