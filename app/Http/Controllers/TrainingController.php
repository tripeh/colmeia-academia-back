<?php

namespace App\Http\Controllers;

use App\Training;
use App\Token;
use App\Push;
use Illuminate\Http\Request;

class TrainingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $trainings = Training::all();
            return response()->json($trainings, 200);
        }
        catch(\Exception $error){
            return response()->json([$error->getMessage()], 404);
        }
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
    public function store($title, $subtitle, $description)
    {
        $data = [];        
        $data['title'] = $title;
        $data['subtitle'] = $subtitle;
        $data['description'] = $description;
        $data['banner'] = 'b' . rand(1,3) . '.jpg';

        if(Training::create($data)){
            
            $tokens = Token::all();
            if(count($tokens) > 0)
            {
                foreach($tokens as $token)
                {
                    app(Push::class)->send('Um novo treino está disponível!', $title, $token['token']);
                }

                return response()->json(['Treino salvo com sucesso.']);
            }

        }
        else {

            return response()->json(['Erro ao salvar Treino.'], 400);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        //
    }
}
