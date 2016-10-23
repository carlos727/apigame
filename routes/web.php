<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//User
Route::get('/users', 'UserController@all');
Route::post('/user', 'UserController@store');

//Subject
Route::get('/subjects', 'SubjectController@all');
Route::get('/', 'SubjectController@show');
Route::post('/subject', 'SubjectController@store');
Route::delete('/subject/{id}', 'SubjectController@delete');
Route::put('/subject/{id}', 'SubjectController@update');

//Question
Route::get('/questions/all', 'QuestionController@all');
Route::get('/questions', 'QuestionController@show');
Route::post('/question', 'QuestionController@store');
Route::delete('/question/{id}', 'QuestionController@delete');
Route::put('/question/{id}', 'QuestionController@update');
Route::get('/questions/{subject}', 'QuestionController@questionsBySubject');

//Answer
Route::get('/answers', 'AnswerController@all');
Route::post('/answer', 'AnswerController@store');

//Ranking
Route::get('/rankings', 'RankingController@all');
Route::post('/ranking', 'RankingController@store');
Route::get('/ranking/global', 'RankingController@global');
Route::get('/ranking/{id}', 'RankingController@indiviual');