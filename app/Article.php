<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function attachment(){
        return $this->hasMany(Attachment::class);
    }
}
