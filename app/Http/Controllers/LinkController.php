<?php

namespace App\Http\Controllers;

use App\Link;
use App\Http\Requests\LinkRequest;

class LinkController extends Controller
{
    /**
     * Create a new short url if possible
     *
     * @param  App\Http\Requests\LinkRequest  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(LinkRequest $request)
    {
        $link = Link::create($request->validated());

        $link['short_url'] = url($link['unique_id']);
        unset($link['id']);

        return response()->json($link, 201);
    }

}
