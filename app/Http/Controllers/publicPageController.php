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


    public function edit_profile()
    {
        $token = session('api_token');
        $response = Http::withToken($token)->get('http://127.0.0.1:8080/api/current');
        $content = $response->json();

        return view('public.layout_baru.edit_profile', compact('content'));
    }
    public function store(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8080/api/profile/update', [
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email')
        ]);

        if ($response->successful()) {
            return redirect()->route('public.profile');
        } else {
            return back()->withErrors(['message' => 'Error updating profile']);
        }
        return view('public.layout_baru.edit_profile');
    }

    public function add_portfolio(Request $request)
    {
        $token = session('api_token');
        $userId = session('user')['id'];
        $response = Http::withToken($token)->get("http://127.0.0.1:8080/api/self/{$userId}");

        if ($response->successful()) {
            // Get the response data
            $content = $response->json()[0];

            // Check if the request is a POST (form submission)
            if ($request->isMethod('post')) {
                // Prepare the portfolio data
                $portfolioData = [
                    'owner' => $request->input('owner'),
                    'title' => $request->input('title'),
                    'description' => $request->input('description'),
                    'category' => $request->input('category'),
                    'lecturer' => $request->input('lecturer')
                ];

                // Handle file uploads
                if ($request->hasFile('portfolio_photos')) {
                    $photos = [];
                    foreach ($request->file('portfolio_photos') as $photo) {
                        $path = $photo->store('portfolio_photos');
                        $photos[] = $path;
                    }
                    $portfolioData['portfolio_photos'] = json_encode($photos);
                }

                if ($request->hasFile('portfolio_paper')) {
                    $portfolioData['portfolio_paper'] = $request->file('portfolio_paper')->store('portfolio_papers');
                }

                if ($request->hasFile('portfolio_demo')) {
                    $portfolioData['portfolio_demo'] = $request->file('portfolio_demo')->store('portfolio_demos');
                }

                // Send the data to the API
                $storeResponse = Http::withToken($token)->post("http://127.0.0.1:8080/api/portfolio", $portfolioData);

                if ($storeResponse->successful()) {
                    // Redirect to a success page or the profile page
                    return redirect()->route('profile')->with('success', 'Portfolio added successfully!');
                } else {
                    // Handle the error
                    return back()->withErrors('Error storing portfolio data.');
                }
            }

            // Display the add portfolio form
            return view('public.layout_baru.add_portfolio', compact('content'));
        }
    }
    public function edit_portfolio(Request $request, $id)
    {
        $token = session('api_token');
        $userId = session('user')['id'];
        $response = Http::withToken($token)->get("http://127.0.0.1:8080/api/portfolio/{$id}");

        if ($response->successful()) {
            // Get the portfolio data
            $content = $response->json();

            // Check if the request is a POST (form submission)
            if ($request->isMethod('post')) {
                // Prepare the portfolio data
                $portfolioData = [
                    'owner' => $request('owner'),
                    'title' => $request('title'),
                    'description' => $request('description'),
                    'category' => $request('category'),
                    'lecturer' => $request('lecturer')
                ];

                // Handle file uploads
                if ($request->hasFile('portfolio_photos')) {
                    $photos = [];
                    foreach ($request->file('portfolio_photos') as $photo) {
                        $path = $photo->store('portfolio_photos');
                        $photos[] = $path;
                    }
                    $portfolioData['portfolio_photos'] = json_encode($photos);
                }

                if ($request->hasFile('portfolio_paper')) {
                    $portfolioData['portfolio_paper'] = $request->file('portfolio_paper')->store('portfolio_papers');
                }

                if ($request->hasFile('portfolio_demo')) {
                    $portfolioData['portfolio_demo'] = $request->file('portfolio_demo')->store('portfolio_demos');
                }

                // Send the data to the API
                $updateResponse = Http::withToken($token)->put("http://127.0.0.1:8080/api/portfolio/{$id}", $portfolioData);

                if ($updateResponse->successful()) {
                    // Redirect to a success page or the profile page
                    return redirect()->route('profile')->with('success', 'Portfolio updated successfully!');
                } else {
                    // Handle the error
                    return back()->withErrors('Error updating portfolio data.');
                }
            }

            // Display the edit portfolio form
            return view('public.layout_baru.edit_portfolio', compact('content'));
        } else {
            // Handle the error
            return back()->withErrors('Error fetching portfolio data.');
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
