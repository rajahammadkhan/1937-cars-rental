@extends('cms.layouts.masterpage')
@section('title', 'About Us')
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

.section-one-image-one {
  visibility: hidden;
  position: absolute;
}
.section-one-image-two {
  visibility: hidden;
  position: absolute;
}
.section-one-image-three {
  visibility: hidden;
  position: absolute;
}

.img-thumbnail{
    cursor: pointer;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
}

.section-one-image-one {
    display: flex;
    flex-wrap: wrap;
}
.section-one-image-two {
    display: flex;
    flex-wrap: wrap;
}
.section-one-image-three {
    display: flex;
    flex-wrap: wrap;
}

.section-one-photo {
    width: 450px;
    height: 350px;
}

.section-one-photo img {
    width: 100%;
    height: 100%;
}
.section-one-photo-two {
    width: 350px;
    height: 250px;
}

.section-one-photo-two img {
    width: 100%;
    height: 100%;
}
.section-one-photo-three {
    width: 220px;
    height: 350px;
}

.section-one-photo-three img {
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
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
                
                
                    
                    <div style="background: black;">
                        <div class="row">
                            <div class="col-md-6 mt15 pl30">
                                <h5 class="text-white">About Us</h5>
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
                            
                            <!-- Section One -->
                            <form action="{{route('about_us_section_one.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_method" value="put">

                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="card">
                                            <div class="card-header" id="...">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#sectionOne" aria-expanded="true" aria-controls="sectionOne"> Section One <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                    </div>
                                                </section>
                                            </div>

                                            <div id="sectionOne" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-5 mt10">
                                                            <label>Image One <small> ( Dimensions : 606 x 408 ) </small> <span class="text-danger"> * </span> </label>
                                                            <input type="file" name="image_one"  class="section-one-image-one" accept="image/*" >
                                                            <div class="images">
                                                                <div class="section-one-photo">
                                                                    <img src="{{url('')}}/uploads/{{$about_us_section_one->image_one ?? 'placeholder.png'}}" id="section-one-preview" class="img-thumbnail browse-section-one">
                                                                </div>
                                                                @if ($errors->has('image'))
                                                                    <div class="error">{{ $errors->first('image') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mt10">
                                                            <label>Image Two <small> ( Dimensions : 364 x 285 ) </small> <span class="text-danger"> * </span> </label>
                                                            <input type="file" name="image_two"  class="section-one-image-two" accept="image/*" >
                                                            <div class="images">
                                                                <div class="section-one-photo-two">
                                                                    <img src="{{url('')}}/uploads/{{$about_us_section_one->image_one ?? 'placeholder.png'}}" id="section-one-preview-two" class="img-thumbnail browse-two-section-one">
                                                                </div>
                                                                @if ($errors->has('image'))
                                                                    <div class="error">{{ $errors->first('image') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mt10">
                                                            <label>Image Three <small> ( Dimensions : 120 x 230 ) </small> <span class="text-danger"> * </span> </label>
                                                            <input type="file" name="image_three"  class="section-one-image-three" accept="image/*" >
                                                            <div class="images">
                                                                <div class="section-one-photo-three">
                                                                    <img src="{{url('')}}/uploads/{{$about_us_section_one->image_one ?? 'placeholder.png'}}" id="section-one-preview-three" class="img-thumbnail browse-three-section-one">
                                                                </div>
                                                                @if ($errors->has('image'))
                                                                    <div class="error">{{ $errors->first('image') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mt10">
                                                            <label for="">Description <span class="text-danger"> * </span></label>
                                                            <textarea cols="10" class="summernote" name="description">{!! $about_us_section_one->description_one !!}</textarea>
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

    <script>
        $(document).ready(function() {
            $('form').parsley();

            $('.summernote').summernote(
                {
                    height: 300,
                    focus: true
                }
            );

            $(document).on("click", ".browse-section-one", function() {
                var file = $(this).parents().find(".section-one-image-one");
                file.trigger("click");
            });

            $('.section-one-image-one').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);
            
                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("section-one-preview").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });
            $(document).on("click", ".browse-two-section-one", function() {
                var file = $(this).parents().find(".section-one-image-two");
                file.trigger("click");
            });

            $('.section-one-image-two').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);
            
                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("section-one-preview-two").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });
            $(document).on("click", ".browse-three-section-one", function() {
                var file = $(this).parents().find(".section-one-image-three");
                file.trigger("click");
            });

            $('.section-one-image-three').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);
            
                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("section-one-preview-three").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });

            

        });

    </script>
@endsection
