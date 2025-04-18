<?php

namespace App\Http\Controllers\Card;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card1;

class Card1Controller extends Controller
{
    public function rows(Request $request, $id)
    {
        $modelName = 'App\\Models\\CardsRow1\\Row1C' . $id;

        if (class_exists($modelName)) {
            $request->validate([
                'title' . $id => 'required|string',
                'subtitle' . $id => 'required|string',
                'youtubelinks' . $id => 'required|url',
                'description' . $id => 'required|string',
                'content' . $id => 'required|string',
                'image' . $id => 'required|image|mimes:jpeg,avif,png,jpg,gif,svg|max:2048',
                'video' . $id => 'required|file|mimes:mp4,avi,mkv|max:2097152000',
            ]);

            $imagePath = null;
            if ($request->hasFile('image' . $id)) {
                $imagePath = $request->file('image' . $id)->store('cardimages' . $id, 'public');
            }
            $videoPath = null;
            if ($request->hasFile('video' . $id)) {
                $videoPath = $request->file('video' . $id)->store('cardvideos' . $id, 'public');
            }
            $modelName::create([
                'title' . $id => $request->input('title' . $id),
                'subtitle' . $id => $request->input('subtitle' . $id),
                'youtubelinks' . $id => $request->input('youtubelinks' . $id),
                'description' . $id => $request->input('description' . $id),
                'content' . $id => $request->input('content' . $id),
                'image' . $id => $imagePath,
                'video' . $id => $videoPath,
            ]);
            return back()->withSuccess('You have successfully uploaded!');
        } else {
            return abort(404, 'Card model not found');
        }
    }

    public function index(Request $request)
    {

        $allCardIds = range(1, 20);

        $perPage = 1;
        $page = $request->get('page', 1);
        $paginatedCards = collect($allCardIds)->slice(($page - 1) * $perPage, $perPage)->all();

        $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
            $paginatedCards,
            count($allCardIds),
            $perPage,
            $page,
            ['path' => url()->current()]
        );

        return view('admin.cards.rows', ['cardIds' => $paginatedCards, 'cards' => $paginator]);
    }
}
