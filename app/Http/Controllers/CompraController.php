<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Http\Requests\CompraRequest;
use Session;

use App\Models\Client;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compraas =Compra::select ('compras.*' , 'clients.name as Client') 
        ->join('clients', 'clients.id', '=', 'compras.client_id')
        ->orderBy('id', 'desc')->paginate(5);
     
         return view('compra.index', compact('compraas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client_id = Client::get()->pluck('name','id')->prepend('Seleccione una categoria');

       return view('compra.create', compact('client_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompraRequest $request)
    {
        Compra::create($request->all());

            Session::flash('save', ' El registro se ha creado correctamente');
            
            return redirect()->route('compra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compraas = Compra::Find($id);
        return view('compra.show', compact('compraas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client_id = Client::get()->pluck('name','id')->prepend('Seleccione una categoria');

        $compraas = Compra::find($id);
        return view('compra.edit', compact('compraas', 'client_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompraRequest $request, $id)
    {
         $compraas = Compra::find($id);

       // $input = $request->all();
       // $types->fill($input)->save();  

        $compraas->name = $request->name;
        $compraas->cantidad = $request->cantidad;
        $compraas->date_compra = $request->date_compra;
        $compraas->date_render = $request->date_render;
        $compraas->client_id = $request->client_id;
 
        $compraas->save();

        Session::flash('update', ' El registro se ha actualizado con exito.');

        return redirect()->route('compra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compraas=Compra::find($id);
        $compraas->delete();
        
        Session::flash('delete', ' El registro se ha eliminado con exito.');

        return redirect()->route('compra.index');
    }


    public function verpdf()
    {        
       $compraas =Compra::all();

       // $clients =Client::find($id);

      // $compraas =Compra::select ('compras.*' , 'clients.name as Client')
      //  ->join('clients', 'clients.id', '=', 'compras.client_id');

       $pdf = \App::make('dompdf.wrapper');   

       $pdf->loadView('compra.comprapdf', compact('compraas'));

       return $pdf->stream('compraas');
    }

    public function verpdfid($id)
    {        
       //$clients =Client::all();

       $compraas =Compra::find($id);

       $pdf = \App::make('dompdf.wrapper');   

       $pdf->loadView('compra.comprapdfid', compact('compraas'));

       return $pdf->stream('compraas');
    }


        public function descargarpdf()
    {
        $compraas =Compra::all();

        $pdf = \PDF::loadView('compra.comprapdf', ['compraas'=>$compraas]);

       return $pdf->download('compras.pdf');
    }

        public function descargarpdfid($id)
    {
        $compraas =Compra::find($id);

        $pdf = \PDF::loadView('compra.comprapdfid', ['compraas'=>$compraas]);

       return $pdf->download('compra.pdf');
    }


     public function charts()
    {
        $graficas=Compra::select('name', 'cantidad')->get();
        return view ('compra.grafic')->with('graficas', $graficas);
    }



    public function consulta1()
    {
           $compraas = \DB::table('compras')->count();

           Session::flash('message-consulta', $compraas);
           return redirect()->route('compra.index');
    }


    public function consulta2()
    {
       $compraas = \DB::table('compras')
        ->whereBetween('cantidad', array(1, 100))->get();
        //->whereNotBetween('cantidad', array(1, 100))->get(); 

        Session::flash('message-consulta', $compraas);
           return redirect()->route('compra.index');
        //dd($compraas);
    }

    public function consulta3()
    {
           $compraas = \DB::table('compras')->where('name', 'prueba22')->get();

           Session::flash('message-consulta', $compraas);
           return redirect()->route('compra.index');
    }

    public function consulta4()
    {
           $compraas = \DB::table('compras')->where('id', '1')->get();

           Session::flash('message-consulta', $compraas);
           return redirect()->route('compra.index');
    }


    public function consulta5()
    {
           $compraas = \DB::table('compras')->where('name', 'prueba22')->pluck('name');

           Session::flash('message-consulta', $compraas);
           return redirect()->route('compra.index');
    }


    public function consulta6()
    {
           $compraas = \DB::table('compras')->select('name', 'cantidad')->get();

           Session::flash('message-consulta', $compraas);
           return redirect()->route('compra.index');
    }


    public function consulta7()
    {
           $compraas = \DB::table('compras')->sum('cantidad');

           Session::flash('message-consulta', $compraas);
           return redirect()->route('compra.index');
    }


    public function consulta8()
    {
           $compraas = \DB::table('compras')->avg('cantidad');

           Session::flash('message-consulta', $compraas);
           return redirect()->route('compra.index');
    }


    public function consulta9()
    {
           $compraas = \DB::table('compras')->max('cantidad');

           Session::flash('message-consulta', $compraas);
           return redirect()->route('compra.index');
    }



}
