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
use InnoShop\Common\Models\Product;
use InnoShop\Common\Repositories\ProductRepo;

class ProductSeeder extends Seeder
{
    /**
     * @throws \Exception|\Throwable
     */
    public function run(): void
    {
        $items = $this->getProducts();
        if ($items) {
            Product::query()->truncate();
            Product\Translation::query()->truncate();
            Product\Image::query()->truncate();
            Product\Category::query()->truncate();
            Product\Sku::query()->truncate();
            foreach ($items as $item) {
                ProductRepo::getInstance()->create($item);
            }
        }
    }

    private function getProducts(): array
    {
        return [
            [
                'brand_id'     => 1, // افترض أن العلامة التجارية 1 هي Optimum Nutrition
                'spu_code'     => 'whey-protein',
                'slug'         => 'whey-protein',
                'translations' => [
                    [
                        'locale' => 'ar',
                        'name'   => 'بروتين مصل اللبن',
                    ],
                    [
                        'locale' => 'en',
                        'name'   => 'Whey Protein',
                    ],
                ],
                'skus' => [
                    [
                        'code'         => 'WP001',
                        'image'        => 'images/demo/product/whey-protein.png',
                        'price'        => 50.00,
                        'origin_price' => 60.00,
                        'quantity'     => 100,
                        'is_default'   => true,
                    ],
                ],
                'categories' => [1,2], // افترض أن الفئة 1 هي "بروتين"
            ],
            [
                'brand_id'     => 2, // افترض أن العلامة التجارية 2 هي MuscleTech
                'spu_code'     => 'mass-gainer',
                'slug'         => 'mass-gainer',
                'translations' => [
                    [
                        'locale' => 'ar',
                        'name'   => 'مكمل زيادة الكتلة',
                    ],
                    [
                        'locale' => 'en',
                        'name'   => 'Mass Gainer',
                    ],
                ],
                'skus' => [
                    [
                        'code'         => 'MG001',
                        'image'        => 'images/demo/product/mass-gainer.png',
                        'price'        => 70.00,
                        'origin_price' => 80.00,
                        'quantity'     => 80,
                    ],
                ],
                'categories' => [1,3], // افترض أن الفئة 2 هي "زيادة الكتلة"
            ],
            [
                'brand_id'     => 3, // افترض أن العلامة التجارية 3 هي Dymatize
                'spu_code'     => 'bcaa',
                'slug'         => 'bcaa',
                'translations' => [
                    [
                        'locale' => 'ar',
                        'name'   => 'أحماض أمينية متفرعة السلسلة',
                    ],
                    [
                        'locale' => 'en',
                        'name'   => 'BCAA',
                    ],
                ],
                'skus' => [
                    [
                        'code'         => 'BCAA001',
                        'image'        => 'images/demo/product/bcaa.png',
                        'price'        => 30.00,
                        'origin_price' => 35.00,
                        'quantity'     => 120,
                    ],
                ],
                'categories' => [1,4], // افترض أن الفئة 3 هي "أحماض أمينية"
            ],
            [
                'brand_id'     => 4, // افترض أن العلامة التجارية 4 هي BSN
                'spu_code'     => 'pre-workout',
                'slug'         => 'pre-workout',
                'translations' => [
                    [
                        'locale' => 'ar',
                        'name'   => 'مكمل ما قبل التمرين',
                    ],
                    [
                        'locale' => 'en',
                        'name'   => 'Pre-Workout',
                    ],
                ],
                'skus' => [
                    [
                        'code'         => 'PW001',
                        'image'        => 'images/demo/product/pre-workout.png',
                        'price'        => 40.00,
                        'origin_price' => 45.00,
                        'quantity'     => 90,
                    ],
                ],
                'categories' => [1,5], // افترض أن الفئة 4 هي "ما قبل التمرين"
            ],
            [
                'brand_id'     => 5, // افترض أن العلامة التجارية 5 هي MyProtein
                'spu_code'     => 'vitamin-d',
                'slug'         => 'vitamin-d',
                'translations' => [
                    [
                        'locale' => 'ar',
                        'name'   => 'فيتامين د',
                    ],
                    [
                        'locale' => 'en',
                        'name'   => 'Vitamin D',
                    ],
                ],
                'skus' => [
                    [
                        'code'         => 'VD001',
                        'image'        => 'images/demo/product/vitamin-d.png',
                        'price'        => 20.00,
                        'origin_price' => 25.00,
                        'quantity'     => 150,
                    ],
                ],
                'categories' => [1,6], // افترض أن الفئة 5 هي "فيتامينات"
            ],
        ];
    }
}