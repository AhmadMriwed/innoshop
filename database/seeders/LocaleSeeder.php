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
use InnoShop\Common\Models\Locale;

class LocaleSeeder extends Seeder
{
    public function run(): void
    {
        $items = $this->getLocales();
        if ($items) {
            Locale::query()->truncate();
            foreach ($items as $item) {
                Locale::query()->create($item);
            }
        }
    }

    private function getLocales(): array
    {
        return [
            [
                'name'     => 'العربية',
                'code'     => 'ar',
                'image'    => 'images/flag/ar.png',
                'position' => 0,
                'active'   => 1,
            ],
            [
                'name'     => 'English',
                'code'     => 'en',
                'image'    => 'images/flag/en.png',
                'position' => 1,
                'active'   => 1,
            ],
        ];
    }
}