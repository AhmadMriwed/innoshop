<?php
/**
 * Copyright (c) Since 2024 Fit Boost - All Rights Reserved
 *
 * @link       https://www.fitboost.com
 * @author     Fit Boost <team@fitboost.com>
 * @license    https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use InnoShop\Common\Models\Customer\Group as CustomerGroup;

class CustomerGroupSeeder extends Seeder
{
    public function run(): void
    {
        $items = $this->getCustomerGroups();
        if ($items) {
            CustomerGroup::query()->truncate();
            CustomerGroup\Translation::query()->truncate();
            foreach ($items as $item) {
                $translations  = array_pop($item);
                $customerGroup = CustomerGroup::query()->create($item);
                $customerGroup->translations()->createMany($translations);
            }
        }
    }

    private function getCustomerGroups(): array
    {
        return [
            [
                'level'         => 1,
                'mini_cost'     => 0,
                'discount_rate' => 100,
                'translations'  => [
                    ['locale' => 'ar', 'name' => 'عادي', 'description' => 'مجموعة العملاء العادية'],
                    ['locale' => 'en', 'name' => 'Regular', 'description' => 'Regular customer group'],
                ],
            ],
            [
                'level'         => 2,
                'mini_cost'     => 1000,
                'discount_rate' => 95,
                'translations'  => [
                    ['locale' => 'ar', 'name' => 'VIP', 'description' => 'مجموعة العملاء VIP'],
                    ['locale' => 'en', 'name' => 'VIP', 'description' => 'VIP customer group'],
                ],
            ],
            [
                'level'         => 3,
                'mini_cost'     => 5000,
                'discount_rate' => 90,
                'translations'  => [
                    ['locale' => 'ar', 'name' => 'مميز', 'description' => 'مجموعة العملاء المميزة'],
                    ['locale' => 'en', 'name' => 'Premium', 'description' => 'Premium customer group'],
                ],
            ],
        ];
    }
}