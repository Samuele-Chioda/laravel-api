<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    public function index(): JsonResponse
    {
        // Recupera tutti i progetti dal database
        $projects = Project::all();

        // Restituisce i dati in formato JSON
        return response()->json($projects);
    }
}
