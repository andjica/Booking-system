@extends('layout.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('This is email from user') }} 
                {{$info['firstname']}} &nbsp; {{$info['lastname']}}</div>

                <div class="card-body">
                  
                        <div class="alert alert-success" role="alert">
                            {{ __('A new one reservation.') }} for {{$info['roomsname']}}
                        </div>
                  

                    {{ __('Before proceeding, please check your email this link.') }}
                     <a href="{{ asset('/confirmed-reservation/'.$info['resid']) }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
