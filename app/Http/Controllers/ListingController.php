<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //Show all Listing
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()
                ->filter(request(['tag', 'search']))
                ->paginate(6),
        ]);
    }

    //Show Single Listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing,
        ]);
    }

    //Show create from
    public function create()
    {
        return view('listings.create');
    }

    //Store listings to database
    public function store(Request $request)
    {
        $formField = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formField['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formField);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    //Show Edit Form
    public function edit(Listing $listing) {
        return View('listing.edit', ['listing' => $listing]);
    }
}
