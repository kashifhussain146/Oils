<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Validator;

class DashboardController extends Controller
{
    /**
        * Create a new controller instance.
        *
        * @return void
    */
    public function __construct(){

    }

    /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Contracts\Support\Renderable
    */

    public function index(){
        return view('home');
    }

    public function homePages(Request $request){

        $data['banner'] = Banner::get();
        $data['title'] = 'Banner Section';
        $data['store_url'] = route('save.admin.home-pages');

        return view('backend.pages.home-page',$data);
    }

    public function saveBanner(Request $request,$id=""){

        $data = $request->all();
        $data['id'] = $id;

        $validator = Validator::make($data, [
            'title' => 'required',
            'banner' => (empty($data['id']))?'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048':'',
        ]);

        if ($validator->fails()) {
		   return response()->json([
			'status' => false,
			'errors' => $validator->errors(),
            'msg'=>'Something get wrong'
			]);
		}


        if(!empty($id)){
            $post = Banner::find($id);
        }
        else{
            $post = new Banner();
        }

        $post->title = $request->title;
        $post->description = $request->description;
        if($request->hasFile('banner')){
            $banner = 'banner_'.time().'.'.$request->banner->extension();
            $request->banner->move(public_path('uploads/banner'), $banner);
            $banner = "/uploads/banner/".$banner;
            $post->banner = $banner;
        }
        $post->status = 1;
        $post->save();

        return response()->json([
            'status' => true,
            'msg' => 'Banner save successfully'
		]);
    }


}
