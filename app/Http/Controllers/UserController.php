<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Http\Requests\UserUpdateValidation;
use App\Http\Requests\CsvImportRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->middleware('auth:web', ['except' => ['update']]);
    }

    public function index()
    {
        //$users =  User::all();
        //return view('users.users')->with('users', $users);
        //$users = DB::table('users')->paginate(15);
        //return view('users.users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $data = $request->all();
        $user->fill($data);
        $user->save();
        return Redirect::route('users.show', array($user->id));
        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (is_null($user)) {
            return 'Este usuario no existe!';
        }
        return View('users.show', array('user' => $user));
        //return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (is_null($user)) {
            return 'Este usuario no existe!';
        }
        return view('users.edit')->with('user', $user);
        //return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateValidation $request, User $user)
    {   
        if (is_null($user)) {
            return 'Este usuario no existe!';
        }
        $data = $request->all();
        $user->fill($data);
        $user->update_user = 1;
        $user->save();
        return Redirect::route('gracias');
/*      $validated = $request->validated();
        dd($validated);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        $user->save();

        return redirect()->route('user.index');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return Redirect::to('/users');
    }
    public function getImport()
    {
        return view('import');
    }
    public function parseImport(CsvImportRequest $request)
    {
        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        $csv_data = array_slice($data, 1, count($data)-1);
        foreach ($csv_data as $key => $data){
            $user = User::firstOrCreate(
                                        [
/*                                      'first_name' => $data[0],
                                        'last_name' => $data[1],*/
                                        'identification' =>  $data[2],
/*                                      'city' => $data[3],
                                        'affiliate_time' => $data[4],
                                        'email' => $data[5],
                                        'phone' => $data[6],
                                        'mobile' => $data[7],
                                        'dependence' => $data[8],
                                        'children' => $data[9],
                                        'number_children' => $data[10],
                                        'car' => $data[11],
                                        'id_departments' => $data[12],
                                        'api_token' =>  str_random(50),*/
                                        ]
                                    );
            $user->first_name = $data[0];
            $user->last_name = $data[1];
            //$user->identification = $data[2];
            $user->city = $data[3];
            $user->affiliate_time = $data[4];
            $user->email = $data[5];
            $user->phone = $data[6];
            $user->mobile = $data[7];
            $user->dependence = $data[8];
            $user->children = $data[9];
            $user->number_children = $data[10];
            $user->car = $data[11];
            $user->api_token = str_random(50);
            $user->save();
        }
    }
}
