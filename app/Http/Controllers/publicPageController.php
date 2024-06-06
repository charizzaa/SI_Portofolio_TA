<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\content_images;
use App\Models\contents;
use App\Models\dosens;
use App\Models\owners;
use App\Models\specialities;
use App\Models\tags;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class publicPageController extends Controller
{
    public function login(){
        return view('public.login');
    }


    public function dashboard(){
        return view('public.layout_baru.dashboard');
    }

    public function showcase(){
        $dosens = dosens::all();
        return view('public.showcase', compact('dosens'));
    }

    public function portofolio(Request $request){

        // dd($request['category']);
        $arrayCategories = [];

        if($request['category'] == "all"){
            $contents =   DB::table('contents')
            ->join('dosens', 'contents.id_dosen', '=', 'dosens.id')
            ->select('contents.*', 'dosens.name')
            ->distinct()->get();

            // $arraySpecialities = [];

            foreach($contents as $content){
                $tmp = [];
                    $tags = tags::where('id_content', $content->id)->get();
                    foreach($tags as $tag){
                        array_push($tmp, $tag->tag);
                    }
                    array_push($arrayCategories, $tmp);
            }

        }else{

            $contents = DB::table('contents')
            ->join('dosens', 'contents.id_dosen', '=', 'dosens.id')
            ->join('tags', 'contents.id', '=', 'tags.id_content')
            ->select('contents.*', 'dosens.name')
            ->where('tags.tag', '=', $request['category'])
            ->distinct()->get();

            // $tmpcontent = DB::table('tags')
            // ->select('tags.id_content')
            // ->where('tags.tag', '=', $request['category'])
            // ->distinct()
            // ->get();

            // dd($contents);

            // $contents =   DB::table('contents')
            // ->join('dosens', 'contents.id_dosen', '=', 'dosens.id')
            // ->select('contents.*', 'dosens.name')
            // ->distinct()->paginate(7);

            // $arraySpecialities = [];

            foreach($contents as $content){
                $tmp = [];
                    $tags = tags::where('id_content', $content->id)->get();
                    foreach($tags as $tag){
                        array_push($tmp, $tag->tag);
                    }
                    array_push($arrayCategories, $tmp);
            }
        }

        return view('public.layout_baru.portofolio_page', compact('contents', 'arrayCategories'));
    }

    public function TA(String $id){

        $contents = DB::table('contents')
        ->join('dosens', 'contents.id_dosen', '=', 'dosens.id')
        ->select('contents.*', 'dosens.name')
        ->where('contents.id', '=', $id)
        ->first();

        $arrayCategories = [];
        $arrayimages = [];


        $tags = tags::where('id_content', $contents->id)->get();
        foreach($tags as $tag){
            array_push($arrayCategories, $tag->tag);
        }


        $images = content_images::where('id_content', $contents->id)->get();
        foreach($images as $image){
            array_push($arrayimages, $image->image_url);
        }


        // $dosens = dosens::all();
        return view('public.layout_baru.TA', compact('contents', 'arrayCategories', 'arrayimages'));
    }

    public function team(){

        $contents =   Http::get('http://127.0.0.1/api/team');

        $arraySpecialities = [];

        foreach($contents as $data){
            $tmp = [];
                $specialities = $contents->specialities;
                foreach($specialities as $speciality){
                    array_push($tmp, $speciality->speciality);
                }
                array_push($arraySpecialities, $tmp);
        }

        // $dosens = dosens::all();
        return view('public.layout_baru.teampage', compact('contents', 'arraySpecialities'));
    }

    public function lecturer(String $id){

        $dosens = Http::get('http://127.0.0.1:8080/api/team');

        $contents =   DB::table('contents')
            ->select('contents.*')
            ->where('contents.id_dosen', '=', $dosens->id)
            ->paginate(6);

        $arrayCategories = [];
        $arraySpecialities = [];


        foreach($contents as $content){
            $tmp = [];
                $tags = tags::where('id_content', $content->id)->get();
                foreach($tags as $tag){
                    array_push($tmp, $tag->tag);
                }
                array_push($arrayCategories, $tmp);
        }


        $specialities = specialities::where('id_dosen', $dosens->id)->get();
        foreach($specialities as $speciality){
            array_push($arraySpecialities, $speciality->speciality);
        }


        // $dosens = dosens::all();
        return view('public.layout_baru.lecturer', compact('contents', 'dosens', 'arrayCategories', 'arraySpecialities'));
    }

    public function profile(){
        return view('public.layout_baru.profile');
    }

    public function edit_profile(){
        return view('public.layout_baru.edit_profile');
    }

    public function add_portfolio(){
        return view('public.layout_baru.add_portfolio');
        // Validate the form data
        // $request->validate([
        //     'nama_pembuat' => 'required|string|max:255',
        //     'judul_portofolio' => 'required|string|max:255',
        //     'kategori' => 'required|string|max:255',
        //     'dosen' => 'required|string|max:255',
        //     'deskripsi' => 'required|string',
        //     'foto_portofolio' => 'required|array|min:3',
        //     'foto_portofolio.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'paper_portofolio' => 'required|file|mimes:pdf,doc,docx|max:10240',
        //     'video_demo' => 'required|file|mimes:mp4,mov,avi|max:10240',
        // ]);

        // Handle file uploads and save paths
        // $fotoPaths = [];
        // foreach ($request->file('foto_portofolio') as $file) {
        //     $fotoPaths[] = $file->store('portfolio_photos', 'public');
        // }

        // $paperPath = $request->file('paper_portofolio')->store('portfolio_papers', 'public');
        // $videoPath = $request->file('video_demo')->store('portfolio_videos', 'public');

        // Create a new portfolio entry
        // Portfolio::create([
        //     'nama_pembuat' => $request->input('nama_pembuat'),
        //     'judul_portofolio' => $request->input('judul_portofolio'),
        //     'kategori' => $request->input('kategori'),
        //     'dosen' => $request->input('dosen'),
        //     'deskripsi' => $request->input('deskripsi'),
        //     'foto_portofolio' => json_encode($fotoPaths),
        //     'paper_portofolio' => $paperPath,
        //     'video_demo' => $videoPath,
        // ]);

        // Redirect to a specific page with a success message
        // return redirect()->route('portfolio.index')->with('success', 'Portfolio created successfully!');
    
    }
}
