<?php

namespace App\Http\Resources;

use App\Service\Product\Coupon\CartCouponService;
use App\Service\User\Cart\CartService;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'name' => $this->name,
            'surname' => $this->surname,
            'phone' => $this->phone,
            'email' => $this->email,
            'company_name' => $this->company_name,
        ];
    }

}
