<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;

class TokenController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $hasToken = Token::where('token', $request->token)->count();

        if($hasToken <= 0)
        {
            if(Token::create($data)){
                return response()->json(['Token salvo com sucesso.']);
            }
            else {
                return response()->json(['Erro ao salvar token.'], 400);
            }
        }
        else
        {
            return response()->json(['Este token já está salvo.'], 400);
        }
    }
}
