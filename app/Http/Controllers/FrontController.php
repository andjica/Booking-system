<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Image;
use App\Reservation;
use App\Category;
use App\City;
use Calendar;
class FrontController extends Controller
{

    public function index()
    {
        $rooms = Room::orderBy('created_at', 'DESC')->limit(6)->get();
        
        $sprooms = Room::orderBy('created_at', 'DESC')->limit(4)->get();

        $categories = Category::all();
        $cities = City::all();
        return view('pages.index', compact('rooms', 'sprooms', 'categories', 'cities'));
    }

    public function all()
    {
        
        $rooms = Room::idDescending('created_at')
        ->paginate(9);
        
        return view('pages.all', compact('rooms'));
    }
    

    public function admin()
    {
        return view('admin.index');
    }

    public function price()
    {
        return view('price');
    }
    public function supporting()
    {
        return view('pages.supporting');
    }

    public function pro()
    {
        
        return view('pro');
    }

    public function ex()
    {
        return view('ex');
    }

    public function booker($id)
    {
        $room = Room::find($id);
        $reservations = [];
        $data = Reservation::where('room_id', $id)->get();
        if($data->count()){
 
           foreach ($data as $key => $value) {
 
             $reservations[] = Calendar::event(
 
                $value->room->name,
                $value->name,
                 new \DateTime($value->start_date),
 
                 new \DateTime($value->valid_until.' +1 day')
 
             );
 
           }
 
        }
 
       $calendar = Calendar::addEvents($reservations); 

        return view('booker',compact('room','img', 'rooms', 'calendar'));
    }

    public function search()
    {
        $city =  request()->city;
        $category = request()->category;
        $price = request()->price;
        $maxprice = request()->price2;
        $bed = request()->bed;
        $bath = request()->bath;

        $categories = Category::all();
        $cities = City::all();

        $categoryname = Category::where('id', $category)->first();
        $cityname = City::where('id', $city)->first();

        if(request()->all())
        {
            if($category == 0)
            {
                $rooms = Room::where('prize','>=', $price)
                ->where('prize', '<=', $maxprice)
                ->where('city_id', $city)
                ->orderBy('created_at', 'desc')
                ->paginate(6);
                
                $countrooms = $rooms->count();
                return view('pages.filter-rooms', compact('rooms', 'categories', 'cities', 'countrooms', 'categoryname', 'cityname'));
            }
            else
            {
                $rooms = Room::where('prize','>=', $price)
                ->where('prize', '<=', $maxprice)
                ->where('category_id', $category)
                ->where('city_id', $city)
                ->orderBy('created_at', 'desc')
                ->paginate(6);
                
                $countrooms = $rooms->count();
                return view('pages.filter-rooms', compact('rooms','categories', 'cities', 'countrooms', 'categoryname', 'cityname'));
            }
        }

       
            
        
        
    }
}
