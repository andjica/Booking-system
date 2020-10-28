
    @foreach($rooms as $room)
    <div class="col-xl-4 col-md-6 col-lg-4 mb-3">
        <div class="card h-100 doba " style="  border: none !important;">
        @foreach ($room->image as $pic)
          @if($loop->first)
            <img class="card-img-top nov" src="{{asset('./image/'.$pic->url)}}" style="    height: 234px;" alt="">
            @endif
          @endforeach
          <div class="card-body">
          <div class="property_content">
                            <div class="main_pro">
                                    <div class="mark_pro">
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <h4 class="card-title">{{$room->name}}</h4>
                                    </div>
                                    <span class="amount">From € {{$room->prize}}</span> per day
                                    <p class="card-text">Number of room in this suite:{{$room->number}}</p>

                            </div>
                        </div>
          </div>
          
         
          <div class="footer_pro row" style="display: block;   text-align: center;">
                                <ul>
                                    <li>
                                        <div class="single_info_doc col-lg-4 ">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>155.00 m2</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc col-lg-4">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>two bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc col-lg-4">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>1 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                                <a href="{{url('room/'.$room->id)}}" class="btn mt-5 btn-primary mb-5" style="width: 84%;">See Rooms</a>
                            </div>
                            </div>
                            
        </div>
        
      @endforeach
     