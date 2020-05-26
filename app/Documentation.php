<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Documentation extends Model
{
    //
    public function get($file = 'documentation.md'){
        $content = File::get($this->path($file));
        //content의 link를 replace하게 해줌
        return $this->replaceLinks($content);
    }

    public function path($file){
        $file = ends_with($file,'.md')? $file:$file.'.md';
        $path = base_path('docs'. DIRECTORY_SEPARATOR . $file);
        if(!File::exists($path)){
            abort(404,'no file');
        }
        return $path;
    }
    protected function replaceLinks($content){
        return str_replace('/docs/{{version}}','/docs',$content);
    }
}
