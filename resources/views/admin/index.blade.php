@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('admin.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Your reservation</div>

                <div class="card-body">
                   
                
                </div>
            </div>
        </div>
        <div class="col-md-7">
        </div>

</div>
</div>
<div>
@endsection

@section('css')
    <style>
     .cont
     {
         margin-top:150px;
         margin-bottom:100px;
     }
    </style>
@endsection

