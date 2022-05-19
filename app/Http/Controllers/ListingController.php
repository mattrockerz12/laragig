<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ListingController extends Controller
{
    public function index()
    {
        return Listing::all();
    }

    public function store(Request $request)
    {
        $listing = Listing::create([
            'title' => $request->input('title'),
            'logo' => $request->input('logo'),
            'tags' => $request->input('tags'),
            'company' => $request->input('company'),
            'location' => $request->input('location'),
            'email' => $request->input('email'),
            'website' => $request->input('website'),
            'description' => $request->input('description'),
            'user_id' => $request->user()->id
        ]);

        return response($listing, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        return Listing::find($id);
    }

    public function update(Request $request, $id)
    {
        $listing = Listing::find($id);

        $listing->update(
            $request->only(
                'title',
                'logo',
                'tags',
                'company',
                'location',
                'email',
                'website',
                'description',
            )
        );


        return response($listing, Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {
        Listing::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
