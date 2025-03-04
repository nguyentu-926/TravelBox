<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'num_people',
        'trip_date',
        'total_price',
        'payment_method',
    ];
}
