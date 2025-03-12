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
use InnoShop\Common\Models\TaxClass;
use InnoShop\Common\Models\TaxRate;

class TaxSeeder extends Seeder
{
    public function run(): void
    {
        $items = $this->getTaxRates();
        if ($items) {
            TaxRate::query()->truncate();
            foreach ($items as $item) {
                TaxRate::query()->create($item);
            }
        }

        $items = $this->getTaxClasses();
        if ($items) {
            TaxClass::query()->truncate();
            foreach ($items as $item) {
                TaxClass::query()->create($item);
            }
        }
    }

    /**
     * @return array[]
     */
    private function getTaxRates(): array
    {
        return [
            [
                'id'        => 1,
                'region_id' => 1, // المنطقة الافتراضية (دمشق)
                'name'      => 'ضريبة ثابتة',
                'type'      => 'fixed',
                'rate'      => 5, // 5 دولارات كضريبة ثابتة
            ],
            [
                'id'        => 2,
                'region_id' => 1, // المنطقة الافتراضية (دمشق)
                'name'      => 'ضريبة النسبة المئوية',
                'type'      => 'percent',
                'rate'      => 10, // 10% كضريبة نسبة مئوية
            ],
        ];
    }

    /**
     * @return array[]
     */
    private function getTaxClasses(): array
    {
        return [
            [
                'id'          => 1,
                'name'        => 'مكملات غذائية',
                'description' => 'فئة ضريبية للمكملات الغذائية',
            ],
            [
                'id'          => 2,
                'name'        => 'فيتامينات',
                'description' => 'فئة ضريبية للفيتامينات',
            ],
            [
                'id'          => 3,
                'name'        => 'بروتين',
                'description' => 'فئة ضريبية للبروتين',
            ],
        ];
    }
}