@extends('layout.template')

@section('content')

<div class="container-fluid cont">
      <div class="row">
      @include('user.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <i class="fa fa-home text-info"></i> You are logged in!</h1>
            
          </div>
        <div class="row mt-5">
                <div class="col-md-12">
                <div class="card text-left">
                    <div class="card-header bg-dark">
                    
                    <img src="{{asset('/')}}img/logo3.png" class="img-fluid" width="180px">
                    <img src="{{asset('/')}}img/logic.png" class="img-fluid" width="180px">
                    </div>
                  
                </div>
                
            </div>
        </div>
        <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Admin and Support Team <img src="{{asset('/img/')}}/logo2.png" class="img-fluid" width="250px"></h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row p-5">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5 p-3">
            <form id="contact-form-an" name="contact-form" action="{{route('user-email')}}" method="POST">
            @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                    
                        <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" value="{{auth()->user()->name}}" class="form-control" disabled>
                        
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        
                        <label for="email" class="">Your email</label>

                            <input type="text" id="email" name="email" value="{{auth()->user()->email}}" class="form-control" disabled>
                    
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <label for="subject" class="">Subject</label>

                            <input type="text" id="subject" name="subject" class="form-control" value="Contact Admin and Support Team" disabled>
                            <p class="text-danger" id="er-subject"></p>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                        <label for="message">Your message</label>

                            <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                            <p class="text-danger" id="er-message"></p>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-left">
                <input type="submit" class="btn btn-primary text-white" value="Send">
            </div>
            </form>

    
    <div class="status"></div>
</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-3 text-center">
    <ul class="list-unstyled mb-0">
        <li><i class="fa fa-map-marker-alt fa-2x text-info"></i>
            <p>World Media Crew Locations</p>
        </li>

        <li><i class="fa fa-whatsapp mt-4 fa-2x text-info"></i>
            <p>+31 6 42213877 </p>
        </li>

        <li><i class="fa fa-envelope mt-4 fa-2x text-info"></i>
            <p>info@worldmediacrew.com</p>
        </li>
    </ul>
</div>
<!--Grid column-->

</div>

</section>
</div>
<script>
       $(document).ready(function(){
    $('#contact-form-an').submit(function(e){
        
        
        let subject = $('#subject').val();
        let ersubject = document.getElementById('er-subject');

        
        let message = $('#message').val();
        let ermessage = document.getElementById('er-message');

        let errors = [];

        if(subject == "")
        {
          e.preventDefault();
          ersubject.innerHTML = "Please enter a subject";
          errors.push = "Mistake";
        }

        if(message == "")
        {
            e.preventDefault();
            ermessage.innerHTML = "Please enter a message";
            errors.push = "Mistake";
        }

        if(errors.length == 0)
        {
           return true;
        }

    });
});
     </script>
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

