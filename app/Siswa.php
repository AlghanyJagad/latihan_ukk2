<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $primaryKey = 'nis';
    protected $fillable = [
        'nis','user_id', 'nama', 'jns_kelamin', 'tempat_lahir', 'tgl_lahir', 'alamat', 'asal_sekolah', 'kelas', 'jurusan'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
