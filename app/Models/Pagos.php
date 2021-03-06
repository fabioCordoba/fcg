<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;

    protected $fillable = [
        'transactionState',
        'lapTransactionState',
        'referenceCode',
        'transactionId',
        'TX_VALUE',
        'buyerEmail',
        'processingDate',
        'lapResponseCode'
    ];
}
