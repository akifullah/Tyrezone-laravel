<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\VehicleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleCategoryContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data["vehicleCategories"] = VehicleCategory::all();
        return view("admin.vehicle_category.list", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.vehicle_category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'v_cat_name' => 'required|unique:vehicle_categories,v_cat_name',
        ],[
            'v_cat_name.required' => 'Vehicle Category name is required',
            'v_cat_name.unique' => 'Vehicle Category name already exists',  
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $vehicleCategory = new VehicleCategory();
        $vehicleCategory->v_cat_name = strtolower($request->v_cat_name);
        $vehicleCategory->save();
        return redirect()->route('admin.addVehicleCategory')->with('success', 'Vehicle Category created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data["vehicleCategory"] = VehicleCategory::find($id);
        return view("admin.vehicle_category.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'v_cat_name' => 'required|unique:vehicle_categories,v_cat_name,'.$request->id,
        ],[
            'v_cat_name.required' => 'Vehicle Category name is required',
            'v_cat_name.unique' => 'Vehicle Category name already exists',  
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $vehicleCategory = VehicleCategory::find($request->id);
        $vehicleCategory->v_cat_name = strtolower($request->v_cat_name);
        $vehicleCategory->save();
        return redirect()->route('admin.vehicleCategory')->with('success', 'Vehicle Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $vehicleCategory = VehicleCategory::find($request->id);
        $vehicleCategory->delete();
        session()->flash('success', 'Vehicle Category deleted successfully');
        return response()->json(['status' => true]);
    }
}
