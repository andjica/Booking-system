<form action="{{route('search')}}" method="GET" id="formica">
    @csrf
    <div class="form_wrap d-flex justify-content-center">
    <div class="single-field max_width">
        <div class="form-group">
            <div class="form-field">
            <div class="select-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <label for="#">Location</label>
                <select class="wide warper sizing js-example-basic-single2 form-control search-slt border-warning bg-light new-block sm-select2 profi" name="city" id="citys">
                <option value="">City</option>
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}, {{$city->country->name}}</option>
                    @endforeach
                </select>
            </div>
            <p class="text-warning" id="er-city"></p>
        </div>
    </div>
    </div>
    <div class="single-field max_width">
        <div class="form-group">
            <div class="form-field">
            <div class="select-wrap">
                <div class="icon"><span class="ion-ios-arrow-down "></span></div>
                <label for="#">Property Type</label>
                <select class="wide warper sizing js-example-basic-single form-control search-slt border-warning bg-light new-block sm-select2 profi" name="category" id="cats">
                <option value="">Search Apartament</option>
                    @foreach($categories as $category)
                        <option value="0">Any apartaments</option>
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <p class="text-warning" id="er-category"></p>
        </div>
    </div>
    </div>
    <div class="single-field max_width">
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
            <p class="text-warning" id="er-price"></p>
    </div>
    <div class="single-field max_width">
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
            <p class="text-warning" id="er-price2"></p>
    </div>
   <!-- <div class="single-field min_width ">
            <label for="#">Bed Room</label>
            <select class="wide" name="bed" id="bed">
                <option value="" class="form-control">Choose</option>
                <option value="0" class="form-control">0</option>
                <option value="1" class="form-control">1</option>
                <option value="2" class="form-control">2</option>
                <option value="3" class="form-control">3</option>
                <option value="4" class="form-control">4</option>
                <option value="5" class="form-control">5</option>
                <option value="5" class="form-control">5+</option>
            </select>
            <p class="text-warning" id="er-bed"></p>
        </div>
    <div class="single-field min_width ">
            <label for="#">Bath Room</label>
            <select class="wide" name="bath" id="bath">
                <option value="" class="form-control">Choose</option>
                <option value="1" class="form-control">1</option>
                <option value="2" class="form-control">2</option>
                <option value="3" class="form-control">3+</option>
            </select>
            <p class="text-warning" id="er-bath"></p>
        </div> -->
        <div class="serach_icon">
                <input type="submit" class="btn btn-warning mt-5" value="Search" id="andjica">
                       
                <i class="ti-search text-warning fa-2x"></i>
        </div>
    </div>
    </form>

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