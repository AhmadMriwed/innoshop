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
use InnoShop\Common\Models\Currency;

class CurrencySeeder extends Seeder
{
    public function run(): void
    {
        $items = $this->getCurrencies();
        if ($items) {
            Currency::query()->truncate();
            foreach ($items as $item) {
                Currency::query()->create($item);
            }
        }
    }

    /**
     * @return array[]
     */
    private function getCurrencies(): array
    {
        return [
            [
                'name'          => 'US Dollar',
                'code'          => 'usd',
                'symbol_left'   => '$',
                'symbol_right'  => '',
                'decimal_place' => 2,
                'value'         => 1, // القيمة الأساسية (العملة الافتراضية)
                'active'        => 1,
            ],
            // [
            //     'name'          => 'Euro',
            //     'code'          => 'eur',
            //     'symbol_left'   => '€',
            //     'symbol_right'  => '',
            //     'decimal_place' => 2,
            //     'value'         => 0.92, // مثال: 1 USD = 0.92 EUR
            //     'active'        => 1,
            // ],
            // [
            //     'name'          => 'British Pound',
            //     'code'          => 'gbp',
            //     'symbol_left'   => '£',
            //     'symbol_right'  => '',
            //     'decimal_place' => 2,
            //     'value'         => 0.79, // مثال: 1 USD = 0.79 GBP
            //     'active'        => 1,
            // ],
            [
                'name'          => 'Syrian Bound',
                'code'          => 'syr',
                'symbol_left'   => 'ل.س',
                'symbol_right'  => '',
                'decimal_place' => 2,
                'value'         => 10000, // مثال: 1 USD = 3.75 SAR
                'active'        => 1,
            ]
            // [
            //     'name'          => 'Saudi Riyal',
            //     'code'          => 'sar',
            //     'symbol_left'   => 'ر.س',
            //     'symbol_right'  => '',
            //     'decimal_place' => 2,
            //     'value'         => 3.75, // مثال: 1 USD = 3.75 SAR
            //     'active'        => 1,
            // ]
            // [
            //     'name'          => 'United Arab Emirates Dirham',
            //     'code'          => 'aed',
            //     'symbol_left'   => 'د.إ',
            //     'symbol_right'  => '',
            //     'decimal_place' => 2,
            //     'value'         => 3.67, // مثال: 1 USD = 3.67 AED
            //     'active'        => 1,
            // ],
        ];
    }
}