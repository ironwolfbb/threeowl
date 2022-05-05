<?php

namespace Wptt;
use Bitrix\Iblock\IblockTable;
use Bitrix\Main\Loader;

class HelpFunctions{
    /**
     * Склонение слова после числа
     * @param $number - число
     * @param $after - массив слов в различных падежах, напр. ['товар', 'товара', 'товаров']
     */

    function debug($text){
        echo '<pre>';
        print_r($text);
        echo '</pre>';
    }

    function plural_form($number, $after) {
        $cases = array (2, 0, 1, 1, 1, 2);
        return $number.' '.$after[ ($number%100>4 && $number%100<20)? 2: $cases[min($number%10, 5)] ];
    }
    /**
     * Получает id инфоблока по символьному коду
     * @param $code
     * @return mixed
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getIBlockIdByCode($code)
    {
        if (Loader::includeModule('iblock')) {

            $iB = IblockTable::getList([
                'select' => ['ID'],
                'filter' => ['CODE' => $code],
                'limit' => '1',
                'cache' => ['ttl' => 3600],
            ]);
            $return = $iB->fetch();
            if (!$return) {
                throw new \Exception('IBlock with code"' . $code . '" not found');
            }
        }

        return $return['ID'];
    }

    public static function getIblockCodeById($id)
    {
        if (Loader::includeModule('iblock')) {

            $iB = IblockTable::getList([
                'select' => ['CODE'],
                'filter' => ['ID' => $id],
                'limit' => '1',
                'cache' => ['ttl' => 3600],
            ]);
            $return = $iB->fetch();
            if (!$return) {
                throw new \Exception('IBlock with id"' . $id . '" not found');
            }
        }

        return $return['CODE'];
    }

    /**
     * Возвращает html код рекламного баннера в блоге
     * @param $id - айди элемента инфоблока Баннер
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getAdBannerById($id){
        if(Loader::includeModule('iblock') ){
            $arSelect = array("ID", "NAME", "PREVIEW_PICTURE");
            $arFilter = array("IBLOCK_CODE" => 'advertising-banner', 'ID'=>$id);
            $res = \CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
            if ($ob = $res->GetNextElement()) {
                $bannerFields = $ob->GetFields();
                $bannerImage =  \CFile::GetPath($bannerFields['PREVIEW_PICTURE']) ;
            }
            else{
                return '<p>Баннер с заданным ID не найден</p>';
            }
            $banner = '<div class="bilboard" style="background-image: url('. $bannerImage .');"><h4>'.$bannerFields['NAME'] .'</h4></div>';
            return $banner;

        }
    }

    public static function getSectionById($id){
        if(\CModule::IncludeModule("iblock")){
            $arSelect = array("ID","NAME", 'UF_POSTS_REL', 'DEPTH_LEVEL');
            $arFilter = array("IBLOCK_ID"=>self::getIBlockIdByCode('products'),'ID'=>$id);
            $obSections = \CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
            $arResult = $obSections->GetNext();
            return $arResult;
        }
    }

    public static function isSectionEmpty($code){
        if(Loader::includeModule('iblock') ) {
            $res = \CIBlockSection::GetList(array(), array('CODE' => $code));
            $id = $res->Fetch()['ID'];
            $count = \CIBlockSection::GetSectionElementsCount($id);
            if ($count == 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function getSubSections($parentId, $iblockID, $filter=array(), $select=array()){
        if(Loader::includeModule('iblock') ) {
            $filter['SECTION_ID'] = $parentId;
            $filter['IBLOCK_ID'] = $iblockID;
            self::debug($filter);
            $res = \CIBlockSection::GetList(array("SORT"=>"ASC"), $filter, false, $select, false);
            $subSections = array();
            while($arRes = $res->GetNext()){
                self::debug($arRes);
            }

        }
    }

}