@isset($room)
<div class="row">
  <ul>
    <li>
    <h3><b>{{$room->name}}</b></h3>
    </li>
    <li>

    </li>
    <li>
       <div class="footer_pro">
              <ul class="list-inline shadow-lg bg-light mb-4" style="font-weight: 700">
              <li class="list-inline-item">
                      <div class="single_info_doc ml-4">
                          <img src="{{asset('/')}}img/svg_icon/location.svg" alt="" style="size:15px">
                          <span>{{$room->city->country->name}} - {{$room->city->name}}, {{$room->address}}</span>
                      </div>
              </li>
              <li class="list-inline-item">
                  <div class="single_info_doc">
                      <img src="{{asset('/')}}img/svg_icon/square.svg" alt="">
                      <span>{{$room->square}}Sqft</span>
                  </div>
              </li>
              <li class="list-inline-item">
                  <div class="single_info_doc">
                      <img src="{{asset('/')}}img/svg_icon/bed.svg" alt="">
                      <span>{{$room->beds}}</span>
                  </div>
              </li>
              <li class="list-inline-item">
                  <div class="single_info_doc">
                      <img src="{{asset('/')}}img/svg_icon/bath.svg" alt="">
                      <span>{{$room->number_of_bath}} Bath</span>
                  </div>
              </li>
              <li class="list-inline-item">
                  <div class="single_info_doc">
                  <i class="fa text-danger fa-paw"></i>&nbsp;Pets {{$room->pets}}
                  </div>
              </li>
            </ul>
        </div>
    </li>
  </ul>
</div>


                                   
      <div class="row  shadow-md p-2">
      <a  class="link" href="#" data-toggle="modal" data-target="#exampleModal">
        <div class="col-lg-6 mt-2 mr-0 pr-0">
        @foreach ($img as $pic)
            @if ($loop->first)
            <div class="carousel-item active ">
                <img class="d-block img-fluid" src="{{asset('./image/'.$pic->url)}}" style="border-radius: 20px; max-height:420px !important; width: 100% !important;" alt="{{$pic->alt}}">
            </div>
          @endif
          @endforeach
        </div>
        <div class="col-lg-6 ml-0 pl-0">
        @foreach($images as $i)
          <figure class="col-md-6 mt-2 pr-0">
          
            <img alt="picture" src="{{asset('/image/'.$i->url)}}" alt="{{$i->alt}}" style=" border-radius: 20px; height: 156px; width: 100%;"
              class="img-fluid">
          
          </figure>
            @endforeach
            
        </div>
        </a>
      </div>
    
    <div class="container">
     <div class="row mt-5">
     
      <div class="col-lg-8">
          <div class="card-body">
          <h4 class="card-title mb-5" style="font-weight: 700;">{{$room->name}}</h4>
          <li class="mt-5 mb-5"><h4 style="font-size: 14px;
    margin-top: -20px;
    font-weight: 700;">Prize per day: € {{$room->prize}}</h4></li>

          <ul style="    display: grid;
    text-align: left;">
              <li class="list-inline-item">
                      <div class="single_info_doc ">
                          <img src="{{asset('/')}}img/svg_icon/location.svg" alt="" style="width:16px">
                          <span>Location: {{$room->city->country->name}} - {{$room->city->name}}, {{$room->address}}</span>
                      </div>
              </li>
              <li class="list-inline-item mt-4">
                  <div class="single_info_doc">
                      <img src="{{asset('/')}}img/svg_icon/square.svg" alt="" style="width:20px">
                      <span>Room size: {{$room->square}}Sqft</span>
                  </div>
              </li>
              <li class="list-inline-item mt-4">
                  <div class="single_info_doc">
                      <img src="{{asset('/')}}img/svg_icon/bed.svg" alt="" style="width:16px">
                      <span>Number of Rooms: {{$room->beds}}</span>
                  </div>
              </li>
              <li class="list-inline-item mt-4">
                  <div class="single_info_doc">
                      <img src="{{asset('/')}}img/svg_icon/bath.svg" alt="" style="width:16px">
                      <span>Bathrooms: {{$room->number_of_bath}} </span>
                  </div>
              </li>
              <li class="list-inline-item mt-4">
                  <div class="single_info_doc">
                  <i class="fa text-danger fa-paw"></i>&nbsp;Pets {{$room->pets}}
                  </div>
              </li>
         </ul>

            <li class="mt-5 mb-5"><p class="card-text">{{$room->description_one}}</p></li>
            <li class="mt-5 mb-5"><p class="card-text">{{$room->description_two}}</p></li>
            <li class="mt-5 mb-5"><p class="card-text">{{$room->description_tree}}</p></li>
           
           
           
          </div>
 
        </div>
        <div class="col-lg-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4>{{$room->name}}</h4>
              </div>

          <div class="panel-body" >

              {!! $calendar->calendar() !!}

              {!! $calendar->script() !!}
              
              
              
          </div>
        </div>
        @if(auth()->user()) 
        
              
        @include('components.alert')
        @else
        <button type="button" class="btn btn-warning">Make reservation</button>&nbsp;for {{$room->name}}
        @endif
    </div>
      </div>
    </div>
      
      
  <style>
    .d-block .img-fluid{
      width:100% !important;
    }
    @media screen and (min-width:968px){
      .topic{
        margin-top: -29px;
      }
    }
  </style>  
      @endisset

      <!-- Modal -->
<div class="modal fadeInUp" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="carouselExampleIndicators" class="carousel slide my-5 justify-content-center" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach ($img as $pic)


                @if ($loop->first)
                  <div class="carousel-item active ">
                      <img class="d-block img-fluid" src="{{asset('./image/'.$pic->url)}}" style="max-height:420px !important; width: 100% !important;" alt="{{$pic->alt}}">
                  </div>
                @endif
                @endforeach
                @foreach($imagesslider as $is)
                  <div class="carousel-item">
                      <img class="d-block img-fluid" src="{{asset('./image/'.$is->url)}}" style="max-height:420px !important; width: 100% !important;" alt="{{$is->alt}}">
                  </div>
                @endforeach

            
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>