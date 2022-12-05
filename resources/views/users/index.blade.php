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
          <h1 class="page-title">Tags</h1>
          <div>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tags</li>
            </ol>
          </div>
        </div>
        <!-- PAGE-HEADER END --> 
        
        <!-- Row -->
        <div class="row row-sm">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header cardheader-center">
                <h3 class="card-title">Subscriber</h3>
                <div class="float-end btnlist">
                  <ul>
                     <li><a href="/create/user" class="btn btn-blue btn-block">Create User</a></li>
                  </ul>
               </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example2" class="table table-bordered border-bottom">
                    <thead>
                      <tr>
                        <th class="border-bottom-0">ID</th>
                        <th class="border-bottom-0">Name</th>
                        
                        <th class="border-bottom-0">Email</th>
                        <th class="border-bottom-0">ROLE</th>                        
                        <th class="border-bottom-0">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <form method="post" action="{{ route('users.destroy', $user->id) }}">
                          @method('delete')
                            @csrf
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles->pluck('name')[0] }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}"
                                class="btn btn-primary btn-sm">
                                Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $users->links('pagination::simple-bootstrap-4') }}

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
