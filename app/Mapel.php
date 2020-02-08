<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['kode','nama','semester','agama','alamat','avatar','user_id'];

    public function siswa(){
    	return $this->belongsToMany(Siswa::class)->withPivot(['nilai']);
    }
}
