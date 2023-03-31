<x-layout>
    <div class="container">
        <h1>{{ __('Menu: About') }}</h1>


@php
switch (LaravelLocalization::getCurrentLocale()) {
    case 'en':
@endphp


<p>Orga Kimya is a custom design sustainable engineering solutions provider company. We help our customers to REDUCE their COSTS related to WATER & ENERGY & Maintenance and Labor etc while improving efficiency of the systems in order to help our customers meet or exceed their environmental, operational and financial goals.</p>


<h2>Our main area of proficiencies are:</h2>

<ul>
    <li>Optimizing cost vs performance for existing waste water treatment plants.</li>
    <li>Chemical and biological treatment and equipment solutions for "Waste water reuse".</li>
    <li>Treatment of cooling and heating water systems against the damages caused by scaling, corrosion and microbiological growth.</li>
    <li>Engineering solutions for raw water and recycled waste water preperation equipments.</li>
    <li>Elimination of bad odours in some spesific processes or in waste water treatment plants with neutralization process.</li>
    <li>Process water treatment solutions especially for fiber cement industry, car painting processes, oil recover processes, other raw metal recovery processes.</li>
</ul>

<h2>Our mission</h2>

<p>For our sustainable common future; creating innovative engineering solutions that are specific to customers and processes, harmless to the environment, with high water and energy efficiency.</p>

<h2>Our vision</h2>

<p>To be a company that continuously improves itself, guarantees the satisfaction of all its customers with nature-friendly, value adding, innovative technologies.</p>

<h2>Our clients</h2>


@php
        break;
    case 'tr':
        echo "i равно 1";
@endphp



<p>Orga Kimya, sürdürülebilir, doğa dostu ve özel tasarım mühendislik çözümleri sağlayan bir firmadır. Müşterilerimizin çevresel, operasyonel ve finansal hedeflerini karşılaşmalarına ve aşmalarına katkı sağlamak için ilgili sistemlerin verimliliğini artırırken SU & ENERJİ & Bakım ve İşçilik vb. ile ilgili MALİYETLERİNİ AZALTMAlarına yardımcı oluyoruz.</p>

<h2>Başlıca uzmanlık alanlarımız:</h2>

<ul>
    <li>Mevcut atık su arıtma tesisleri için maliyet ve performans optimizasyonu.</li>
    <li>"Atık suların yeniden kullanımı" için kimyasal ve biyolojik arıtma ve ekipman çözümleri.</li>
    <li>Soğutma ve ısıtma suyu sistemlerinin kireçlenme, korozyon ve mikrobiyolojik kirlenmeden kaynaklanan hasarlara karşı korunması.</li>
    <li>Ham su ve geri dönüştürülmüş atık su hazırlama ekipmanları için mühendislik çözümleri.</li>
    <li>Fabrikalardaki proses kaynaklı veya atık su arıtma tesislerindeki kötü kokuların nötralizasyon proses ile ortadan kaldırılması.</li>
    <li>Özellikle fibercement sektörü, araba boyama prosesleri, yağ geri kazanım prosesleri, diğer ham metal geri kazanım prosesleri için proses suyu arıtma çözümleri.</li>
</ul>

<h2>Mi̇syonumuz</h2>
<p>Sürdürülebilir ortak geleceğimiz için; müşteriye ve prosese özel, doğaya zararsız, su ve enerji verimliliği yüksek ve yenilikçi mühendislik çözümleri yaratmak.</p>

<h2>Vi̇zyonumuz</h2>
<p>Kendini sürekli geliştirerek doğa dostu yeni teknolojiler ile tüm müşterilerinin memnuniyetini garanti altına alan ve onlara değer katan bir firma olmak.</p>




@php
        break;
    case 'ru':
@endphp

<p>Orga Kimya — компания-поставщик устойчивых инженерных решений по индивидуальному проекту.
Мы помогаем нашим клиентам СНИЖАТЬ ЗАТРАТЫ, связанные с ВОДОЙ, ЭНЕРГЕТИКОЙ, техническим обслуживанием, трудовыми затратами и т. д., одновременно повышая эффективность систем, чтобы помочь нашим клиентам достичь свои экологические, операционные и финансовые цели.</p>


<h2>Наша специализация:</h2>
<ul>
<li>Оптимизация затрат и производительности существующих водоочистных сооружений.</li>
<li>Решения по химической и биологической очистке и оборудованию для «Повторного использования сточных вод».</li>
<li>Обработка систем охлаждения и отопления от повреждений, вызванных образованием накипи, коррозией и микробиологическим ростом.</li>
<li>Инженерные решения для оборудования подготовки сырой воды и оборотных сточных вод.</li>
<li>Устранение неприятных запахов в некоторых специфических процессах или на очистных сооружениях с процессом нейтрализации.</li>
<li>Решения для очистки технологической воды, особенно для фиброцементной промышленности, процессов покраски автомобилей, процессов восстановления масла, других процессов восстановления металлического сырья.</li>
</ul>

<h2>Наша миссия</h2>
<p>Для нашего устойчивого общего будущего; создание инновационных инженерных решений, специфичных для клиентов и процессов, безвредных для окружающей среды, с высокой эффективностью использования воды и энергии.</p>

<h2>Наш взгляд</h2>
<p>Быть компанией, которая постоянно совершенствуется, гарантирует удовлетворение всех своих клиентов экологически чистыми, добавочными, инновационными технологиями.</p>



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