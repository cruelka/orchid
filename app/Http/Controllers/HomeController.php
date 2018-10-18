<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image as Image;
use App\Photo;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function UploadFiles(Request $request){
        {

            $id = Auth::id();





            function orientate($image, $orientation)
            {
                switch ($orientation) {

                    // 888888
                    // 88
                    // 8888
                    // 88
                    // 88
                    case 1:
                        return $image;

                    // 888888
                    //     88
                    //   8888
                    //     88
                    //     88
                    case 2:
                        return $image->flip('h');


                    //     88
                    //     88
                    //   8888
                    //     88
                    // 888888
                    case 3:
                        return $image->rotate(180);

                    // 88
                    // 88
                    // 8888
                    // 88
                    // 888888
                    case 4:
                        return $image->rotate(180)->flip('h');

                    // 8888888888
                    // 88  88
                    // 88
                    case 5:
                        return $image->rotate(-90)->flip('h');

                    // 88
                    // 88  88
                    // 8888888888
                    case 6:
                        return $image->rotate(-90);

                    //         88
                    //     88  88
                    // 8888888888
                    case 7:
                        return $image->rotate(-90)->flip('v');

                    // 8888888888
                    //     88  88
                    //         88
                    case 8:
                        return $image->rotate(90);

                    default:
                        return $image;
                }
            }
            if (request('image')) {
                $imageList = array();
                foreach (request('image') as $image) {
                    // Check if the image is a jpg


// Horray! Your image should now be correctly rotated!
                    $this->validate($request, [
                        'file' => '|image|max:4096'
                    ]);
                    $base = "/storage/uploads/";
                    $name = str_random(50);
                    $extension = 'jpg';
                    try {

                        Image::make($image)
                            ->resize(1000, null, function ($constraint) {
                                $constraint->aspectRatio();
                                $constraint->upsize();

                            })
                            ->orientate()
                            ->save("{$base}/{$name}.{$extension}");

                        Photo::create([

                            'name' => $name,
                            'user_id' => $id,

                        ]);
                    } catch (Exception $e) {
                        return ($e);
                    }

                }

            }

        }
    }
}
