<?php

Route::get('demo', function() {
    echo 'Hello from the demo package!';
});
Route::get('dna',function(){
return view('dna::index');
});
