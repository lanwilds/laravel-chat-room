<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Message extends Model
{
    protected $primaryKey='mid';
    protected $fillable=[
    	'message',
    	'user_id',
    ];
    public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
}
