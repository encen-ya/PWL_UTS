<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupplierModel extends Model
{
    use SoftDeletes;
    protected $table = 'm_supplier';
    protected $primaryKey = 'supplier_id';
    protected $guarded = [];

    public function stoks(): HasMany
    {
        return $this->hasMany(StokModel::class, 'supplier_id', 'supplier_id');
    }
}