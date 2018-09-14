<?php

namespace App\Http\Controllers;

use App\Scorer;
use Illuminate\Http\Request;
use App\User;

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
        $id_dependence = array( 'ARCOI' => 'ARCOI',
                                'OFPLA' => 'OFPLA',
                                'DINCO' => 'DINCO',
                                'COEST' => 'COEST',
                                'DIRSE' => 'DIRSE',
                                'OFITE' => 'OFITE',
                                'DIPON' => 'DIPON',
                                'DEVAU' => 'DEVAU',
                                'DIASE' => 'DIASE',
                                'DEGUN' => 'DEGUN',
                                'INSGE' => 'INSGE',
                                'DIRAF' => 'DIRAF',
                                'DIBIE' => 'DIBIE',
                                'DITAH' => 'DITAH',
                                'DESAP' => 'DESAP',
                                'DEVIC' => 'DEVIC',
                                'DITRA' => 'DITRA',
                                'DINAE' => 'DINAE',
                                'DEAMA' => 'DEAMA',
                                'SUDIR-SEGEN' => 'SUDIR-SEGEN',
                                'POLFA' => 'POLFA',
                                'DEGUV' => 'DEGUV',
                                'DISAN' => 'DISAN',
                                'DEPUY' => 'DEPUY',
                                'DEARA' => 'DEARA',
                                'DERIS' => 'DERIS',
                                'DIPOL' => 'DIPOL',
                                'DECHO' => 'DECHO',
                                'DEMAG' => 'DEMAG',
                                'DEURA' => 'DEURA',
                                'DECAS' => 'DECAS',
                                'DECAQ' => 'DECAQ',
                                'DEMAN' => 'DEMAN',
                                'DEBOL' => 'DEBOL',
                                'DECAL' => 'DECAL',
                                'DISEC' => 'DISEC',
                                'DENOR' => 'DENOR',
                                'DEQUI' => 'DEQUI',
                                'DEATA' => 'DEATA',
                                'DEUIL' => 'DEUIL',
                                'DETOL' => 'DETOL',
                                'DECAU' => 'DECAU',
                                'DIPRO' => 'DIPRO',
                                'DECOR' => 'DECOR',
                                'DEMET' => 'DEMET',
                                'DIJIN' => 'DIJIN',
                                'DESUC' => 'DESUC',
                                'DEGUA' => 'DEGUA',
                                'DESAN' => 'DESAN',
                                'DEBOY' => 'DEBOY',
                                'DICAR' => 'DICAR',
                                'DENAR' => 'DENAR',
                                'DECES' => 'DECES',
                                'DIRAN' => 'DIRAN',
                                'DEVAL' => 'DEVAL',
                                'DEANT' => 'DEANT',
                                'DECUN' => 'DECUN',
                                'METUM' => 'METUM',
                                'MEMAZ' => 'MEMAZ',
                                'MENEV' => 'MENEV',
                                'MEPOY' => 'MEPOY',
                                'MEPAZ' => 'MEPAZ',
                                'METIB' => 'METIB',
                                'MEMOT' => 'MEMOT',
                                'MESAN' => 'MESAN',
                                'MEPER' => 'MEPER',
                                'MEVIL' => 'MEVIL',
                                'MECAR' => 'MECAR',
                                'MEBUC' => 'MEBUC',
                                'MECUC' => 'MECUC',
                                'MEBAR' => 'MEBAR',
                                'MECAL' => 'MECAL',
                                'MEVAL' => 'MEVAL',
                                'MEBOG' => 'MEBOG',
                                'REGI1' => 'REGI1',
                                'REGI2' => 'REGI2',
                                'REGI3' => 'REGI3',
                                'REGI4' => 'REGI4',
                                'REGI5' => 'REGI5',
                                'REGI6' => 'REGI6',
                                'REGI7' => 'REGI7',
                                'REGI8' => 'REGI8',
                                'CASUR' => 'CASUR',
                                'TEGEN' => 'TEGEN',
                                'ESMAC' => 'ESMAC',
                                'ESANT' => 'ESANT',
                                'ESEVI' => 'ESEVI',
                                'ESCIC' => 'ESCIC',
                                'ESPRO' => 'ESPRO',
                                'ESRAN' => 'ESRAN',
                                'ESCEQ' => 'ESCEQ',
                                'ESGAC' => 'ESGAC',
                                'ESJIM' => 'ESJIM',
                                'ESANA' => 'ESANA',
                                'ESTIC' => 'ESTIC',
                                'ESREY' => 'ESREY',
                                'ESSUM' => 'ESSUM',
                                'ESPOL' => 'ESPOL',
                                'ESBOL' => 'ESBOL',
                                'ESCAR' => 'ESCAR',
                                'ESCER' => 'ESCER',
                                'ESECU' => 'ESECU',
                                'ESAVI' => 'ESAVI',
                                'ESMEB' => 'ESMEB',
                                'CENOP' => 'CENOP',
                                'ESAGU' => 'ESAGU',
                                'ESGON' => 'ESGON',
                                'ESINC' => 'ESINC',
                                'ESVEL' => 'ESVEL',
                                'ESCAN' => 'ESCAN');
        $dependence = $request->input('dependence');
        $winners = $request->input('winners');
        $winner = null;
        $count = 0;
        
        if($dependence =='SUDIR-SEGEN'){
        
            $users = User::where('dependence', 'SUDIR')->orWhere('dependence', 'SEGEN')->get();
            //dd($users);
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
        return View('users.scorer', array('winner' => $winner, 'id_dependence' => $id_dependence));
    }
}
