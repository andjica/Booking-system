@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('renter.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                   @endif

                    
                    <button type="button" class="btn btn-info text-white" onclick="goBack()">
                <i class="fa fa-arrow-left"></i> Back
         </button> &nbsp; You are logged in!</h1>
              
          </div>
        <div class="row justify-content-center mt-5">
                <div class="col-md-6 border shadow-lg p-3">
                 @if($usercount > 0)
                    @include('components.renter-info-update')
                 @else
                    @include('components.renter-info')
                 @endif
            </div>
            <div class="col-md-1"></div>
            @isset($user)
            <div class="col-md-4 border shadow-lg">
            <div class="panel-heading display-table border-dark mb-5">
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
        </div>
       
            <form action="{{route('set-card')}}" method="post" id="payment-form">
            @csrf
                <label for="iban">IBAN (International Bank Account Number)</label>
              
                @if(empty($user->iban))
                <input id="iban" type="text" name="iban" class="form-control" value=""/><br>
                @else
                <input id="iban" type="text" name="iban" class="form-control" value="{{$user->iban}}"/><br>
                @endif 
                <input type="submit" class="btn btn-success" value="Submit">
               
        
                
            </form>
            </div>
            @endisset
        </div>
</div>
</div>
@endsection

@section('css')
    <style>
     .cont
     {
         margin-top:150px;
         margin-bottom:100px;
     }
     .small
     {
         margin-top:20px;
         width:200px;
     }

     

     .mora{   width: 220px;
                    z-index: 10001020;
                    position: relative;
                    top: 36px;"
    }

    .andjica-select{
        height: 35px !important;
        margin-top: 44px !important;
    }
    </style>
@endsection
<script src="https://js.stripe.com/v3/"></script>


