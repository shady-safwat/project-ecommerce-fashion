<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profiles = Profile::all();
        return view('admin.profile.all',compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $profiles = Profile::all();
        $roles = Role::all();
        return view('admin.profile.create',compact('profiles','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $profiles=[
            'name' => ['required', 'string', 'min:4', 'max:255', 'unique:profiles'],
            'date_of_birth' => ['required','before:'. now()->toDateString(),'nullable'],
            'gender' => ['required'],
            'phone' => ['required','digits:11'],
            'email' => ['required','email','string','max:255','unique:profiles'],
            'country' => ['required','max:255'],
            'address' => ['required','max:255'],
            'city' => ['required','max:255'],
            'state' => ['required'],
            'zip_code' => ['required','digits:5','integer'],
            'image' =>['required','mimes:jpg,bmp,png,jpeg'],
            'role_id' =>['required']
        ];
        $validator = Validator::make($data , $profiles);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }

        $profilePicture = $request->file('image');
        $picName = time(). "_".$profilePicture->getClientOriginalName();
        $profilePicture->move('adminpanel\img\faces',$picName);

        Profile::create([
            'name' => $request->name ,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'image' => $picName,
            'role_id' => $request->role_id,
        ]);
        return redirect()->back();
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
        $profile = Profile::findOrFail($id);
        return view('admin.profile.show',compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $profile = Profile::findOrFail($id);
        return view('admin.profile.edit',compact('profile'));
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
        //
        $data = $request->all();
        $profiles=[
            'name' => ['required', 'string', 'min:4', 'max:255', 'unique:profiles'],
            'date_of_birth' => ['required','before:'. now()->toDateString(),'nullable'],
            'gender' => ['required'],
            'phone' => ['required','digits:11'],
            'email' => ['required','email','string','max:255','unique:profiles'],
            'country' => ['required','max:255'],
            'address' => ['required','max:255'],
            'city' => ['required','max:255'],
            'state' => ['required'],
            'zip_code' => ['required','digits:5','integer'],
            'image' =>['required','mimes:jpg,bmp,png,jpeg'],
            
        ];
        $validator = Validator::make($data , $profiles);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($data);
        }

        $profilePicture = $request->file('image');
        $picName = time(). "_".$profilePicture->getClientOriginalName();
        $profilePicture->move('adminpanel\imag',$picName);

        $profile = Profile::findOrFail($id);
        $profile->update([
            'name' => $request->first_name ,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'image' => $picName,
            
        ]);
        return redirect()->back();
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
        $profile = Profile::findOrFail($id) ;
        $profile->delete();
        return redirect()->back();
    }
}
