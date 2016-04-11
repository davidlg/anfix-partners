<?php

/*
* 2006-2015 Lucid Networks
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
*
* DISCLAIMER
*
*  Date: 9/2/16 18:57
*  @author Networkkings <info@lucidnetworks.es>
*  @copyright  2006-2015 Lucid Networks
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

namespace Anfix;

class Journal extends StaticModel
{
    protected static $applicationId = '3';
    protected static $apiUrlSufix = 'report/';
	
   /**
	* Generación del libro Diario.
	* @param array $params Parámetros
	* @param string $companyId Identificador de la empresa
	* @return Object
	*/
	public static function report(array $params,$companyId){
        $result = self::_send($params,$companyId,'journal');
        return $result->outputData->{self::$Model};
	}

}