



@extends('layout.template')

@section('content')

<!-- popular_property  -->
<div class="popular_property">
        
            <div class="container mt-5">
            @if($countrooms == 0)
                <div class="row mt-5">
                <div class="col-lg-12 justify-content-center">
                    <div class="alert alert-danger mt-5 p-4">
                    <h4> Sorry, there is no result in category @isset($categoryname) {{$categoryname->name}}
                        @endisset from @isset($cityname) {{$cityname->name}} @endisset, try another filter sort </h4>
                        <a href="{{route('all')}}">Make another filter</a>
                    </div>
                </div>
            </div>
            @else
         
            <div class="row mt-5">
            <div class="col-xl-3 col-md-6 col-lg-4">
            <form action="{{route('search')}}" method="GET" id="formica" class="b-andjica p-4 border border-muted">
                        @csrf
                        <div class="justify-content-center">
                        <div class="col single-field no-gutters mt-5">
                            <div class="form-group">
                                <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <label for="#" class=""><i class="fas fa-city text-white circle-icon"></i> &nbsp;Location</label>
                                    <select class="wide warper sizing js-example-basic-single2 form-control search-slt border-warning bg-light new-block sm-select2 profi" name="city" id="citys">
                                    <option value="">City</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}, {{$city->country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <p class="text-danger" id="er-city"></p>
                            </div>
                        </div>
                        </div>
                        <div class="col single-field no-gutters mt-5">
                            <div class="form-group">
                                <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down "></span></div>
                                    <label for="#" class="">Property Type</label>
                                    <select class="wide warper sizing js-example-basic-single form-control search-slt border-warning bg-light new-block sm-select2 profi" name="category" id="cats">
                                    <option value="">Search Apartament</option>
                                        @foreach($categories as $category)
                                            <option value="0">Any apartaments</option>
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <p class="text-danger" id="er-category"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col single-field mt-4 mb-5">
                    <label for="#"><i class="fa fa-arrow-down"></i>&nbsp;Min Price</label>
                            <select class="wide" name="price" id="price">
                                    <option data-display="" value="">Min</option>
                                    <option data-display="" value="35">35 &euro;</option>
                                    <option data-display="" value="100">100 &euro;</option>
                                    <option data-display="" value="200">200 &euro;</option>
                                    <option data-display="" value="300">300 &euro;</option>
                                    <option data-display="" value="400">500 &euro;</option>
                                    <option data-display="" value="600">600 &euro;</option>
                            </select>
                            <p class="text-danger" id="er-price"></p>
                    </div>
                <div class="col single-field mt-5">
                <label for="#"><i class="fa fa-arrow-up"></i>&nbsp;Max Price</label>
                        <select class="wide" name="price2" id="price2">
                                <option data-display="" value="">Max</option>
                                <option data-display="" value="35">35 &euro;</option>
                                <option data-display="" value="100">100 &euro;</option>
                                <option data-display="" value="200">200 &euro;</option>
                                <option data-display="" value="300">300 &euro;</option>
                                <option data-display="" value="400">400 &euro;</option>
                                <option data-display="" value="600">1000 &euro;</option>
                        </select>
                        <p class="text-danger" id="er-price2"></p>
                </div>
        
        <div class="serach_icon border-top mt-andjica">
        <button type="submit" class="btn btn-warning mt-3 btn-block">
        Search<i class="ti-search text-white fa-2x mt-5"></i></button>
             
                       
                
        </div>
    </div>
    </form>

</div>

    <div class="col-lg-8">
        <div class="row">
            @foreach($rooms as $room)
           
                <div class="col-lg-6">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Rent
                            </div>
                            @foreach($room->image as $img)
                                @if ($loop->first)
                                <a href="{{asset('/room/'.$room->id)}}">
                                    <img src="{{asset('/image/'.$img->url)}}" alt="{{$room->name}}" height="234px">
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="{{asset('/room/'.$room->id)}}">{{$room->name}}</a></h3>
                                    <div class="mark_pro">
                                
                                        <img src="img/svg_icon/location.svg" alt="">
                                        <span>{{$room->city->country->name}} - {{$room->city->name}},{{$room->address}}</span>
                                    </div>
                                    per day <span class="amount"> From ${{$room->prize}}</span> 
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
            @endif
            </div>
            </div>
@endsection


<style>
.select2-container .select2-selection--single .select2-selection__rendered
{
    padding-left: 0px !important;
}
.select2-container--default .select2-selection--single .select2-selection__placeholder
{
    font-family: inherit;
    font-size: 14px;
    font-weight: normal;
    color: black !important;
}
.select2-container
{
    width: 100% !important;
    border-radius:5px;
    background:white;
}
.col {
  padding-right: 0 !important;
  padding-left: 0 !important;
}
.andjica-boja
{
    color:#FDAE5C;
}
.select2-results__option[aria-selected]
{
    background:silver;

}
.select2-search--dropdown
{
    background:silver;
}
.select2-container--default .select2-search--dropdown .select2-search__field
{
    background:floralwhite;
}
.b-andjica
{
    border-radius: 10px;
}
.mt-andjica
{
    margin-top:50px;
}
form
{
   /*background:linear-gradient(180.63868518113748deg, rgba(255, 242, 245,1) 29.817640876264093%,rgba(255, 242, 245,1) 30.407550248501053%,rgba(219, 182, 136,1) 70.26856925822696%);*/
   background:whitesmoke;
}

.circle-icon {
    background:#f0ad4e;
    padding:15px;
    border-radius: 50%;
}
</style>

@section('footer')
    <script>
       $(document).ready(function(){
        $('#formica').submit(function(e){

            let city = $('#citys').val();
            let category = $('#cats').val();
            let price = $('#price').val();
            let price2 = $('#price2').val();
            //let bed = $('#bed').val();
            //let bath = $('#bath').val();

            let ercity = document.getElementById('er-city');
            let ercat = document.getElementById('er-category');
            let erprice = document.getElementById('er-price');
            let erprice2 = document.getElementById('er-price2');
            //let erbed = document.getElementById('er-bed');
            //let erbath = document.getElementById('er-bath');

            let errors = [];

            if(city == "")
            {
                e.preventDefault();
                ercity.innerHTML = "Please select city!";
                errors.push = "Greskica";
            }

            if(category == "")
            {
                e.preventDefault();
                ercat.innerHTML = "Please select category!";
                errors.push = "Greskica";
            }

            if(price == "")
            {
                e.preventDefault();
                erprice.innerHTML = "Please select price!";
                errors.push = "Greskica";
            }
            if(price2 == "")
            {
                e.preventDefault();
                erprice2.innerHTML = "Please select max price!";
                errors.push = "Greskica";
            }

            /*if(bed == "")
            {
                e.preventDefault();
                erbed.innerHTML = "Choose number of beds!";
                errors.push = "Greskica";
            }
            if(bath == "")
            {
                e.preventDefault();
                erbath.innerHTML = "Choose number of bath!";
                errors.push = "Greskica";
            }*/

            if(errors.length == 0)
            {
            return true;
            }
        });
        });
    </script>
@endsection