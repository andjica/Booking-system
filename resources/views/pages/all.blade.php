@extends('layout.template')

@section('content')

<!-- popular_property  -->
<div class="popular_property">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>Popular Locations and Apartments</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($rooms as $room)
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Rent
                            </div>
                            @foreach($room->image as $img)
                                @if ($loop->first)
                                    <img src="{{asset('/image/'.$img->url)}}" alt="{{$room->name}}" height="234px">
                                @endif
                            @endforeach
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="{{asset('/room/'.$room->id)}}">{{$room->name}}</a></h3>
                                    <div class="mark_pro">
                                    <i class="fa text-danger fa-paw"></i>&nbsp;Pets {{$room->pets}}
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>{{$room->city->country->name}} - {{$room->city->name}},{{$room->address}}</span>
                                    </div>
                                    <span class="amount">From ${{$room->prize}}</span> per night
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>{{$room->square}}Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>{{$room->beds}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>{{$room->number_of_bath}} Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                @endforeach
                <!-- ovde -->
                <ul class="list-group">
                <li class="list-group">  {{$rooms->links()}}</li>
                </ul>
            </div>
            </div>
            </div>
@endsection
