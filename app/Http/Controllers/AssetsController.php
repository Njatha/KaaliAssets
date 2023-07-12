<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Assets;
use App\Models\AssetHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function dashboard()
    {
        return view('dashboard');
    }

    //Show all assets
    public function index()
    {
        return view('assets.index', ['assets' => Assets::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Show Create Form
    public function create()
    {
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //Store Asset data
    public function store(Request $request)
    {
        
        $formFields = $request->validate([
            'name' => 'required',
            'serialNumber' => 'required',
            'assetNumber' => 'required',
            'description' => 'required',
            'manufacturer' => 'required',
            'assetType' => 'required',
            'location' => 'required',
        ]);

        // Assets::create($formFields);

        $asset = new Assets();
        $asset->name = $request['name'];
        $asset->serialNumber = $request['serialNumber'];
        $asset->assetNumber = $request['assetNumber'];
        $asset->assignedUser = $request['assignedUser'];
        $asset->description = $request['description'];
        $asset->manufacturer = $request['manufacturer'];
        $asset->assetType = $request['assetType'];
        $asset->location = $request['location'];
        $asset->colour = $request['colour'];
        $asset->dateOfPurchase = $request['dateOfPurchase'];
        $asset->estimatedValue = $request['estimatedValue'];
        $asset->dateOfLastInspection = $request['dateOfLastInspection'];
        $asset->barCode = $request['barCode'];
        $asset->barCodeData = $request['barCodeData'];
        $asset->status = $request['status'];

        $asset->save();


        $assetHistory = new AssetHistory();
        $assetHistory->assets_id = $asset->id;
        $assetHistory->serialNumber = $request['serialNumber'];
        $assetHistory->description = 'Asset Created';
        
        $assetHistory->save();
        
        return redirect ('/assets')->with('message', 'Asset Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Show single asset
    public function show(Assets $assets)
    {
        // $assetHistory = DB::table('asset_histories')->where('assets_id', $assets->assets_id);

        $assetHistorys = DB::table('asset_histories')->where('assets_id', $assets->id)->get();
        

        // return view ('assets.show', [
        //     'asset' => $assets
        // ]);
            return view('assets.show')
            ->with('asset', $assets)
            ->with('assetHistorys', $assetHistorys);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Show Edit Form
    public function edit(Assets $assets)
    {
        return view('assets.edit', ['asset' => $assets]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Update Assets Data
    public function update(Request $request, $id)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'serialNumber' => 'required',
            'assetNumber' => 'required',
            'description' => 'required',
            'manufacturer' => 'required',
            'assetType' => 'required',
            'location' => 'required',
        ]);

        

        $asset = Assets::find($id);
        $asset->name = $request['name'];
        $asset->serialNumber = $request['serialNumber'];
        $asset->assetNumber = $request['assetNumber'];
        $asset->assignedUser = $request['assignedUser'];
        $asset->description = $request['description'];
        $asset->manufacturer = $request['manufacturer'];
        $asset->assetType = $request['assetType'];
        $asset->location = $request['location'];
        $asset->colour = $request['colour'];
        $asset->dateOfPurchase = $request['dateOfPurchase'];
        $asset->estimatedValue = $request['estimatedValue'];
        $asset->dateOfLastInspection = $request['dateOfLastInspection'];
        $asset->barCode = $request['barCode'];
        $asset->barCodeData = $request['barCodeData'];
        $asset->status = $request['status'];

        $asset->update();

        // $assetSerial = $asset->serialNumber;

        // $assetHistory = AssetHistory::find($assetSerial);
        // $assetHistory->assets_id = $id;

        // $assetHistory->update();

        // $assetHistory = new AssetHistory();
        // $assetHistory->serialNumber = $request['serialNumber'];
        // $assetHistory->description = 'Asset Updated';
        
        // $assetHistory->save();
        
        return redirect ('/assets')->with('message', 'Asset Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
