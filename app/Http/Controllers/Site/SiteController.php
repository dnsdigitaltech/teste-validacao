<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Site\SiteCadastro;
use App\Http\Requests\StoreUpdateCadastroFormRequest;

class SiteController extends Controller { 
    
    private $cadastro, $lang, $subcategory;
    /*
    * Construtor da classe
    * @access public
    * @subpackage Page 
    * @param String $page
    * @return void
    */
    public function __construct(SiteCadastro $cadastro) {
        $this->cadastro = $cadastro;
    }

    public function index() {
        $date['module'] = 'SISTEMA';
        $date['routercat'] = 'site.index';
        $date['routerlist'] = 'site.index';
        $date['subcat'] = '';
        $date['fapage'] = 'fas fa-tachometer-alt';
        $date['titlepage'] = 'Sistema de inscrição de candidatos';
        $date['title'] = 'Sistema de inscrição de candidatos';
        $date['subtitle'] = 'Bem vindo';
        $date['cat'] = '';
        $date['catfa'] = 'fa-th';
        return view('site.index', $date);
    }   

    public function cadastrar() {
        $date['module'] = 'SISTEMA';
        $date['routercat'] = 'site.index';
        $date['routerlist'] = 'site.index';
        $date['subcat'] = '';
        $date['fapage'] = 'fas fa-plus-circle';
        $date['titlepage'] = 'Cadastre-se';
        $date['title'] = 'Cadastre-se';
        $date['subtitle'] = 'Cadastre-se';
        $date['cat'] = '';
        $date['catfa'] = 'fa-th';
        $date['routerlist'] = 'site.index';
        return view('site.cadastrar', $date);
    }   

    /**
     * Pega os dados do formulário e envia para a base.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCadastroFormRequest $request) {
        
        $request['nascimento'] = inverteData($request->nascimento);
        $insert = $this->cadastro->newCadastro($request);        
        if ($insert)
            return redirect()->route('site.cadastrar')->with("success", "page <<{$request->title}>> cadastrado com sucesso!");
        else
            return redirect()->back()->with('error' . 'Falha ao cadastrar!');
    }

    public function cadastros() {
        $date['module'] = 'SISTEMA';
        $date['routercat'] = 'site.index';
        $date['routerlist'] = 'site.index';
        $date['subcat'] = '';
        $date['fapage'] = 'fas fa-search';
        $date['titlepage'] = 'Candidatos Cadastrados';
        $date['title'] = 'Candidatos Cadastrados';
        $date['subtitle'] = 'Candidatos Cadastrados';
        $date['cat'] = '';
        $date['catfa'] = 'fa-th';
        $date['routerlist'] = 'site.index';
        return view('site.cadastros', $date);
    }   

}
