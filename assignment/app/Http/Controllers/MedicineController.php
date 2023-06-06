<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\medicine;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listofmedicine()
    {
        $medicines = medicine::all();
        return view('medicine',compact('medicines'));
    }

    public function addmedicine(){
        return view('addmedicine');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image'=>'sometimes|image:gif,png,jpg,jpeg'
        ]);
        if($validator->passes()){
            // save data here

          $medicine = new medicine();

          $medicine->title = $request->title;
          $medicine->description = $request->description;
          $medicine->quantity = $request->quantity;
          $medicine->price = $request->price;
          $medicine->save();

        //   $request->session()->flash('success',"produc$product added successfully");

         //upload image here

         if($request->image){

            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time().'.'.$ext;
            $request->image->move(public_path().'/uploads',$newFileName);
            $medicine->image = $newFileName; // database image name update
            $medicine->save();

         }
         return redirect('medicine');
        }
        else{
            //return with errors

            return redirect('addmedicine');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id ,medicine $medicine)
    {
        $medicines = $medicine::find($id);
        // dd($medicines);
        return view('editmedicine',compact('medicines'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request ,medicine $medicine)
    {
        $medicines = $medicine::find($id);
        $data = $request->except(['_token','btn-save']);
        foreach ($data as $key => $value) {
            $medicines->$key =$value;
        }
        $medicines->save();
        return redirect('medicine');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,medicine $medicine)
    {
        $medicine = $medicine::find($id);
        file::delete(public_path().'/uploads',$medicine->image);
        $medicine->delete($id);
        return redirect('medicine');
    }
}
