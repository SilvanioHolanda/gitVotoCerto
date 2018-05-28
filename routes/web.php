<?php

Route::get('/', 'HomeController@Home');
Route::get('home', 'HomeController@Home')->name('home');

/* Route para Login */
Route::post('logar', 'LoginController@Logar')->name('logar');  /* 'nome da rota', 'nome do controle'+'nomefuncao' 'depois nomear rotas */
Route::get('logout', 'LoginController@Logout')->name('logout');



Route::group(['middleware' => ['logar']], function() {

Route::get('TelaInicial', 'LoginController@Tela')->name('TelaInicial');    

/* Route do Cadastrar Eleitor */
Route::get('CadastrarEleitor', 'cadastrarController@Eleitor')->name('CadastrarEleitor');
Route::get('EleitorSalvar', 'cadastrarController@Salvar')->name('EleitorSalvar');
Route::get('EleitorListar', 'cadastrarController@EleitorListar')->name('EleitorListar');
Route::get('EleitorVisualisar/{id}', 'cadastrarController@EleitorVisualisar')->name('EleitorVisualisar');
Route::get('EleitorEditar/{id}', 'cadastrarController@EleitorEditar')->name('EleitorEditar');
Route::get('EleitorExcluir/{id}', 'cadastrarController@EleitorExcluir')->name('EleitorExcluir');
Route::get('EleitorAtualizar', 'cadastrarController@EleitorAtualizar')->name('EleitorAtualizar');





/* Route do Cadastrar Ajuda */
Route::get('cadastrarAjuda', 'cadastrarAjudaController@Ajuda')->name('cadastrarAjuda');
Route::get('AjudaSalvar', 'cadastrarAjudaController@Ajuda_Salvar')->name('AjudaSalvar');
Route::get('AjudaListar', 'cadastrarAjudaController@AjudaListar')->name('AjudaListar');
Route::get('AjudaVisualisar/{id}', 'cadastrarAjudaController@AjudaVisualisar')->name('AjudaVisualisar');
Route::get('AjudaEditar/{id}', 'cadastrarAjudaController@AjudaEditar')->name('AjudaEditar');
Route::get('AjudaExcluir/{id}', 'cadastrarAjudaController@AjudaExcluir')->name('AjudaExcluir');
Route::get('AjudaAtualizar/{id}', 'cadastrarAjudaController@AjudaAtualizar')->name('AjudaAtualizar');


Route::get('regioes', 'Regioes@pesquisaregioes')->name('regioes');


});
