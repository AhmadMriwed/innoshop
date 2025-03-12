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
use InnoShop\Common\Models\Page;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $items = $this->getPages();
        if ($items) {
            Page::query()->truncate();
            foreach ($items as $item) {
                Page::query()->create($item);
            }
        }

        $items = $this->getPageTranslations();
        if ($items) {
            Page\Translation::query()->truncate();
            foreach ($items as $item) {
                Page\Translation::query()->create($item);
            }
        }
    }

    /**
     * @return array[]
     */
    private function getPages(): array
    {
        return [
         
            [
                'id'     => 1,
                'slug'   => 'creations',
                'viewed' => 666,
                'active' => 1,
            ],
            [
                'id'     => 2,
                'slug'   => 'services',
                'viewed' => 888,
                'active' => 1,
            ],
            [
                'id'     => 3,
                'slug'   => 'about',
                'viewed' => 999,
                'active' => 1,
            ],
        ];
    }

    /**
     * @return array[]
     */
    private function getPageTranslations(): array
    {
      return [
        [
            'page_id'  => 1,
            'locale'   => 'ar',
            'title'    => 'المنتجات',
            'content'  => '',
            'template' => '<div class="page-product-content">
<div class="container">
  <div class="title-box">
    <div class="title">منتجاتنا</div>
    <div class="sub-title">Our Products</div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="product-item">
        <div class="top">
          <div class="left"><i class="bi bi-box-seam-fill"></i></div>
          <div class="name">بروتين مصل اللبن</div>
        </div>
        <div class="content">
          بروتين مصل اللبن هو مكمل غذائي عالي الجودة يساعد في بناء العضلات وتعزيز التعافي بعد التمرين. يحتوي على جميع الأحماض الأمينية الأساسية التي يحتاجها الجسم.
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-item">
        <div class="top">
          <div class="left"><i class="bi bi-box-seam-fill"></i></div>
          <div class="name">بروتين نباتي</div>
        </div>
        <div class="content">
          بروتين نباتي مناسب للنباتيين، مصنوع من مصادر نباتية مثل البازلاء والأرز البني. يوفر جميع الأحماض الأمينية الأساسية ويعتبر خيارًا صحيًا للرياضيين.
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-item">
        <div class="top">
          <div class="left"><i class="bi bi-capsule"></i></div>
          <div class="name">فيتامينات متعددة</div>
        </div>
        <div class="content">
          فيتامينات متعددة لتلبية الاحتياجات اليومية من الفيتامينات والمعادن. تساعد في تعزيز الصحة العامة ودعم الجهاز المناعي.
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-item">
        <div class="top">
          <div class="left"><i class="bi bi-capsule"></i></div>
          <div class="name">أحماض أمينية</div>
        </div>
        <div class="content">
          مكملات الأحماض الأمينية لدعم الأداء الرياضي وتعزيز بناء العضلات. تساعد في تحسين التعافي بعد التمرين.
        </div>
      </div>
    </div>
  </div>
</div>
</div>',
            'meta_title'       => 'المنتجات',
            'meta_description' => 'اكتشف مجموعة منتجاتنا من المكملات الغذائية عالية الجودة.',
            'meta_keywords'    => 'منتجات, مكملات غذائية, بروتين',
        ],
        [
            'page_id'  => 2,
            'locale'   => 'ar',
            'title'    => 'الخدمات',
            'content'  => '',
            'template' => "<div class=\"page-service-content\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-12 col-md-5\">
      <div class=\"service-icon\"><img src=\"{{ asset('images/front/service/bg-1.png') }}\" class=\"img-fluid\"></div>
    </div>
    <div class=\"col-12 col-md-7\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"title-box\">
            <div class=\"title\">خدماتنا</div>
            <div class=\"sub-title\">نقدم مجموعة واسعة من الخدمات لدعم عملائنا في تحقيق أهدافهم الصحية والرياضية. نلتزم بتقديم حلول مبتكرة وخدمات عالية الجودة.</div>
          </div>
        </div>
        <div class=\"col-12 col-md-6\">
          <div class=\"service-item\">
            <div class=\"icon\"><i class=\"bi bi-house-door-fill\"></i></div>
            <div class=\"title\">استشارات التغذية</div>
            <div class=\"sub-title\">نقدم استشارات تغذية مخصصة لمساعدتك في تحقيق أهدافك الصحية والرياضية.</div>
          </div>
        </div>
        <div class=\"col-12 col-md-6\">
          <div class=\"service-item\">
            <div class=\"icon\"><i class=\"bi bi-house-door-fill\"></i></div>
            <div class=\"title\">خطط التمرين</div>
            <div class=\"sub-title\">نصمم خطط تمارين مخصصة بناءً على أهدافك ومستوى لياقتك.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-12 col-md-1\"></div>
    <div class=\"col-12 col-md-11 service-row-2\">
      <div class=\"row\">
        <div class=\"col-12 col-md-4\">
          <div class=\"service-item\">
            <div class=\"icon\"><i class=\"bi bi-house-door-fill\"></i></div>
            <div class=\"title\">تحليل الجسم</div>
            <div class=\"sub-title\">نقدم خدمات تحليل الجسم لتقييم نسبة الدهون والعضلات والماء في الجسم.</div>
          </div>
        </div>
        <div class=\"col-12 col-md-4\">
          <div class=\"service-item\">
            <div class=\"icon\"><i class=\"bi bi-house-door-fill\"></i></div>
            <div class=\"title\">دعم العملاء</div>
            <div class=\"sub-title\">فريق دعم العملاء لدينا متاح دائمًا لمساعدتك في أي استفسارات أو مشاكل.</div>
          </div>
        </div>
        <div class=\"col-12 col-md-4\">
          <div class=\"service-item\">
            <div class=\"icon\"><i class=\"bi bi-house-door-fill\"></i></div>
            <div class=\"title\">التوصيل السريع</div>
            <div class=\"sub-title\">نوفر خدمة توصيل سريعة وموثوقة لضمان وصول منتجاتك في الوقت المحدد.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>",
            'meta_title'       => 'الخدمات',
            'meta_description' => 'اكتشف مجموعة خدماتنا المخصصة لدعم أهدافك الصحية والرياضية.',
            'meta_keywords'    => 'خدمات, تغذية, تمارين',
        ],
        [
            'page_id'  => 3,
            'locale'   => 'ar',
            'title'    => 'من نحن',
            'content'  => '',
            'template' => "<div class=\"page-about-content\">
<div class=\"container\">
<div class=\"row\">
  <div class=\"col-12 col-md-6\">
    <div class=\"about-img\">
      <img src=\"{{ asset('images/front/about/bg-2.png') }}\" class=\"img-fluid\">
    </div>
  </div>
  <div class=\"col-12 col-md-6\">
    <div class=\"about-text\">
      <div class=\"main-title\">نحن فريق من المحترفين الملتزمين بمساعدتك في تحقيق أهدافك الصحية والرياضية.</div>
      <div class=\"about-text-item\">
        <div class=\"left\"><i class=\"bi bi-check-circle\"></i></div>
        <div class=\"right\">
          <div class=\"title\">فريقنا</div>
          <div class=\"sub-title\">
            فريقنا يتكون من خبراء في التغذية واللياقة البدنية، ملتزمون بتقديم أفضل الحلول لعملائنا.
          </div>
        </div>
      </div>
      <div class=\"about-text-item\">
        <div class=\"left\"><i class=\"bi bi-check-circle\"></i></div>
        <div class=\"right\">
          <div class=\"title\">رسالتنا</div>
          <div class=\"sub-title\">
            نسعى لتعزيز الصحة واللياقة البدنية من خلال منتجات وخدمات عالية الجودة.
          </div>
        </div>
      </div>
      <div class=\"about-text-item\">
        <div class=\"left\"><i class=\"bi bi-check-circle\"></i></div>
        <div class=\"right\">
          <div class=\"title\">رؤيتنا</div>
          <div class=\"sub-title\">
            نهدف إلى أن نكون الوجهة الأولى لكل من يبحث عن تحسين صحته ولياقته البدنية.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>",
                'meta_title'       => 'من نحن',
                'meta_description' => 'نحن فريق من المحترفين الملتزمين بمساعدتك في تحقيق أهدافك الصحية والرياضية',
                'meta_keywords'    => 'حولنا, من نحن',
            ],
            [
              'page_id'          => 1,
              'locale'           => 'en',
              'title'            => 'Our Products',
              'content'          => '',
              'template'         => '<div class="page-product-content">
  <div class="container">
    <div class="title-box">
      <div class="title">Our Products</div>
      <div class="sub-title">Our Products</div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="product-item">
          <div class="top">
            <div class="left"><i class="bi bi-box-seam-fill"></i></div>
            <div class="name">Whey Protein</div>
          </div>
          <div class="content">
            Whey protein is a high-quality dietary supplement that helps build muscles and enhance recovery after exercise. It contains all the essential amino acids the body needs.
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="product-item">
          <div class="top">
            <div class="left"><i class="bi bi-box-seam-fill"></i></div>
            <div class="name">Plant Protein</div>
          </div>
          <div class="content">
            Plant protein is suitable for vegetarians and made from plant-based sources such as peas and brown rice. It provides all the essential amino acids and is a healthy option for athletes.
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="product-item">
          <div class="top">
            <div class="left"><i class="bi bi-capsule"></i></div>
            <div class="name">Multivitamins</div>
          </div>
          <div class="content">
            Multivitamins to meet the daily needs of vitamins and minerals. They help improve overall health and support the immune system.
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="product-item">
          <div class="top">
            <div class="left"><i class="bi bi-capsule"></i></div>
            <div class="name">Amino Acids</div>
          </div>
          <div class="content">
            Amino acid supplements support athletic performance and muscle building. They help improve recovery after exercise.
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>',
              'meta_title'       => 'Our Products',
              'meta_description' => 'Discover our range of high-quality dietary supplements.',
              'meta_keywords'    => 'Products, Supplements, Protein',
          ],
          [
            'page_id'  => 2,
            'locale'   => 'en',
            'title'    => 'Our Services',
            'content'  => '',
            'template' => "<div class=\"page-service-content\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-12 col-md-5\">
              <div class=\"service-icon\"><img src=\"{{ asset('images/front/service/bg-1.png') }}\" class=\"img-fluid\"></div>
            </div>
            <div class=\"col-12 col-md-7\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"title-box\">
                    <div class=\"title\">Our Services</div>
                    <div class=\"sub-title\">We offer a wide range of services to support our clients in achieving their health and fitness goals. We are committed to providing innovative solutions and high-quality services.</div>
                  </div>
                </div>
                <div class=\"col-12 col-md-6\">
                  <div class=\"service-item\">
                    <div class=\"icon\"><i class=\"bi bi-house-door-fill\"></i></div>
                    <div class=\"title\">Nutrition Consulting</div>
                    <div class=\"sub-title\">We provide personalized nutrition consulting to help you achieve your health and fitness goals.</div>
                  </div>
                </div>
                <div class=\"col-12 col-md-6\">
                  <div class=\"service-item\">
                    <div class=\"icon\"><i class=\"bi bi-house-door-fill\"></i></div>
                    <div class=\"title\">Exercise Plans</div>
                    <div class=\"sub-title\">We design personalized exercise plans based on your goals and fitness level.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-12 col-md-1\"></div>
            <div class=\"col-12 col-md-11 service-row-2\">
              <div class=\"row\">
                <div class=\"col-12 col-md-4\">
                  <div class=\"service-item\">
                    <div class=\"icon\"><i class=\"bi bi-house-door-fill\"></i></div>
                    <div class=\"title\">Body Analysis</div>
                    <div class=\"sub-title\">We offer body analysis services to evaluate fat, muscle, and water percentage in the body.</div>
                  </div>
                </div>
                <div class=\"col-12 col-md-4\">
                  <div class=\"service-item\">
                    <div class=\"icon\"><i class=\"bi bi-house-door-fill\"></i></div>
                    <div class=\"title\">Customer Support</div>
                    <div class=\"sub-title\">Our customer support team is always available to assist you with any inquiries or issues.</div>
                  </div>
                </div>
                <div class=\"col-12 col-md-4\">
                  <div class=\"service-item\">
                    <div class=\"icon\"><i class=\"bi bi-house-door-fill\"></i></div>
                    <div class=\"title\">Fast Delivery</div>
                    <div class=\"sub-title\">We offer fast and reliable delivery service to ensure your products arrive on time.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>",
            'meta_title'       => 'Our Services',
            'meta_description' => 'Discover our range of services designed to support your health and fitness goals.',
            'meta_keywords'    => 'Services, Nutrition, Exercise',
        ],
        [
          'page_id'  => 3,
          'locale'   => 'en',
          'title'    => 'About Us',
          'content'  => '',
          'template' => "<div class=\"page-about-content\">
      <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12 col-md-6\">
          <div class=\"about-img\">
            <img src=\"{{ asset('images/front/about/bg-2.png') }}\" class=\"img-fluid\">
          </div>
        </div>
        <div class=\"col-12 col-md-6\">
          <div class=\"about-text\">
            <div class=\"main-title\">We are a team of professionals dedicated to helping you achieve your health and fitness goals.</div>
            <div class=\"about-text-item\">
              <div class=\"left\"><i class=\"bi bi-check-circle\"></i></div>
              <div class=\"right\">
                <div class=\"title\">Our Team</div>
                <div class=\"sub-title\">
                  Our team consists of experts in nutrition and fitness, committed to providing the best solutions for our clients.
                </div>
              </div>
            </div>
            <div class=\"about-text-item\">
              <div class=\"left\"><i class=\"bi bi-check-circle\"></i></div>
              <div class=\"right\">
                <div class=\"title\">Our Mission</div>
                <div class=\"sub-title\">
                  We strive to promote health and fitness through high-quality products and services.
                </div>
              </div>
            </div>
            <div class=\"about-text-item\">
              <div class=\"left\"><i class=\"bi bi-check-circle\"></i></div>
              <div class=\"right\">
                <div class=\"title\">Our Vision</div>
                <div class=\"sub-title\">
                  We aim to be the go-to destination for anyone looking to improve their health and fitness.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>",
          'meta_title'       => 'About Us',
          'meta_description' => 'We are a team of professionals dedicated to helping you achieve your health and fitness goals.',
          'meta_keywords'    => 'About Us, Team, Mission',
      ],
              
            // [
            //     'page_id'          => 1,
            //     'locale'           => 'en',
            //     'title'            => 'Creations',
            //     'content'          => 'This is Creations page for English',
            //     'meta_title'       => 'Creations',
            //     'meta_description' => 'Creations',
            //     'meta_keywords'    => 'Creations',
            // ],
            // [
            //     'page_id'          => 2,
            //     'locale'           => 'en',
            //     'title'            => 'Services',
            //     'content'          => 'This is Services page for English',
            //     'meta_title'       => 'Services',
            //     'meta_description' => 'Services',
            //     'meta_keywords'    => 'Services',
            // ],
            // [
            //     'page_id'          => 3,
            //     'locale'           => 'en',
            //     'title'            => 'About',
            //     'content'          => 'This is About page for English',
            //     'meta_title'       => 'About Us',
            //     'meta_description' => 'About Us',
            //     'meta_keywords'    => 'About Us',
            // ],
        ];
    }
}
