<?php

namespace App\Http\Controllers;

use App\Scorer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Dependence;
use Response;

class ScorerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.scorer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scorer  $scorer
     * @return \Illuminate\Http\Response
     */
    public function show(Scorer $scorer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scorer  $scorer
     * @return \Illuminate\Http\Response
     */
    public function edit(Scorer $scorer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scorer  $scorer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scorer $scorer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scorer  $scorer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scorer $scorer)
    {
        //
    }
    public function sorteo(Request $request)
    {   
        
        $dependences = Dependence::where('jugado', 0)->get();
        $id_dependence = $dependences;        
        $dependence = $request->input('dependence');
        $winners = $request->input('winners');
        $winner = null;
        $count = 0;
        
        if($dependence =='SUDIR-SEGEN'){
        
            $users = User::where('dependence', 'SUDIR')->orWhere('dependence', 'SEGEN')->get();
        }else{
            $users = User::where('dependence', $dependence)->get();
        }
        
        while($count <= $winners-1){
            $win = rand(0, count($users)-1);
            $winner[] = $users[$win];
            unset($users[$win]);
            $count ++;
        } 

        if(is_array($winner)){
            foreach ($winner as $key => $win) {
                $save = Scorer::firstOrCreate( 
                        [
                            'first_name' => $win->first_name, 
                            'identification' => $win->identification, 
                            'dependence' => $dependence
                        ] 
                    );
            }
        }
        if (isset($winner)) {
            $data = Dependence::where('name', $dependence)->first();
            $data->jugado = 1;
            $data->save();
        }
        
        return View('users.scorer', array('winner' => $winner, 'id_dependence' => $id_dependence));
    }
    public function ganadores(Scorer $scorer)
    {
        //$users = User::where('update_user', 1)->get();
        //return View('users.ganadores', ['users' => $users]);
        $users = Scorer::orderBy('created_at', 'desc')->get();
        return View('users.ganadores', ['users' => $users]);
    }
}
