<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Autos;
class AutosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(){
        $autos = Autos::all();
        $datos = array('autos' => $autos);
        return view('autos.index',$datos);
    }


/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create(){
        return view('autos.create');
    }


    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(Request $request){
        $auto = new Autos;
        $auto->placa = $request->input('placa');
        $auto->color = $request->input('color');
        $auto->save();
        return redirect('autos');
    }


    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id){
        $auto = Autos::find($id);
        $datos = array(
            'auto' => $auto
        );
        return view('autos.edit',$datos);
    }


    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(Request $request){
        $id = $request->input('id');
        $auto = Autos::find($id);
        $auto->placa = $request->input('placa');
        $auto->color = $request->input('color');
        $auto->save();
        return redirect('autos');
    }


    /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id){
        $auto = Autos::find($id);
        $auto->delete();
        return redirect('autos');
    }


}
