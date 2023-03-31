<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public $items = [
        [
            'title_en' => 'Consultancy for Operation And Management For Waste Water Chemical Treatment And Waste Water Recycling Systems',
            'title_tr' => 'Atık Su Arıtma Ve Su Geri Kazanım Sistemleri için Kimyasal Şartlandırma Uygulama Ve İşletme Danışmanlığı',
            'title_ru' => 'Консультации по внедрению и эксплуатации химического кондиционирования для систем очистки сточных вод и рекуперации воды',
            'text_en' => 'Determination of the possible application principles to purify the waste water to the highest possible quality through chemical and biological methods and in order to reach the desired quality values for the following filtration stages.',
            'text_tr' => 'Atık suyun olabilecek en yüksek kaliteye kadar kimyasal ve biyolojik yöntemlerle arıtılarak daha sonrasında belirli filtrasyon kademeleri ile arzu edilen kalite değerlerine ulaştırılması için izlenebilecek uygulama esaslarının tespiti.',
            'text_ru' => 'Определение возможных принципов применения для очистки сточных вод до максимально возможного качества с помощью химических и биологических методов и для достижения желаемых значений качества на следующих стадиях фильтрации.',
            'img' => '1680128457',
        ],
        [
            'title_en' => 'Consultancy for Chemical Treatment Applications In Cooling And Heating Water Systems',
            'title_tr' => 'Soğutma Ve Isıtma Sistemlerinde Kimyasal Şartlandırma Uygulama Danışmanlığı',
            'title_ru' => 'Консультации по применению химического кондиционирования в системах охлаждения и отопления',
            'text_en' => 'Creating cost saving solutions through application of appropriate engineering applications.',
            'text_tr' => 'Doğru mühendislik uygulamalarının hayata geçirilmesi ile birim üretim maliyetlerinin düşürülmesi.',
            'text_ru' => 'Создание экономичных решений за счет применения соответствующих инженерных приложений.',
            'img' => '1680129778',
        ],
        [
            'title_en' => 'Water Management Consultancy',
            'title_tr' => 'Fabrika Su Yönetim Danışmanlığı	',
            'title_ru' => 'Заводская консультация по управлению водными ресурсами',
            'text_en' => 'Mechanical, chemical and operational measures to be taken for the healtiest and most efficient water use from the enterance to the discharge point in a manufacturing plant.',
            'text_tr' => 'Tesise suyun girişinden çıkışına kadar tüm kullanım noktalarına en sağlıklı ve en düşük maliyette hizmet edebilmesi için alınması gereken mekanik, kimyasal ve operasyonel tedbirler.',
            'text_ru' => 'Механические, химические и эксплуатационные меры, которые необходимо принять для наиболее рационального использования воды от точки ввода до точки сброса на производственном предприятии.',
            'img' => '1680129801',
        ],
        [
            'title_en' => 'Laboratory Services',
            'title_tr' => 'Laboratuvar Hizmetleri',
            'title_ru' => 'Лабораторные услуги',
            'text_en' => 'Analytical measurement of all types of waters.',
            'text_tr' => 'Her türlü suyun analitik değerlerinin tespiti.',
            'text_ru' => 'Аналитическое измерение всех типов вод.',
            'img' => '1680128245',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->items as $item) {
            DB::table('services')->insert($item);
        }
    }
}
