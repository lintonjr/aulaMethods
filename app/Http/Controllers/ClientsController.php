<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
    
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $client = New Client;
        // $client->name = $request->name;
        // $client->age = $request->age;
        // if($request->age < 18){
        //     $client->description = 'Menor de idade';
        // }else{
        //     $client->description = 'Maior de idade';
        // }

        // $client->save();
        
        $data['name'] = $request->name;
        $data['age'] = $request->age;
        if($request->age < 18){
            $data['description'] = "Menor de idade";
        }else{
            $data['description'] = "Maior de idade";
        }

        // dd($data);

        $create = Client::create($data);
        return redirect()->to('/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        // dd($client);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $update = Client::find($id);
        // $update->name = $request->name;
        // $update->age = $request->age;
        // if($request->age < 18){
        //     $update->description = 'Menor de idade';
        // }else{
        //     $update->description = 'Maior de idade';
        // }

        // $update->save();

        // $update = Client::where('id', $id)->first();
            
        // $update->update($request->all());

        $data['name'] = $request->name;
        $data['age'] = $request->age;
        if($request->age < 18){
            $data['description'] = "Menor de idade";
        }else{
            $data['description'] = "Maior de idade";
        }

        $update = Client::find($id);
        $update->update($data);

        return redirect()->to('/clients');
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
