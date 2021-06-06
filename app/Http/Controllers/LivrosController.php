<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 06/06/21
 * Time: 17:28
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index(Request $request) {
        $livros = [
            'Código Limpo',
            'Domain-Driven Design',
            'Use a Cabeça! Padrões de Projetos',
            'TDD Desenvolvimento Guiado por Testes',
            'O Codificador Limpo'
        ];

        return view('livros.index', compact('livros'));
    }

}