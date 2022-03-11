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
    ]);
