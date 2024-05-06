@extends('cms.layouts.masterpage')
@section('title', 'Home')
@section('top-styles')
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/file-upload/file-upload-with-preview.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/forms/switches.css">
    <link href="{{ url('') }}/assets/css/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('') }}/assets/css/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('') }}/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('') }}/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/components/tabs-accordian/custom-accordions.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
 <style>
.error{
    color: red;
}

.widget-content-area {
    padding: 0px;
}
thead.datatable {
    background: #0e1726;
}
.table > thead > tr > th {
    color: #ffffff;
}

.bg-image {
  visibility: hidden;
  position: absolute;
}

.section-one-img {
  visibility: hidden;
  position: absolute;
}
.section-four-image {
  visibility: hidden;
  position: absolute;
}

.section-seven-image {
  visibility: hidden;
  position: absolute;
}

.img-thumbnail{
    cursor: pointer;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
}

.images {
    display: flex;
    flex-wrap: wrap;
}

.photo {
    width: 1480px;
    height: 680px;
}

.photo img {
    width: 100%;
    height: 100%;
}

.images-sign {
    display: flex;
    flex-wrap: wrap;
}

.photo-sign {
    width: 250px;
    height: 100px;
}

.photo-sign img {
    width: 100%;
    height: 100%;
}

.section-four-image {
    display: flex;
    flex-wrap: wrap;
}

.section-four-photo {
    width: 300px;
    height: 358px;
}

.section-four-photo img {
    width: 100%;
    height: 100%;
}

.section-seven-image {
    display: flex;
    flex-wrap: wrap;
}

.section-seven-photo {
    width: 400px;
    height: 220px;
}

.section-seven-photo img {
    width: 100%;
    height: 100%;
}

.img-thumbnail:hover {
  box-shadow: 0 0 2px 1px #000;
}
</style>   
@endsection
@section('header')
    @parent
@endsection
@section('leftside')
    @parent
@endsection
@section('content')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="overlay">
    </div>
    <div class="cs-overlay">
    </div>
    <div class="search-overlay">
    </div>
    <!--  BEGIN CONTENT AREA  -->   
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item">Site Management</li>
                    <li class="breadcrumb-item"><a href="{{route('other_pages')}}">Other Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
                
                
                    
                    <div style="background: black;">
                        <div class="row">
                            <div class="col-md-6 mt15 pl30">
                                <h5 class="text-white">Home</h5>
                            </div>

                            <div class="col-md-6 text-right">
                                <a href="{{route('other_pages')}}" class="btn btn-danger mb-2 mr-4 ml-3 mt-2"> 
                                    <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg> &nbsp; | &nbsp; Go Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        

                        <div id="toggleAccordion">
                            <br>

                            <!-- Video Section -->
                            <form action="{{route('home_video_section.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_method" value="put">

                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="card">
                                            <div class="card-header" id="...">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#videoSection" aria-expanded="true" aria-controls="videoSection"> Video Section <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                    </div>
                                                </section>
                                            </div>

                                            <div id="videoSection" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="custom-file">
                                                                <label class="custom-file-label" for="customFile">Browse to Change Video</label>
                                                                <input type="file" name="home_video" class="custom-file-input" id="customFile">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center" style="margin-top:30px;">
                                                            <video width="70%" height="600px" controls>
                                                            <source src="{{url('')}}/uploads/{{$video_section->image_one}}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                            </video>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="submit" class="btn btn-dark mb-2 mr-4 mt-2"> Update</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Video Section -->


                            <!-- Section One -->
                            <form action="{{route('home_section_one.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_method" value="put">

                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="card">
                                            <div class="card-header" id="...">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#sectionTwo" aria-expanded="true" aria-controls="sectionTwo"> Section Two <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                    </div>
                                                </section>
                                            </div>

                                            <div id="sectionTwo" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label for="">Description <span class="text-danger"> * </span></label>
                                                            <textarea cols="10" class="summernote" name="description">{!! $home_section_one->description_one !!}</textarea>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Image <small> ( Dimensions : 1920 x 1115 ) </small> <span class="text-danger"> * </span> </label>
                                                            <input type="file" name="section_one_img"  class="section-one-img" accept="image/*" >
                                                            <div class="images">
                                                                <div class="section_one_img">
                                                                    <img src="{{url('')}}/uploads/{{$home_section_one->image_two ?? 'placeholder.png'}}" id="preview-section-one-img" class="img-thumbnail browse-section-one-img">
                                                                </div>
                                                                @if ($errors->has('bg_image'))
                                                                    <div class="error">{{ $errors->first('bg_image') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>Background Image <small> ( Dimensions : 1920 x 1115 ) </small> <span class="text-danger"> * </span> </label>
                                                            <input type="file" name="bg_image"  class="bg-image" accept="image/*" >
                                                            <div class="images">
                                                                <div class="photo">
                                                                    <img src="{{url('')}}/uploads/{{$home_section_one->image_one ?? 'placeholder.png'}}" id="preview" class="img-thumbnail browse">
                                                                </div>
                                                                @if ($errors->has('bg_image'))
                                                                    <div class="error">{{ $errors->first('bg_image') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="submit" class="btn btn-dark mb-2 mr-4 mt-2"> Update</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Section One -->

                            <!-- Section Three -->
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="card">
                                        <div class="card-header" id="...">
                                            <section class="mb-0 mt-0">
                                                <div role="menu" class="collapsed" data-toggle="collapse" data-target="#sectionThree" aria-expanded="true" aria-controls="sectionThree">
                                                    Section Three  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                </div>
                                            </section>
                                        </div>

                                        <div id="sectionThree" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion">
                                            <br>
                                            <table id="homeSectionThreeDatatable" class="table table-bordered table-hover table-condensed mb-4"" width="100%" cellspacing="0"
                                            cellpadding="0">
                                                <thead class="datatable">
                                                    <tr>
                                                        <th class="no-sort" width="5%">S.No</th>
                                                        <th class="no-sort" width="5%"> Icon</th>
                                                        <th class="no-sort">Heading</th>
                                                        <th class="no-sort text-center" width="5%">Actions</th>
                                                        <th class="no-sort text-center" width="5%">Status</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{route('home_section_three.create')}}" class="btn btn-dark mb-2 ml-1 mr-4 mt-2"> Add</a>
                                </div>
                            </div>
                            <!-- End Section Three -->

                            <!-- Section Four -->
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="card">
                                        <div class="card-header" id="...">
                                            <section class="mb-0 mt-0">
                                                <div role="menu" class="collapsed" data-toggle="collapse" data-target="#sectionFour" aria-expanded="true" aria-controls="sectionFour">
                                                    Section Four  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                </div>
                                            </section>
                                        </div>

                                        <div id="sectionFour" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion">
                                            <br>
                                            <table id="homeSectionFourDatatable" class="table table-bordered table-hover table-condensed mb-4"" width="100%" cellspacing="0"
                                            cellpadding="0">
                                                <thead class="datatable">
                                                    <tr>
                                                        <th class="no-sort" width="5%">S.No</th>
                                                        <th class="no-sort" width="5%"> Icon</th>
                                                        <th class="no-sort text-center" width="5%">Actions</th>
                                                        <th class="no-sort text-center" width="5%">Status</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{route('home_section_four.create')}}" class="btn btn-dark mb-2 ml-1 mr-4 mt-2"> Add</a>
                                </div>
                            </div>
                            <!-- End Section Four -->


                            <!-- Section Five -->
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="card">
                                        <div class="card-header" id="...">
                                            <section class="mb-0 mt-0">
                                                <div role="menu" class="collapsed" data-toggle="collapse" data-target="#sectionFive" aria-expanded="true" aria-controls="sectionSix">
                                                    Section Five  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                </div>
                                            </section>
                                        </div>

                                        <div id="sectionFive" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion">
                                            <br>
                                            <table id="homeSectionFiveDatatable" class="table table-bordered table-hover table-condensed mb-4"" width="100%" cellspacing="0"
                                            cellpadding="0">
                                                <thead class="datatable">
                                                    <tr>
                                                        <th class="no-sort" width="5%">S.No</th>
                                                        <th class="no-sort" width="5%"> Icon</th>
                                                        <th class="no-sort">Text</th>
                                                        <th class="no-sort">Figure</th>
                                                        <th class="no-sort text-center" width="5%">Actions</th>
                                                        <th class="no-sort text-center" width="5%">Status</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{route('home_section_five.create')}}" class="btn btn-dark mb-2 ml-1 mr-4 mt-2"> Add</a>
                                </div>
                            </div>
                            <!-- End Section Five -->

                            <!-- Section Six -->
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="card">
                                        <div class="card-header" id="...">
                                            <section class="mb-0 mt-0">
                                                <div role="menu" class="collapsed" data-toggle="collapse" data-target="#sectionSix" aria-expanded="true" aria-controls="sectionSix">
                                                    Section Six  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                </div>
                                            </section>
                                        </div>

                                        <div id="sectionSix" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion">
                                            <br>
                                            <table id="homeSectionSixDatatable" class="table table-bordered table-hover table-condensed mb-4"" width="100%" cellspacing="0"
                                            cellpadding="0">
                                                <thead class="datatable">
                                                    <tr>
                                                        <th class="no-sort" width="5%">S.No</th>
                                                        <th class="no-sort" width="5%"> Image</th>
                                                        <th class="no-sort">Name</th>
                                                        <th class="no-sort text-center" width="5%">Actions</th>
                                                        <th class="no-sort text-center" width="5%">Status</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{route('home_section_six.create')}}" class="btn btn-dark mb-2 ml-1 mr-4 mt-2"> Add</a>
                                </div>
                            </div>
                            <!-- End Section Six -->

                            <!-- Section Seven -->
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="card">
                                        <div class="card-header" id="...">
                                            <section class="mb-0 mt-0">
                                                <div role="menu" class="collapsed" data-toggle="collapse" data-target="#sectionSeven" aria-expanded="true" aria-controls="sectionSeven">
                                                    Section Seven  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                </div>
                                            </section>
                                        </div>

                                        <div id="sectionSeven" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion">
                                            <br>
                                            <table id="homeSectionSevenDatatable" class="table table-bordered table-hover table-condensed mb-4"" width="100%" cellspacing="0"
                                            cellpadding="0">
                                                <thead class="datatable">
                                                    <tr>
                                                        <th class="no-sort" width="5%">S.No</th>
                                                        <th class="no-sort" width="5%"> Image</th>
                                                        <th class="no-sort">Name</th>
                                                        <th class="no-sort text-center" width="5%">Actions</th>
                                                        <th class="no-sort text-center" width="5%">Status</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{route('home_section_seven.create')}}" class="btn btn-dark mb-2 ml-1 mr-4 mt-2"> Add</a>
                                </div>
                            </div>
                            <!-- End Section Seven -->

                            <!-- Section Eight -->
                            <form action="{{route('home_section_eight.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_method" value="put">

                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="card">
                                            <div class="card-header" id="...">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#sectionEight" aria-expanded="true" aria-controls="sectionEight"> Section Eight <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                    </div>
                                                </section>
                                            </div>

                                            <div id="sectionEight" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion">
                                                <div class="card-body">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-8">
                                                            <label for="">Description <span class="text-danger"> * </span></label>
                                                            <textarea cols="10" class="summernote" name="description">{!! $home_section_eight->description_one !!}</textarea>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label>Image <span class="text-danger"> * </span> </label>
                                                            <input type="file" name="image"  class="section-seven-image" accept="image/*" >
                                                            <div class="images">
                                                                <div class="section-seven-photo">
                                                                    <img src="{{url('')}}/uploads/{{$home_section_eight->image_one ?? 'placeholder.png'}}" id="section-seven-preview" class="img-thumbnail browse-section-seven">
                                                                </div>
                                                                @if ($errors->has('image'))
                                                                    <div class="error">{{ $errors->first('image') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="submit" class="btn btn-dark mb-2 mr-4 mt-2"> Update</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Section Eight -->
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection
@section('bottom-mid-scripts')
<!-- Required datatable js -->
    <script src="{{ url('') }}/assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('') }}/assets/js/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('') }}/assets/js/datatables/axios.min.js"></script>
    <script src="{{ url('') }}/assets/js/sweetalert2.min.js"></script>

    <script src="{{ url('') }}/assets/js/components/ui-accordions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <script src="{{ url('') }}/plugins/file-upload/file-upload-with-preview.min.js"></script>
@endsection
@section('bottom-bot-scripts')

@include('cms.pages.home.slider.includes.home-slider-js')
@include('cms.pages.home.section_three.includes.home-section-three-js')
@include('cms.pages.home.section_four.includes.home-section-four-js')
@include('cms.pages.home.section_five.includes.home-section-five-js')
@include('cms.pages.home.section_six.includes.home-section-six-js')
@include('cms.pages.home.section_seven.includes.home-section-seven-js')
    <script>
        $(document).ready(function() {
            $('form').parsley();

            $('.summernote').summernote(
                {
                    height: 300,
                    focus: true
                }
            );

            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });

            $(document).on("click", ".browse", function() {
                var file = $(this).parents().find(".bg-image");
                file.trigger("click");
            });

            $('.bg-image').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);
            
                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("preview").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });

            $(document).on("click", ".browse-section-one-img", function() {
                var file = $(this).parents().find(".section-one-img");
                file.trigger("click");
            });

            $('.section-one-img').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);
            
                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("preview-section-one-img").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });

            
            $(document).on("click", ".browse-section-four", function() {
                var file = $(this).parents().find(".section-four-image");
                file.trigger("click");
            });

            $('.section-four-image').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);
            
                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("section-four-preview").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });

            $(document).on("click", ".browse-section-seven", function() {
                var file = $(this).parents().find(".section-seven-image");
                file.trigger("click");
            });

            $('.section-seven-image').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);
            
                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("section-seven-preview").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });
        });

    </script>
@endsection
