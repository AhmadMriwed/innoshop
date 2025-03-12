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
use InnoShop\Common\Models\Setting;
use InnoShop\Common\Repositories\SettingRepo;
use Throwable;

class SettingSeeder extends Seeder
{
    /**
     * @return void
     * @throws Throwable
     */
    public function run(): void
    {
        $items = $this->getSettings();
        if ($items) {
            Setting::query()->truncate();
            foreach ($items as $item) {
                SettingRepo::getInstance()->updateSystemValue($item['name'], $item['value']);
            }
        }
    }

    /**
     * @return array[]
     */
    private function getSettings(): array
    {
        return [
            ['space' => 'system', 'name' => 'front_logo', 'value' => 'images/logo.png'],
            ['space' => 'system', 'name' => 'panel_logo', 'value' => 'images/logo-panel.svg'],
            ['space' => 'system', 'name' => 'placeholder', 'value' => 'images/placeholder.png'],
            ['space' => 'system', 'name' => 'favicon', 'value' => 'images/favicon.png'],
            ['space' => 'system', 'name' => 'country_code', 'value' => 'SY'], // سوريا
            ['space' => 'system', 'name' => 'state_code', 'value' => 'DI'], // دمشق
            ['space' => 'system', 'name' => 'front_locale', 'value' => 'ar'], // اللغة العربية كلغة افتراضية
            ['space' => 'system', 'name' => 'expand', 'value' => '0'],
            ['space' => 'system', 'name' => 'address', 'value' => 'دمشق، سوريا'],
            ['space' => 'system', 'name' => 'telephone', 'value' => '+963 930 021 883'], // رقم هاتف سوري
            ['space' => 'system', 'name' => 'email', 'value' => 'info@fitboost.hivetech.space'],
            ['space' => 'system', 'name' => 'currency', 'value' => 'usd'], // العملة الأساسية هي الدولار
            ['space' => 'system', 'name' => 'menu_header_categories', 'value' =>[ '2', '5', '8']],// [ '2', '5', '8','11', '14','']],
            ['space' => 'system', 'name' => 'menu_header_pages', 'value' => ['3']],
            ['space' => 'system', 'name' => 'menu_footer_categories', 'value' => ['1','2', '5', '8']],
            ['space' => 'system', 'name' => 'menu_footer_catalogs', 'value' => ['1', '2']],
            ['space' => 'system', 'name' => 'menu_footer_pages', 'value' => ['1', '2', '3']],
            [
                'space' => 'system',
                'name'  => 'meta_title',
                'value' => [
                    'ar' => 'Fit Boost - نظام تجارة إلكترونية مبتكر للمكملات الغذائية',
                    'en' => 'Fit Boost - Innovative E-commerce System for Dietary Supplements',
                ],
            ],
            [
                'space' => 'system',
                'name'  => 'meta_keywords',
                'value' => [
                    'ar' => 'Fit Boost, مكملات غذائية, تجارة إلكترونية, صحة, لياقة',
                    'en' => 'Fit Boost, Dietary Supplements, E-commerce, Health, Fitness',
                ],
            ],
            [
                'space' => 'system',
                'name'  => 'meta_description',
                'value' => [
                    'ar' => 'Fit Boost هو نظام تجارة إلكترونية مبتكر متخصص في المكملات الغذائية. نوفر لك أفضل المنتجات لدعم صحتك ولياقتك البدنية.',
                    'en' => 'Fit Boost is an innovative e-commerce system specializing in dietary supplements. We provide you with the best products to support your health and fitness.',
                ],
            ],
            [
                'space' => 'system',
                'name'  => 'slideshow',
                'value' => [
                    [
                        'image' => [
                            'ar' => 'images/demo/banner/protin2-banner.jpg',
                            'en' => 'images/demo/banner/protin2-banner.jpg',
                        ],
                        'link' => '/ar/category-protein',
                    ],
                    [
                        'image' => [
                            'ar' => 'images/demo/banner/protin-banner.jpg',
                            'en' => 'images/demo/banner/protin-banner.jpg',
                        ],
                        'link' => '/ar/category-vitamins',
                    ],
                ],
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_seo_description',
                'value' => 'يرجى إنشاء وصف SEO مُحسّن للمقال بناءً على الكلمات المفتاحية.',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_seo_keywords',
                'value' => 'يرجى إنشاء كلمات مفتاحية مُحسّنة للمقال بناءً على الكلمات المفتاحية.',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_seo_title',
                'value' => 'يرجى إنشاء عنوان SEO فعال للمقال بناءً على الكلمات المفتاحية.',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_slug',
                'value' => 'يرجى إنشاء slug واضح ومختصر للمقال بناءً على الكلمات المفتاحية.',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_summary',
                'value' => 'يرجى كتابة ملخص مختصر وجذاب للمقال بناءً على الكلمات المفتاحية.',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_selling_point',
                'value' => 'يرجى إنشاء وصف مختصر وقوي لنقاط البيع الخاصة بالمنتج. يرجى التركيز على المزايا الأساسية والوظائف الفريدة للمنتج، وتوضيح كيفية تميزه عن المنتجات المنافسة. يجب أن يكون الوصف جذابًا ويوضح كيف يمكن للمنتج أن يحقق فوائد محددة أو يحل مشاكل العملاء.',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_seo_description',
                'value' => 'يرجى إنشاء وصف SEO مُحسّن للمنتج. يجب أن يحتوي الوصف على الكلمات المفتاحية الرئيسية، ويقدم نظرة عامة على المزايا الأساسية للمنتج، ويجذب العملاء المحتملين للنقر. يرجى التأكد من أن الوصف مختصر وجذاب، ويوصل قيمة المنتج بشكل واضح.',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_seo_keywords',
                'value' => 'يرجى إنشاء كلمات مفتاحية مُحسّنة للمنتج. يجب أن تحتوي على الكلمات المفتاحية الرئيسية، وتلخص المزايا الأساسية للمنتج، وتجذب العملاء المحتملين للنقر.',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_seo_title',
                'value' => 'يرجى إنشاء عنوان SEO فعال للمنتج. يجب أن يحتوي العنوان على الكلمات المفتاحية الرئيسية، ويجذب انتباه العملاء المحتملين. يرجى التأكد من أن العنوان مختصر ووصفي، ويبرز المزايا الأساسية للمنتج.',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_slug',
                'value' => 'يرجى إنشاء slug واضح ومختصر للمنتج. يجب أن يكون قصيرًا وسهل التذكر، ويحتوي على الكلمات المفتاحية الرئيسية لتسهيل تحسين محركات البحث (SEO).',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_summary',
                'value' => 'يرجى كتابة ملخص مختصر وجذاب للمنتج. يجب أن يبرز المزايا الأساسية والوظائف الفريدة للمنتج، ويجذب انتباه العملاء المحتملين.',
            ],
        ];
    }
}
