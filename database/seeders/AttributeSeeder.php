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
use InnoShop\Common\Models\Attribute;
use InnoShop\Common\Models\Attribute\Group as AttributeGroup;
use InnoShop\Common\Models\Attribute\Group\Translation as AttributeGroupTranslation;
use InnoShop\Common\Models\Attribute\Translation as AttributeTranslation;
use InnoShop\Common\Models\Attribute\Value as AttributeValue;
use InnoShop\Common\Models\Attribute\Value\Translation as AttributeValueTranslation;
use InnoShop\Common\Models\Product\Attribute as ProductAttribute;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttributeGroup::query()->truncate();
        AttributeGroupTranslation::query()->truncate();
        Attribute::query()->truncate();
        AttributeTranslation::query()->truncate();
        AttributeValue::query()->truncate();
        AttributeValueTranslation::query()->truncate();
        ProductAttribute::query()->truncate();

        // Attribute Group
        $attributeGroupsNumber = 4;
        for ($i = 1; $i <= $attributeGroupsNumber; $i++) {
            AttributeGroup::query()->create([
                'position' => $i,
            ]);
        }

        //  Attribute Group Translation
        $items = $this->getGroupTranslations();
        AttributeGroupTranslation::query()->insert(
            collect($items)->map(function ($item) {
                $item['created_at'] = now();
                $item['updated_at'] = now();

                return $item;
            })->toArray()
        );

        // Attributes
        $items = $this->getAttributes();
        Attribute::query()->insert(
            collect($items)->map(function ($item) {
                $item['created_at'] = now();
                $item['updated_at'] = now();

                return $item;
            })->toArray()
        );

        // Attribute Translations
        $items = $this->getAttributeTranslations();
        AttributeTranslation::query()->insert(
            collect($items)->map(function ($item) {
                $item['created_at'] = now();
                $item['updated_at'] = now();

                return $item;
            })->toArray()
        );

        // Attribute Values
        $items = $this->getAttributeValues();
        AttributeValue::query()->insert(
            collect($items)->map(function ($item) {
                $item['created_at'] = now();
                $item['updated_at'] = now();

                return $item;
            })->toArray()
        );

        // Attribute Value Translations
        $items = $this->getAttributeValueTranslations();
        AttributeValueTranslation::query()->insert(
            collect($items)->map(function ($item) {
                $item['created_at'] = now();
                $item['updated_at'] = now();

                return $item;
            })->toArray()
        );

        // Product Attribute Relations
        $items = $this->productAttributes();
        ProductAttribute::query()->insert(
            collect($items)->map(function ($item) {
                $item['created_at'] = now();
                $item['updated_at'] = now();

                return $item;
            })->toArray()
        );
    }

    private function getGroupTranslations(): array
    {
        return [
            ['attribute_group_id' => 1, 'locale' => 'ar', 'name' => 'عام'],
            ['attribute_group_id' => 1, 'locale' => 'en', 'name' => 'General'],
            ['attribute_group_id' => 2, 'locale' => 'ar', 'name' => 'الفيتامينات'],
            ['attribute_group_id' => 2, 'locale' => 'en', 'name' => 'Vitamins'],
            ['attribute_group_id' => 3, 'locale' => 'ar', 'name' => 'البروتينات'],
            ['attribute_group_id' => 3, 'locale' => 'en', 'name' => 'Proteins'],
            ['attribute_group_id' => 4, 'locale' => 'ar', 'name' => 'الأحماض الأمينية'],
            ['attribute_group_id' => 4, 'locale' => 'en', 'name' => 'Amino Acids'],
        ];
    }

    private function getAttributes(): array
    {
        return [
            ['attribute_group_id' => 1, 'category_id' => 1, 'position' => 0],
            ['attribute_group_id' => 1, 'category_id' => 1, 'position' => 0],
            ['attribute_group_id' => 2, 'category_id' => 1, 'position' => 0],
            ['attribute_group_id' => 3, 'category_id' => 1, 'position' => 0],
            ['attribute_group_id' => 4, 'category_id' => 1, 'position' => 0],
            ['attribute_group_id' => 4, 'category_id' => 1, 'position' => 0],
        ];
    }

    private function getAttributeTranslations(): array
    {
        return [
            ['attribute_id' => 1, 'locale' => 'ar', 'name' => 'الجرعة'],
            ['attribute_id' => 1, 'locale' => 'en', 'name' => 'Dosage'],
            ['attribute_id' => 2, 'locale' => 'ar', 'name' => 'الشكل'],
            ['attribute_id' => 2, 'locale' => 'en', 'name' => 'Form'],
            ['attribute_id' => 3, 'locale' => 'ar', 'name' => 'الفيتامينات المتعددة'],
            ['attribute_id' => 3, 'locale' => 'en', 'name' => 'Multivitamins'],
            ['attribute_id' => 4, 'locale' => 'ar', 'name' => 'بروتين مصل اللبن'],
            ['attribute_id' => 4, 'locale' => 'en', 'name' => 'Whey Protein'],
            ['attribute_id' => 5, 'locale' => 'ar', 'name' => 'BCAA'],
            ['attribute_id' => 5, 'locale' => 'en', 'name' => 'BCAA'],
            ['attribute_id' => 6, 'locale' => 'ar', 'name' => 'الجلوتامين'],
            ['attribute_id' => 6, 'locale' => 'en', 'name' => 'Glutamine'],
        ];
    }

    private function getAttributeValues(): array
    {
        return [
            ['attribute_id' => 1],
            ['attribute_id' => 1],
            ['attribute_id' => 2],
            ['attribute_id' => 2],
            ['attribute_id' => 3],
            ['attribute_id' => 3],
            ['attribute_id' => 4],
            ['attribute_id' => 4],
            ['attribute_id' => 5],
            ['attribute_id' => 5],
            ['attribute_id' => 6],
            ['attribute_id' => 6],
        ];
    }

    private function getAttributeValueTranslations(): array
    {
        return [
            ['attribute_value_id' => 1, 'locale' => 'ar', 'name' => '500 مجم'],
            ['attribute_value_id' => 1, 'locale' => 'en', 'name' => '500 mg'],
            ['attribute_value_id' => 2, 'locale' => 'ar', 'name' => '1000 مجم'],
            ['attribute_value_id' => 2, 'locale' => 'en', 'name' => '1000 mg'],
            ['attribute_value_id' => 3, 'locale' => 'ar', 'name' => 'أقراص'],
            ['attribute_value_id' => 3, 'locale' => 'en', 'name' => 'Tablets'],
            ['attribute_value_id' => 4, 'locale' => 'ar', 'name' => 'مسحوق'],
            ['attribute_value_id' => 4, 'locale' => 'en', 'name' => 'Powder'],
            ['attribute_value_id' => 5, 'locale' => 'ar', 'name' => 'فيتامينات A, C, D'],
            ['attribute_value_id' => 5, 'locale' => 'en', 'name' => 'Vitamins A, C, D'],
            ['attribute_value_id' => 6, 'locale' => 'ar', 'name' => 'فيتامينات B Complex'],
            ['attribute_value_id' => 6, 'locale' => 'en', 'name' => 'Vitamins B Complex'],
            ['attribute_value_id' => 7, 'locale' => 'ar', 'name' => 'بروتين مصل اللبن (25 جم)'],
            ['attribute_value_id' => 7, 'locale' => 'en', 'name' => 'Whey Protein (25g)'],
            ['attribute_value_id' => 8, 'locale' => 'ar', 'name' => 'بروتين مصل اللبن (50 جم)'],
            ['attribute_value_id' => 8, 'locale' => 'en', 'name' => 'Whey Protein (50g)'],
            ['attribute_value_id' => 9, 'locale' => 'ar', 'name' => 'BCAA 2:1:1'],
            ['attribute_value_id' => 9, 'locale' => 'en', 'name' => 'BCAA 2:1:1'],
            ['attribute_value_id' => 10, 'locale' => 'ar', 'name' => 'BCAA 4:1:1'],
            ['attribute_value_id' => 10, 'locale' => 'en', 'name' => 'BCAA 4:1:1'],
            ['attribute_value_id' => 11, 'locale' => 'ar', 'name' => 'جلوتامين 5 جم'],
            ['attribute_value_id' => 11, 'locale' => 'en', 'name' => 'Glutamine 5g'],
            ['attribute_value_id' => 12, 'locale' => 'ar', 'name' => 'جلوتامين 10 جم'],
            ['attribute_value_id' => 12, 'locale' => 'en', 'name' => 'Glutamine 10g'],
        ];
    }

    private function productAttributes(): array
    {
        return [
            ['product_id' => 1, 'attribute_id' => 1, 'attribute_value_id' => 1],
            ['product_id' => 1, 'attribute_id' => 2, 'attribute_value_id' => 3],
            ['product_id' => 1, 'attribute_id' => 3, 'attribute_value_id' => 5],
            ['product_id' => 2, 'attribute_id' => 1, 'attribute_value_id' => 2],
            ['product_id' => 2, 'attribute_id' => 2, 'attribute_value_id' => 4],
            ['product_id' => 2, 'attribute_id' => 4, 'attribute_value_id' => 7],
            ['product_id' => 3, 'attribute_id' => 1, 'attribute_value_id' => 1],
            ['product_id' => 3, 'attribute_id' => 2, 'attribute_value_id' => 3],
            ['product_id' => 3, 'attribute_id' => 5, 'attribute_value_id' => 9],
            ['product_id' => 4, 'attribute_id' => 1, 'attribute_value_id' => 2],
            ['product_id' => 4, 'attribute_id' => 2, 'attribute_value_id' => 4],
            ['product_id' => 4, 'attribute_id' => 6, 'attribute_value_id' => 11],
        ];
    }
}