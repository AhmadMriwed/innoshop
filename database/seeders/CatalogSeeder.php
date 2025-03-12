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
use InnoShop\Common\Models\Catalog;

class CatalogSeeder extends Seeder
{
    public function run(): void
    {
        $items = $this->getCatalogs();
        if ($items) {
            Catalog::query()->truncate();
            foreach ($items as $item) {
                Catalog::query()->create($item);
            }
        }

        $items = $this->getCatalogTranslations();
        if ($items) {
            Catalog\Translation::query()->truncate();
            foreach ($items as $item) {
                Catalog\Translation::query()->create($item);
            }
        }
    }

    /**
     * @return array[]
     */
    private function getCatalogs(): array
    {
        return [
            [
                'id'        => 1,
                'parent_id' => 0,
                'slug'      => 'nutrition',
                'position'  => 0,
                'active'    => 1,
            ],
            [
                'id'        => 2,
                'parent_id' => 0,
                'slug'      => 'fitness',
                'position'  => 1,
                'active'    => 1,
            ],
        ];
    }

    /**
     * @return array[]
     */
    private function getCatalogTranslations(): array
    {
        return [
            [
                'catalog_id'       => 1,
                'locale'           => 'ar',
                'title'            => 'التغذية',
                'summary'          => 'أحدث المعلومات حول التغذية والمكملات الغذائية',
                'meta_title'       => 'التغذية',
                'meta_description' => 'اكتشف أحدث المعلومات حول التغذية والمكملات الغذائية',
                'meta_keywords'    => 'تغذية, مكملات غذائية, فيتامينات',
            ],
            [
                'catalog_id'       => 1,
                'locale'           => 'en',
                'title'            => 'Nutrition',
                'summary'          => 'Latest information on nutrition and dietary supplements',
                'meta_title'       => 'Nutrition',
                'meta_description' => 'Discover the latest information on nutrition and dietary supplements',
                'meta_keywords'    => 'Nutrition, Supplements, Vitamins',
            ],
            [
                'catalog_id'       => 2,
                'locale'           => 'ar',
                'title'            => 'اللياقة البدنية',
                'summary'          => 'أخبار ونصائح حول اللياقة البدنية والتمارين',
                'meta_title'       => 'اللياقة البدنية',
                'meta_description' => 'اكتشف أحدث الأخبار والنصائح حول اللياقة البدنية والتمارين',
                'meta_keywords'    => 'لياقة بدنية, تمارين, صحة',
            ],
            [
                'catalog_id'       => 2,
                'locale'           => 'en',
                'title'            => 'Fitness',
                'summary'          => 'News and tips on fitness and exercises',
                'meta_title'       => 'Fitness',
                'meta_description' => 'Discover the latest news and tips on fitness and exercises',
                'meta_keywords'    => 'Fitness, Exercises, Health',
            ],
        ];
    }
}