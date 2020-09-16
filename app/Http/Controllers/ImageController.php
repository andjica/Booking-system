<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Room;
use App\Image;
class ImageController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('admin.image-create', compact('rooms'));
    }
    public function create($id)
    {
        $r = Room::find($id) ?? abort(404);

        $countimage = Image::where('room_id', $r->id)->count();
        $images = Image::where('room_id', $r->id)->get();

        return view('renter.add-image', compact('r', 'countimage', 'images'));
    }

    public function store()
    {
        /*request()->validate([
            'roomid'=>'required',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg'
        ]);*/

        $room = request()->roomid;
        $images = request()->file('image');
        
        if(request()->all())
        {
           
            foreach ($images as $item):
                $var = date_create();
                
                $time = date_format($var, 'YmdHis');
                $images = request()->file('image');
                $name = $time.$item->getClientOriginalName();
            
                $destinationPath = public_path('/image');

                $item->move($destinationPath, $name);

                try{
                    Image::create(
                        array(
                            'url' => $name,
                            'room_id' => $room
                           )
                       );
                }
                catch(\Throwable $e)
                {
                    return abort(500);
                }
              
            endforeach;

            
            return redirect()->back()->with('success', 'You made a new image successfully :)');
           
          

        }

       
       

    }

    public function getall()
    {
        $images = Image::all();
        return view('images', compact('images'));
    }

    public function delete()
    {
        $data = request()->all();

        foreach ($data['images'] as $i => $id) {

            $images = Image::find($id);

            $image_path = public_path('image/'.$images->url);
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $images->delete();
        }
        return redirect()->back()->with('success', 'You successfully delete images');
    }
}
