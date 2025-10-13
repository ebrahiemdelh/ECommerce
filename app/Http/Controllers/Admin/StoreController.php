<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRequest;
use App\Models\{Store,Vendor};
use Flasher\Laravel\Facade\Flasher;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::all();
        return view('admin.pages.stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendors = Vendor::all();
        return view('admin.pages.stores.create', compact('vendors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        Store::create($validated);
        // You can use a flash message package or session to show success messages
        Flasher::success( __('words.created', ['name' => __('words.Store')]), title: __('words.title_created', ['name' => __('words.Store')]));
        return redirect()->route('admin.stores.index');
    }

    /**
     * Display the specified resource.
    */
    public function show(Store $store)
    {
        return view('admin.pages.stores.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        $vendors = Vendor::all();
        return view('admin.pages.stores.edit', compact('store', 'vendors'));
    }

    /**
     * Update the specified resource in storage.
    */
    public function update(StoreRequest $request, Store $store)
    {
        $validated = $request->validated();
        $store->update($validated);
        Flasher::success( __('words.updated', ['name' => __('words.Store')]), title: __('words.title_updated', ['name' => __('words.Store')]));
        return redirect()->route('admin.stores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        $store->delete();
        Flasher::info( __('words.deleted', ['name' => __('words.Store')]), title: __('words.title_deleted', ['name' => __('words.Store')]));
        return redirect()->route('admin.stores.index');
    }
}
