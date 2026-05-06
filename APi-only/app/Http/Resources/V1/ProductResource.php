<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
   // app/Http/Resources/V1/ProductResource.php
        public function toArray(Request $request): array
        {
            return [
                'id' => $this->id,
                'name' => $this->name,
                'price' => (float) $this->price,
                'stock' => $this->stock_count, // Rename DB column 'stock_count' to 'stock' for API
                'created_at' => $this->created_at->format('Y-m-d'),
            ];
        }
}
