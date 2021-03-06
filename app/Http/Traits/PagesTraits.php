<?php


namespace App\Http\Traits;


use App\Models\Page;
use App\Models\PageContent;
use App\Models\PageGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;


trait PagesTraits
{

    /*pages group*/
    public function pageGroupIndex(){
        $pageGroups = PageGroup::with('pages')->get();
        return view('backend.page.groupIndex',compact('pageGroups'));
    }

    /*page group create*/
    public function pageGroupStore(Request $request){
        $page_group = new PageGroup();
        $page_group->name = $request->name;
        $page_group->save();
        return back()->with('success','Page Group created successfully');
    }

    /*page edit page*/
    public function pageGroupEdit($id){
        $page_group = PageGroup::find($id);
        return view('backend.page.groupEdit',compact('page_group'));
    }

    /*page update*/
    public function pageGroupUpdate(Request $request){
        $page_group = PageGroup::find($request->id);
        $page_group->name = $request->name;
        $page_group->save();
        return back()->with('success','Page Group Updated successfully');
    }

    /*page group delete*/
    public function pageGroupDelete($id){
        $page_group = PageGroup::find($id);
        foreach ($page_group->pages as $page) {
            $page->delete();
        }
        $page_group->delete();
        return back()->with('success','Page Group or related page has been deleted successfully');
    }

    /*page group Active the page content*/
    public function pageGroupPublish(Request $request)
    {
        $content = PageGroup::where('id', $request->id)->firstOrFail();
        if ($content->is_published == 1) {
            $content->is_published = 0;
        } else {
            $content->is_published = 1;
        }
        $content->save();
        return response(['msg'=> 'Page Group status has been changed.'], 200);
    }


//all pages
    public function pageIndex()
    {
        $pages = Page::all();
        return view('backend.page.index', compact('pages'));
    }

//create form
    public function pageCreate()
    {
        // $pageGroups = PageGroup::where('is_published',true)->get();
        return view('backend.page.create');
    }

    //store page
    public function pageStore(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => ['required','unique:pages'],
            'is_menu'=>['required']
        ], [
            'title.required' => 'Title is required',
            'title.unique' => 'Title is unique',
        ]);

        

        if ($validator->fails()) {

            return response()->json([
             'status' => false,
             'errors' => $validator->errors(),
             'msg'=>'Something get wrong'
             ]);
         }

        $page = new Page();
        $page->title = $request->title;
        $page->page_group_id = $request->page_group_id;
        $page->slug = Str::slug($request->title);
        $page->is_menu = $request->is_menu;
        $page->save();
        return response()->json(['status'=>true,'msg'=>'Page created successfully']);
        // return back()->with('success','Page created successfully'));
    }

    /*page Update view*/
    public function pageEdit($id)
    {
        $page = Page::where('id', $id)->firstOrFail();
        // $pageGroups = PageGroup::where('is_published',true)->get();
        return view('backend.page.edit', compact('page'));
    }


    /*update save*/
    public function pageUpdate(Request $request)
    {
        

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'id' => 'required',
            'is_menu'=>'required'
        ], [
            'title.required' => 'Title is required',
            'is.required' => 'Please reload the page',
        ]);


        if ($validator->fails()) {
            return response()->json([
             'status' => false,
             'errors' => $validator->errors(),
             'msg'=>'Something get wrong'
             ]);
         }
         
        $page = Page::where('id', $request->id)->firstOrFail();
        $page->title = $request->title;
        $page->page_group_id = $request->page_group_id;
        $page->slug = Str::slug($request->title);
        $page->is_menu = $request->is_menu;
        $page->save();
        return response()->json(['status'=>true,'msg'=>'Page created successfully']);
        // return back()->with('success','Page created successfully'));

    }

    /*Delete the page*/
    public function pageDestroy($id)
    {
        Page::where('id', $id)->delete();
        PageContent::where('page_id', $id)->delete();
        //return response()->json(['status'=>true,'msg'=>'Page deleted successfully']);
        return back()->with('success','Page deleted successfully');

    }

    /*page ways content */
    public function contentIndex($id)
    {
        $content = PageContent::where('page_id', $id)->get();
        return view('backend.page.content.index', compact('content', 'id'));
    }


    /*content create*/
    public function contentCreate($id)
    {
        return view('backend.page.content.create', compact('id'));
    }

    /*Content Create*/
    public function contentStore(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'page_id' => 'required',
            'title'=>'required',
            'file'=>'image|mimes:jpg,png,svf,jpeg',
            'body' => 'required',
        ], [
            'page_id.required' => 'Page is required',
            'body.required' => 'Body is required'
        ]);

        if($validator->fails()) {

            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'msg'=>'Something get wrong'
            ]);
        }

        $content = new PageContent();
        $content->page_id = $request->page_id;
        $content->title = $request->title;
        $content->body = $request->body;
        $content->slug = Str::slug($request->title);
        $content->meta_desc = $request->shor_description;

        if($request->hasFile('file')){
            $file = 'file_'.time().'.'.$request->file->extension();
            $request->file->move(public_path('uploads/image'), $file);
            $file = "/uploads/image/".$file;
            $content->file = $file;
        }
        $content->save();

        

        return response()->json(['status'=>true,'msg'=>'Page content created successfully']);
//        return back()->with('success','Page content created successfully'));
    }

    /*Page Content Edit*/
    public function contentEdit($id)
    {
        $content = PageContent::where('id', $id)->firstOrFail();
        return view('backend.page.content.edit', compact('content'));
    }

    /*Content Update*/
    public function contentUpdate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'page_id' => 'required',
            'title'=>'required',
            'file'=>'image|mimes:jpg,png,svf,jpeg',
            'body' => 'required',
        ], [
            'page_id.required' => 'Page is required',
            'body.required' => 'Body is required',
        ]);


        if ($validator->fails()) {
            return response()->json([
             'status' => false,
             'errors' => $validator->errors(),
             'msg'=>'Something get wrong'
             ]);
        }
        
        $content = PageContent::where('id', $request->id)->firstOrFail();
        $content->page_id = $request->page_id;
        $content->title = $request->title;
        $content->body = $request->body;
        $content->slug = Str::slug($request->title);
        $content->meta_desc = $request->shor_description;
        if($request->hasFile('file')){
            $file = 'file_'.time().'.'.$request->file->extension();
            $request->file->move(public_path('uploads/image'), $file);
            $file = "/uploads/image/".$file;
            $content->file = $file;
        }
        $content->save();

       

        return response()->json(['status'=>true,'msg'=>'Page content updated successfully']);
        //return back()->with('success','Page content updated successfully'));
    }

    /*Content Delete*/
    public function contentDestroy($id)
    {
        PageContent::where('id', $id)->delete();
        //return response()->json(['status'=>true,'msg'=>'Content deleted successfully']);
        return back()->with('success','Content deleted successfully');
    }

    /*Active the page content*/
    public function contentActive(Request $request)
    {
        dd($request->all());
        $content = PageContent::where('id', request('id'))->firstOrFail();
        if ($content->active == 1) {
            $content->active = 0;
        } else {
            $content->active = 1;
        }
        $content->save();
        return response()->json(['msg'=> 'Page content status has been changed']);
    }


    /*Active the Page*/
    public function pageActive(Request $request)
    {
        $page = Page::where('id', $request->id)->firstOrFail();
        if ($page->active == 1) {
            $page->active = 0;
        } else {
            $page->active = 1;
        }
        $page->save();

        return response()->json(['msg'=> 'Page status has been changed.'], 200);
    }
}
