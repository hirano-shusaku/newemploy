<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable; // 追加
use Carbon\Carbon;

class Employe extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Sortable;
    

    protected $guarded = [
        'id'
    ];

    protected $dates = [
        'firstDay',
        'startDay',
        'endDay'
        
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
