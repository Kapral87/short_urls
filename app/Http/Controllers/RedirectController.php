<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  string                    $unique_id
     * @param  \Illuminate\Http\Request  $request
     *
     * @return Redirect
     */
    public function __invoke($unique_id, Request $request)
    {
        $link = Link::where('unique_id', $unique_id)->first();

        if (!empty($link)) {
            return redirect($link['long_url']);
        }

        abort(404);
    }

}
