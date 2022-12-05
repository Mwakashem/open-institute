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
              <li class="breadcrumb-item active" aria-current="page">Edit User</li>
            </ol>
          </div>
        </div>
        <!-- PAGE-HEADER END --> 
        
        <!-- ROW-1 OPEN -->
        <form class="mb-5" method="post" action="{{ route('users.update', auth()->user()->id ) }}">
            @csrf
            @method('put')
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Edit Profile</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                          <label for="exampleInputname">Name</label>
                          <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" id="exampleInputname" placeholder="First Name">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                          <label for="exampleInputname1">Email</label>
                          <input type="text" name="email" value="{{auth()->user()->email }}" class="form-control" id="exampleInputname1" placeholder="Enter Last Name">
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

        <form class="mb-5" method="post" action="{{ route('update-password') }}">
            @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Change Password</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                          <label for="exampleInputname">Old password</label>
                          <input name="old_password"  type="passowrd" name="name" class="form-control" id="exampleInputname" placeholder="Old password">
                          @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                          <label for="exampleInputname1">New Password</label>
                          <input name="new_password" type="password" class="form-control" id="exampleInputname1" placeholder="New Password">
                          @error('new_password')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                        </div>
                      </div><div class="col-lg-6 col-md-12">
                        <div class="form-group">
                          <label for="exampleInputname1">New Password</label>
                          <input name="new_password_confirmation" type="password"   class="form-control" id="exampleInputname1" placeholder="Confirm New Password">
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
