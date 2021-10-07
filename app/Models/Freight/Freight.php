<?php

namespace App\Models\Freight;

use App\Traits\Uuids;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Freight extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Uuids;
    use Timestamp;

    protected $guarded = ['id'];
}
