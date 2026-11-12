<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certificate extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'report_number',
        'public_id',
        'identification',
        'shape',
        'weight',
        'dimensions',
        'color',
        'clarity',
        'refractive_index',
        'hardness',
        'treatment',
        'species',
        'variety',
        'origin',
        'comments',
        'gemstone_photo',
        'issue_date',
        'is_published',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'weight' => 'decimal:3',
            'issue_date' => 'date',
            'is_published' => 'boolean',
        ];
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
