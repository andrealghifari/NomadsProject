<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    // use HasFactory;
    protected $table = 'transactions_details';
    use SoftDeletes;
    protected $fillable = [
        'transactions_id', 'username', 'nationality', 'is_visa',
        'doe_passport'
    ];
    protected $hidden = [];


    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }
}
