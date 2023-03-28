<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
	public $posts = [
		[
			'title_en' => 'Our New Technology ULTRAFINEBUBBLE SYSTEM (UFB)',
			'title_tr' => 'Yeni Teknolojimiz ULTRAFINE BUBBLE SİSTEMİ (UFB)',
			'title_ru' => 'Наша новая технология Сверхмелкопузырьковая система (UFB)',
			'text_en' => 'Ultrafine bubble system (UFB) is a micro size gas bubble system in which gas bubbles (can be air, oxygen, ozone, nitrogen, carbon dioxide or any other gas) with diameters ranging from 5-50 microns are formed in water, sticking to each other without any spaces among them. UFB system is used in the fields of improved flotation in waste water treatment systems, increasing aeration efficiency and reducing costs in seafood production, reducing operational costs by increasing washing and cleaning performances in food and metal industries, increasing the growth rates and yields of vegetables and fruits and also improving hygienic conditions in agricultural areas.',
			'text_tr' => 'Ultrafine bubble sistemi (UFB) çapları 5-50 mikron arasında değişen gaz (hava, oksijen, ozon, nitrojen, karbondioksit veya herhangi başka bir gaz olabilir) kabarcıklarının su içerisinde birbirine yapışık ve aralarında hiç boşluk kalmayacak şekilde oluşturulduğu bir mikro gaz kabarcığı sistemi olup; atık su arıtma sistemlerinde iyileştirilmiş flotasyon, deniz mahsülleri üretiminde havalandırma veriminin arttırılması ve masrafların azaltılması , gıda ve metal endüstrilerinde yıkama ve temizlik performanslarının arttırılarak işletme maliyetlerinin düşürülmesi ve tarımsal alanda ise sebze ve meyvelerin büyüme hızlarının ve verimlerinin arttırılması ve hijyenik koşullarının iyileştirilmesi alanlarında kullanılmaktadır.',
			'text_ru' => 'Сверхмелкопузырьковая система (UFB) представляет собой систему газовых пузырьков микроразмера, в которой газовые пузырьки (это может быть воздух, кислород, озон, азот, углекислый газ или любой другой газ) диаметром от 5 до 50 микрон образуются в воде, прилипая к между собой без пробелов между ними. Система UFB используется в областях улучшения флотации в системах очистки сточных вод, повышения эффективности аэрации и снижения затрат при производстве морепродуктов, снижения эксплуатационных расходов за счет увеличения производительности промывки и очистки в пищевой и металлургической промышленности, увеличения скорости роста и урожайности овощей и фруктов, а также улучшение санитарно-гигиенических условий в сельскохозяйственных районах.',
			'img' => '',
			'video' => '',
			'doc' => '',

		],
		[
			'title_en' => 'General Information about Industrial Water Treatment',
			'title_tr' => 'Endüstriyel Su Islahı Hakkında Genel Bilgiler',
			'title_ru' => 'Общая информация о промышленной рекультивации воды',
			'text_en' => 'Water is indispensable for life. Water is used for a wide variety of purposes today. The whole of the improvement processes carried out in order to bring the water to the required formation where it is used for industrial purposes is called WATER TREATMENT. By using the latest techniques, Orga Kimya provides fast and reliable water treatment solutions which are harmless for the environment solutions. Orga Kimya aims to use its years of experience and knowledge in water treatment whenever and wherever you may need it.',
			'text_tr' => 'Su canlılığın vazgeçilmezidir. Su günümüzde çok çeşitli amaçlarla kullanılır. Suyun endüstriyel amaçlarla kullanıldığı yerlerde ihtiyaç duyulan formasyona getirilmesi amacıyla yapılan ıslah işlemlerinin bütününe SU ŞARTLANDIRMASI denir. Orga Kimya dünyadaki en son teknikleri kullanarak hem canlılara hem de çevreye zararsız su şartlandırması yaparak sizler için her türlü endüstriyel su şartlandırması ihtiyacınıza hızlı ve güvenilir çözümler üretir. Orga Kimya su şartlandırma konusunda sahip olduğu yıllara dayanan tecrübesi ve bilgi birikimini sizler için ihtiyaç duyacağınız her zaman ve her yerde kullanmayı amaç edinmiştir.',
			'text_ru' => 'Сегодня вода используется для самых разных целей. Совокупность процессов улучшения, проводимых с целью доведения воды до требуемого состояния, где она используется в производственных целях, называется ВОДОПОДГОТОВКОЙ. Используя новейшие технологии, Orga Kimya предлагает быстрые и надежные решения по очистке воды, безвредные для окружающей среды. Orga Kimya стремится использовать свой многолетний опыт и знания в области очистки воды в любое время и в любом месте.',
			'img' => '',
			'video' => '',
			'doc' => '',
		],
	];

	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		foreach( $this->posts as $post ) {
            DB::table('posts')->insert($post);
        }
	}
}