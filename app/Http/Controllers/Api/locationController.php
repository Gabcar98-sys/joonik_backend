<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class locationController extends Controller
{
    public function index()
    {
        $jsonFilePath = storage_path('app/data/locations.json');
        
        if (!file_exists($jsonFilePath)) {
            abort(404, "JSON file not found.");
        }

        $locations = json_decode(file_get_contents($jsonFilePath), true);
        
        if (empty($locations)) {
            $locations = [
                'message' => 'No results found',
                'status' => 404
            ];
            return response()->json($locations, 404);
        }

        return response()->json($locations, 200);
    }   
}
