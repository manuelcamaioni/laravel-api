<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('type', 'technologies')->paginate(10);

        return response()->json([
            'success' => true,
            'results' => $projects,
        ]);
    }
}
