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
use InnoShop\Common\Models\Country;
use InnoShop\Common\Models\State;
use InnoShop\Common\Models\Region;
use InnoShop\Common\Repositories\RegionRepo;

class RegionSeeder extends Seeder
{
    /**
     * @return void
     * @throws \Throwable
     */
    public function run(): void
    {
        $items = $this->getRegions();
        if ($items) {
            Region::query()->truncate();
            foreach ($items as $item) {
                RegionRepo::getInstance()->create($item);
            }
        }
    }

    /**
     * @return array
     */
    private function getRegions(): array
    {
        // الحصول على بيانات سوريا
        $country = Country::query()->where('code', 'SY')->first();
        $state   = State::query()->where('country_id', $country->id)->where('code', 'DI')->first(); // DI = دمشق

        return [
            [
                'name'          => 'SY-DI',
                'description'   => 'دمشق، سوريا',
                'position'      => 0,
                'active'        => true,
                'region_states' => [
                    [
                        'country_id' => $country->id,
                        'state_id'   => $state->id,
                    ],
                ],
            ],
        ];
    }
}