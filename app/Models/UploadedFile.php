<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UploadedFile extends Model
{
    
    protected $fillable = [
        'filename', 'filepath', 'filetype', 'user_id', 'username', 'role'
    ];
    
    public function user()
{
    return $this->belongsTo(User::class);
}


}

    