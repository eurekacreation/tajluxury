<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Xinax\LaravelGettext\Facades\LaravelGettext;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Appointment;
use App\Download;
use App\Callback;
use App\Contact;
use App\Room;
use App\Plan;




class TLVController extends Controller
{
    /**
     * Changes the current language and returns to previous page
     * @return Redirect
     */
    public function changeLang($locale=null,Request $request)
    {
        LaravelGettext::setLocale($locale);

        $url=explode('/',URL::previous());
        for ($i=0;$i<count($url); $i++){
            if($url[$i]=='fr'||$url[$i]=='en'){
                $url[$i]=LaravelGettext::getLocaleLanguage();

            }
        }
        $newUrl=implode('/', $url);
        return Redirect::to($newUrl);
    }

    public function indexPage()
    {
        LaravelGettext::getLocaleLanguage();
        $Rooms =Room::orderBy('created_at', 'asc')
            ->limit(6) 
            ->get();
        return view('TLVfront/index',compact(['Rooms']));
    }


    public function aboutPage()
    {
        return view('TLVfront/about',compact(['Rooms']));
    }


    public function detailPage()
    {
        return view('TLVfront/detail',compact(['Rooms']));
    }


    public function contactPage()
    {
        return view('TLVfront/contact',compact(['Rooms']));
    }


    public function store(Request $request)
    {
        //
    }

}
