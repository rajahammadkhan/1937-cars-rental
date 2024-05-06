@extends('cms.layouts.masterpage')
@section('title', 'users')
@section('top-styles')
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/components/tabs-accordian/custom-accordions.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
 <style>
.error{
    color: red;
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
                    <li class="breadcrumb-item"><a href="{{route('our_service')}}">Our Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Content</li>
                </ol>
                
                
                    
                    <div style="background: black;">
                        <div class="row">
                            <div class="col-md-6 mt15 pl30">
                                <h5 class="text-white">Update Content - {{$our_service->name}}</h5>
                            </div>

                            <div class="col-md-6 text-right">
                                <a href="{{route('our_service')}}" class="btn btn-danger mb-2 mr-4 ml-3 mt-2"> 
                                    <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg> &nbsp; | &nbsp; Go Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        

                        <div id="toggleAccordion">
                            <br>
                            @foreach($our_service->details as $key => $detail)
                                <form action="{{route('our_service.update', [$our_service->id, $detail->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="put">

                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="card">
                                                <div class="card-header" id="...">
                                                    <section class="mb-0 mt-0">
                                                        <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordion{{$key}}" aria-expanded="true" aria-controls="defaultAccordion{{$key}}">
                                                            {{$detail->tab_name}}  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                        </div>
                                                    </section>
                                                </div>

                                                <div id="defaultAccordion{{$key}}" class="collapse {{$key == 0 ? 'show' : null}}" aria-labelledby="..." data-parent="#toggleAccordion">
                                                    <div class="card-body">
                                                        <textarea cols="200" class="summernote" name="content">{!! $detail->tab_content !!}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="submit" class="btn btn-dark mb-2 mr-4 ml-3 mt-2"> Update</button>
                                        </div>
                                    </div>
                                </form>
                            @endforeach
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
    <script src="{{ url('') }}/assets/js/components/ui-accordions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ url('') }}/plugins/select2/select2.min.js"></script>
    <script src="{{ url('') }}/plugins/select2/custom-select2.js"></script>
    <script src="https://parsleyjs.org/dist/parsley.min.js"></script>
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
        });

    </script>
@endsection
