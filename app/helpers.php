<?php
function attachments_path($path = ''){
    return public_path('files'.($path ? DIRECTORY_SEPARATOR.$path : $path));
}

//helper class 구현이후 composer.json에 등록한다.
//autoload 항목에 추가
if(!function_exists('markdown')){
    function markdown($text = null){
        return app(Parsedown::class)->text($text);
    }
}
