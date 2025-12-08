<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class SitemapController
{

    public function index()
    {
        // Initialize XML string
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Add static URLs (fine as-is)
        $xml .= '<url><loc>' . route('landing') . '</loc><lastmod>' . now()->toAtomString() . '</lastmod><changefreq>daily</changefreq><priority>1.0</priority></url>';
        $xml .= '</urlset>';

        // Return the XML response
        return Response::make($xml, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
