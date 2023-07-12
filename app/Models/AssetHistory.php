<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssetHistory extends Model
{
    use HasFactory;
    protected $fillable = ['serialNumber','description'];

    //Relationship to Assets
    public function assets() {
       return $this->belongsTo(Assets::class, 'assets_id');
   }
}
