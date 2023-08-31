<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $guarded = [];
    protected $casts = [
      'created_at' => 'datetime:Y-m-d',
    ];

    /**
     * Retorna Relacionamento com post ao usuario.
     * @return BelongsTo
     */
    final public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
