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
             <h1 class="page-title">Leaves Request</h1>
          </div>
          <!-- PAGE-HEADER END --> 
          <!-- Row -->
          <div class="row row-sm">
             <div class="col-lg-12">
                <div class="card">
                   <div class="card-header cardheader-center">
                      <h3 class="card-title">Leaves Request</h3>
                      <div class="float-end btnlist">
                         <ul>
                            <li><a href="/leaves/create" class="btn btn-blue btn-block">Request Leave</a></li>
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
                                           <th class="border-bottom-0 sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 32.32px;" aria-sort="ascending" aria-label="S.No: activate to sort column descending">S.No</th>
                                           <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 80.32px;" aria-label="Date: activate to sort column ascending">Start date</th>
                                           <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 338.32px;" aria-label="Title: activate to sort column ascending">Name</th>
                                           <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 80.32px;" aria-label="Catergory: activate to sort column ascending">No of Days</th>
                                           <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 555.32px;" aria-label="Short description: activate to sort column ascending">Comments</th>
                                           <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 80.32px;" aria-label="Date: activate to sort column ascending">Status</th>
                                           <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 43.32px;" aria-label="By: activate to sort column ascending">Handover To</th>
                                           <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" style="width: 132.32px;" aria-label="Details: activate to sort column ascending">Details</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($leaves as $leave)
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">1</td>
                                            <td>{{$leave->start_date}} </td>
                                            <td>{{$leave->user_id}}</td>
                                            <td> {{$leave->no_of_days}}  </td>
                                            <td>{!! $leave->comments !!}</td>
                                            <td> @if ($leave->approved)
                                             <button class="btn btn-success">approved</button>  
                                            @else
                                            <button class="btn btn-danger">Pending</button>
                                            @endif</td>
                                            <td>{{$leave->hand_over_to}}</td>
                                            <td>
                                             @if (Auth::user()->roles->pluck('name')[0] == 'admin')
                                               <div class="btn-list table-btns">
                                                <form method="post" action="{{ route('leaves.update', $leave->id) }}">
                                                   @method('put')
                                                     @csrf
                                                  <button type="submit" class="btn btn-icon  btn-primary" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View" aria-label="View"><i class="icofont-share-alt"> </i>Approve</button>
                                                </form>
                                                <form method="post" action="{{ route('leaves.delete', $leave->id) }}">
                                                   @method('delete')
                                                     @csrf
                                                  <button type="submit" class="btn btn-icon  btn-danger" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="icofont-ui-delete"> </i>Delete</button>
                                                 
                                                </form>
                                                @endif
                                                 <a href="/leaves/view/{{$leave->id}}" type="button" class="btn btn-icon  btn-warning" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Publish" aria-label="Publish"><i class="icofont-eye-alt"></i>View</a>
                                               </div>
                                               
                                            </td>
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
