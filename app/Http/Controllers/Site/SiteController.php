<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;

class SiteController extends Controller {  

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
        $date['fapage'] = 'fas fa-tachometer-alt';
        $date['titlepage'] = 'Cadastre-se';
        $date['title'] = 'Cadastre-se';
        $date['subtitle'] = 'Cadastre-se';
        $date['cat'] = '';
        $date['catfa'] = 'fa-th';
        $date['routerlist'] = 'site.index';
        return view('site.cadastrar', $date);
    }   

    public function cadastros() {
        $date['module'] = 'SISTEMA';
        $date['routercat'] = 'site.index';
        $date['routerlist'] = 'site.index';
        $date['subcat'] = '';
        $date['fapage'] = 'fas fa-tachometer-alt';
        $date['titlepage'] = 'Candidatoos Cadastrados';
        $date['title'] = 'Candidatoos Cadastrados';
        $date['subtitle'] = 'Candidatoos Cadastrados';
        $date['cat'] = '';
        $date['catfa'] = 'fa-th';
        $date['routerlist'] = 'site.index';
        return view('site.cadastros', $date);
    }   

}
