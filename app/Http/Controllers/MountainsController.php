<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mountain;
//meglio importare sempre il model

class MountainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // questo controller mi richiama tutti gli elementi del db e me li mostra in una vista.

        $mountains = Mountain::all();

        $data = [
            'title' => 'Index'
        ];

        return view('index', $data, compact('mountains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //questo metodo mi visualizza solo il form
        $data = [
            'title' => 'Create Form'
        ];
        return view('create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //questo controller mi prende i dati dal form e mi genera una nuova istanza

        $data = $request->all();
        // dd($data);

        //questo e' il mio nuovo oggetto, che viene poi salvato
        $newElement = new Mountain();

        $newElement->fill($data);
        //mi riempie il mio nuovo oggetto con tutti i dati che vengono dal form,
        //in pratica fa quello che c e qui sotto nelle righe commentate.
        //ricordati pero nel model di dirgli quali colonne sono riempibili,
        //se no cerca di riempire il token e si rompe.

        // $newElement->name = $data['name'];
        // $newElement->nation = $data['nation'];
        // $newElement->elevation = $data['elevation'];

        $newElement->save();

        //questo metodo mi riporta ad una pagina che voglio una volta aggiunto l elemento al db
        //meglio usare questo metodo che un sempilce return view() perche per esempio in questo caso
        //dovrei richiamare anche tutti gli utenti con Mountain::all().
        return redirect()->route('mountains.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //in alternativa c e la dependence injection con al posto di ($id)
        //(Mountain $mountain)
        $mountains = Mountain::all();


        //passo alla vista show solo l elemento con l id in questione
        // $myMountain = [];
        // foreach ($mountains as $value) {
        //     if ($value['ID'] == $id) {
        //         $myMountain = $value;
        //     }
        // }

        //in alternativa c e il metodo find:

        $myMountain = Mountain::find($id);




        return view('show', compact('mountain'));
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
