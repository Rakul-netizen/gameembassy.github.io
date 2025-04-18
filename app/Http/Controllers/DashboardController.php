<?php

namespace App\Http\Controllers;

use App\Models\AdminBlog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCards = AdminBlog::count();

        $cardsByStatus = AdminBlog::selectRaw('status, count(*) as count')
                             ->groupBy('status')
                             ->pluck('count', 'status');

        return view('admin.dashboard', [
            'totalCards' => $totalCards,
            'cardsByStatus' => $cardsByStatus
        ]);
    }
}
