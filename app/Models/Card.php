<?php

namespace App\Models;

use App\Enum\CardType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => CardType::class,
    ];

    public function scopeSet(Builder $builder, string $set): void
    {
        $builder->whereSet($set);
    }

    public function scopeType(Builder $builder, CardType $type): void
    {
        $builder->whereType($type);
    }

    public function scopeColor(Builder $builder, string $color): void
    {
        $builder->whereJsonContains('colors', $color);
    }

    public function scopeCost(Builder $builder, int $cost): void
    {
        $builder->where('cost', $cost);
    }

    public function scopePower(Builder $builder, int $power): void
    {
        $builder->where('power', $power);
    }

    public function scopeKeywords(Builder $builder, string|array $keywords): void
    {
        $builder->whereJsonContains('keywords', $keywords);
    }
}
