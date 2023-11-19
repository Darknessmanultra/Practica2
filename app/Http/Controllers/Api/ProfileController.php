<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Frameworks;
use App\Models\Hobbies;
use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $profile=Profile::create([
                'Name'=>'Elio',
                'Lastname'=>'Pez',
                'E-mail'=>'dummy@dumdum.com',
                'City'=>'Macondo',
                'Country'=>'Chile',
                'Summary'=>'In other words, please be true. In other words, i love you.',
                'Frameworks'=>['Frameworks_1'=>'Laravel,Beginner,2023'],
                'Hobbies'=>['Hobbie_1'=>'Cocina,Cocinar.','Hobbie_2'=>'Ciclismo,Andar en bicicleta.'],
            ]);
            return response()->json($profile,200);
        }
        catch (Exception $exception){
            throw new Exception($exception->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profile=Profile::create($request->all());
        return response()->json(['profile'=> $profile],200);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $profile=Profile::create([
            'Name'=>'Elio',
            'Lastname'=>'Pez',
            'E-mail'=>'dummy@dumdum.com',
            'City'=>'Macondo',
            'Country'=>'Chile',
            'Summary'=>'In other words, please be true. In other words, i love you.',
            'Frameworks'=>['Frameworks_1'=>'Laravel,Beginner,2023'],
            'Hobbies'=>['Hobbie_1'=>'Cocina,Cocinar.','Hobbie_2'=>'Ciclismo,Andar en bicicleta.'],
        ]);
        return view('Home');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
