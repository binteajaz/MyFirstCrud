<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registerModel;

class registrationController extends Controller
{
    public function store(Request $request)
    {

        if ($request->hasFile("image")) {
            $image = rand(1000, 9999) . '.' . $request->image->extension();
            $path = $request->image->storeAs('images', $image, 'public');
            $data['image'] = 'storage/' . $path;

        } else {
    
            $data['image'] = null;
        }
    
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
    
        $data = array_merge($validatedData, $data);
    
        registerModel::create($data);
    
        return redirect("fetch")->with("status", "Data inserted");
    }
    

    public function fetch()
    {
        $data = registerModel::all();

        return view('fetch', compact('data'));
    }

    public function edit($id){
       $data = registerModel::where('id', $id)->first();
       return view('update', compact('data'));
    }

    // update function
    public function update(Request $request, $id){
            $data = registerModel::findOrFail($id);
    
        // Update the fields you want to update
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = ($request->input('password'));
    
        // Save the updated data
        $data->save();
    
        return redirect("fetch")->with("status", "Data updated");
    }

    public function delete($id){
        $data = registerModel::where('id', $id)->first();
        $data->delete();

        return redirect("fetch")->with("status", "Data Delete");
    
     }
}
