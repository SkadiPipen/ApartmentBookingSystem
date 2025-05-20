<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tenant extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'check_in_date' => 'date',
        'check_out_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'check_in_date',
        'check_out_date',
        'created_at',
        'updated_at',
    ];

    /**
     * Get formatted check-in date
     */
    public function getFormattedCheckInAttribute()
    {
        return optional($this->check_in_date)->format('M d, Y');
    }

    /**
     * Get formatted check-out date
     */
    public function getFormattedCheckOutAttribute()
    {
        return optional($this->check_out_date)->format('M d, Y');
    }
}
