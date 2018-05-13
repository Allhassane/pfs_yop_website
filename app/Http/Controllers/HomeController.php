<?php

namespace App\Http\Controllers;

use App\Actualite;
use App\Album;
use App\Foundator;
use App\Information;
use App\Page;
use App\Partenaire;
use App\Photo;
use App\Section;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{


    public function home(){

        $infos = Information::OrderBy('id', 'DESC')->get();
        $slides = Actualite::OrderBy('id', 'DESC')->limit(3)->get();
        $posts = Actualite::OrderBy('id', 'DESC')->limit(2)->get();
        $albums = Album::OrderBy('id', 'DESC')->limit(2)->get();
        $foundators = Foundator::get();

        // section
        $mission = Section::where('slug', 'mission')->first();
        $organisation = Section::where('slug', 'organisation')->first();
        $projet = Section::where('slug', 'projet')->first();
        // end section


        return view('home.index', compact(
            'infos',
            'slides',
            'foundators',
            'mission',
            'organisation',
            'projet',
            'posts',
            'albums'
        ));
    }

    public function page($slug){

        $data = Page::where('slug', $slug)->first();
        $infos = Information::OrderBy('id', 'DESC')->get();
        $foundators = Foundator::get();


        return view('page.index', compact('data', 'infos', 'foundators'));
    }

    public function post(){

        $datas = Actualite::OrderBy('id', 'DESC')->paginate(5);
        $infos = Information::OrderBy('id', 'DESC')->get();
        $foundators = Foundator::get();

        return view('posts.index', compact('datas', 'infos', 'foundators'));
    }

    public function show($slug){

        $data = Actualite::where('slug', $slug)->first();

        if (empty($data)){
            return redirect('/404');
        }

        $data->vues ++;
        $data->save();

        $infos = Information::OrderBy('id', 'DESC')->get();
        $foundators = Foundator::get();

        return view('posts.show', compact('data', 'infos', 'foundators'));
    }

    public function partenaire(){

        $datas = Partenaire::all();

        $infos = Information::OrderBy('id', 'DESC')->get();
        $foundators = Foundator::get();

        return view('page.partenaire', compact('datas', 'infos', 'foundators'));
    }

    public function album(){

        $datas = Album::OrderBy('id', 'desc')->get();

        $infos = Information::OrderBy('id', 'DESC')->get();
        $foundators = Foundator::get();

        return view('photo.album', compact('datas', 'infos', 'foundators'));
    }

    public function photo($slug){

        $album = Album::where('slug', $slug)->first();

        $datas = Photo::where('album_id', $album->id)->OrderBy('id', 'desc')->get();

        $infos = Information::OrderBy('id', 'DESC')->get();
        $foundators = Foundator::get();

        return view('photo.photo', compact('datas', 'infos', 'foundators', 'album'));
    }

    public function contact(){

        $infos = Information::OrderBy('id', 'DESC')->get();
        $foundators = Foundator::get();

        return view('page.contact', compact('infos', 'foundators'));
    }

    public function contactSend(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'message' => 'required'
        ]);

        if($validator->fails()){

            return back()->withErrors($validator)->withInput()->with('danger', 'Veuillez renseigner tous les champs');
        }else {

            $mobile_user = $request->input('mobile');
            $name_user = $request->input('name');
            $message_user = $request->input('message');

            Mail::send('email.contacts',
                array(
                    'mobile' => $mobile_user,
                    'name' => $name_user,
                    'user_message' => $message_user
                ), function ($message) use ($mobile_user, $name_user) {
                    $message->from('info@pfs-yopougon.net', $name_user);
                    $message->to('info@pfs-yopougon.net', 'PFS-YOPOUGON')->subject('Prise de contact');
                }
            );

        }

        return back()->with('success', 'Votre message a été envoyé avec success');

    }

}
