<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExampleData extends Model
{
    use HasFactory;

    /**
     * @return string[]
     */
    protected function visible(): array
    {
        return [
            'family_name',
            'given_name',
            'username',
        ];
    }

    protected $fillable = [];

    /**
     * @param  Builder<ExampleData>  $query
     */
    protected function scopeSearch(Builder $query, string $search): void
    {
        $terms = explode(' ', $search);
        foreach ($terms as $term) {
            $query->where(
                fn (Builder $query) => $query
                    ->where('username', 'LIKE', "%{$term}%")
                    ->orWhere('first_name', 'LIKE', "%{$term}%")
                    ->orWhere('last_name', 'LIKE', "%{$term}%")
            );
        }
    }
}
