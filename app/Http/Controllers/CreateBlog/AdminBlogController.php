<?php

namespace App\Http\Controllers\CreateBlog;

use App\Http\Controllers\Controller;
use App\Models\AdminBlog;
use App\Models\CreateBlog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function admincontrol()
    {
        $warning = "Whoops! there are  problems in uploading the image";
        return view('admin.admin-control-pannel', [
            'warning' => $warning,
        ]);
    }

    public function adminblog(Request $request)
    {
        // if (!auth()->Auth::check() || !auth()->Auth::user()->isAdmin()) {
        //     abort(403, 'Only admins can upload images.');
        // }
        $request->validate([
            'admintitle' => 'required|string',
            'admindescription' => 'required|string',
            'admincontent' => 'required|string',
            'adminimage' => 'required|image|mimes:jpeg,avif,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('adminimage')->store('blogcardimages', 'public');

        AdminBlog::create([
            'admintitle' => $request->admintitle,
            'admindescription' => $request->admindescription,
            'admincontent' => $request->admincontent,
            'adminimage' => $imagePath,
        ]);
        // $adminblog->save();

        return response()->json(['message' => 'Blog post created successfully.']);
    }

    public function admin(){
        return view('layout.admincontrolpannel');
    }

    public function blogcards(){
        return view('blogcardedit');
    }

    public function viewblogcards(){
        $vbcards = AdminBlog::all();
        return view('admin.viewblogcards',['vbcards'=>$vbcards]);
    }

    public function cards()
    {
        $cards = AdminBlog::all();
        return view('blog', ['cards' => $cards]);
    }

    public function show($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C' . $id; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {
            // Fetch the latest card (newest)
            $lcards = $modelName::latest()->first();

            // Base query, excluding the latest card
            $baseQuery = $modelName::orderBy('created_at', 'asc');
            if ($lcards) {
                $baseQuery->where('id', '!=', $lcards->id);
            }

            // Fetch all (oldest to newest), except $lcards
            $cards = (clone $baseQuery)->get();

            // Fetch the 1st oldest card
            $ocards = (clone $baseQuery)->first();

            // Fetch the 2nd oldest card
            $ocards2 = (clone $baseQuery)->skip(1)->first();

            // Dynamically determine the view name based on the card ID
            $viewname = 'blogcards.card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'lcards' => $lcards,    // Latest card
                    'cards' => $cards,      // All cards except latest
                    'ocards' => $ocards,    // Oldest card
                    'ocards2' => $ocards2,   // 2nd oldest card
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage1($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C1'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card1/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage2($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C2'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card2/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage3($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C3'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card3/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage4($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C4'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card4/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage5($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C5'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card5/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage6($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C6'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card6/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage7($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C7'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card7/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage8($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C8'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card8/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage9($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C9'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card9/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage10($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C10'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card10/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage11($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C11'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card11/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage12($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C12'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card12/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage13($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C13'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card13/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage14($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C14'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card14/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage15($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C15'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card15/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage16($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C16'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card16/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage17($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C17'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card17/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage18($id)
    {
        // Dynamically resolve the model name based on the card ID
        $modelName = 'App\\Models\\CardsRow1\\Row1C18'; // This assumes the model is named Card1, Card2, Card3, etc.

        // Check if the model exists
        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card18/row1card' . $id;  // e.g., 'blogcards.card1', 'blogcards.card2', etc.

            // Check if the view exists
            if (view()->exists($viewname)) {
                // Return the dynamic view with the fetched data
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                // If the view does not exist, return a 404 error
                return abort(404, 'Card view not found');
            }
        } else {
            // If the model does not exist, return a 404 error
            return abort(404, 'Card model not found');
        }
    }

    public function showpage20($id)
    {

        $modelName = 'App\\Models\\CardsRow1\\Row1C20';

        if (class_exists($modelName)) {

            $vcards = $modelName::all();
            $viewname = 'card20/row1card' . $id;

            if (view()->exists($viewname)) {
                return view($viewname, [
                    'vcards' => $vcards,
                ]);
            } else {
                return abort(404, 'Card view not found');
            }
        } else {
            return abort(404, 'Card model not found');
        }
    }



    // public function showLatestRelease(){
    //     $latestcards = [];

    //     for ($i = 1; $i <= 20; $i++) {
    //         $modelClass = 'App\\Models\\CardsRow1\\Row1C' . $i;

    //         if (class_exists($modelClass)) {
    //             $card = $modelClass::latest()->first();

    //             if ($card) {
    //                 $latestcards[] = $card->toArray();
    //             }
    //         }
    //     }

    //     return view('home', ['latestcards' => $latestcards]);
    // }

    public function showLatestRelease()
    {
        $mergedData = [];
        $latestCards = [];

        $latestOverall = null;
        $latestModelClass = null;
        $latestIndex = null;

        for ($i = 1; $i <= 20; $i++) {
            $modelClass = "App\\Models\\CardsRow1\\Row1C{$i}";

            if (class_exists($modelClass)) {
                $card = $modelClass::latest()->first();

                if ($card) {
                    $latestCards[$i] = $card;

                    foreach ($card->toArray() as $key => $value) {
                        $mergedData[$key . $i] = $value;
                    }

                    if (!$latestOverall || $card->created_at > $latestOverall->created_at) {
                        $latestOverall = $card;
                        $latestModelClass = $modelClass;
                        $latestIndex = $i;
                    }
                }
            }
        }

        $secondLatestCard = null;
        $thirdLatestCard = null;

        if ($latestModelClass && $latestOverall) {
            $secondLatestCard = $latestModelClass::where('created_at', '<', $latestOverall->created_at)
                ->orderBy('created_at', 'desc')
                ->first();
        }

        if ($latestModelClass && $secondLatestCard) {
            $thirdLatestCard = $latestModelClass::where('created_at', '<', $secondLatestCard->created_at)
                ->orderBy('created_at', 'desc')
                ->first();
        }

        return view('home', [
            'card' => $mergedData,
            'lcards' => $latestOverall,
            'secondLatestCard' => $secondLatestCard,
            'thirdLatestCard' => $thirdLatestCard,
            'latestIndex' => $latestIndex,
        ]);
    }





    public function dashboard()
    {
        $totalPosts = CreateBlog::count();
    }

    public function newcards()
    {
        $ncards = AdminBlog::all();
        return view('home', ['ncards' => $ncards]);
    }


    public function viewes($id)
    {
        $modelName = 'App\\Models\\CardsRow1\\Row1C' . $id;

        if (class_exists($modelName)) {

            $vbcards = $modelName::all();
            $viewname = 'admin/viewcardsrow1/view' . $id;

            if (view()->exists($viewname)) {
                return view($viewname, [
                    'vbcards' => $vbcards,
                ]);
            } else {
                return abort(404, 'Card view not found');
            }
        } else {
            return abort(404, 'Card model not found');
        }
    }



}
