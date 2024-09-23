<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdeaCreator extends Model
{
    use HasFactory;
    protected $fillable = [
        'idea_creator_id',
        'project_name',
        'description',
        'target_audience',
        'project_status',
        'user_expectations',
        'proposal',
        'comments',
    ];

    public function ideaCreator()
    {
        return $this->belongsTo(IdeaCreator::class);
    }
}
