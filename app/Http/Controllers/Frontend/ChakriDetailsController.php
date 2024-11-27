<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Chakri;
use Illuminate\Http\Request;

class ChakriDetailsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Chakri $chakri)
    {
        return view('frontend.chakri-details', compact('chakri'));
    }
}
