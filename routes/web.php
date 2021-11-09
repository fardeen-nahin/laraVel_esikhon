<?php

Route::group(['prefix' => 'math'], function(){

    Route::get('sum/{num1}/{num2}', 'mathController@sum');
    Route::get('sub', 'mathController@sub');
    Route::get('mul', 'mathController@mul');

});