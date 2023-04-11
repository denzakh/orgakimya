<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationSeeder extends Seeder
{
    public $items = [
        [
            'title_en' => 'Bad odor elimination through spray method notralization sytem',
            'title_tr' => 'Kötü kokularin ortadan kaldirilmasi i̇çi̇n sprey yöntemi̇yle nötrali̇zasyon si̇stemi̇',
            'title_ru' => 'Cистема нейтрализации методом распыления для устранения неприятных запахов',
            'text_en' => '<p>Failure to control bad odors in factories can adversely affect the health of employees as well as causing penalties. It can cause health problems such as Asthma as well as skin irritation and breathing difficulties.</p>

<p>To prevent bad odors, some factories apply masking solutions. But these solutions are not very suitable. Because in the masking method, bad odor molecules are not removed, only a stronger odor is suppressed so that bad odor is not felt. So, if you are looking for a more reliable solution, it is smarter to consider investing in neutralizer chemical fogging systems. These solutions are not only low cost effective but also much more efficient.</p>

<p>An investment in odor control with a fogging system is a one-time investment that is both effective and life-long. The odor control fog system is specifically designed and engineered to spray odor neutralizers in certain areas such as sewage and wastewater treatment centers, garbage bins, garbage compactors and garbage sorting plants, and in certain areas such as facilities and warehouses with airborne odor problems. Misting systems dilutes odor neutralizing chemicals and effectively distributes them over bad odor area to the air environment, and also eliminates odor-causing bacteria.</p>

<p>Our high-pressure misting systems have been independently tested and proven to eliminate odors associated with:</p>

<ul>
	<li>Waste transfer</li>
	<li>Waste recycling</li>
	<li>Microbial decomposition of animal waste</li>
	<li>Other industrial odor challenges</li>
</ul>',
            'text_tr' => '<p>Fabrikalarda kötü kokuların kontrol edilememesi para cezalarına sebep olmanın yanı sıra çalışanların sağlığını da olumsuz etkileyebilir. Astım, cilt tahrişi ve solunum güçlüğü gibi sorunlara neden olabilir.</p>

<p>Kötü kokuları engellemek için bazı işletmeler maskeleme çözümlerine başvurmaktadır. Fakat bu çözümler pek de uygun değildir. Çünkü maskeleme yönteminde kötü koku molekülleri ortadan kaldırılmaz sadece daha güçlü bir koku ile bastırılarak hissedilmemeleri sağlanır. Bu nedenle, daha güvenilir bir çözüm arıyorsanız, koku kontrolü için nötralizasyon yapan sisleme sistemlerine yatırım yapmayı düşünmek daha akıllı bir çözümdür. Bu çözümler sadece düşük maliyetli değil, aynı zamanda çok daha fazla etkilidir.</p>

<p>Sisleme sistemi ile koku kontrolü yatırımı hem etkili hem de ömür boyu süren tek seferlik bir yatırımdır. Koku kontrol sisleme sistemi, kanalizasyon ve atık su arıtma merkezleri, çöp konteynerleri, çöp sıkıştırıcıları ve çöp ayırma tesisleri gibi belirli alanlarda ve hava kaynaklı koku sorunları olan tesisler ve depolar gibi belirli alanlarda koku nötrleştiricileri püskürtmek için özel olarak tasarlanmıştır. Sisleme sistemleri koku nötralize edici kimyasalların seyreltilmesini ve kötü kokunun bulunduğu hava ortamına etkili bir şekilde dağılımını sağlar ve kokuya neden olan bakterileri de ortadan kaldırır.</p>

<p>Yüksek basınçlı sisleme sistemlerimiz bağımsız olarak test edilmiş ve aşağıdakilerle ilişkili kokuları ortadan kaldırdığı kanıtlanmıştır:</p>

<li>Atık transferi</li>
<li>Atık geri dönüşümü</li>
<li>Hayvan atıklarının mikrobiyal ayrışması</li>
<li>Diğer endüstriyel kokular</li>',
            'text_ru' => '<p>Неспособность контролировать неприятные запахи на заводах может отрицательно сказаться на здоровье сотрудников, а также привести к штрафам СЭС. Это может вызвать проблемы со здоровьем, такие как астма, раздражение кожи и затрудненное дыхание.

<p>Для предотвращения неприятных запахов некоторые фабрики применяют маскирующие растворы. Но эти решения не очень помогают. Поскольку при этом способе молекулы неприятного запаха не удаляются, подавляется только наиболее сильный запах, так что в целом он не ощущается. Но если вы ищете более надежное решение, разумнее рассмотреть возможность инвестирования в системы химического туманообразования с нейтрализатором. Эти решения не только экономичны, но и намного эффективнее.

<p>Инвестиции в борьбу с запахом с помощью системы запотевания - это единовременные инвестиции, которые являются эффективными и долговечными. Система контроля запаха FOG была специально разработана для распыления нейтрализаторов запаха в определенных областях, таких как канализация и центры очистки сточных вод, мусорные баки, уплотнители мусора и мусоросортировочные заводы, а также в определенных областях, таких как объекты и склады, где есть проблемы с запахом Системы запотевания разбавляют химические вещества, нейтрализующие запах, и эффективно распределяют их по области неприятного запаха в воздушной среде, а также устраняют бактерии, вызывающие запах.

<p>Наши системы запотевания под высоким давлением были независимо протестированы и доказали, что устраняют запахи, связанные с:

<ul>
	<li>Транспортировка отходов</li>
	<li>Переработка отходов</li>
	<li>Микробиологическое разложение отходов животноводства</li>
	<li>Другие проблемы с промышленным запахом</li>
</ul>',
            'img' => 'spray2',
            'doc' => '',
        ],
        [
            'title_en' => 'Ultrafine bubble (ufb) flotation and gas integration to liquids system',
            'title_tr' => 'Ultra fine bubble (ufb) flotasyon ve sivilara gaz enjeksi̇yonu si̇stemi̇',
            'title_ru' => 'Ультратонкая пузырьковая (ufb) система флотации и впрыска газа в жидкости',
            'text_en' => '<p>Ultrafine bubble system (UFB) is a micro size gas bubble system in which gas bubbles (can be air, oxygen, ozone, nitrogen, carbon dioxide or any other gas) with diameters ranging from 5-50 microns are formed in water, sticking to each other without any spaces among them. UFB system is used in the fields of improved flotation in waste water treatment systems, increasing aeration efficiency and reducing costs in seafood production, reducing operational costs by increasing washing and cleaning performances in food and metal industries, increasing the growth rates and yields of vegetables and fruits and also improving hygienic conditions in agricultural areas.<p>

<p>In waste water applications UFB system is mostly used in PHYSICAL AND CHEMICAL PRETREATMENT, BIOLOGICAL TREATMENT and TERTIARY TREATMENT areas.<p>

<p>Below are some of the advantages and benefits brought with UFB system.<p>

<p>PHYSICAL AND CHEMICAL PRETREATMENT<p>

<ul>
	<li>Minimum 40% treated water capacity increase (In comparison with standart DAF systems at the same scale)</li>
	<li>Minimum 50% operational cost reduction (In comparison with same scale standart DAF systems, specially through reduction on chemical consumption and energy utilization)</li>
	<li>1/15 of footprint in comparison with sedimentation tank at same scale</li>
	<li>99% FOG (Fat, Oil, Grease) and SS (Suspended Solids) removal</li>
</ul>

<p>SLUDGE THICKENING<p>

<ul>
	<li>Solid content of thickened sludge is increased to minimum 8% without using chemicals.<li>
	<li>Need for sludge dewatering equipment is reduced or eliminated.<li>
	<li>Need for sludge dewatering chemicals is eliminated.<li>
	<li>Spesific energy consumption* for sludge thickening is between 50-70Wh/m3.<li>
</ul>

<p>TERTIARY TREATMENT<p>

<ul>
	<li>SS (Suspended Solid) content at the discharge water is easily achieved < 10 mg/l.<li>
	<li>UFB system is a better alternative equipment to sand filter because there is no back wash water wasted.<li>
	<li>UFB is an alternative of lagoons used in raw water preperation processes.<li>
	<li>Specific energy consumption in tertiary treatment is around 7,5Wh/m3.<li>
</ul>

<p><small>*Specific Energy Consumption = energy used to produce air needed in flotation.</small></p>',
            'text_tr' => '<p>Ultrafine bubble sistemi (UFB) çapları 5-50 mikron arasında değişen gaz (hava, oksijen, ozon, nitrojen, karbondioksit veya herhangi başka bir gaz olabilir) kabarcıklarının su içerisinde birbirine yapışık ve aralarında hiç boşluk kalmayacak şekilde oluşturulduğu bir mikro gaz kabarcığı sistemi olup; atık su arıtma sistemlerinde iyileştirilmiş flotasyon, deniz mahsülleri üretiminde havalandırma veriminin arttırılması ve masrafların azaltılması , gıda ve metal endüstrilerinde yıkama ve temizlik performanslarının arttırılarak işletme maliyetlerinin düşürülmesi ve tarımsal alanda ise sebze ve meyvelerin büyüme hızlarının ve verimlerinin arttırılması ve hijyenik koşullarının iyileştirilmesi alanlarında kullanılmaktadır.</p>

<p>Atık su arıtma sistemlerinde FİZİKSEL VE KİMYASAL ÖN ARITMA, BİYOLOJİK ARITMA ve NİHAİ ARITMA kısımlarında kullanılmaktadır.</p>

<p>Aşağıda her bir farklı alanda kullanılması durumundaki sağladığı faydalar ve kazandırdığı avantajlar kısaca yer almaktadır.</p>

<p>ÖN ARITMA</p>

<ul>
	<li>Arıtılmış su kapasitesinde minimum 40% artış (Aynı ölçekteki standart DAF sistemlerine kıyasla)</li>
	<li>İşletme maliyetlerinde minimum 50% azalma (Standart DAF sistemlerine kıyasla, özellikle kimyasal kullanımının ve enerji tüketiminin azaltılmasıyla)</li>
	<li>Çökeltme tanklarına kıyasla genellikle 1/15 oranında yer kaplama</li>
	<li>99% oranında yağ ve AKM (Askıda katı madde giderimi)</li>
</ul>

<p>ÇAMUR YOĞUNLAŞTIRMA</p>

<ul>
	<li>Yoğunlaştırılmış çamurda Toplam Katı Madde konsantrasyonu kimyasal kullanmaksızın en az 8% e yükseltilir.</li>
	<li>Mekanik çamur susuzlaştırma ekipmanlarına olan ihtiyacı azaltır veya ortadan kaldırır.</li>
	<li>Kimyasal kullanma ihtiyacını ortadan kaldırır.</li>
	<li>Çamur susuzlaştırma uygulamasında *spesifik enerji tüketimi 50-70Wh/m3 tür.</li>
</ul>

<p>NİHAİ ARITMA</p>

<ul>
	<li>Deşarj suyunda AKM <10 mg/l (Askıda Katı Madde) kolaylıkla sağlanabilmektedir.</li>
	<li>Kum filtrelerinin alternatifi olup ters yıkama suyu kaybı yoktur.</li>
	<li>Ham su üretiminde çökeltme lagunlarının alternatifidir.</li>
	<li>Nihai arıtmada *Spesifik enerji tüketimi yaklaşık 7,5Wh/m3 tür.</li>
</ul>

<p><small>*Spesifik Enerji tüketimi = Flotasyonu sağlamak için kullanılan havanın üretimi için tüketilen enerji.</small></p>',
            'text_ru' => '<p>Ультратонкая пузырьковая система (UFB) представляет собой газовую пузырьковую систему микроразмерности, в которой газовые пузырьки (могут быть воздухом, кислородом, озоном, азотом, двуокисью углерода или любым другим газом) диаметром от 5-50 микрон образуются в воде, прилипая друг к другу без каких-либо промежутков между ними. Система UFB используется для улучшения флотации в системах очистки сточных вод, повышения эффективности аэрации и снижения затрат при производстве морепродуктов, снижения эксплуатационных расходов за счет повышения эффективности мойки и очистки в пищевой и металлургической промышленности, увеличения темпов роста и урожайности овощей и фруктов, а также улучшения гигиенических условий в сельскохозяйственных районах.</p>

<p>В системах очистки сточных вод система UFB в основном используется в областях ФИЗИЧЕСКОЙ И ХИМИЧЕСКОЙ ПРЕДВАРИТЕЛЬНОЙ ОБРАБОТКИ, БИОЛОГИЧЕСКОЙ ОЧИСТКИ и ДООЧИСТКИ.</p>

<p>Ниже приведены некоторые преимущества, которые дает система UFB.</p>

<p>ПРЕДВАРИТЕЛЬНАЯ ФИЗИЧЕСКАЯ И ХИМИЧЕСКАЯ ОБРАБОТКА</p>

<ul>
	<li>Увеличение производительности очищенной воды минимум на 40% (по сравнению со стандартными системами DAF в том же масштабе)</li>
	<li>Снижение эксплуатационных расходов минимум на 50% (по сравнению со стандартными системами DAF того же масштаба, особенно за счет снижения расхода химических веществ и энергопотребления)</li>
	<li>1/15 занимаемой площади по сравнению с отстойником того же масштаба</li>
	<li>Удаление 99% ТУМАНА (жира, масла, тавота) и SS (взвешенных твердых частиц)</li>
</ul>

<p>СГУЩЕНИЕ ОСАДКА</p>

<ul>
	<li>Содержание твердых веществ в сгущенном осадке увеличивается как минимум до 8% без использования химикатов.</li>
	<li>Потребность в оборудовании для обезвоживания осадка снижается или устраняется.</li>
	<li>Отпадает необходимость в химических средствах для обезвоживания осадка.</li>
	<li>Удельное потребление энергии * для сгущения осадка составляет от 50 до 70 Вт*ч /м3.</li>
</ul>

<p>ДООЧИСТКА</p>

<ul>
	<li>Содержание SS (взвешенных твердых веществ) в сливной воде легко достигается < 10 мг /л.</li>
	<li>Система UFB является лучшей альтернативой песочному фильтру, поскольку вода для обратной промывки не расходуется впустую.</li>
	<li>UFB - это альтернатива лагунам, используемым в процессах подготовки сырой воды.</li>
	<li>Удельное потребление энергии при доочистке составляет около 7,5 Втч/м3.</li>
</ul>

<p><small>* Удельное потребление энергии = энергия, используемая для производства воздуха, необходимого при флотации.<small></p>',
            'img' => 'ufb',
            'doc' => '',
        ],
        [
            'title_en' => 'Cooling water chemical treatment',
            'title_tr' => 'Soğutma suyu ki̇myasal şartlandirmasi',
            'title_ru' => 'Химическое кондиционирование охлаждающей жидкости',
            'text_en' => '<ul>
	<li>Scale inhibition in open and semi open cooling systems</li>
	<li>Corrosion inhibition in open and semi open cooling systems</li>
	<li>Microbiological activation prevention in open and semi open cooling water systems. (biocides)</li>
	<li>Corrosion and scale inhibition closed loop cooling (etc chiller systems) water systems.</li>
	<li>Microbiological activation inhibition closed loop cooling (etc chiller systems) water systems (biocides)</li>
	<li>Microbiological activation, scaling and corrosion inhibition in once through (etc sea water cooling) cooling water systems.</li>
</ul>',
            'text_tr' => '<ul>
	<li>Açık ve yarı açık soğuma sistemleri birikinti önleme</li>
	<li>Açık ve yarı açık soğutma sistemleri korozyon önleme</li>
	<li>Açık ve yarı açık soğutma sistemeleri biyolojik aktivasyon önleme. (biositler)</li>
	<li>Kapalı soğutma sistemleri (Chiller grupları vb) korozyon ve birikinti önleme</li>
	<li>Kapalı soğutma sistemleri (Chiller grupları vb) biyolojik aktivasyon önleme. (biositler)</li>
	<li>Tek geçişli sistemler (deniz suyu soğutma vb) biyolojik aktivasyon ve korozyon ve birikinti önleme.</li>
</ul>
',
            'text_ru' => '<ul>
	<li>Ингибирование образования накипи в открытых и полуоткрытых системах охлаждения</li>
	<li>Ингибирование коррозии в открытых и полуоткрытых системах охлаждения</li>
	<li>Предотвращение микробиологической активации в открытых и полуоткрытых системах водяного охлаждения (биоциды) </li>
	<li>Замкнутый контур системы охлаждения (чиллеров) с защитой от коррозии и образования накипи.</li>
	<li>Ингибирование микробиологической активации, системы охлаждения с замкнутым контуром (чиллерные системы, биоциды)</li>
	<li>Микробиологическая активация, ингибирование образования накипи и коррозии в прямоточных (и т. д. охлаждение морской водой) системах водяного охлаждения</li>
</ul>',
            'img' => 'frozen',
            'doc' => '',
        ],
        [
            'title_en' => 'Chemical treatment for raw water preparation and waste water',
            'title_tr' => 'Su hazirlama ve artik su geri̇ kazanim si̇stemleri̇ ki̇myasal şartlandirmasi',
            'title_ru' => 'Химическое кондиционирование систем подготовки воды и восстановления остаточной воды',
            'text_en' => '<ul>
	<li>Filter aid chemicals for filtration systems. </li>
	<li>Coagulants and flocculants for raw water PREPERATION systems.</li>
	<li>Antiscalants and antifoulants for Ultrafiltration, Nano filtration, and Reverse Osmosis systems.</li>
	<li>Microbiological fouling inhibition chemicals for Ultrafiltration, Nanofiltration and Reverse Osmosis units</li>
	<li>Membrane cleaning chemicals for Ultrafiltrationi Nanofiltration and Reverse Osmosis units.</li>
</ul>',
            'text_tr' => '<ul>
	<li>Filtrasyon üniteleri performans arttırıcı tane büyütücü ürünler.</li>
	<li>Ham su eldesinde kullanılan koagulant ve flokulant ürünler</li>
	<li>Ultrafiltrasyon, Nanofiltrasyon ve Revers Osmos üniteleri için birikinti önleyiciler (antiskalantlar)</li>
	<li>Ultrafiltrasyon, Nanofiltrasyon ve Revers Osmos üniteleri için biyolojik aktivasyon engelleyiciler (biositler)</li>
	<li>Ultrafiltrasyon, Nanofiltrasyon ve Revers Osmos üniteleri için membran temizleme ürünleri</li>
</ul>',
            'text_ru' => '<ul>
	<li>Химические фильтрующие вещества для систем фильтрации. </li>
	<li>Коагулянты и флокулянты для систем ПОДГОТОВКИ сырой воды.</li>
	<li>Антискаланты и средства против обрастания для систем ультрафильтрации, нанофильтрации и обратного осмоса.</li>
	<li>Реагенты для подавления микробиологического обрастания для установок ультрафильтрации, нанофильтрации и обратного осмоса</li>
	<li>Реагенты для очистки мембран для установок ультрафильтрации, нанофильтрации и обратного осмоса.</li>
</ul>',
            'img' => 'plant',
            'doc' => '',
        ],
        [
            'title_en' => 'Scale prevention system without chemicals',
            'title_tr' => 'Ki̇myasalsiz ki̇reçlenme önleme si̇stemi̇',
            'title_ru' => 'Система защиты от кальцификации без химических веществ',
            'text_en' => '<p>Modern and environmental friendly approach to scale prevention</p>

<p>Chemists spent several years developing the Advanced Crystallisation Process (ACP). The system is based on what has already been scientifically proven in numerous independent studies that Electrolytic technology is the most effective. Electrolytic systems use cathode and anode – usually zinc – to release ions into the water stream. These ions act as the seed / nucleation point to keep the hardness minerals in suspension.</p>

<p>When surfaces of scale forming calcite is modified through the dose of 5 ppb (0,005 ppm) Zn by the use of  ACP it turns out to Aragonite form which does not hold the ability to attach surfaces </p>

<p>Below is the chemical reaction occuring in ACP.</p>

<p>Zn2+ + 2HCO3- > ZnCO3 + H2O + CO2</p>

<p>Features & Benefits</p>

<ul>
<li>Designed and manufactured to ensure optimum zinc ion release</li>
<li>Effect is permanent</li>
<li>Anode with an expected design life of over 10 years</li>
<li>10 year product warranty</li>
<li>No power required</li>
<li>Easy and low cost installation</li>
<li>No maintenance required</li>
<li>Controls both scale and corrosion</li>
<li>Chemical free treatment</li>
<li>Environmentally friendly</li>
<li>WRAS approved</li>
<li>Whole system protection</li>
<li>No commissioning or control panel required</li>
<li>No loss of conditioning effect over time</li>
</ul>

<p>For who its use is appropriate
Where heated water is supplied such as </p>

<ul>
<li>Manufacturing plants</li>
<li>Hotels</li>
<li>Shopping malls</li>
<li>Hospitals</li>
<li>Residences</li>
<li>Sport saloons</li>
<li>Recreation places</li>
<li>Spas</li>
</ul>',
            'text_tr' => '<p>Kireç Taşı Önlemede Modern ve Çevre Dostu Yaklaşım</p>

<p>Uzun yıllar süren ArGe çalışmaları sonucunda geliştirilen İleri Kristalizasyon Prosesi (ACP)  elektrolitik teknolojiyi esas almakta olup  kireç taşı oluşumunun kimyasalsız engellenme metotları arasında en etkili metot olduğu çok sayıda bağımsız bilimsel çalışma ile kanıtlanmış durumdadır. Elektrolitik sistemler bu yöntemde suya belirli iyonları besleyebilmek için katot ve anot (genellikle çinko) bölgelerinden oluşan aparatlar kullanırlar.</p>

<p>Yüzeylerde kireç taşı oluşturan kalsit kristalleri ACP kullanımı ile suya minimum oranda (yaklaşık 5 ppb = 0,005 ppm) salınan çinko iyonları sayesinde yüzeyleri modifiye edildiğinde Aragonit denen ve yüzeylere tutunma kabiliyeti olmayan forma dönüştürülmektedir.</p>

<p>Aşağıda ACP ünitesi içinde gerçekleşen reaksiyon gösterilmektedir.</p>

<p>Zn2+ + 2HCO3- > ZnCO3 + H2O + CO2</p>

<p>Faydalar</p>

<ul>
<li>Hem kireçlenme hem de korozyona karşı etkilidir ve etkisi kalıcıdır.</li>
<li>Kimyasal kullanımını ortadan kaldırır, çevre dostudur.</li>
<li>Kullanım için bir güç kaynağı gerektirmez.</li>
<li>Bakım ihtiyacı yoktur.</li>
<li>Kurulumu kolay ve düşük maliyetlidir ayrıca sofistike bir devreye alma hizmetine de gerek yoktur.</li>
<li>Çoğu durumda su yumuşatma cihazlarına bakım gerektirmeyen ekonomik bir alternatiftir.</li>
<li>Kontrol paneli gerektirmez.</li>
<li>WRAS onaylıdır.*</li>
<li>Sadece ısı transfer yüzeylerini değil tüm sistemi korur.</li>
<li>Zamanla verim kaybı yaşanmaz.</li>
<li>Anotun tasarım ömrü 10 yıldan fazla olup ürün 10 yıl garantilidir.</li>
</ul>

<p><small>* WRAS = İngiltere’ de içme suyu ile temas eden ürünlere verilen uygunluk belgesi</small><p>

<p>Kimler için Uygundur. Sıcak su temini yapılan tüm</p>

<ul>
<li>Fabrikalar</li>
<li>Oteller</li>
<li>Alışveris Merkezleri (AVM)</li>
<li>Hastahaneler</li>
<li>Toplu Konutlar & Rezidanslar</li>
<li>Spor salonları</li>
<li>Rekreasyon alanları</li>
<li>Spalar</li>
</ul>',
            'text_ru' => '<p>Современный и экологически безопасный подход к предотвращению образования накипи</p>

<p>Химики потратили несколько лет на разработку усовершенствованного процесса кристаллизации (ACP). Система основана на том, что уже было научно доказано многочисленными независимыми исследованиями, что электролитическая технология является наиболее эффективной. Электролитические системы используют катод и анод — обычно цинк — для выделения ионов в поток воды. Эти ионы действуют как затравка / точка зародышеобразования, чтобы удерживать минералы твердости во взвешенном состоянии.</p>

<p>При модификации поверхности накипеобразующего кальцита дозой 5 ppb (0,005 ppm) Zn с использованием АКП он превращается в арагонитовую форму, не обладающую способностью скреплять поверхности </p>

<p>Ниже показана химическая реакция, происходящая в ACP.</p>

<p>Zn2+ + 2HCO3- > ZnCO3 + H2O + CO2</p>

<p>Возможности и преимущества</p>

<ul>
<li>Разработаны и изготовлены для обеспечения оптимального высвобождения ионов цинка.</li>
<li>Эффект необратим.</li>
<li>Анод с ожидаемым расчетным сроком службы более 10 лет.</li>
<li>10-летняя гарантия на продукт</li>
<li>Электропитание не требуется</li>
<li>Простая и недорогая установка</li>
<li>Не требует обслуживания</li>
<li>Контролирует накипь и коррозию</li>
<li>Безхимическая обработка</li>
<li>Экологически чистый</li>
<li>Одобрено WRAS</li>
<li>Защита всей системы</li>
<li>Не требуется ввод в эксплуатацию или панель управления</li>
<li>Кондиционирующий эффект не теряется со временем.</li>
</ul>

<p>Кому подходит его использование
Там, где подается нагретая вода, например, </p>

<ul>
<li>Производственные предприятия</li>
<li>Отели</li>
<li>Торговые центры</li>
<li>Больницы</li>
<li>Жилые дома</li>
<li>Спортивные седаны</li>
<li>Места отдыха</li>
<li>Спа</li>
</ul>',
            'img' => 'calcium',
            'doc' => '',
        ],
        [
            'title_en' => 'Chemical and biological applications for waste water treatment systems',
            'title_tr' => 'Atik su aritma si̇stemleri̇ şartlandirmasi i̇çi̇n ki̇myasal ve bi̇yoloji̇k uygulamalar',
            'title_ru' => 'Химические и биологические применения для кондиционирования систем очистки сточных вод',
            'text_en' => '<ul>
	<li>Coagulants and emulsion breakers for chemical waste water treatment (both organic and inorganic based)</li>
	<li>Chemical and biological treatment flocculants (granul or liquid based)</li>
	<li>Antifoams and defoamers for chemical and biological waste water treatment systems.</li>
	<li>Flocculants for chemical and biological sludge dewatering.</li>
	<li>Odor control systems and chemical applications for chemical and biological waste water treatment systems.</li>
	<li>Heavy metal, sukphate and phosphate removal from waste waters.</li>
	<li>Oil and Grease, metal, acid and kicaustic reuse applications and systems.</li>
<ul>',
            'text_tr' => '<ul>
	<li>Kimyasal arıtma koagulantları ve emülsiyon kırıcıları (organik ve inorganik kökenli)</li>
	<li>Kimyasal veya biyolojik arıtma flokulant polimerleri (sıvı veya toz)</li>
	<li>Kimyasal veya biyolojik arıtma köpük kesicileri</li>
	<li>Kimyasal veya biyolojik çamur susuzlaştırma polimerleri</li>
	<li>Biyolojik arıtma koku kontrol ürünleri</li>
	<li>Atık suda ağır metal, sülfat, fosfat giderimi uygulamaları</li>
	<li>Atık sudan yağ, metal ve asit geri kazanımı uygulamaları</li>
</ul>',
            'text_ru' => '<ul>
	<li>Коагулянты и деэмульгаторы для химической очистки сточных вод (как на органической, так и на неорганической основе)</li>
	<li>Флокулянты для химической и биологической обработки (гранульные или жидкие)</li>
	<li>Пеногасители и пеногасители для систем химической и биологической очистки сточных вод.</li>
	<li>Флокулянты для химического и биологического обезвоживания осадков.</li>
	<li>Системы контроля запаха и химические применения для систем химической и биологической очистки сточных вод.</li>
	<li>Удаление тяжелых металлов, сульфатов и фосфатов из сточных вод.</li>
	<li>Применения и системы для повторного использования масел и жиров, металлов, кислот и щелочей.</li>
<ul>',
            'img' => 'bubble',
            'doc' => '',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->items as $item) {
            DB::table('applications')->insert($item);
        }
    }
}
