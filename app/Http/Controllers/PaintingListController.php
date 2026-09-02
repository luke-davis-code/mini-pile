<?php

namespace App\Http\Controllers;

use App\Enums\PaintingListType;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PaintingListController extends Controller
{
    /**
     * Display current users painting lists: Currently Painting, Owned, Finished, Dropped.
     */
    public function index(Request $request): Response
    {
        $userLists = $request->user()->paintingLists();

        $currentlyPainting = $userLists->where('type', PaintingListType::PAINTING);
        $owned = $userLists->where('type', PaintingListType::OWNED);
        $finished = $userLists->where('type', PaintingListType::FINISHED);
        $dropped = $userLists->where('type', PaintingListType::DROPPED);

        return Inertia::render('Collection', [
            'currentlyPainting' => $currentlyPainting,
            'owned' => $owned,
            'finished' => $finished,
            'dropped' => $dropped,
        ]);
    }

    /**
     * NOTE: Not needed currently, will be used to allow user to add custom lists.
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * NOTE: Don't believe need this yet, as lists are created on user signup.
     * Will be needed for custom lists.
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * TODO: Display an individual list as a grid of paintingItems within.
     */
    public function show(Collection $collection)
    {
        //
    }

    /**
     * NOTE: Don't need for now, as editing only affects linked paintingItems not list itself.
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * NOTE: Don't need as this is purely a model that allows paintingItems to be stored.
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * NOTE: Don't need as these will be removed when user is deleted.
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
