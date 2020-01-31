<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $adminRole = \HttpOz\Roles\Models\Role::create([
	        'name' => 'Admin',
	        'slug' => 'admin',
	        'description' => 'Custodians of the system.', // optional
	        'group' => 'admin' // optional, set as 'default' by default
	    ]);

        $admin = \App\User::create([
	        'name' => 'Admin',
	        'email' => 'admin@admin.admin',
	        'password' => Illuminate\Support\Facades\Hash::make('password'),
	    ])->attachRole($adminRole);

	    $redactorRole = \HttpOz\Roles\Models\Role::create([
	        'name' => 'Redactor',
	        'slug' => 'redactor',
	        'description' => 'redact numbers.', // optional
	        'group' => 'redactor' // optional, set as 'default' by default
	    ]);

        \App\User::create([
	        'name' => 'Suvorov Roman',
	        'email' => 'suvorov_roman@redactor.redactor',
	        'password' => Illuminate\Support\Facades\Hash::make('redactor'),
	    ])->attachRole($redactorRole);

	    $data = [
		   ['name' => 'Совет директоров'],
		   ['name' => 'Служба внутреннего аудита'],
		   ['name' => 'Корпоративный секретарь'],
		   ['name' => 'Ректор'],
		   ['name' => 'Президент'],
		   ['name' => 'Департамент анализа и стратегии развития'],
		   ['name' => 'Департамент  международного сотрудничества  и академической мобильности'],
		   ['name' => 'Ректорат'],
		   ['name' => 'УМО РУМС'],
		   ['name' => 'Ученый совет'],
		   ['name' => 'Вестник “АУЭС”'],
		   ['name' => 'Совет попечителей'],
		   ['name' => 'Проректор по академической деятельности'],
		   ['name' => 'Департамент по академическим вопросам'],
		   ['name' => 'Центр дистанционного обучения'],
		   ['name' => 'Офис регистратора'],
		   ['name' => 'Центр обслуживания студентов'],
		   ['name' => 'Библиотека'],
		   ['name' => 'Отдел документооборота и архива'],
		   ['name' => 'Колледж “АУЭС”'],
		   ['name' => 'Научно-методический совет'],
		   ['name' => 'Проректор по научной и инновационной деятельности'],
		   ['name' => 'Департамент науки и коммерциализации'],
		   ['name' => 'Отдел по работе с индустриальными партнерами и фондами науки'],
		   ['name' => 'Отдел по сопровождению проектов'],
		   ['name' => 'Отдел по работе с интеллектуальной собственностью'],
		   ['name' => 'Офис программ докторантуры и магистратуры'],
		   ['name' => 'Научно – технический совет'],
		   ['name' => 'Проректор по воспитательной работе'],
		   ['name' => 'Департамент по молодежной политике'],
		   ['name' => 'Отдел по воспитательной работе'],
		   ['name' => 'Офис “Рухани жангыру”'],
		   ['name' => 'Пресс-центр'],
		   ['name' => 'Отдел государственного языка и перевода'],
		   ['name' => 'Совет кураторов'],
		   ['name' => 'Финансовый директор'],
		   ['name' => 'Департамент экономического планирования'],
		   ['name' => 'Департаментов финансов и учета'],
		   ['name' => 'Департамент информационных технологий'],
		   ['name' => 'Департамент маркетинга'],
		   ['name' => 'Институт повышения квалификации'],
		   ['name' => 'AUES Business School'],
		   ['name' => 'HR-директор'],
		   ['name' => 'Отдел по управлению персоналом'],
		   ['name' => 'Отдел системы менеджмента качества'],
		   ['name' => 'Отдел ЧС и спецработ'],
		   ['name' => 'Отдел правового обеспечения'],
		   ['name' => 'Эксплуатационно-хозяйственная служба'],
		   ['name' => 'Институт космической инженерии и телекоммуникаций'],
		   ['name' => 'Кафедра космической инженерии'],
		   ['name' => 'Кафедра телекоммуникационных сетей и систем'],
		   ['name' => 'Кафедра электроники и робототехники'],
		   ['name' => 'Кафедра социальных дисциплин'],
		   ['name' => 'Институт теплоэнергетики и теплотехники'],
		   ['name' => 'Кафедра тепловых энергетических установок'],
		   ['name' => 'Кафедра промышленных теплотехнологий'],
		   ['name' => 'Кафедра инженерной экологии и безопасности труда'],
		   ['name' => 'Кафедра менеджмента и предпринимательства'],
		   ['name' => 'Институт электроэнергетики и электротехники'],
		   ['name' => 'Кафедра электроснабжения и возобновляемых источников энергии'],
		   ['name' => 'Кафедра электрических станций и электроэнергетических систем'],
		   ['name' => 'Кафедра электрических машин и электропривода'],
		   ['name' => 'Кафедра электротехники'],
		   ['name' => 'Институт систем управления и информационной технологии'],
		   ['name' => 'Кафедра IT-инжиниринга'],
		   ['name' => 'Кафедра автоматизации и управления'],
		   ['name' => 'Кафедра систем и информационной безопасности'],
		   ['name' => 'Кафедра математики и математического моделирования'],
		   ['name' => 'Кафедра языковых знаний'],
		];

        \App\Institute::insert($data);
    }
}