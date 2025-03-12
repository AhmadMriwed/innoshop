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
use InnoShop\Common\Models\Tag;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $items = $this->getTags();
        if ($items) {
            Tag::query()->truncate();
            foreach ($items as $item) {
                Tag::query()->create($item);
            }
        }

        $items = $this->getTagTranslations();
        if ($items) {
            Tag\Translation::query()->truncate();
            foreach ($items as $item) {
                Tag\Translation::query()->create($item);
            }
        }
    }

    /**
     * @return array[]
     */
    private function getTags(): array
    {
        return [
            [
                'id'       => 1,
                'slug'     => 'protein',
                'position' => 1,
                'active'   => 1,
            ],
            [
                'id'       => 2,
                'slug'     => 'vitamins',
                'position' => 2,
                'active'   => 1,
            ],
            [
                'id'       => 3,
                'slug'     => 'fitness',
                'position' => 3,
                'active'   => 1,
            ],
            [
                'id'       => 4,
                'slug'     => 'health',
                'position' => 4,
                'active'   => 1,
            ],
        ];
    }

    /**
     * @return array[]
     */
    private function getTagTranslations(): array
    {
        return [
            [
                'tag_id' => 1,
                'locale' => 'ar',
                'name'   => 'بروتين',
            ],
            [
                'tag_id' => 1,
                'locale' => 'en',
                'name'   => 'Protein',
            ],
            [
                'tag_id' => 2,
                'locale' => 'ar',
                'name'   => 'فيتامينات',
            ],
            [
                'tag_id' => 2,
                'locale' => 'en',
                'name'   => 'Vitamins',
            ],
            [
                'tag_id' => 3,
                'locale' => 'ar',
                'name'   => 'لياقة بدنية',
            ],
            [
                'tag_id' => 3,
                'locale' => 'en',
                'name'   => 'Fitness',
            ],
            [
                'tag_id' => 4,
                'locale' => 'ar',
                'name'   => 'صحة',
            ],
            [
                'tag_id' => 4,
                'locale' => 'en',
                'name'   => 'Health',
            ],
        ];
    }
}