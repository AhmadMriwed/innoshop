<?php
/**
 * Copyright (c) Since 2024 InnoShop - All Rights Reserved
 *
 * @link       https://www.innoshop.com
 * @author     InnoShop <team@innoshop.com>
 * @license    https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use InnoShop\Common\Models\Admin;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $items = $this->getAdmins();
        if ($items) {
            Admin::query()->truncate();
            foreach ($items as $item) {
                Admin::query()->create($item);
            }
        }
    }

    /**
     * @return array[]
     */
    private function getAdmins(): array
    {
        $password = Hash::make('12345678');
      
        return [
            [
                'name'     => 'admin',
                'email' => 'admin@gmail.com',
                'password' =>$password,//'$2y$10$tsjDyAkcFU0qWuJpo3pAae/6PwtQi/AhSR4giHqmjehTJb4B0W0fi',
                'active'   => true,
                'locale'   => 'en',
            ],
        ];
    }
}
