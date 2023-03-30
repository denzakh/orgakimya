<x-layout>
    <div class="container">
        <h1>{{ __('Menu: About') }}</h1>


@php
switch (LaravelLocalization::getCurrentLocale()) {
    case 'en':
@endphp


Orga Kimya is a custom design sustainable engineering solutions provider company
We help our customers to REDUCE their COSTS related to WATER & ENERGY & Maintenance and Labor etc while improving efficiency of the systems in order to help our customers meet or exceed their environmental, operational and financial goals.

Our main area of proficiencies are;
Optimizing cost vs performance for existing waste water treatment plants.
Chemical and biological treatment and equipment solutions for "Waste water reuse".
Treatment of cooling and heating water systems against the damages caused by scaling, corrosion and microbiological growth.
Engineering solutions for raw water and recycled waste water preperation equipments.
Elimination of bad odours in some spesific processes or in waste water treatment plants with neutralization process.
Process water treatment solutions especially for fiber cement industry, car painting processes, oil recover processes, other raw metal recovery processes.
OUR MISSION
For our sustainable common future; creating innovative engineering solutions that are specific to customers and processes, harmless to the environment, with high water and energy efficiency.

OUR VISION
To be a company that continuously improves itself, guarantees the satisfaction of all its customers with nature-friendly, value adding, innovative technologies.


@php
        break;
    case 'tr':
        echo "i равно 1";
@endphp



Orga Kimya, sürdürülebilir, doğa dostu ve özel tasarım mühendislik çözümleri sağlayan bir firmadır
Müşterilerimizin çevresel, operasyonel ve finansal hedeflerini karşılaşmalarına ve aşmalarına katkı sağlamak için ilgili sistemlerin verimliliğini artırırken SU & ENERJİ & Bakım ve İşçilik vb. ile ilgili MALİYETLERİNİ AZALTMAlarına yardımcı oluyoruz.

Başlıca uzmanlık alanlarımız;
Mevcut atık su arıtma tesisleri için maliyet ve performans optimizasyonu.
"Atık suların yeniden kullanımı" için kimyasal ve biyolojik arıtma ve ekipman çözümleri.
Soğutma ve ısıtma suyu sistemlerinin kireçlenme, korozyon ve mikrobiyolojik kirlenmeden kaynaklanan hasarlara karşı korunması.
Ham su ve geri dönüştürülmüş atık su hazırlama ekipmanları için mühendislik çözümleri.
Fabrikalardaki proses kaynaklı veya atık su arıtma tesislerindeki kötü kokuların nötralizasyon proses ile ortadan kaldırılması.
Özellikle fibercement sektörü, araba boyama prosesleri, yağ geri kazanım prosesleri, diğer ham metal geri kazanım prosesleri için proses suyu arıtma çözümleri.
MİSYONUMUZ
Sürdürülebilir ortak geleceğimiz için; müşteriye ve prosese özel, doğaya zararsız, su ve enerji verimliliği yüksek ve yenilikçi mühendislik çözümleri yaratmak.

VİZYONUMUZ
Kendini sürekli geliştirerek doğa dostu yeni teknolojiler ile tüm müşterilerinin memnuniyetini garanti altına alan ve onlara değer katan bir firma olmak.



@php
        break;
    case 'ru':
@endphp


Orga Kimya — компания-поставщик устойчивых инженерных решений по индивидуальному проекту.
Мы помогаем нашим клиентам СНИЖАТЬ ЗАТРАТЫ, связанные с ВОДОЙ, ЭНЕРГЕТИКОЙ, техническим обслуживанием, трудовыми затратами и т. д., одновременно повышая эффективность систем, чтобы помочь нашим клиентам достичь или превысить свои экологические, операционные и финансовые цели.

Наша основная область знаний;
Оптимизация затрат и производительности существующих водоочистных сооружений.
Решения по химической и биологической очистке и оборудованию для «Повторного использования сточных вод».
Обработка систем охлаждения и отопления от повреждений, вызванных образованием накипи, коррозией и микробиологическим ростом.
Инженерные решения для оборудования подготовки сырой воды и оборотных сточных вод.
Устранение неприятных запахов в некоторых специфических процессах или на очистных сооружениях с процессом нейтрализации.
Решения для очистки технологической воды, особенно для фиброцементной промышленности, процессов покраски автомобилей, процессов восстановления масла, других процессов восстановления металлического сырья.
НАША МИССИЯ
Для нашего устойчивого общего будущего; создание инновационных инженерных решений, специфичных для клиентов и процессов, безвредных для окружающей среды, с высокой эффективностью использования воды и энергии.

НАШ ВЗГЛЯД
Быть компанией, которая постоянно совершенствуется, гарантирует удовлетворение всех своих клиентов экологически чистыми, добавочными, инновационными технологиями.



@php
        break;
}
@endphp



@forelse ($partners as $partner)
    <div style="display: inline-block; vertical-align: top; width: 200px; margin-right: 50px; margin-bottom: 50px;">

        {!! get_picture_th('partners/200/', $partner['img'], 'png') !!}


        <div>{{ $partner->title }} </div>
    </div>

@empty
        @endforelse


    </div>
</x-layout>