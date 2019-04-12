<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountManager extends Model
{
    protected $table = 'account_managers';
    protected $fillable = ['customer_id', 'digital_number', 'amount'];
}
