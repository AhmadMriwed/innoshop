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
use InnoShop\Common\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $items = $this->getArticles();
        if ($items) {
            Article::query()->truncate();
            foreach ($items as $item) {
                Article::query()->create($item);
            }
        }

        $items = $this->getArticleTranslations();
        if ($items) {
            Article\Translation::query()->truncate();
            foreach ($items as $item) {
                Article\Translation::query()->create($item);
            }
        }
    }

    /**
     * @return array[]
     */
    private function getArticles(): array
    {
        return [
            [
                'id'         => 1,
                'catalog_id' => 1,
                'slug'       => 'fitboost-top-supplements-for-performance',
                'position'   => 0,
                'viewed'     => 25,
                'author'     => 'Fit Boost',
                'active'     => 1,
            ],
            [
                'id'         => 2,
                'catalog_id' => 1,
                'slug'       => 'fitboost-ultimate-guide-to-nutrition',
                'position'   => 1,
                'viewed'     => 30,
                'author'     => 'Fit Boost',
                'active'     => 1,
            ],
     
            // [
            //     'id'         => 2,
            //     'catalog_id' => 1,
            //     'slug'       => null,
            //     'position'   => 0,
            //     'viewed'     => 18,
            //     'author'     => 'Fit Boost',
            //     'active'     => 1,
            // ],
        ];
    }

    /**
     * @return array[]
     */
    private function getArticleTranslations(): array
    {
        return [
            [
                'article_id'       => 1,
                'locale'           => 'en',
                'title'            => 'Top Supplements for Peak Performance',
                'summary'          => 'Fit Boost provides high-quality supplements to enhance your fitness journey.',
                // 'image'            => 'images/demo/news/1.jpg',
                'image'            => 'images/demo/product/whey-protein-group.png', 
                'content'          => 'Discover the best supplements for energy, endurance, and muscle recovery.',
                'meta_title'       => 'Fit Boost - Best Supplements',
                'meta_description' => 'Find the best supplements to boost your performance.',
                'meta_keywords'    => 'supplements, fitness, performance, nutrition',
            ],
            [
                'article_id'       => 1,
                'locale'           => 'ar',
                'title'            => 'أفضل المكملات لتعزيز الأداء الرياضي',
                'summary'          => 'يقدم Fit Boost مكملات غذائية عالية الجودة لتحسين رحلتك الرياضية.',
                // 'image'            => 'images/demo/news/1.jpg',
                'image'            => 'images/demo/product/whey-protein-group.png', 
                'content'          => 'اكتشف أفضل المكملات للطاقة والتحمل والتعافي العضلي.',
                'meta_title'       => 'Fit Boost - أفضل المكملات',
                'meta_description' => 'تعرف على أفضل المكملات لتعزيز أدائك الرياضي.',
                'meta_keywords'    => 'مكملات, لياقة, أداء, تغذية',
            ],
            [
                'article_id'       => 2,
                'locale'           => 'en',
                'title'            => 'The Ultimate Guide to Nutrition for Fitness',
                'summary'          => 'Learn everything about nutrition to maximize your fitness goals with Fit Boost.',
                'image'            => 'images/demo/product/nutrition-guide.png',
                'content'          => 'Explore the importance of balanced nutrition for boosting your performance and health.',
                'meta_title'       => 'Fit Boost - Ultimate Nutrition Guide',
                'meta_description' => 'Discover the essential nutrients that support your fitness goals.',
                'meta_keywords'    => 'nutrition, fitness, health, performance',
            ],
            [
                'article_id'       => 2,
                'locale'           => 'ar',
                'title'            => 'الدليل الشامل للتغذية من أجل اللياقة البدنية',
                'summary'          => 'تعرف على كل ما تحتاجه عن التغذية لتحقيق أهدافك الرياضية مع Fit Boost.',
                'image'            => 'images/demo/product/nutrition-guide.png',
                'content'          => 'استكشف أهمية التغذية المتوازنة لتعزيز أدائك وصحتك.',
                'meta_title'       => 'Fit Boost - دليل التغذية الشامل',
                'meta_description' => 'اكتشف العناصر الغذائية الأساسية التي تدعم أهدافك الرياضية.',
                'meta_keywords'    => 'تغذية, لياقة, صحة, أداء',
            ],
        ];
    }
}
