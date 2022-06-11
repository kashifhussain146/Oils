<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Projects;
use App\Models\Sectors;
use Validator;
use App\Models\Page;
use App\Models\PageContent;
use App\Models\PageGroup;


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

    public function homeBanner(Request $request){

        $data['banner'] = Banner::get();
        $data['projects'] = Projects::get();
        $data['sectors'] = Sectors::get();
        
        $data['banner_unique_id']   = 'Banner';
        $data['projects_unique_id'] = 'Projects';
        $data['sectors_unique_id']  = 'Sectors';

        $data['banner_store_url']   =  route('save.admin.home-pages');
        $data['projects_store_url'] =  route('save.admin.projects-pages');
        $data['sectors_store_url']  =  route('save.admin.sectors-pages');
        
        

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




    public function saveProjects(Request $request,$id=""){

        $data = $request->all();
        $data['id'] = $id;

        $validator = Validator::make($data, [
            'name' =>  (empty($data['id']))?'required|unique:projects,name':'required|unique:projects,name,'.$data['id'],
            'image' => (empty($data['id']))?'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048':'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
		   return response()->json([
			'status' => false,
			'errors' => $validator->errors(),
            'msg'=>'Something get wrong'
			]);
		}


        if(!empty($id)){
            $post = Projects::find($id);
        }
        else{
            $post = new Projects();
        }

        $post->name = $request->name;
        $post->short_desc = $request->short_desc;
        $post->big_desc = $request->big_desc;
        if($request->hasFile('image')){
            $image = 'image_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/projects'), $image);
            $image = "/uploads/projects/".$image;
            $post->image = $image;
        }
        $post->is_published = 1;
        $post->save();

        return response()->json([
            'status' => true,
            'msg' => 'Projects save successfully'
		]);
    }




    public function saveSectors(Request $request,$id=""){

        $data = $request->all();
        $data['id'] = $id;

        $validator = Validator::make($data, [
            'title' => 'required',
            'image' => (empty($data['id']))?'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048':'',
        ]);

        if ($validator->fails()) {
		   return response()->json([
			'status' => false,
			'errors' => $validator->errors(),
            'msg'=>'Something get wrong'
			]);
		}


        if(!empty($id)){
            $post = Sectors::find($id);
        }
        else{
            $post = new Sectors();
        }

        $post->title = $request->title;
        $post->description = $request->description;
        if($request->hasFile('image')){
            $image = 'banner_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/image'), $image);
            $image = "/uploads/image/".$image;
            $post->image = $image;
        }
        $post->status = 1;
        $post->save();

        return response()->json([
            'status' => true,
            'msg' => 'Sectors save successfully'
		]);
    }

}
