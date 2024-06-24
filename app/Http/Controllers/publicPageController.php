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
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class publicPageController extends Controller
{
    public function login()
    {
        return view('public.login');
    }


    public function dashboard()
    {
        return view('public.layout_baru.dashboard');
    }

    public function showcase()
    {
        $dosens = dosens::all();
        return view('public.showcase', compact('dosens'));
    }


    public function portofolio(Request $request)
    {
        // dd($request['category']);
        $response = Http::get('http://127.0.0.1:8080/api/showcase', [
            'page' => $request->query('page', 1),
            'category' => $request->query('category'),
            'query' => $request->query('query', '')

        ]);

        if ($response->successful()) {
            // Get the response data
            $contents = $response->json();

            // Paginate the data manually
            $currentPage = $contents['current_page'];
            $data = collect($contents['data']);
            $perPage = 5;
            $contents = new \Illuminate\Pagination\LengthAwarePaginator(
                $data,
                $contents['total'],
                $perPage,
                $currentPage,
                ['path' => url('/team')]
            );
            // Pass the paginated data to the view
            return view('public.layout_baru.portofolio_page', compact('contents'));
        } else {
            // Handle the error
            abort(500, 'Error fetching $content data.');
        }

        $response = Http::get('http://127.0.0.1:8080/api/team', [
            'page' => $request->query('page', 1),
            'query' => $request->query('query', '')
        ]);
    }

    public function getCountLike($id)
    {
        try {
            $response = Http::get("http://127.0.0.1:8080/api/content/$id/like-count");
            $content = $response->json();
            return compact($content);
        } catch (Exception $e) {
            abort(500, 'Error get like count');
        }
    }

    public function profile(Request $request)
    {

        try {
            $token = session('api_token');
            $userId = session('user')['id'];
            $response = Http::withToken($token)->get("http://127.0.0.1:8080/api/self/{$userId}");

            if ($response->successful() && $response->json() != null) {
                // Get the response data
                $content = $response->json()[0];

                // Pass the paginated data to the view
                return view('public.layout_baru.profile', compact('content'));
            } else {
                try {
                    $response = Http::withToken($token)->get("http://127.0.0.1:8080/api/current");
                    $content = $response->json();
                    return view('public.layout_baru.profile', compact('content'));
                } catch (Exception $e) {
                    abort(500, 'Error fetching $content data.');
                }
            }
        } catch (Exception $e) {
            // Handle the error
            abort(500, 'Error fetching $content data.');
        }

        return view('public.layout_baru.profile');
    }

    public function TA(String $id)
    {

        $response = Http::get("http://127.0.0.1:8080/api/showcase/{$id}");

        if ($response->successful()) {
            // Get the response data
            $contents = $response->json()[0];

            // Pass the paginated data to the view
            return view('public.layout_baru.TA', compact('contents'));
        } else {
            // Handle the error
            abort(500, 'Error fetching $content data.');
        }

        return view('public.layout_baru.profile');
    }

    public function team(Request $request)
    {
        // Make the API request
        $response = Http::get('http://127.0.0.1:8080/api/team', [
            'page' => $request->query('page', 1),
            'query' => $request->query('query', '')
        ]);

        // Check if the request was successful
        if ($response->successful()) {
            // Get the response data
            $lecturers = $response->json();

            // Paginate the data manually
            $currentPage = $lecturers['current_page'];
            $data = collect($lecturers['data']);
            $perPage = 5;
            $contents = new \Illuminate\Pagination\LengthAwarePaginator(
                $data,
                $lecturers['total'],
                $perPage,
                $currentPage,
                ['path' => url('/team')]
            );

            // Pass the paginated data to the view
            return view('public.layout_baru.teampage', compact('contents'));
        } else {
            // Handle the error
            abort(500, 'Error fetching lecturers data.');
        }
    }

    public function lecturer(String $id)
    {

        try {
            $response = Http::get('http://127.0.0.1:8080/api/team/' . $id);
            $responses = Http::get('http://127.0.0.1:8080/api/team/content' . $id);

            // Get the response data
            $contents = $response->json();
            $content = $responses->json();

            // Pass the paginated data to the view
            return view('public.layout_baru.lecturer', compact('contents', 'content'));
        } catch (Exception $e) {
            abort(500, 'Error fetching $content data.');
        }
    }


    public function edit_profile(Request $request)
    {
        try {
            $token = session('api_token');
            $response = Http::withToken($token)->get("http://127.0.0.1:8080/api/current");
            $content = $response->json();
            return view('public.layout_baru.edit_profile', compact('content'));
        } catch (Exception $e) {
            abort(500, 'Error fetching $content data.');
        }
    }
    public function store(Request $request)
    {
        $token = session('api_token');
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            '_method' => 'PUT'
        ];

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('photo')) {
            $response = Http::withToken($token)->attach(
                'photo',
                file_get_contents($request->file('photo')->getRealPath()),
                $request->file('photo')->getClientOriginalName()
            )->post('http://127.0.0.1:8080/api/profile/update', $data);
        } else {
            // Kirim permintaan ke API
            $response = Http::withToken($token)->post('http://127.0.0.1:8080/api/profile/update', $data);
        }

        if ($response->successful()) {
            $data_user = $response->json();
            $user = $data_user['user'];
            session(['user' => $user]);
            return redirect()->route('public.user');
        } else {
            return back()->withErrors(['message' => 'Error updating profile']);
        }
    }

    public function add_portfolio()
    {
        $token = session('api_token');
        $userId = session('user')['id'];
        $response = Http::withToken($token)->get("http://127.0.0.1:8080/api/project");

        if ($response->successful()) {
            // Get the response data
            $content = $response->json()[0];
            // return $content;
            // Display the add portfolio form
            return view('public.layout_baru.add_portfolio', compact('content'));
        } else {
            // Handle the error
            return back()->withErrors('Error fetching project data.');
        }
    }

    public function edit_portfolio()
    {
        $token = session('api_token');
        $userId = session('user')['id'];
        $response = Http::withToken($token)->get("http://127.0.0.1:8080/api/self/{$userId}");

        if ($response->successful() && $response->json() != null) {
            // Get the response data
            $content = $response->json()[0];

            // Pass the paginated data to the view
            return view('public.layout_baru.edit_portfolio', compact('content'));
        } else {
            // Handle the error
            return back()->withErrors('Error fetching project data.');
        }
    }

    public function store_portfolio(Request $request)
    {

        $request->validate([
            'thumbnail_image_url' => 'required',
            'content_url' => 'required',
            'video_url' => 'required',
            'video_tittle' => 'required',
            'tipe_konten' => 'required',
            'tags' => 'required'
        ]);


        $token = session('api_token');
        $userId = session('user')['id'];

        $tagsArray = $request->input('tags');
        $tagsString = implode(',', array_map(function ($tag) {
            return $tag;
        }, $tagsArray));

        $data = [
            'thumbnail_image_url' => $request->input('thumbnail_image_url'),
            'content_url' => $request->input('content_url'),
            'video_url' => $request->input('video_url'),
            'video_tittle' => $request->input('video_tittle'),
            'tipe_konten' => $request->input('tipe_konten'),
            'tags' => $tagsString,
        ];


        // foreach ($request->input('tags') as $tag) {
        //     $data['tags'][] = $tag;
        // }

        $response = Http::withToken($token)->attach(
            'thumbnail_image_url',
            file_get_contents($request->file('thumbnail_image_url')->getRealPath()),
            $request->file('thumbnail_image_url')->getClientOriginalName()
        )->attach(
            'content_url',
            file_get_contents($request->file('content_url')->getRealPath()),
            $request->file('content_url')->getClientOriginalName()
        )->post("http://127.0.0.1:8080/api/add/portofolio", $data);





        if ($response->successful()) {
            return redirect()->route('public.user');
        } else {
            return back()->withErrors(['message' => 'Error updating profile']);
        }
    }
    public function update_portfolio(Request $request)
    {
        $token = session('api_token');
        $userId = session('user')['id'];
            
        if ($request->has('tags')) {
            $tagsArray = $request->input('tags');
            $tagsString = implode(',', array_map(function ($tag) {
                return $tag;
            }, $tagsArray));
            $data = [
                'video_url' => $request->input('video_url'),
                'video_tittle' => $request->input('video_tittle'),
                'tipe_konten' => $request->input('tipe_konten'),
                '_method' => 'PUT',
                'tags' => $tagsString
            ];
        } else {
            $data = [
                'video_url' => $request->input('video_url'),
                'video_tittle' => $request->input('video_tittle'),
                'tipe_konten' => $request->input('tipe_konten'),
                '_method' => 'PUT'
            ];
        }





        if ($request->hasFile('thumbnail_image_url')) {
            $response = Http::withToken($token)->attach(
                'thumbnail_image_url',
                file_get_contents($request->file('thumbnail_image_url')->getRealPath()),
                $request->file('thumbnail_image_url')->getClientOriginalName()
            )->post('http://127.0.0.1:8080/api/update/portofolio', $data);
        }

        if ($request->hasFile('content_url')) {
            $response = Http::withToken($token)->attach(
                'content_url',
                file_get_contents($request->file('content_url')->getRealPath()),
                $request->file('content_url')->getClientOriginalName()
            )->post('http://127.0.0.1:8080/api/update/portofolio', $data);
        }

        $response = Http::withToken($token)->post("http://127.0.0.1:8080/api/update/portofolio/", $data);


        if ($response->successful()) {
            return redirect()->route('public.user');
        } else {
            return back()->withErrors(['message' => 'Error updating portfolio']);
        }
    }

    public function storePortfolio(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8080/api/portfolio/update', [
            'owner' => $request->input('owner'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'lecturer' => $request->input('lecturer')
        ]);

        if ($response->successful()) {
            return redirect()->route('public.profile');
        } else {
            return back()->withErrors(['message' => 'Error updating profile']);
        }
        return view('public.layout_baru.edit_profile');
    }
}
