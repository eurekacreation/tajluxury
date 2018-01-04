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

    /** Page Home **/
    public function indexPage()
    {
        LaravelGettext::getLocaleLanguage();
        $Rooms =Room::orderBy('created_at', 'asc')
            ->limit(6) 
            ->get();
        return view('TLVfront/index',compact(['Rooms']));
    }

    /** Page Project **/
    public function aboutPage()
    {
        $Plans =Plan::orderBy('created_at', 'asc')
            ->get();
        return view('TLVfront/about',compact(['Plans']));
    }

    /** Page Villa-detail **/
    public function detailPage()
    {
        $Rooms =Room::orderBy('created_at', 'asc')
            ->get();
        return view('TLVfront/detail',compact(['Rooms']));
    }

    /** Page Contact **/
    public function contactPage()
    {
        return view('TLVfront/contact',compact(['Rooms']));
    }


    /** New Message **/
    public function contactstore(Request $request)
    {
        $validation = Validator::make(Input::all(), array(
            'contact_name'      => 'required',
            'contact_phone'     => 'required',
            'contact_email'     => 'required|email',
            'contact_subject'   => 'required|max:50',
            'contact_message'   => 'required|min:20',
        ), array(
            // this array is for overriding custom validation error messages
            'contact_name.required'     =>  'Your Name required',
            'contact_phone.required'    =>  'Your Phone number required',
            'contact_email.required'    =>  'Your Email required',
            'contact_email.email'       =>  'Must be a valid email address',
            'contact_subject.required'  =>  'Your Subject required',
            'contact_subject.max'       =>  'Must not be less than 50 characters',
            'contact_message.required'  =>  'Your message is required and must not be less than 20 characters',
            'contact_message.min'       =>  'Must be superior than 20 characters',
        )
        );
        if($validation->fails()) {
            return Redirect::back()
                ->withErrors($validation->errors()->first()) // send back all errors to the login form
                ->withInput();
        } else {

            $contact = new Contact();

            $contact->name = $request->input('contact_name');
            $contact->phone = $request->input('contact_phone');
            $contact->email = $request->input('contact_email');
            $contact->subject = $request->input('contact_subject');
            $contact->message = $request->input('contact_message');
            
            $contact->save();

            return redirect('contact');
        }
    }

    /** New Callback **/
    public function DERstore(Request $request)
    {
        $validation = Validator::make(Input::all(), array(
            'demandeER_name'      => 'required',
            'demandeER_phone'     => 'required',
            'demandeER_subject'   => 'required|max:50',
        ), array(
            // this array is for overriding custom validation error messages
            'demandeER_name.required'     =>  'Your Name required',
            'demandeER_phone.required'    =>  'Your Phone number required',
            'demandeER_subject.required'  =>  'Your Subject required',
            'demandeER_subject.max'       =>  'Must not be less than 50 characters',
        )
        );
        if($validation->fails()) {
            return Redirect::back()
                ->withErrors($validation->errors()->first()) // send back all errors to the login form
                ->withInput();
        } else {

            $callback = new Callback();

            $callback->name = $request->input('demandeER_name');
            $callback->phone = $request->input('demandeER_phone');
            $callback->subject = $request->input('demandeER_subject');
            
            $callback->save();

            return redirect('accueil');
        }
    }

    /** New Download **/
    public function DBstore(Request $request)
    {
        $validation = Validator::make(Input::all(), array(
            'demandeBroch_name'      => 'required',
            'demandeBroch_email'     => 'required|email',
        ), array(
            // this array is for overriding custom validation error messages
            'demandeBroch_name.required'     =>  'Your Name required',
            'demandeBroch_email.required'    =>  'Your Email required',
            'demandeBroch_email.email'       =>  'Must be a valid email address',
        )
        );
        if($validation->fails()) {
            return Redirect::back()
                ->withErrors($validation->errors()->first()) // send back all errors to the login form
                ->withInput();
        } else {

            $DWNL = new Download();

            $DWNL->name = $request->input('demandeBroch_name');
            $DWNL->email = $request->input('demandeBroch_email');
            
            $DWNL->save();

            return redirect('accueil');
        }
    }

    /** New Appointment **/
    public function DRDVstore(Request $request)
    {
        $validation = Validator::make(Input::all(), array(
            'demandeRDV_name'          => 'required',
            'demandeRDV_email'         => 'required|email',
            'demandeRDV_meetingtime'   => 'required',
            'demandeRDV_meetingdate'   => 'date|after:tomorrow',
            'demandeRDV_message'       => 'required|min:20',

        ), array(
            // this array is for overriding custom validation error messages
            'demandeRDV_name.required'          =>  'Your Name required',
            'demandeRDV_email.required'         =>  'Your Email required',
            'demandeRDV_email.email'            =>  'Must be a valid email address',
            'demandeRDV_meetingtime.required'   =>  'Meeting Time required',
            'demandeRDV_meetingdate.after'      =>  'Must be date after tomorrow',
            'demandeRDV_message.required'       =>  'Your message is required',
            'demandeRDV_message.min'            =>  'Must be superior than 20 characters',
        )
        );
        if($validation->fails()) {
            return Redirect::back()
                ->withErrors($validation->errors()->first()) // send back all errors to the login form
                ->withInput();
        } else {

            $rdv = new Appointment();

            $rdv->name = $request->input('demandeRDV_name');
            $rdv->email = $request->input('demandeRDV_email');
            $rdv->meetingtime = $request->input('demandeRDV_meetingtime');
            $rdv->meetingdate = date('Y-m-d',strtotime(str_replace('/', '-', $request->input('demandeRDV_meetingdate') )));
            $rdv->message = $request->input('demandeRDV_message');
            
            $rdv->save();

            return redirect('accueil');
        }
    }

}
