<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assets extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'serialNumber', 'assetNumber', 'description', 'manufacturer', 'assetType','location', 'colour','image','dateOfPurchase','estimatedValue', 'dateOfLastInspection','barCode','barCodeData','status'];

    //Relationship with Asset History
    public function assetHistory() {
       return $this->hasMany(AssetHistory::class, 'assets_id');

   }

//    protected $table = 'assets';
//    protected $primaryKey = 'assets_id';
//    public $incrementing = false;
//    protected $keyType = 'string';
}
