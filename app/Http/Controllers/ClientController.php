<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\ClientRequest;
use Session;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct() { 
        $this->middleware('auth'); 
        $this->middleware('admin', ['only' => ['edit', 'show']]);
        //$this->middleware('admin', ['only' =>'index']); 
    }


    public function index()
    {
         $clients =Client::select ('clients.*')->orderBy('id', 'desc')->paginate(5);
     
         return view('cliente.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        Client::create($request->all());

            Session::flash('save', ' El registro se ha creado correctamente');
            
            return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = Client::Find($id);
        return view('cliente.show', compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientss = Client::find($id);
        return view('cliente.edit', compact('clientss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {
        $clientss = Client::find($id);

        //input = $request::all();
        //$clientss->fill($input)->save();  

        $clientss->name = $request->name;
        $clientss->photo = $request->photo;
        $clientss->phone = $request->phone;
        $clientss->nacimiento = $request->nacimiento;
 
        $clientss->save();  

        Session::flash('update', ' El registro se ha actualizado con exito.');

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients=Client::find($id);
        $clients->delete();
        
        Session::flash('delete', ' El registro se ha eliminado con exito.');

        return redirect()->route('client.index');
    }


    public function verpdf()
    {        
       $clients =Client::all();

       // $clients =Client::find($id);

       $pdf = \App::make('dompdf.wrapper');   

       $pdf->loadView('cliente.clientpdf', compact('clients'));

       return $pdf->stream('clients');
    }


    public function verpdfid($id)
    {        
       //$clients =Client::all();

       $clients =Client::find($id);

       $pdf = \App::make('dompdf.wrapper');   

       $pdf->loadView('cliente.clientpdfid', compact('clients'));

       return $pdf->stream('clients');
    }


    public function descargarpdf()
    {
        $clients =Client::all();

        $pdf = \PDF::loadView('cliente.clientpdf', ['clients'=>$clients]);

       return $pdf->download('clientes.pdf');
    }

    public function descargarpdfid($id)
    {
        $clients =Client::find($id);

        $pdf = \PDF::loadView('cliente.clientpdfid', ['clients'=>$clients]);

       return $pdf->download('cliente.pdf');
    }


}
