@extends('layouts.app')
@section('title')
    Dashboard | Blog
@endsection
@section('main-content')
<div class="main-content app-content mt-0">
    <div class="side-app"> 
      
      <!-- CONTAINER -->
      <div class="main-container container-fluid"> 
        
        <!-- PAGE-HEADER -->
        <div class="page-header">
          <div>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create User</li>
            </ol>
          </div>
        </div>
        <!-- PAGE-HEADER END --> 
        
        <!-- ROW-1 OPEN -->
        <form class="mb-5" method="post" action="{{ route('users.store') }}">
            @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Create User</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label for="exampleInputname">Name</label>
                            <input type="text" name="name"  class="form-control" id="exampleInputname" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label for="exampleInputname1">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputname1" placeholder="Email">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label for="exampleInputname">Password</label>
                            <input type="password" name="password"  class="form-control" id="exampleInputname" placeholder="Password">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label for="exampleInputname1">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputname1" placeholder="Confirm Password">
                          </div>
                        </div>
                      </div>
                    
                  </div>
                  <div class="card-footer text-end"> <button type="submit" class="btn btn-success my-1">Save</button></div>
                </div>
              </div>
        </div>
        </form>
        <!-- ROW-1 CLOSED --> 
      </div>
      <!-- CONTAINER END --> 
    </div>
  </div>
@endsection
