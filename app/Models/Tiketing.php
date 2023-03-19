<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mail;
use App\Mail\TiketingMail;

class Tiketing extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "tiketing";
    protected $primaryKey = "id";
    protected $fillable = [
        'nik',
        'nama',
        'dep',
        'subDep',
        'ext',
        'category_id',
        'catatan',
        'tgl_pengajuan',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public static function boot()
    {
        parent::boot();

        static::created(function ($item) {

            $adminEmail = "17rome01@gmail.com";
            Mail::to($adminEmail)->send(new TiketingMail($item));
        });
    }
}
