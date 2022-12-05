@extends('layouts.app')
@section('title')
@endsection
@section('main-content')
<br><br>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
</script>

<div class="wrapper bg-white">
   
   
    <div class="row border rounded p-1 my-3">
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start">
                <b>Name</b>
                <p class="text-justify pt-2">{{$leaveRequest->user_id}}</p>
            </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start">
                <b>Handed Over To</b>
                <p class="text-justify pt-2">{{$leaveRequest->hand_over_to}}</p>
            </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start">
                <b>Name</b>
                <p class="text-justify pt-2">{{$leaveRequest->user_id}}</p>
            </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start">
                <b>Status</b>
                <p class="text-justify pt-2">@if ($leaveRequest->approved)
                    Approved
                @else
                    Pending Approval
                @endif</p>
            </div>
        </div>
        <div class="col-md-4 py-3">
            <div class="d-flex flex-column align-items start">
                <b> From</b>
                <p class="text-justify pt-2">{{$leaveRequest->start_date}}</p>
            </div>
        </div>
        <div class="col-md-4 py-3">
            <div class="d-flex flex-column align-items start">
                <b> Leave Days</b>
                <p class="text-justify pt-2">{{$leaveRequest->no_of_days}}</p>
            </div>
        </div>
        <div class="col-md-4 py-3">
            <div class="d-flex flex-column align-items start">
                <b>To</b>
                <p class="text-justify pt-2">{{$leaveRequest->end_date}}</p>
            </div>
        </div>
    </div>
    <div class="pl-3 font-weight-bold">Handover Report</div><br><br>
    <h6>Comments</h6><br>
        <p>{!! $leaveRequest->comments!!}</p>
    <div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
        
        <div id="my_pdf_viewer">
            
            <div id="canvas_container">
                <canvas id="pdf_renderer"></canvas>
            </div>
            <div class="col-md-4 py-3">
                <div class="d-flex flex-column align-items start">
                  <a href="http://127.0.0.1:8000/attachment/{{$leaveRequest->report}}"><button class="btn btn-primary"> Download</button></a>
                </div>
            </div>
        
    </div>
</div>
<script>
    var myState = {
        pdf: null,
        currentPage: 1,
        zoom: 1
    }
  
    pdfjsLib.getDocument('http://127.0.0.1:8000/attachment/{{$leaveRequest->report}}').then((pdf) => {
  
        myState.pdf = pdf;
        render();

    });

    function render() {
        myState.pdf.getPage(myState.currentPage).then((page) => {
      
            var canvas = document.getElementById("pdf_renderer");
            var ctx = canvas.getContext('2d');
  
            var viewport = page.getViewport(myState.zoom);

            canvas.width = viewport.width;
            canvas.height = viewport.height;
      
            page.render({
                canvasContext: ctx,
                viewport: viewport
            });
        });
    }
</script>

@endsection
