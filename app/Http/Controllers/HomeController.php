<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Form;
use App\Models\Page;
use App\Models\Service;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){
        SEOMeta::setTitle('Psi̇ki̇yatri̇st Uzm. Dr. Turan Çetin | Suadiye Psi̇ki̇yatri̇st Kliniği');
        SEOMeta::setDescription("Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin'in Kadıköy Suadiye'de bulunan kliniğinin resmi internet sitesidir.");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.index');

    }

    public function contact(){

        SEOMeta::setTitle('İletişim | Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin | Suadiye Psi̇ki̇yatri̇st');
        SEOMeta::setDescription("Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin'in Kadıköy Suadiye'de bulunan kliniğinin iletişim sayfasıdır.");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.contact');
    }

    public function servicedetail($url){
        $Detail = Service::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin');
        SEOMeta::setDescription($Detail->title. ' | Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin');
        SEOMeta::setCanonical(url()->full());


        return view('frontend.service.detail', compact('Detail'));
    }

    public function service(){


        SEOMeta::setTitle('Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin | Kadıköy Psi̇ki̇yatri̇st');
        SEOMeta::setDescription("Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin'in Kadıköy Suadiye'de bulunan kliniğinin resmi internet sitesidir.");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.service.index');
    }

    public function blogdetail($url){
        $Detail = Blog::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | Psi̇ki̇yatri̇st Uzm. Dr. Turan Çetin | Suadiye Psikiyatrist');
        SEOMeta::setDescription($Detail->title. ' | Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin');
        SEOMeta::setCanonical(url()->full());


        return view('frontend.blog.detail', compact('Detail'));
    }


    public function corporatedetail($url){
        $Detail = Page::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin');
        SEOMeta::setDescription($Detail->title. ' | Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.page.detail', compact('Detail'));
    }


    public function blog(){

        SEOMeta::setTitle('Makaleler | Psi̇ki̇yatri̇st ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin');
        SEOMeta::setDescription('Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.blog.index');
    }

    public function video(){

        SEOMeta::setTitle('Video Galeri | Psi̇ki̇yatri̇st ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin');
        SEOMeta::setDescription('Psi̇ki̇yatri̇st Ve Psi̇koterapi̇st Uzm. Dr. Turan Çetin');
        SEOMeta::setCanonical(url()->full());

        $Video = Video::all();
        return view('frontend.video.index', compact('Video'));
    }

    public function form(ContactRequest $request){

        $New = new Form;
        $New->name =  $request->name;
        $New->email =  $request->email;
        $New->phone =  $request->phone;
        $New->subject =  $request->subject;
        $New->message =  $request->message;
        $New->save();

        Mail::send("mail.form",compact('New'),function ($message) use($New) {
            $message->to('pskturancetin@gmail.com')->subject($New->name.' - Site Bilgi Formu');
        });

        return redirect()->route('home');
    }

}
