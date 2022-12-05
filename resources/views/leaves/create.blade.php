@extends('layouts.app')
@section('title')
    Dashboard | Blog
@endsection
@section('main-content')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<div class="main-content app-content mt-0">
    <div class="side-app"> 
      
      <!-- CONTAINER -->
      <div class="main-container container-fluid"> 
        
        <!-- PAGE-HEADER -->
        <div class="page-header">
          <h1 class="page-title">Add Property</h1>
          <div>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Property</li>
            </ol>
          </div>
        </div>
        <!-- PAGE-HEADER END --> 
        
        <!-- ROW-1 OPEN -->
        <form action="{{route('leaves.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-lg-12">
    
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Leave Details</h3>
                </div>'
                @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif'
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                            <label for="exampleInputname">Staff Name</label>
                            <input type="text" name="user_id" value="Shem Mwaka" class="form-control" id="exampleInputname" placeholder="Enter Property Title" readonly="readonly" >
                            </div>
                        </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                        <label for="exampleInputname1">Type of Leave</label>
                        <select name="leave_type" class="form-control select2 form-select">
                            <option value="house">Annual Leave</option>
                            <option value="land">Martenity Leave</option>
                            <option value="land">Partenal Leave</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                        <label for="exampleInputnumber">Start date</label>
                        <input name="start_date" type="date" class="form-control" id="startdate" >
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                        <label for="exampleInputnumber">End date</label>
                        <input name="end_date" type="date" onchange="dateCalc()" class="form-control" id="enddate">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                        <label for="exampleInputnumber">No of days</label>
                        <input name="no_of_days" type="number" class="form-control" id="nofdays" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                        <label for="exampleInputname1">Handover Staff</label>
                        <select name="hand_over_to" class="form-control select2 form-select">
                            @foreach ($users as $user)
                            <option value="{{$user->name}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <span>Select person handing Over to</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="card-body">
                    <div class="form-group">
                        <label class="form-label mt-0">Handover Report</label>
                        <input name="report" class="form-control" type="file">
                    </div>
                    </div>
                    </div>
                    </div>
                        
                    <div class="form-group">
                    <label class="form-label">Property Description</label>
                    <textarea name="comments" id="summernote"></textarea>
                    </div>
                    <script>
                        $('#summernote').summernote({
                        placeholder: 'Any Comments',
                        tabsize: 2,
                        height: 120,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ]
                        });
                    </script>
                </div>
                </div>
    
                <div class="card-footer text-end"> <button type="submit" class="btn btn-success my-1">Save</button>  </div>
                </div>
    
    
            </div>
            </div>
    <   </form>
        <!-- ROW-1 CLOSED --> 
      </div>
      <!-- CONTAINER END --> 
    </div>
  </div>
  <script>
    
    function dateCalc() {
        let startdate = document.getElementById("startdate").value
    let enddate = document.getElementById("enddate").value
    // let nofdays = document.getElementById("nofdays")

    const date1 = new Date(enddate);
    const date2 = new Date(startdate);
    const diffTime = Math.abs(date2 - date1);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
    console.log(diffDays + " days");
    document.getElementById("nofdays").value = diffDays;

    }
    
  </script>
@endsection
