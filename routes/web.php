<?php

Route::get('/', 'HomeController@Home');
Route::get('home', 'HomeController@Home')->name('home');

/* Route para Login */
Route::post('logar', 'LoginController@Logar')->name('logar');  /* 'nome da rota', 'nome do controle'+'nomefuncao' 'depois nomear rotas */
Route::get('logout', 'LoginController@Logout')->name('logout');
Route::get('TelaInicial', 'LoginController@Tela')->name('TelaInicial');

/* Route do Cadastrar Eleitor */
Route::get('CadastrarEleitor', 'cadastrarController@Eleitor')->name('CadastrarEleitor');
Route::get('EleitorSalvar', 'cadastrarController@Salvar')->name('EleitorSalvar');

/* Route do Cadastrar Ajuda */
Route::get('cadastrarAjuda', 'cadastrarAjudaController@Ajuda')->name('cadastrarAjuda');
Route::get('AjudaSalvar', 'cadastrarAjudaController@Ajuda_Salvar')->name('AjudaSalvar');