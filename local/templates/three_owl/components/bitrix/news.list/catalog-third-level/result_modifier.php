<?php
$selectedTypes = array();
if(isset($_GET['filterType'])){
    $selectedTypes = explode(',', $_GET['filterType']);
}

$property_enums = CIBlockPropertyEnum::GetList(array("DEF" => "DESC", "SORT" => "ASC"), array("IBLOCK_ID" => 1));
$typesFieldsAll = array();
$typesOutput = array();
while ($enum_fields = $property_enums->GetNext()) {
//    echo $enum_fields["ID"]." - ".$enum_fields["VALUE"]."<br>";
    $typesFieldsAll[] = $enum_fields['VALUE'];
}

foreach ($arResult['ITEMS'] as $key => $item) {
    if (in_array($item['PROPERTIES']['TYPE']['VALUE'], $typesFieldsAll)) {
        $typesOutput[$key]['VALUE'] = $item['PROPERTIES']['TYPE']['VALUE'];
        if (in_array($item['PROPERTIES']['TYPE']['VALUE'], $selectedTypes)) {
            $typesOutput[$key]['SELECTED'] = 'TRUE';
        }
    }
}

$arResult['TYPES_OUTPUT'] = $typesOutput;

foreach ($arResult['ITEMS'] as $key => $item) {
    if((count($selectedTypes)>0) && (!in_array($item['PROPERTIES']['TYPE']['VALUE'], $selectedTypes))){
        unset($arResult['ITEMS'][$key]);
    }
}

