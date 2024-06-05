<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function purchasetickets()
    {
        return $this->hasMany(PurchaseTicket::class, 'member_id', 'id');
    }
    public function withdraws()
    {
        return $this->hasMany(Withdraw::class, 'member_id', 'id');
    }
}
