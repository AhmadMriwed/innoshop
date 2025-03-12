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
use InnoShop\Common\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $items = $this->getBrands();
        if ($items) {
            Brand::query()->truncate();
            foreach ($items as $item) {
                Brand::query()->create($item);
            }
        }
    }

    private function getBrands(): array
    {
        return [
            [
                'name'     => 'Optimum Nutrition',
                'slug'     => 'optimum-nutrition',
                'first'    => 'O',
                'logo'     => 'images/brands/optimum-nutrition.png',
                'position' => 0,
                'active'   => true,
            ],
            [
                'name'     => 'MuscleTech',
                'slug'     => 'muscletech',
                'first'    => 'M',
                'logo'     => 'images/brands/muscletech.png',
                'position' => 1,
                'active'   => true,
            ],
            [
                'name'     => 'Dymatize',
                'slug'     => 'dymatize',
                'first'    => 'D',
                'logo'     => 'images/brands/dymatize.png',
                'position' => 2,
                'active'   => true,
            ],
            [
                'name'     => 'BSN',
                'slug'     => 'bsn',
                'first'    => 'B',
                'logo'     => 'images/brands/bsn.png',
                'position' => 3,
                'active'   => true,
            ],
            [
                'name'     => 'MyProtein',
                'slug'     => 'myprotein',
                'first'    => 'M',
                'logo'     => 'images/brands/myprotein.png',
                'position' => 4,
                'active'   => true,
            ],
        ];
    }
}