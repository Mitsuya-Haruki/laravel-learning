<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use softDeletes;

    protected $fillable = [
        'title',
        'body',
    ];

    use HasFactory;

    public function getByLimit(int $limit_count = 10)
    {
        //updated_atで降順に並べてlimitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }

    public function getPaginateByLimit(int $limit_count = 10)
    {
        //updated_atで降順に並べた後、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
