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
use InnoShop\Common\Models\Category;
use InnoShop\Common\Repositories\CategoryRepo;
use Throwable;

class CategorySeeder extends Seeder
{
    /**
     * @throws Throwable
     */
    public function run(): void
    {
        $items = $this->getCategories();
        if ($items) {
            Category::query()->truncate();
            foreach ($items as $item) {
                CategoryRepo::getInstance()->create($item);
            }
        }
    }

    /**
     * @return array[]
     */
    private function getCategories(): array
    {
        return [
            [ 'slug'         => 'all',
            'position'     => 0,
            'active'       => 1,
            'translations' => [
                [
                    'locale'  => 'ar',
                    'name'    => 'الكل',
                    'content' => 'جميع المنتجات',
                ],
                [
                    'locale'  => 'en',
                    'name'    => 'All',
                    'content' => 'All Products',
                ],
            ],],
        
            [
             
                'slug'         => 'protein',
                'position'     => 1,
                'active'       => 1,
                'translations' => [
                    [
                        'locale'  => 'ar',
                        'name'    => 'البروتين',
                        'content' => 'مكملات البروتين لدعم بناء العضلات',
                    ],
                    [
                        'locale'  => 'en',
                        'name'    => 'Protein',
                        'content' => 'Protein supplements to support muscle building',
                    ],
                ],
                'children' => [
                    [
                        'slug'         => 'whey-protein',
                        'position'     => 1,
                        'active'       => 1,
                        'translations' => [
                            [
                                'locale'  => 'ar',
                                'name'    => 'بروتين مصل اللبن',
                                'content' => 'بروتين مصل اللبن عالي الجودة',
                            ],
                            [
                                'locale'  => 'en',
                                'name'    => 'Whey Protein',
                                'content' => 'High-quality whey protein',
                            ],
                        ],
                    ],
                    [
                        'slug'         => 'plant-protein',
                        'position'     => 2,
                        'active'       => 1,
                        'translations' => [
                            [
                                'locale'  => 'ar',
                                'name'    => 'بروتين نباتي',
                                'content' => 'بروتين نباتي مناسب للنباتيين',
                            ],
                            [
                                'locale'  => 'en',
                                'name'    => 'Plant Protein',
                                'content' => 'Plant-based protein suitable for vegans',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'slug'         => 'vitamins',
                'position'     => 2,
                'active'       => 1,
                'translations' => [
                    [
                        'locale'  => 'ar',
                        'name'    => 'الفيتامينات',
                        'content' => 'مكملات الفيتامينات لدعم الصحة العامة',
                    ],
                    [
                        'locale'  => 'en',
                        'name'    => 'Vitamins',
                        'content' => 'Vitamin supplements to support overall health',
                    ],
                ],
                'children' => [
                    [
                        'slug'         => 'multivitamins',
                        'position'     => 1,
                        'active'       => 1,
                        'translations' => [
                            [
                                'locale'  => 'ar',
                                'name'    => 'فيتامينات متعددة',
                                'content' => 'فيتامينات متعددة لتلبية الاحتياجات اليومية',
                            ],
                            [
                                'locale'  => 'en',
                                'name'    => 'Multivitamins',
                                'content' => 'Multivitamins to meet daily needs',
                            ],
                        ],
                    ],
                    [
                        'slug'         => 'vitamin-d',
                        'position'     => 2,
                        'active'       => 1,
                        'translations' => [
                            [
                                'locale'  => 'ar',
                                'name'    => 'فيتامين د',
                                'content' => 'مكملات فيتامين د لدعم صحة العظام',
                            ],
                            [
                                'locale'  => 'en',
                                'name'    => 'Vitamin D',
                                'content' => 'Vitamin D supplements to support bone health',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'slug'         => 'amino-acids',
                'position'     => 3,
                'active'       => 1,
                'translations' => [
                    [
                        'locale'  => 'ar',
                        'name'    => 'الأحماض الأمينية',
                        'content' => 'مكملات الأحماض الأمينية لدعم الأداء الرياضي',
                    ],
                    [
                        'locale'  => 'en',
                        'name'    => 'Amino Acids',
                        'content' => 'Amino acid supplements to support athletic performance',
                    ],
                ],
                'children' => [
                    [
                        'slug'         => 'bcaa',
                        'position'     => 1,
                        'active'       => 1,
                        'translations' => [
                            [
                                'locale'  => 'ar',
                                'name'    => 'BCAA',
                                'content' => 'مكملات BCAA لدعم بناء العضلات',
                            ],
                            [
                                'locale'  => 'en',
                                'name'    => 'BCAA',
                                'content' => 'BCAA supplements to support muscle building',
                            ],
                        ],
                    ],
                    [
                        'slug'         => 'glutamine',
                        'position'     => 2,
                        'active'       => 1,
                        'translations' => [
                            [
                                'locale'  => 'ar',
                                'name'    => 'جلوتامين',
                                'content' => 'مكملات الجلوتامين لدعم التعافي',
                            ],
                            [
                                'locale'  => 'en',
                                'name'    => 'Glutamine',
                                'content' => 'Glutamine supplements to support recovery',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'slug'         => 'pre-workout',
                'position'     => 4,
                'active'       => 1,
                'translations' => [
                    [
                        'locale'  => 'ar',
                        'name'    => 'ما قبل التمرين',
                        'content' => 'مكملات ما قبل التمرين لتعزيز الأداء',
                    ],
                    [
                        'locale'  => 'en',
                        'name'    => 'Pre-Workout',
                        'content' => 'Pre-workout supplements to enhance performance',
                    ],
                ],
                'children' => [
                    [
                        'slug'         => 'energy-boosters',
                        'position'     => 1,
                        'active'       => 1,
                        'translations' => [
                            [
                                'locale'  => 'ar',
                                'name'    => 'معززات الطاقة',
                                'content' => 'مكملات لتعزيز الطاقة قبل التمرين',
                            ],
                            [
                                'locale'  => 'en',
                                'name'    => 'Energy Boosters',
                                'content' => 'Supplements to boost energy before workouts',
                            ],
                        ],
                    ],
                    [
                        'slug'         => 'pump-enhancers',
                        'position'     => 2,
                        'active'       => 1,
                        'translations' => [
                            [
                                'locale'  => 'ar',
                                'name'    => 'معززات الضخ',
                                'content' => 'مكملات لتعزيز ضخ الدم أثناء التمرين',
                            ],
                            [
                                'locale'  => 'en',
                                'name'    => 'Pump Enhancers',
                                'content' => 'Supplements to enhance blood pump during workouts',
                            ],
                        ],
                    ],
                ],
            ],
           
            [
                'slug'         => 'post-workout',
                'position'     => 5,
                'active'       => 1,
                'translations' => [
                    [
                        'locale'  => 'ar',
                        'name'    => 'ما بعد التمرين',
                        'content' => 'مكملات ما بعد التمرين للتعافي',
                    ],
                    [
                        'locale'  => 'en',
                        'name'    => 'Post-Workout',
                        'content' => 'Post-workout supplements for recovery',
                    ],
                ],
                'children' => [
                    [
                        'slug'         => 'recovery-drinks',
                        'position'     => 1,
                        'active'       => 1,
                        'translations' => [
                            [
                                'locale'  => 'ar',
                                'name'    => 'مشروبات التعافي',
                                'content' => 'مشروبات لتعافي العضلات بعد التمرين',
                            ],
                            [
                                'locale'  => 'en',
                                'name'    => 'Recovery Drinks',
                                'content' => 'Drinks for muscle recovery after workouts',
                            ],
                        ],
                    ],
                    [
                        'slug'         => 'protein-shakes',
                        'position'     => 2,
                        'active'       => 1,
                        'translations' => [
                            [
                                'locale'  => 'ar',
                                'name'    => 'مخفوقات البروتين',
                                'content' => 'مخفوقات البروتين لدعم التعافي',
                            ],
                            [
                                'locale'  => 'en',
                                'name'    => 'Protein Shakes',
                                'content' => 'Protein shakes to support recovery',
                            ],
                        ],
                    ],
                ],
            ],
         
        
        ];
    }
}