<?php

use Illuminate\Database\Seeder;

use App\Institute;

class NumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => "Шайкенова Айнур",
                'position' => "Секретарь ректора",
                'cabinet' => "A-215",
                'email' => "a.shaikenova@aues.kz",
                'local_number' => "1102",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Гита Валдовна Ревалде",
                'position' => "Президент",
                'cabinet' => "A-222",
                'email' => "g.revalde@mail.ru",
                'local_number' => "1103",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Илибаев Мирас Хамитович ",
                'position' => "Помощник ректора",
                'cabinet' => "A-220",
                'email' => "m.ilibayev@aues.kz",
                'local_number' => "1104",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Коньшин Сергей Владимирович",
                'position' => "Проректор по академической деятельности",
                'cabinet' => "А-203",
                'email' => "s.konshin@aues.kz",
                'local_number' => "1201",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Нуртаева Айнур Душембаевна",
                'position' => "Секретарь проректора",
                'cabinet' => "А-204",
                'email' => "a.nurtaeva@aues.kz",
                'local_number' => "1202",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Саухимов Алмаз Абжалиевич",
                'position' => "Проректор по научной и инновационной деятельности",
                'cabinet' => "А-209",
                'email' => "a.saukhimov@aues.kz",
                'local_number' => "1203",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Арзуева Саниям",
                'position' => "Секретарь проректора",
                'cabinet' => "А-209",
                'email' => "s.arzueva@aues.kz",
                'local_number' => "1204",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Махмутов Серик Капанович",
                'position' => "Проректор по воспитательной работе",
                'cabinet' => "А-221",
                'email' => "s.makhmutov@aues.kz",
                'local_number' => "1205",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Сейткулова Клара Досимбетовна",
                'position' => "Секретарь проректора",
                'cabinet' => "А-221",
                'email' => "k.seitkulova@aues.kz",
                'local_number' => "1206",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Стояк Вячеслав Владимирович",
                'position' => "Советник ректора",
                'cabinet' => "А-224",
                'email' => "v.stoyak@aues.kz",
                'local_number' => "6731",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Серикова Сания Сериковна",
                'position' => "Пресс секретарь",
                'cabinet' => "A-225",
                'email' => "s.serikova@aues.kz",
                'local_number' => "7001",
                'telephone_number' => "",
                'structure' => "Ректорат"
            ],
            [
                'name' => "Басен Жигер",
                'position' => "Директор",
                'cabinet' => "А-230",
                'email' => "zh.bassen@aues.kz",
                'local_number' => "1111",
                'telephone_number' => "",
                'structure' => "Департамент анализа и стратегии развития"
            ],
            [
                'name' => "Шуебаева Динара Амангельдиевна",
                'position' => "Специалист",
                'cabinet' => "А-230",
                'email' => "d.shuebayeva@aues.kz",
                'local_number' => "1112",
                'telephone_number' => "",
                'structure' => "Департамент анализа и стратегии развития"
            ],
            [
                'name' => "Альмуратова Камшат Бимуратовна",
                'position' => "Ответственный секретарь",
                'cabinet' => "А-124",
                'email' => "k.almuratova@aues.kz",
                'local_number' => "1301",
                'telephone_number' => "",
                'structure' => "Приемная коммисия"
            ],
            [
                'name' => "Бегимбетова Айнур Серикбаевна",
                'position' => "Учёный секретарь",
                'cabinet' => "А-211",
                'email' => "a.begimbetova@aues.kz",
                'local_number' => "1302",
                'telephone_number' => "",
                'structure' => "Ученый совет"
            ],
            [
                'name' => "Смагулова Галия Сериковна",
                'position' => "Ответственный секретарь",
                'cabinet' => "А-309",
                'email' => "g.smagulova@aues.kz",
                'local_number' => "1401",
                'telephone_number' => "",
                'structure' => "Совет выпускников-попечителей"
            ],
            [
                'name' => "Сергазина Аида Адильбековна",
                'position' => "Советник председателя",
                'cabinet' => "Д-308",
                'email' => "a.sergazina@aues.kz",
                'local_number' => "1501",
                'telephone_number' => "",
                'structure' => "Совет Директоров АУЭС"
            ],
            [
                'name' => "Джангиров Амирбек Галимович",
                'position' => "Корпоративный секретарь",
                'cabinet' => "Д-308",
                'email' => "a.jangirov@aues.kz",
                'local_number' => "1502",
                'telephone_number' => "",
                'structure' => "Совет Директоров АУЭС"
            ],
            [
                'name' => "Бахтияр Балжан Турепашовна",
                'position' => "Директор",
                'cabinet' => "Д-301",
                'email' => "b.bakhtiyar@aues.kz",
                'local_number' => "2001",
                'telephone_number' => "",
                'structure' => "Институт теплоэнергетики и теплотехники (ИТЭТТ)"
            ],
            [
                'name' => "Умышев Диас Райбекович",
                'position' => "Зам. директора",
                'cabinet' => "Д-301",
                'email' => "d.umyshev@aues.kz",
                'local_number' => "2002",
                'telephone_number' => "",
                'structure' => "Институт теплоэнергетики и теплотехники (ИТЭТТ)"
            ],
            [
                'name' => "Амренова Айгуль Жанузаковн",
                'position' => "Зам. директора",
                'cabinet' => "Д-301",
                'email' => "zh.koyshybaeva@aues.kz",
                'local_number' => "2003",
                'telephone_number' => "",
                'structure' => "Институт теплоэнергетики и теплотехники (ИТЭТТ)"
            ],
            [
                'name' => "Турсунбаева Гулжамал Уйезб",
                'position' => "Приемная института",
                'cabinet' => "Д-301",
                'email' => "g.tursunbayeva@aues.kz",
                'local_number' => "2004",
                'telephone_number' => "",
                'structure' => "Институт теплоэнергетики и теплотехники (ИТЭТТ)"
            ],
            [
                'name' => "Кибарин Андрей Анатольевич",
                'position' => "Заведующий",
                'cabinet' => "А-503",
                'email' => "a.kybaryn@aues.kz",
                'local_number' => "2101",
                'telephone_number' => "",
                'structure' => "Кафедра тепловых энергетических установок"
            ],
            [
                'name' => "Преподавательская кафедра",
                'position' => "Преподавательская",
                'cabinet' => "Д-303",
                'email' => "teu@aues.kz",
                'local_number' => "2102",
                'telephone_number' => "",
                'structure' => "Кафедра тепловых энергетических установок"
            ],
            [
                'name' => "Мусабеков Расулбек Ахылбек",
                'position' => "Лаборатория котельных установок и газовых турбин",
                'cabinet' => "А-505",
                'email' => "r.musabekov@aues.kz",
                'local_number' => "2103",
                'telephone_number' => "",
                'structure' => "Кафедра тепловых энергетических установок"
            ],
            [
                'name' => "Умбетов Ерик Сериккалиевич",
                'position' => "Заведующий",
                'cabinet' => "Д-203",
                'email' => "e.umbetov@aues.kz",
                'local_number' => "2201",
                'telephone_number' => "",
                'structure' => "Кафедра промышленной теплоэнергетики"
            ],
            [
                'name' => "Сериков Эрнест Акимович",
                'position' => "Профессор",
                'cabinet' => "А-229",
                'email' => "e.serykov@aues.kz",
                'local_number' => "2202",
                'telephone_number' => "",
                'structure' => "Кафедра промышленной теплоэнергетики"
            ],
            [
                'name' => "Преподавательская кафедры промышленной теплоэнергетики",
                'position' => "Преподавательская",
                'cabinet' => "Д-203",
                'email' => "pte@aues.kz",
                'local_number' => "2203",
                'telephone_number' => "",
                'structure' => "Кафедра промышленной теплоэнергетики"
            ],
            [
                'name' => "Абикенова Асель Амангельдиевна",
                'position' => "Заведующий",
                'cabinet' => "Д-205",
                'email' => "a.abikenova@aues.kz",
                'local_number' => "2301",
                'telephone_number' => "",
                'structure' => "Кафедра безопасности труда и инженерной экологии"
            ],
            [
                'name' => "Преподавательская кафедра безопасности труда и инженерной экологии",
                'position' => "Преподавательская",
                'cabinet' => "Д-205",
                'email' => "ot@aues.kz",
                'local_number' => "2302",
                'telephone_number' => "",
                'structure' => "Кафедра безопасности труда и инженерной экологии"
            ],
            [
                'name' => "Санатова Тоты Сабировна",
                'position' => "Испытательная лаборатория",
                'cabinet' => "А-017",
                'email' => "t.sanatova@aues.kz",
                'local_number' => "2303",
                'telephone_number' => "",
                'structure' => "Кафедра безопасности труда и инженерной экологии"
            ],
            [
                'name' => "Салыкова Мадина Салыковна",
                'position' => "Заведующий",
                'cabinet' => "Д-302",
                'email' => "m.salykova@aues.kz",
                'local_number' => "2401",
                'telephone_number' => "",
                'structure' => "Кафедра менеджмента и предпринимательства "
            ],
            [
                'name' => "Абдимуратов Жубаныш Суйнуллаевич",
                'position' => "Директор",
                'cabinet' => "Д-209",
                'email' => "zh.abdymuratov@aues.kz",
                'local_number' => "3001",
                'telephone_number' => "",
                'structure' => "Институт электроэнергетики и электротехники (ИЭЭЭТ)"
            ],
            [
                'name' => "Асанова Камиля Майдиновна",
                'position' => "Зам. директора",
                'cabinet' => "Д-209",
                'email' => "k.asanova@aues.kz",
                'local_number' => "3002",
                'telephone_number' => "",
                'structure' => "Институт электроэнергетики и электротехники (ИЭЭЭТ)"
            ],
            [
                'name' => "Мананбаева Светлана Евгеньевна ",
                'position' => "Зам. директора",
                'cabinet' => "Д-209",
                'email' => "s.mananbaeva@aues.kz",
                'local_number' => "3003",
                'telephone_number' => "",
                'structure' => "Институт электроэнергетики и электротехники (ИЭЭЭТ)"
            ],
            [
                'name' => "Кайырханова Карлыгаш Талгатовна",
                'position' => "Приемная института",
                'cabinet' => "Д-209",
                'email' => "k.kaiyrkhanova@aues.kz",
                'local_number' => "3004",
                'telephone_number' => "",
                'structure' => "Институт электроэнергетики и электротехники (ИЭЭЭТ)"
            ],
            [
                'name' => "Тергемес Қажыбек Тілеуғалиұлы",
                'position' => "Заведующий",
                'cabinet' => "Д-202",
                'email' => "k.tergemes@aues.kz",
                'local_number' => "3101",
                'telephone_number' => "",
                'structure' => "Кафедра электроснабжения и возобновляемых источников энергии"
            ],
            [
                'name' => "Нурмаханова Камшат Рахметовна",
                'position' => "Преподавательская",
                'cabinet' => "Д-202",
                'email' => "k.nurmakhanova@aues.kz",
                'local_number' => "3102",
                'telephone_number' => "",
                'structure' => "Кафедра электроснабжения и возобновляемых источников энергии"
            ],
            [
                'name' => "Умбеткулов Ертуган Кожагулович",
                'position' => "Заведующий",
                'cabinet' => "Д-201",
                'email' => "e.umbetkulov@aues.kz",
                'local_number' => "3201",
                'telephone_number' => "",
                'structure' => "Кафедра электрических станций и электроэнергетических систем "
            ],
            [
                'name' => "Жағипарова Мадина Хамзақызы",
                'position' => "Преподавательская",
                'cabinet' => "Д-201",
                'email' => "m.zhagyparova@aues.kz",
                'local_number' => "3203",
                'telephone_number' => "",
                'structure' => "Кафедра электрических станций и электроэнергетических систем "
            ],
            [
                'name' => "Оржанова Жанар Керимбековна",
                'position' => "Заведующий",
                'cabinet' => "Д-207",
                'email' => "z.orzhanova@aues.kz",
                'local_number' => "3301",
                'telephone_number' => "",
                'structure' => "Кафедра электрических машин и электропривода"
            ],
            [
                'name' => "Маирова Рыскуль Байдаховна",
                'position' => "Преподавательская",
                'cabinet' => "Д-207",
                'email' => "r.mairova@aues.kz",
                'local_number' => "3302",
                'telephone_number' => "",
                'structure' => "Кафедра электрических машин и электропривода"
            ],
            [
                'name' => "Мусапирова Гульзада Даулетбековна",
                'position' => "Заведующая",
                'cabinet' => "Д-204",
                'email' => "g.musapirova@aues.kz",
                'local_number' => "3401",
                'telephone_number' => "",
                'structure' => "Кафедра электротехники"
            ],
            [
                'name' => "Балбаев Гани Кудайбергенович",
                'position' => "Директор",
                'cabinet' => "Д-307",
                'email' => "g.balbaev@aues.kz",
                'local_number' => "4001",
                'telephone_number' => "",
                'structure' => "Институт космической техники и телекоммуникаций (ИКТТК)"
            ],
            [
                'name' => "Нұрақын Әдия Абзалқызы",
                'position' => "Приемная института",
                'cabinet' => "Д-307",
                'email' => "a.isef@aues.kz",
                'local_number' => "4002",
                'telephone_number' => "",
                'structure' => "Институт космической техники и телекоммуникаций (ИКТТК)"
            ],
            [
                'name' => "Оразалиева Сандугаш Кудайбергеновна",
                'position' => "Зам. директора",
                'cabinet' => "Д-307",
                'email' => "s.orazalieva@aues.kz",
                'local_number' => "4003",
                'telephone_number' => "",
                'structure' => "Институт космической техники и телекоммуникаций (ИКТТК)"
            ],
            [
                'name' => "Сейсенова Динара Орынбаевна",
                'position' => "Зам. директора",
                'cabinet' => "Д-307",
                'email' => "d.seisenova@aues.kz",
                'local_number' => "4004",
                'telephone_number' => "",
                'structure' => "Институт космической техники и телекоммуникаций (ИКТТК)"
            ],
            [
                'name' => "Алипбаев Куаныш Арингожаевич",
                'position' => "Заведующий",
                'cabinet' => "Д-405",
                'email' => "k.alipbayev@aues.kz",
                'local_number' => "4101",
                'telephone_number' => "",
                'structure' => "Кафедра космической техники и технологий"
            ],
            [
                'name' => "Турсунбаева Сымбат Ғаниқызы",
                'position' => "Преподавательская",
                'cabinet' => "Д-407",
                'email' => "s.tursunbayeva@aues.kz",
                'local_number' => "4102",
                'telephone_number' => "",
                'structure' => "Кафедра космической техники и технологий"
            ],
            [
                'name' => "Темырканова Эльвира Кадылбековна",
                'position' => "Заведующий",
                'cabinet' => "Д-305",
                'email' => "e.temyrkanova@aues.kz",
                'local_number' => "4201",
                'telephone_number' => "",
                'structure' => "Кафедры телекоммуникационных сетей и систем"
            ],
            [
                'name' => "Мұрат Ғайни Шакиратқызы",
                'position' => "Преподавательская",
                'cabinet' => "Д-305",
                'email' => "",
                'local_number' => "4202",
                'telephone_number' => "",
                'structure' => "Кафедры телекоммуникационных сетей и систем"
            ],
            [
                'name' => "Чигамбаев Темырбай Отарбаевич",
                'position' => "Заведующий",
                'cabinet' => "Д-306",
                'email' => "t.chigambayev@aues.kz",
                'local_number' => "4301",
                'telephone_number' => "",
                'structure' => " Кафедра электроники и робототехники"
            ],
            [
                'name' => "Серикбаева Канткуль Амановна",
                'position' => "Преподавательская",
                'cabinet' => "Д-306",
                'email' => "k.serikbaeva@aipet.kz",
                'local_number' => "4302",
                'telephone_number' => "",
                'structure' => " Кафедра электроники и робототехники"
            ],
            [
                'name' => "Тайлаков Виктор Александрович",
                'position' => "Лаборатория",
                'cabinet' => "Б-230",
                'email' => "v.tailakov@aues.kz",
                'local_number' => "4303",
                'telephone_number' => "",
                'structure' => " Кафедра электроники и робототехники"
            ],
            [
                'name' => "Кабдушев Болат Жоламанович",
                'position' => "Заведующий",
                'cabinet' => "Д-108",
                'email' => "b.kabdushev@aues.kz",
                'local_number' => "4401",
                'telephone_number' => "",
                'structure' => "Кафедра социальных дисциплин"
            ],
            [
                'name' => "Апашов Сабит Бегманович",
                'position' => "Преподавательская",
                'cabinet' => "Д-108",
                'email' => "s.apashev@aues.kz",
                'local_number' => "4402",
                'telephone_number' => "",
                'structure' => "Кафедра социальных дисциплин"
            ],
            [
                'name' => "Картбаев Тимур Саатдинович",
                'position' => "Директор",
                'cabinet' => "Д-401",
                'email' => "t.kartbaev@aues.kz",
                'local_number' => "5001",
                'telephone_number' => "",
                'structure' => "Институт систем управления и информационных технологий (ИСУИТ)"
            ],
            [
                'name' => "Аманжолова Куралай Ыкиласовна",
                'position' => "Приемная института",
                'cabinet' => "Д-401",
                'email' => "k.amazholova@aues.kz",
                'local_number' => "5002",
                'telephone_number' => "",
                'structure' => "Институт систем управления и информационных технологий (ИСУИТ)"
            ],
            [
                'name' => "Сагындикова Айгуль Журсиновна",
                'position' => "Зам. директора",
                'cabinet' => "Д-401",
                'email' => "a.sagyndikova@aues.kz",
                'local_number' => "5003",
                'telephone_number' => "",
                'structure' => "Институт систем управления и информационных технологий (ИСУИТ)"
            ],
            [
                'name' => "Тоғжанова Кульжан Өндірісовна",
                'position' => "Зам. директора",
                'cabinet' => "Д-401",
                'email' => "k.togzhanova@aues.kz",
                'local_number' => "5004",
                'telephone_number' => "",
                'structure' => "Институт систем управления и информационных технологий (ИСУИТ)"
            ],
            [
                'name' => "Алимсеитова Жулдыз Кенесхановна",
                'position' => "Зам. директора",
                'cabinet' => "Д-401",
                'email' => "zh.alimseitova@aues.kz",
                'local_number' => "5005",
                'telephone_number' => "",
                'structure' => "Институт систем управления и информационных технологий (ИСУИТ)"
            ],
            [
                'name' => "Досжанова Алия Амантаевна",
                'position' => "Заведующий",
                'cabinet' => "Д-403",
                'email' => "a.doszhanova@aues.kz",
                'local_number' => "5101",
                'telephone_number' => "",
                'structure' => "Кафедра IT-инжиниринга"
            ],
            [
                'name' => "Канатбаева Айгуль Кайржановна",
                'position' => "Преподавательская",
                'cabinet' => "Д-403",
                'email' => "a.kanatbaeva@aues.kz",
                'local_number' => "5102",
                'telephone_number' => "",
                'structure' => "Кафедра IT-инжиниринга"
            ],
            [
                'name' => "Федоренко Игорь Анатольевич",
                'position' => "Заведующий",
                'cabinet' => "Д-406",
                'email' => "i.fedorenko@aues.kz",
                'local_number' => "5201",
                'telephone_number' => "",
                'structure' => "Кафедра автоматизации и управления"
            ],
            [
                'name' => "Барабаш Марина Ивановна",
                'position' => "Преподавательская",
                'cabinet' => "Д-406",
                'email' => "b.barabash@aues.kz",
                'local_number' => "5203",
                'telephone_number' => "",
                'structure' => "Кафедра автоматизации и управления"
            ],
            [
                'name' => "Бердибаев Рат Шындалиевич",
                'position' => "Заведующий",
                'cabinet' => "Д-402",
                'email' => "r.berdybaev@aues.kz",
                'local_number' => "5301",
                'telephone_number' => "",
                'structure' => "Кафедра систем информационной безопасности "
            ],
            [
                'name' => "Жандыбаева Максатгуль Алиевна",
                'position' => "Преподавательская",
                'cabinet' => "Д-402",
                'email' => "m.zhandybaieva@aues.kz",
                'local_number' => "5302",
                'telephone_number' => "",
                'structure' => "Кафедра систем информационной безопасности "
            ],
            [
                'name' => "Тулеуп Мейримкул Мухамедияровна",
                'position' => "Заведующий",
                'cabinet' => "Д-401",
                'email' => "m.tuleup@aues.kz",
                'local_number' => "5401",
                'telephone_number' => "",
                'structure' => "Кафедра языковых знаний"
            ],
            [
                'name' => "Байсалова Маншук Жумамуратовна",
                'position' => "Заведующий",
                'cabinet' => "Д-410",
                'email' => "m.baysalova@aues.kz",
                'local_number' => "5501",
                'telephone_number' => "",
                'structure' => "Кафедра математики и математического моделирования"
            ],
            [
                'name' => "Алиева Зарина Юсуфовна",
                'position' => "Начальник отдела по управлению персоналом",
                'cabinet' => "А-232",
                'email' => "z.aliyeva@aues.kz",
                'local_number' => "6111",
                'telephone_number' => "",
                'structure' => "Отдел по управлению персоналом"
            ],
            [
                'name' => "Солтангазинова Шолпан Аесбековна",
                'position' => "Главный специалист",
                'cabinet' => "А-232",
                'email' => "sh.soltangazinova@aues.kz",
                'local_number' => "6112",
                'telephone_number' => "",
                'structure' => "Отдел по управлению персоналом"
            ],
            [
                'name' => "Райымбергенова Камшат Тоқашқызы",
                'position' => "Cпециалисты",
                'cabinet' => "А-232",
                'email' => "k.raiymbergenova@aues.kz",
                'local_number' => "6113",
                'telephone_number' => "",
                'structure' => "Отдел по управлению персоналом"
            ],
            [
                'name' => "Сыдыкова Гулжан Рахымбердиевна",
                'position' => "Ведущий специалист",
                'cabinet' => "А-232",
                'email' => "g.sydykova@aues.kz",
                'local_number' => "6114",
                'telephone_number' => "",
                'structure' => "Отдел по управлению персоналом"
            ],
            [
                'name' => "Чашабаева Кымбат Ардаккызы",
                'position' => "Ведущий специалист",
                'cabinet' => "А-232",
                'email' => "k.chashabaeva@aues.kz",
                'local_number' => "6115",
                'telephone_number' => "",
                'structure' => "Отдел по управлению персоналом"
            ],
            [
                'name' => "Нургазиева Айгуль Бебитовна",
                'position' => "Ведущий специалист",
                'cabinet' => "А-232",
                'email' => "a.nurgazieva@aues.kz",
                'local_number' => "6116",
                'telephone_number' => "",
                'structure' => "Отдел по управлению персоналом"
            ],
            [
                'name' => "Карабалаева Мая Мироновна",
                'position' => "Начальник",
                'cabinet' => "А-115",
                'email' => "m.karabalaeva@aues.kz",
                'local_number' => "6121",
                'telephone_number' => "",
                'structure' => "Отдел документооборота и архива"
            ],
            [
                'name' => "Жалбиева Сания Булатовна",
                'position' => "Архив",
                'cabinet' => "А-514",
                'email' => "s.zhalbiyeva@aues.kz",
                'local_number' => "6122",
                'telephone_number' => "",
                'structure' => "Отдел документооборота и архива"
            ],
            [
                'name' => "Турар Гаухар Сабетжанқызы",
                'position' => "Начальник",
                'cabinet' => "А-228",
                'email' => "g.turar@aues.kz",
                'local_number' => "6131",
                'telephone_number' => "",
                'structure' => "Отдел государственного языка и перевода "
            ],
            [
                'name' => "Нуркежанова Ардақ Болатқызы",
                'position' => "Ведущий специалист ",
                'cabinet' => "А-228",
                'email' => "a.nurkezhanova@aues.kz",
                'local_number' => "6132",
                'telephone_number' => "",
                'structure' => "Отдел государственного языка и перевода "
            ],
            [
                'name' => "Мухамеджанова Руфина Ринатовна",
                'position' => "Директор",
                'cabinet' => "А-205",
                'email' => "r.mukhamejanova@aues.kz",
                'local_number' => "6201",
                'telephone_number' => "",
                'structure' => "Департамент по академическим вопросам"
            ],
            [
                'name' => "Турлыбекова Жазира Нурбековна ",
                'position' => "Главный специалист",
                'cabinet' => "А-204",
                'email' => "zh.turlybekova@aues.kz",
                'local_number' => "6202",
                'telephone_number' => "",
                'structure' => "Департамент по академическим вопросам"
            ],
            [
                'name' => "Байзакова Саягуль Мухтаровна",
                'position' => "Главный специалист",
                'cabinet' => "А-204",
                'email' => "s.bayzakova@aues.kz",
                'local_number' => "6203",
                'telephone_number' => "",
                'structure' => "Департамент по академическим вопросам"
            ],
            [
                'name' => "Наурузова Жанат Сапарбековна",
                'position' => "Диспетчерская",
                'cabinet' => "А-206",
                'email' => "zh.nauruzova@aues.kz",
                'local_number' => "6205",
                'telephone_number' => "",
                'structure' => "Департамент по академическим вопросам"
            ],
            [
                'name' => "Мухаметсариева Гульшат Ибадатовна",
                'position' => "Старший специалист",
                'cabinet' => "A-202",
                'email' => "g.mukhametsariyeva@aues.kz",
                'local_number' => "6206",
                'telephone_number' => "",
                'structure' => "Департамент по академическим вопросам"
            ],
            [
                'name' => "Касымова Галия Кадылбековна",
                'position' => "Центр дистанционного обучения",
                'cabinet' => "Б-315",
                'email' => "g.kasymova@aues.kz",
                'local_number' => "6207",
                'telephone_number' => "",
                'structure' => "Департамент по академическим вопросам"
            ],
            [
                'name' => "Неледва Вера Васильевна",
                'position' => "Начальник ",
                'cabinet' => "Б-308",
                'email' => "v.neledva@aues.kz",
                'local_number' => "6211",
                'telephone_number' => "",
                'structure' => "Офис регистратора"
            ],
            [
                'name' => "Жуматаева Лаура Жанымхановна",
                'position' => "Офис регистратор ИКТТК",
                'cabinet' => "Б-308",
                'email' => "l.zhumatayeva@aues.kz",
                'local_number' => "6212",
                'telephone_number' => "",
                'structure' => "Офис регистратора"
            ],
            [
                'name' => "Зікірбаева Жазира Нүрмүханбетқызы",
                'position' => "Офис регистратор ИТЭТТ и ИСУИТ",
                'cabinet' => "Б-308",
                'email' => "zh.zikirbayeva@aues.kz",
                'local_number' => "6213",
                'telephone_number' => "",
                'structure' => "Офис регистратора"
            ],
            [
                'name' => "Еламанова Айнамкөз Даниярқызы",
                'position' => "Офис регистратор ИЭЭЭТ",
                'cabinet' => "Б-310",
                'email' => "a.elemanova@aues.kz",
                'local_number' => "6214",
                'telephone_number' => "",
                'structure' => "Офис регистратора"
            ],
            [
                'name' => "Оспангалиева Гульназ Адиловна",
                'position' => "Студенческий сектор",
                'cabinet' => "А-321",
                'email' => "g.ospangaliyeva@aues.kz",
                'local_number' => "6215",
                'telephone_number' => "",
                'structure' => "Офис регистратора"
            ],
            [
                'name' => "Нетесова Наталья Степановна",
                'position' => "Директор",
                'cabinet' => "А-121",
                'email' => "n.netesova@aues.kz",
                'local_number' => "6221",
                'telephone_number' => "",
                'structure' => "Библиотека"
            ],
            [
                'name' => "Каспакбаева Меруерт Бейсембаевна",
                'position' => "Читальный зал №4 Периодических изданий",
                'cabinet' => "А-121",
                'email' => "m.kaspakbayeva@aues.kz",
                'local_number' => "6222",
                'telephone_number' => "",
                'structure' => "Библиотека"
            ],
            [
                'name' => "Шакирова Нургуль Халеловна",
                'position' => "Учебный абонемент корпуса «А»",
                'cabinet' => "А-236",
                'email' => "n.shakirova@aues.kz",
                'local_number' => "6223",
                'telephone_number' => "",
                'structure' => "Библиотека"
            ],
            [
                'name' => "Еркинбекова Бибигуль Саудабаевна",
                'position' => "Читальный зал №1 ",
                'cabinet' => "А-127",
                'email' => "b.erkinbekova@aues.kz",
                'local_number' => "6224",
                'telephone_number' => "",
                'structure' => "Библиотека"
            ],
            [
                'name' => "Сайбирова Умит Кожахметовна",
                'position' => "Читальный зал №2 ",
                'cabinet' => "А-127",
                'email' => "u.saibirova@aues.kz",
                'local_number' => "6225",
                'telephone_number' => "",
                'structure' => "Библиотека"
            ],
            [
                'name' => "Айгазина Сауле Серикжановна",
                'position' => "Читальный зал №3  Медиатека",
                'cabinet' => "А-125",
                'email' => "s.aigazina@aues.kz",
                'local_number' => "6226",
                'telephone_number' => "",
                'structure' => "Библиотека"
            ],
            [
                'name' => "Базарбаева Жанылган Сейткамзановна",
                'position' => "Читальный зал №4 Периодических изданий",
                'cabinet' => "А-121",
                'email' => "g.bazarbayeva@aues.kz",
                'local_number' => "6227",
                'telephone_number' => "",
                'structure' => "Библиотека"
            ],
            [
                'name' => "Аршидинов Маликжан Мамежанович",
                'position' => "Директор",
                'cabinet' => "Б-224",
                'email' => "m.arshidinov@aues.kz",
                'local_number' => "6231",
                'telephone_number' => "",
                'structure' => "Колледж АУЭС"
            ],
            [
                'name' => "Ползик Елена Владимировна",
                'position' => "Методист",
                'cabinet' => "Б-209",
                'email' => "e.polsik@aues.kz",
                'local_number' => "6232",
                'telephone_number' => "",
                'structure' => "Колледж АУЭС"
            ],
            [
                'name' => "Шакуалқызы Шырын  ",
                'position' => "Начальник",
                'cabinet' => "Б-132",
                'email' => "sh.shakualkyzy@aues.kz",
                'local_number' => "6251",
                'telephone_number' => "",
                'structure' => "Центр обслуживания студентов"
            ],
            [
                'name' => "Саханов Нурлан Наурызбаеви",
                'position' => "Начальник",
                'cabinet' => "А-326",
                'email' => "n.sakhanov@aues.kz",
                'local_number' => "6252",
                'telephone_number' => "",
                'structure' => "Служба внутреннего аудита"
            ],
            [
                'name' => "Мукашева Гаухар Маратовна",
                'position' => "Специалист",
                'cabinet' => "Б-132",
                'email' => "g.mukasheva@aues.kz",
                'local_number' => "6253",
                'telephone_number' => "",
                'structure' => "Центр обслуживания студентов"
            ],
            [
                'name' => "Апенова Айгул Сагалбаевна",
                'position' => "Директор",
                'cabinet' => "А-222",
                'email' => "a.apenova@aues.kz",
                'local_number' => "6301",
                'telephone_number' => "",
                'structure' => "Департамент международного сотрудничества и академической мобильности"
            ],
            [
                'name' => "Рахметова Гульзия Салатовна ",
                'position' => "Директор – главный бухгалтер",
                'cabinet' => "А-214",
                'email' => "g.rahmetova@aues.kz",
                'local_number' => "6401",
                'telephone_number' => "",
                'structure' => "Департамент финансов и учета"
            ],
            [
                'name' => "Заитова Мукарам Исмаиловна",
                'position' => "Начальник ФУ - зам. главного бухгалтера",
                'cabinet' => "А-212",
                'email' => "m.zaitova@aues.kz",
                'local_number' => "6402",
                'telephone_number' => "",
                'structure' => "Департамент финансов и учета"
            ],
            [
                'name' => "Арзыкулова Акмарал Исмаиловна",
                'position' => "Сектор учета имущества и обязательств",
                'cabinet' => "А-214",
                'email' => "akm.arzykulova@aues.kz",
                'local_number' => "6403",
                'telephone_number' => "",
                'structure' => "Департамент финансов и учета"
            ],
            [
                'name' => "Таирова Гухар Агатовна",
                'position' => "Сектор расчета с работниками",
                'cabinet' => "А-216",
                'email' => "g.tairova@aues.kz",
                'local_number' => "6404",
                'telephone_number' => "",
                'structure' => "Департамент финансов и учета"
            ],
            [
                'name' => "Тажина Мерует Жамалиевна",
                'position' => "Касса",
                'cabinet' => "А-227",
                'email' => "f.kasymova@aues.kz",
                'local_number' => "6406",
                'telephone_number' => "",
                'structure' => "Департамент финансов и учета"
            ],
            [
                'name' => "Изгалиева Жанылсын Сапабековна",
                'position' => "Сектор расчета с работниками",
                'cabinet' => "А-216",
                'email' => "zh.izgalieva@aues.kz",
                'local_number' => "6407",
                'telephone_number' => "",
                'structure' => "Департамент финансов и учета"
            ],
            [
                'name' => "Исагулова Саркыт Иманалиевна",
                'position' => "Сектор расчета с работниками",
                'cabinet' => "А-216",
                'email' => "s.isagulova@aues.kz",
                'local_number' => "6408",
                'telephone_number' => "",
                'structure' => "Департамент финансов и учета"
            ],
            [
                'name' => "Еремеева Алеся Николаевна",
                'position' => "Сектор учета имущества и обязательств",
                'cabinet' => "А-214",
                'email' => "a.eremeeva@aues.kz",
                'local_number' => "6409",
                'telephone_number' => "",
                'structure' => "Департамент финансов и учета"
            ],
            [
                'name' => "Какимова Айгуль Санатовна",
                'position' => "Бухгалтер",
                'cabinet' => "А-216",
                'email' => "a.kakimova@aues.kz",
                'local_number' => "6410",
                'telephone_number' => "",
                'structure' => "Департамент финансов и учета"
            ],
            [
                'name' => "Рахметова Алима Габдул-Салыхқызы",
                'position' => "Сектор учета имущества и обязательств",
                'cabinet' => "А-214",
                'email' => "a.rahmetova@aipet.kz",
                'local_number' => "6411",
                'telephone_number' => "",
                'structure' => "Департамент финансов и учета"
            ],
            [
                'name' => "Аябергенова Айгуль",
                'position' => "Директор",
                'cabinet' => "А-223",
                'email' => "a.ayabergenova@aues.kz",
                'local_number' => "6501",
                'telephone_number' => "",
                'structure' => "Директор по маркетингу и экономическому планированию"
            ],
            [
                'name' => "Джунусова Жанар Султанбековна",
                'position' => "Начальник",
                'cabinet' => "А-223",
                'email' => "zh.dzhunusova@aues.kz",
                'local_number' => "6511",
                'telephone_number' => "",
                'structure' => "Департамент экономического планирования"
            ],
            [
                'name' => "Кашкеев Арман Айтбаевич",
                'position' => "Директор",
                'cabinet' => "А-201",
                'email' => "a.kashkeev@aues.kz",
                'local_number' => "6521",
                'telephone_number' => "",
                'structure' => "Департамент маркетинга"
            ],
            [
                'name' => "Асылбаев Газиз Асқарұлы",
                'position' => "Контакт центр",
                'cabinet' => "А-201",
                'email' => "g.assylbaev@aues.kz",
                'local_number' => "6522",
                'telephone_number' => "",
                'structure' => "Департамент маркетинга"
            ],
            [
                'name' => "Баймамирова Наргиз Нишанбековка",
                'position' => "Дизайнер",
                'cabinet' => "А-201",
                'email' => "n.baimamirova@aues.kz",
                'local_number' => "6523",
                'telephone_number' => "",
                'structure' => "Департамент маркетинга"
            ],
            [
                'name' => "Касенова Алуа Данияровна",
                'position' => "Маркетолог ",
                'cabinet' => "А-201",
                'email' => "a.kassenova@aues.kz",
                'local_number' => "6524",
                'telephone_number' => "",
                'structure' => "Департамент маркетинга"
            ],
            [
                'name' => "Каткаев Владимир",
                'position' => "Директор",
                'cabinet' => "А-515",
                'email' => "v.katkayev@aues.kz",
                'local_number' => "6601",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Водолазкин Владислав Александрович",
                'position' => "Начальник инфомационного технического отдела",
                'cabinet' => "А-516",
                'email' => "v.vodolazkin@aues.kz",
                'local_number' => "6611",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Пустоваченко Андрей Владимирович",
                'position' => "Ведущий инженер",
                'cabinet' => "А-516",
                'email' => "a.pustovachenko@aues.kz",
                'local_number' => "6612",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Айнакулова Эльвира Бексултановна",
                'position' => "Старший инженер",
                'cabinet' => "А-516",
                'email' => "e.ainakulova@aues.kz",
                'local_number' => "6613",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Осокин Антон Олегович",
                'position' => "Инженер",
                'cabinet' => "А-516",
                'email' => "a.osokin@aues.kz",
                'local_number' => "6615",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Бегімбет Батырхан Әбітбекұлы",
                'position' => "Техник",
                'cabinet' => "А-516",
                'email' => "b.begimbet@aues.kz",
                'local_number' => "6616",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Нурсаинов Тимур Талантович",
                'position' => "Инженер",
                'cabinet' => "А-516",
                'email' => "t.nursainov@aues.kz",
                'local_number' => "6617",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Плохотников Роман Евгеньев",
                'position' => "Инженер",
                'cabinet' => "А-516",
                'email' => "r.plohotnikov@aues.kz",
                'local_number' => "6618",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Муханова Камиля Болатбековна",
                'position' => "Начальник отдела сопровождения программных средств",
                'cabinet' => "А-519",
                'email' => "k.mukhanova@aues.kz",
                'local_number' => "6621",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Милованова Наталья Ивановна",
                'position' => "Инженер ",
                'cabinet' => "Б-415",
                'email' => "n.milovanova@aues.kz",
                'local_number' => "6622",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Отыншиева Айнур Мусакызы",
                'position' => "Веб-разработчик ",
                'cabinet' => "А-519",
                'email' => "a.otynshiyeva@aues.kz",
                'local_number' => "6624",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Аубакирова Майя Коныскалиевна",
                'position' => "Инженер",
                'cabinet' => "А-516",
                'email' => "m.aubakirova@aues.kz",
                'local_number' => "6626",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Шенер Анар Викторовна",
                'position' => "Ведущий инженер",
                'cabinet' => "А-405",
                'email' => "a.shener@aues.kz",
                'local_number' => "6631",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Тикишев Талгат Сулейманбек",
                'position' => "Электросвязь",
                'cabinet' => "А-516",
                'email' => "t.tikishev@aues.kz",
                'local_number' => "6632",
                'telephone_number' => "",
                'structure' => "Департамент информационных технологий"
            ],
            [
                'name' => "Алиярова Мадина Бирлесовна",
                'position' => "Директор",
                'cabinet' => "А-411",
                'email' => "m.aliyarova@aues.kz",
                'local_number' => "6701",
                'telephone_number' => "",
                'structure' => "Центр научных исследований и развития технологий"
            ],
            [
                'name' => "Елеманова Алия Аликовна",
                'position' => "Директор ",
                'cabinet' => "А-411",
                'email' => "a.elemanova@aues.kz",
                'local_number' => "6711",
                'telephone_number' => "",
                'structure' => "Офис программ докторантуры и магистратуры"
            ],
            [
                'name' => "Желдибаева Меруерт",
                'position' => "Специалист ОПДМ",
                'cabinet' => "А-411",
                'email' => "m.zheldibayeva@aues.kz",
                'local_number' => "6712",
                'telephone_number' => "",
                'structure' => "Офис программ докторантуры и магистратуры"
            ],
            [
                'name' => "Джексенбиев Дамир Жанатбекович",
                'position' => "Директор",
                'cabinet' => "А-219",
                'email' => "d.dzheksynbynov@aues.kz",
                'local_number' => "6721",
                'telephone_number' => "",
                'structure' => "Офис управления проектами"
            ],
            [
                'name' => "Койшибекова Жамал Алдабергеновна",
                'position' => "Главный специалист",
                'cabinet' => "А-219",
                'email' => "zh.koyshibekova@aues.kz",
                'local_number' => "6723",
                'telephone_number' => "",
                'structure' => "Офис управления проектами"
            ],
            [
                'name' => "Жакупов Алмас Аусыдыкович",
                'position' => "Заведующий ",
                'cabinet' => "А-522",
                'email' => "a.zhakupov@aues.kz",
                'local_number' => "6732",
                'telephone_number' => "",
                'structure' => "ТНИЛ «Исследования проблем топливно-энергетического комплекса»"
            ],
            [
                'name' => "Коробков Максим Сергеевич",
                'position' => "Заведующий ",
                'cabinet' => "А-503",
                'email' => "m.korobkov@aues.kz",
                'local_number' => "6733",
                'telephone_number' => "",
                'structure' => "ТНИЛ «Энергетического мониторинга и экспертизы»"
            ],
            [
                'name' => "Жауыт Әлғазы  ",
                'position' => "Редактор",
                'cabinet' => "А-209",
                'email' => "",
                'local_number' => "6739",
                'telephone_number' => "",
                'structure' => "Редакция журнала “Вестник АУЭС”"
            ],
            [
                'name' => "Садыков Жумабай Абдыманатович ",
                'position' => "Начальник",
                'cabinet' => "Д-103",
                'email' => "sh.sadykov@aues.kz",
                'local_number' => "6811",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Апанасов Сергей Геннадьевич ",
                'position' => "Зам.начальника ",
                'cabinet' => "Б-331",
                'email' => "s.apanasov@aues.kz",
                'local_number' => "6812",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Шакиров Мирхат Шангереевич",
                'position' => "Главный энергетик",
                'cabinet' => "Б-331",
                'email' => "m.shakirov@aues.kz",
                'local_number' => "6813",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Мукажанова Аяжан Дусейновкызы",
                'position' => "Старший инженер по ОТ и ТБ",
                'cabinet' => "Б-331",
                'email' => "a.mukazhanova@aues.kz",
                'local_number' => "6815",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Муталяпова Акерке Дуйсембековна",
                'position' => "Специалист",
                'cabinet' => "Б-331",
                'email' => "a.mutalyapova@aues.kz",
                'local_number' => "6816",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Мирзакулов Валихан Турдыкулович",
                'position' => "Инженер ",
                'cabinet' => "Б-210",
                'email' => "v.mirzakulov@aues.kz",
                'local_number' => "6817",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Султанова Сабиля Булатовна",
                'position' => "Склад",
                'cabinet' => "Б-104",
                'email' => "s.sultanova@aues.kz",
                'local_number' => "6819",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Тлегенова Алмагуль Сериковна",
                'position' => "Вахта корпуса «А»",
                'cabinet' => "А-100",
                'email' => "",
                'local_number' => "6821",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Жумашбекова Мария Рысбаевна",
                'position' => "Вахта корпуса «Б»",
                'cabinet' => "Б-100",
                'email' => "m.zhumashbekova@aues.kz",
                'local_number' => "6822",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Алиметова Рисалат Тохтахуновна",
                'position' => "Вахта корпуса \"Д\"",
                'cabinet' => "Д-100",
                'email' => "",
                'local_number' => "6824",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Общежитие 1 Вахта",
                'position' => "Общежитие 1",
                'cabinet' => "",
                'email' => "",
                'local_number' => "6851",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Общежитие 2 Вахта",
                'position' => "Общежитие 2",
                'cabinet' => "",
                'email' => "",
                'local_number' => "6853",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Общежитие 3 Вахта",
                'position' => "Общежитие 3",
                'cabinet' => "",
                'email' => "",
                'local_number' => "6855",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Алиметова Зумрат Тохтахуновна",
                'position' => "Медицинский кабинет",
                'cabinet' => "Д-107",
                'email' => "r.alimetova@aues.kz",
                'local_number' => "6899",
                'telephone_number' => "",
                'structure' => "Эксплутационно-хозяйственная служба"
            ],
            [
                'name' => "Абдуллина Зарема Альфредовна",
                'position' => "Директор",
                'cabinet' => "А-226",
                'email' => "z.abdullina@aues.kz",
                'local_number' => "6901",
                'telephone_number' => "",
                'structure' => "Департамент по молодежной политике"
            ],
            [
                'name' => "Каракесов Мансур Каирович",
                'position' => "Зам. директора",
                'cabinet' => "А-226",
                'email' => "m.karakesov@aues.kz",
                'local_number' => "6902",
                'telephone_number' => "",
                'structure' => "Департамент по молодежной политике"
            ],
            [
                'name' => "Нұржан Әли Ниязұлы",
                'position' => "Начальник ",
                'cabinet' => "А-235",
                'email' => "a.nurshan@aues.kz",
                'local_number' => "6911",
                'telephone_number' => "",
                'structure' => "Отдел по воспитальной работы"
            ],
            [
                'name' => "Алминова Джамила Сапаровна",
                'position' => "Служба психологической помощи",
                'cabinet' => "Б-306",
                'email' => "d.alminova@aues.kz",
                'local_number' => "6921",
                'telephone_number' => "",
                'structure' => "Отдел по воспитальной работы"
            ],
            [
                'name' => "Дарипбаев Батырхан Абдуллаевич",
                'position' => "Начальник",
                'cabinet' => "А-208",
                'email' => "b.daripbayev@aues.kz",
                'local_number' => "6931",
                'telephone_number' => "",
                'structure' => "Отдел ЧС и спецработ"
            ],
            [
                'name' => "Шихотов Александр Александрович",
                'position' => "Ведущий специалист",
                'cabinet' => "Б-301",
                'email' => "a.shihotov@aues.kz",
                'local_number' => "6932",
                'telephone_number' => "",
                'structure' => "Отдел ЧС и спецработ"
            ],
            [
                'name' => "Абдигулов Алмас Байбергенович ",
                'position' => "Директор",
                'cabinet' => "А-327",
                'email' => "a.abdigulov@aues.kz",
                'local_number' => "6941",
                'telephone_number' => "",
                'structure' => "Институт повышения квалификации и двудипломного образования"
            ],
            [
                'name' => "Амреев Максат",
                'position' => "Заместитель директора",
                'cabinet' => "А-325",
                'email' => "m.amreev@aues.kz",
                'local_number' => "6942",
                'telephone_number' => "",
                'structure' => "Институт повышения квалификации и двудипломного образования"
            ],
            [
                'name' => "Гадылбек Асия",
                'position' => "Ведущий специалист",
                'cabinet' => "А-325",
                'email' => "a.delmukhanbetova@aues.kz",
                'local_number' => "6943",
                'telephone_number' => "",
                'structure' => "Институт повышения квалификации и двудипломного образования"
            ],
            [
                'name' => "Анчевский Дмитрий Игоревич",
                'position' => "Главный специалист",
                'cabinet' => "А-325",
                'email' => "d.anchevskiy@aues.kz",
                'local_number' => "6944",
                'telephone_number' => "",
                'structure' => "Институт повышения квалификации и двудипломного образования"
            ],
            [
                'name' => "Ахметов Ерлан Тлеулесович",
                'position' => "Главный специалист",
                'cabinet' => "А-325",
                'email' => "",
                'local_number' => "6945",
                'telephone_number' => "",
                'structure' => "Институт повышения квалификации и двудипломного образования"
            ],
            [
                'name' => "Джетписбаева Балхия Масимхановна",
                'position' => "Председатель",
                'cabinet' => "А-120А",
                'email' => "b.dzhetpisbayeva@aues.kz",
                'local_number' => "6961",
                'telephone_number' => "",
                'structure' => "Профсоюзный комитет сотрудников"
            ],
            [
                'name' => "Сейпілмәлік Мағжан Мергенбайұлы",
                'position' => "Председатель",
                'cabinet' => "А-315",
                'email' => "",
                'local_number' => "6971",
                'telephone_number' => "",
                'structure' => "Профсоюзный комитет студентов"
            ],
            [
                'name' => "Абдешова Айнур Алимовна",
                'position' => "Юрисконсульт",
                'cabinet' => "А-218",
                'email' => "a.abdeshova@aues.kz",
                'local_number' => "6981",
                'telephone_number' => "",
                'structure' => "Отдел правого обеспечения"
            ],
            [
                'name' => "Порчева Ольга Александровна",
                'position' => "Типография",
                'cabinet' => "А-120",
                'email' => "o.porcheva@aues.kz",
                'local_number' => "9001",
                'telephone_number' => "",
                'structure' => "Департамент по академическим вопросам"
            ],
        ];
        foreach($data as $singleEl){
            $institute = Institute::where('name', $singleEl['structure'])->first();
            if($institute){
                $institute->numbers()->create([
                    'name' => $singleEl['name'],
                    'position' => $singleEl['position'],
                    'cabinet' => $singleEl['cabinet'],
                    'email' => $singleEl['email'],
                    'local_number' => $singleEl['local_number'],
                    'telephone_number' => $singleEl['telephone_number'],
                ]);
            }
            else{
                $institute = Institute::create(['name' => $singleEl['structure']]);

                $institute->numbers()->create([
                    'name' => $singleEl['name'],
                    'position' => $singleEl['position'],
                    'cabinet' => $singleEl['cabinet'],
                    'email' => $singleEl['email'],
                    'local_number' => $singleEl['local_number'],
                    'telephone_number' => $singleEl['telephone_number'],
                ]);
            }
        }
    }
}
