<?php

namespace Bim\Db\Generator\Providers;

use Bim\Db\Generator\Code;
use Bim\Exception\BimException;
use Sv4\Btx\Tools\Mapper;


/**
 * Class SiteGen
 */
class IblockForm extends Code
{

    /**
     * Form constructor.
     */
    public function __construct()
    {
        # Требует обязательного подключения модуля
        # Iblock

        \CModule::IncludeModule('iblock');
        \CModule::IncludeModule("sv4.tools");
    }

    /**
     * Генерация создания
     *
     * @param $siteId
     * @return string
     */
    public function generateAddCode($iblockCode)
    {
        $id = Mapper::instance()->getId($iblockCode);
        $userOption = \CUserOptions::GetOption('form', 'form_element_' . $id);
        $tabs = explode(";", $userOption["tabs"]);
        return $this->getMethodContent('Bim\Db\Main\FormIntegrate', 'Add', [$iblockCode, $tabs]);
    }

    /**
     * Генерация кода обновления
     *
     * generateUpdateCode
     * @param $params
     * @return mixed|void
     */
    public function generateUpdateCode($params)
    {
        // Update
    }

    /**
     * Метод для генерации кода удаления
     *
     * generateDeleteCode
     * @param $siteId
     * @return mixed
     */
    public function generateDeleteCode($siteId)
    {

        // Delete
    }

    public function checkParams($params)
    {
        // Check
    }



}