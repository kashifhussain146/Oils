<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageContent;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array();

        $data['banner'] =   Page::with('content')->where('slug','banner')->first();
        $data['projects'] = Page::with('content')->where('slug','projects')->first();
        $data['sectors'] =  Page::with('content')->where('slug','sectors')->first();
        $data['services'] = Page::with('content')->where('slug','services')->first();     
        $data['consistent_delivery'] = Page::with('content')->where('slug','consistent-delivery')->first();

        return view('home',$data);
    }

    public function pageDetails(Request $request,$page_slug,$content_slug){

        try{

            $pageData = Page::with('content')->where('slug',$page_slug)->first();

            switch ($page_slug) {
                case 'contact-us':
                     return view('contact-us',compact('pageData'));
                    break;
                
                default:
    
                break;
            }
            
        }
        catch (\Exception $e){

        }
       

    }
}
