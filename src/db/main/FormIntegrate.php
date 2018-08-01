<?php

namespace Bim\Db\Main;

use Bim\Exception\BimException;
use Sv4\Btx\Tools\Mapper;

\CModule::IncludeModule("main");
\CModule::IncludeModule("sv4.tools");

/**
 * Class SiteIntegrate
 * @package Bim\Db\Main
 */
class FormIntegrate
{
    /**
     * Add
     * @param $fields
     * @return array
     * @throws \Exception
     */
    public static function Add($iblockCode, $tabs)
    {
        if (!$iblockCode) {
            throw new BimException('Не указан код инфоблока');
        }
        if (!$tabs) {
            throw new BimException('Не задана настройка формы');
        }

        $id = Mapper::instance()->getId($iblockCode);
        $val = implode(';', $tabs);
        $userOption = \CUserOptions::SetOption('form', 'form_element_' . $id, ['tabs' => $val], true, null);
        return true;
    }

    /**
     * Update
     * @param $ID
     * @param $fields
     */
    public static function Update($ID, $fields)
    {
        // Update
    }

    /**
     * Delete
     * @param $ID
     * @return mixed
     * @throws \Exception
     */
    public static function Delete($ID)
    {
        // Delete
    }


}