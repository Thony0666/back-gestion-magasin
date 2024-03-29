<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleWithCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image' => $this->imageUrl(),
            'name' => $this->name,
            'unit_price' => $this->unit_price,
            'quantity_stock' => $this->quantity_stock,
            'category' => new CategoryResource($this->category),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

