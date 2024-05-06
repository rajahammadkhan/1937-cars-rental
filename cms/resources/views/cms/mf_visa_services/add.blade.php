@extends('cms.layouts.masterpage')
@section('title', 'Visa Service')
@section('top-styles')
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/plugins/select2/select2.min.css">
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
                    <li class="breadcrumb-item">Master Files</li>
                    <li class="breadcrumb-item"><a href="{{route('mf_visa_service')}}">Visa Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$isEdit ? 'Edit' : 'Add'}}</li>
                </ol>
                
                        
                <form action="{{ $isEdit ? route('mf_visa_service.update', [$mf_visa_service->id]) : route('mf_visa_service.store') }}" method="POST">
                    @csrf
                    @if ($isEdit)
                        <input type="hidden" name="_method" value="put">
                    @endif
                    <div style="background: black;">
                        <div class="row">
                            <div class="col-md-6 mt15 pl30">
                                <h5 class="text-white">Visa Services / {{$isEdit ? 'Edit' : 'Add'}}</h5>
                            </div>

                            <div class="col-md-6 text-right">
                                <a href="{{route('mf_visa_service')}}" class="btn btn-danger"> 
                                <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>    
                                &nbsp; | &nbsp; Go Back</a>

                                <button type="submit" class="btn btn-danger mb-2 mr-4 ml-3 mt-2"> 
                                <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>    
                                &nbsp; | &nbsp; {{ $isEdit ? 'Update' : 'Save' }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <label for="">Name <span class="text-danger"> * </span></label>
                                <input type="text" name="name" value="{{ $mf_visa_service->name ?? old('name') ?? null }}"
                                    class="form-control" placeholder="Enter Service Name..." required>
                                @if ($errors->has('name'))
                                    <div class="error">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" value="{{ $mf_visa_service->meta_title ?? old('meta_title') ?? null }}"
                                    class="form-control" placeholder="Meta Title...">
                                @if ($errors->has('meta_title'))
                                    <div class="error">{{ $errors->first('meta_title') }}</div>
                                @endif
                            </div>
                            <div class="form-group col-md-8">
                                <label for="">Meta Description</label>
                                <input type="text" name="meta_description" value="{{ $mf_visa_service->meta_description ?? old('meta_description') ?? null }}"
                                    class="form-control" placeholder="Meta Description...">
                                @if ($errors->has('meta_description'))
                                    <div class="error">{{ $errors->first('meta_description') }}</div>
                                @endif
                            </div>
                            
                            <div class="form-group col-md-11 mt10">    
                                <h5><b>TAB DETAILS</b></h5>
                            </div>
                            <div class="form-group col-md-1">
                                <button type="button" class="btn btn-dark waves-effect waves-light btn-sm add_more1">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                </button>
                            </div>
                            
                            

                            <div class="form-group col-md-12">
                                <div class="addMore">
                                    <div class="addmore_cont">
                                        <div class="addMore_btn">
                                            @if($isEdit)
                                                @foreach($mf_visa_service->details as $key => $detail)
                                                    <div class="row addmore_cont1 ml30">
                                                        <input type="hidden" value="1" class="radio_counter1" />
                                                        
                                                        <div class="form-group col-md-11">
                                                            @if($key == 0)
                                                                <label for="">Tab Name</label>
                                                            @endif
                                                            <input type="text" name="tab_name[{{$detail->id}}]" value="{{$detail->tab_name}}"
                                                                class="form-control" placeholder="Enter Tab Name...">
                                                            @if ($errors->has('name'))
                                                                <div class="error">{{ $errors->first('name') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-1 {{$key == 0 ? 'mt35' : 'mt-1'}}">
                                                            <a href="javascript:void(0);" id="remove" class="remove-edit">
                                                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="#e20810" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                                            </a>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="row addmore_cont1 ml30">
                                                    <input type="hidden" value="1" class="radio_counter1" />

                                                    <div class="form-group col-md-11">
                                                        <label for="">Tab Name</label>
                                                        <input type="text" name="tab_name[]" value=""
                                                            class="form-control" placeholder="Enter Tab Name...">
                                                        @if ($errors->has('name'))
                                                            <div class="error">{{ $errors->first('name') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-1 mt30">
                                                        <a href="javascript:void(0);" id="remove" class="remove">
                                                            <svg viewBox="0 0 24 24" width="32" height="32" stroke="#e20810" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                                        </a>
                                                    </div>

                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection
@section('bottom-mid-scripts')
    <script src="{{ url('') }}/plugins/select2/select2.min.js"></script>
    <script src="{{ url('') }}/plugins/select2/custom-select2.js"></script>
    <script src="https://parsleyjs.org/dist/parsley.min.js"></script>
@endsection
@section('bottom-bot-scripts')
    <script>
        $(document).ready(function() {
            $('form').parsley();
            
            $('.remove-edit').click(function () {
                var $this = $(this);
                swal({
                    title: 'Are you sure?',
                    text: "Content related to this tab will also be deleted",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#4fa7f3',
                    cancelButtonColor: '#d57171',
                    confirmButtonText: 'Yes, delete it!'
                }).then(function (result) {
                    if (result.value){
                        $($this).parent().parent().remove();
                    }
                })
            });

            $('.remove').click(function () {
                $(this).parent().parent().remove();
            });
        
            var num = 1;

            $(document).on('click' , '.add_more1' , function(){
                
                $('.addMore_btn').append(
                `<div class="row addmore_cont1 ml30">
                    
                    <input type="hidden" value="1" class="radio_counter1" />
                    
                    <div class="form-group col-md-11">
                        <input type="text" name="tab_name[181800${num++}]" value=""
                            class="form-control" placeholder="Enter Tab Name...">
                        @if ($errors->has('name'))
                            <div class="error">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="col-md-1 mt-1">
                        <a href="javascript:void(0);" id="remove" class="remove">
                            <svg viewBox="0 0 24 24" width="32" height="32" stroke="#e20810" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                        </a>
                    </div>`
                );

                $('form').parsley();

                
                $('.remove').click(function () {
                    $(this).parent().parent().remove();
                });
            });
        });

    </script>
@endsection
