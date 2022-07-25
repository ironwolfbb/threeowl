<?php

use Sprint\Options\Builder\Builder;

return (new Builder)
    ->setTitle('Настройки контента')
    ->setSort(60)
    ->addPage('Сквозное')
    ->addTab('Главная')
    ->addOption('GLOBAL_TOP_MSG', [
        'TITLE'   => 'Сквозное уведомление',
        'DEFAULT' => 'Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым.',
        'WIDTH'   => '1000',
    ])
    ->addPage('Контакты')
    ->addTab('Соцсети')
    ->addOption('INSTAGRAM_CONTACTS_URL', [
        'TITLE'   => 'Ссылка на Инстаграм',
        'DEFAULT' => '',
        'WIDTH'   => '1000',
    ])
    ->addOption('FACEBOOK_CONTACTS_URL', [
        'TITLE'   => 'Ссылка на Фейсбук',
        'DEFAULT' => '',
        'WIDTH'   => '1000',
    ])
    ->addOption('VK_CONTACTS_URL', [
        'TITLE'   => 'Ссылка на ВКонтакте',
        'DEFAULT' => '',
        'WIDTH'   => '1000',
    ])
    ->addTab('Контактная информация')
    ->addOption('ADDRESS', [
        'TITLE'   => 'Адрес',
        'DEFAULT' => '',
        'WIDTH'   => '1000',
    ])
    ->addOption('PHONE', [
        'TITLE'   => 'Телефон',
        'DEFAULT' => '',
        'WIDTH'   => '1000',
    ])
    ->addOption('MAIL', [
        'TITLE'   => 'Почта',
        'DEFAULT' => '',
        'WIDTH'   => '1000',
    ])
    ->addOption('MAP', [
        'TITLE'   => 'Ссылка на карте',
        'DEFAULT' => '',
        'WIDTH'   => '1000',
    ])
    ;
