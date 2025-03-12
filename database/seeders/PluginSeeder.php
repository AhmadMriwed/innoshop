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
use InnoShop\Common\Repositories\SettingRepo;
use InnoShop\Plugin\Models\Plugin;
use Throwable;

class PluginSeeder extends Seeder
{
    /**
     * @return void
     * @throws Throwable
     */
    public function run(): void
    {
        $items = $this->getItems();
        if ($items) {
            Plugin::query()->truncate();
            foreach ($items as $item) {
                Plugin::query()->create($item);
            }
        }

        $settings = $this->getSettings();
        if ($settings) {
            foreach ($settings as $setting) {
                $space = $setting['space'] ?? 'system';
                SettingRepo::getInstance()->updatePluginValue($space, $setting['name'], $setting['value']);
            }
        }
    }

    /**
     * @return array
     */
    private function getItems(): array
    {
        return [
            ['type' => 'shipping', 'code' => 'fixed_shipping', 'priority' => 0],
            ['type' => 'billing', 'code' => 'bank_transfer', 'priority' => 0],
            ['type' => 'billing', 'code' => 'cach', 'priority' => 0],
            ['type' => 'discount', 'code' => 'loyalty_discount', 'priority' => 1], // إضافة جديدة
        ];
    }

    /**
     * @return array
     */
    private function getSettings(): array
    {
        return [
            // إعدادات الشحن
            ['space' => 'fixed_shipping', 'name' => 'active', 'value' => '1'],
            ['space' => 'fixed_shipping', 'name' => 'type', 'value' => 'fixed'],
            ['space' => 'fixed_shipping', 'name' => 'value', 'value' => '5'], // تكلفة الشحن الثابتة (5 دولارات)
            ['space' => 'fixed_shipping', 'name' => 'free_shipping_threshold', 'value' => '100'], // شحن مجاني للطلبات فوق 100 دولار

            // إعدادات التحويل البنكي
            ['space' => 'bank_transfer', 'name' => 'active', 'value' => '0'],
            ['space' => 'bank_transfer', 'name' => 'bank_name', 'value' => 'البنك التجاري السوري'],
            ['space' => 'bank_transfer', 'name' => 'bank_account', 'value' => '1234567890'],
            ['space' => 'bank_transfer', 'name' => 'bank_username', 'value' => 'Fit Boost'],
            ['space' => 'bank_transfer', 'name' => 'bank_comment', 'value' => 'يرجى إضافة رقم الطلب في وصف التحويل'],
            ['space' => 'bank_transfer', 'name' => 'available', 'value' => ['pc_web', 'mobile_web']],

     // إعدادات التحويل البنكي
     ['space' => 'bank_transfer', 'name' => 'active', 'value' => '1'],
     ['space' => 'bank_transfer', 'name' => 'bank_name', 'value' => 'Payment Cach (حوالة \ نقدي)'],
     ['space' => 'bank_transfer', 'name' => 'bank_account', 'value' => '(دمشق) (صفوان احمد المحمود) (+963 930 021 883)'],
     ['space' => 'bank_transfer', 'name' => 'bank_username', 'value' => 'Fit Boost'],
     ['space' => 'bank_transfer', 'name' => 'bank_comment', 'value' => 'الدفع عند الاستلام أو عن طريق حوالة'],
     ['space' => 'bank_transfer', 'name' => 'available', 'value' => ['pc_web', 'mobile_web']],

            // إعدادات خصم الولاء (إضافة جديدة)
            ['space' => 'loyalty_discount', 'name' => 'active', 'value' => '1'],
            ['space' => 'loyalty_discount', 'name' => 'discount_rate', 'value' => '10'], // خصم 10% للعملاء المخلصين
            ['space' => 'loyalty_discount', 'name' => 'min_purchases', 'value' => '5'], // الحد الأدنى للطلبات المؤهلة
        ];
    }
}