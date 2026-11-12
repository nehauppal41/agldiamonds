<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Diamond extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'report_number',
        'public_id',
        'diamond_type',
        'identification',
        'jewellery_type',
        'metal',
        'description',
        'total_weight',
        'total_carat_weight',
        'center_diamond_weight',
        'diamond_shape',
        'color_grade',
        'clarity_grade',
        'cut_grade',
        'measurements',
        'polish',
        'symmetry',
        'fluorescence',
        'comments',
        'diamond_photo',
        'issue_date',
        'is_published',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'total_weight' => 'decimal:3',
            'total_carat_weight' => 'decimal:3',
            'center_diamond_weight' => 'decimal:3',
            'issue_date' => 'date',
            'is_published' => 'boolean',
        ];
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
