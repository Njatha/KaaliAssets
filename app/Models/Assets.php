<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'serialNumber', 'assetNumber', 'description', 'manufacturer', 'assetType','location', 'colour','image','dateOfPurchase','estimatedValue', 'dateOfLastInspection','barCode','barCodeData','status'];
}
