<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property ?int $id
 * @property ?string $username
 * @property ?string $first_name
 * @property ?string $last_name
 */
class ExampleDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'full_name' => $this->first_name.' '.$this->last_name,
        ];
    }
}
