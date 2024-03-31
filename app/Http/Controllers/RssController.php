<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Requests;
use App\Services\RssFeed;

class RssController extends Controller
{
    public function index()
    {
        $rss = new RssFeed();
        $items = $rss->getItems();

        // Process the data (e.g., save it to a database or display it on your website)
    }
}