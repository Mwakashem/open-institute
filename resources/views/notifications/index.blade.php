@extends('layouts.app')
@section('title')
    Dashboard | Tags list
@endsection
@section('main-content')
<div class="main-content app-content mt-0">
    <div class="side-app">
       <!-- CONTAINER -->
       <div class="main-container container-fluid">
          <!-- PAGE-HEADER -->
          <div class="page-header">
             <h1 class="page-title">Notifications</h1>
          </div>
          <!-- PAGE-HEADER END --> 
          <!-- Row -->
          <div class="row row-sm">
             <div class="col-lg-12">
                <div class="card">
                   <div class="card-header cardheader-center">
                      <h3 class="card-title">All Notifications</h3>
                      <div class="float-end btnlist">
                         <ul>
                            <li><a href="/notifications/clear" class="btn btn-blue btn-block"> Clear Notifications</a></li>
                         </ul>
                      </div>
                   </div>
                   <div class="card-body">
                      <div class="table-responsive">
                         <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                           
                            <div class="row">
                               <div class="col-sm-12">
                                  <table id="example2" class="table table-bordered border-bottom dataTable no-footer dtr-inline" role="grid" aria-describedby="example2_info" style="width: 1524px;">
                                     <thead>
                                        <tr role="row">
                                      
                                           <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 555.32px;" aria-label="Short description: activate to sort column ascending">Notifications</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($notifs as $notif)
                                        <tr class="odd">
                                            @if (Auth::user()->roles->pluck('name')[0] == 'admin')
                                            <td>{{ $notif->action_taken }}</td>
                                            @else
                                            <td>{{ $notif->action_by }} has Handed Over Projects before they go for Leave</td>
                                            @endif
                                            
                                         </tr>
                                        @endforeach
                                       
                                        
                                     </tbody>
                                  </table>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- End Row --> 
       </div>
       <!-- CONTAINER END --> 
    </div>
 </div>
@endsection
