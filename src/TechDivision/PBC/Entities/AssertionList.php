<?php
/**
 * Created by JetBrains PhpStorm.
 * User: wickb
 * Date: 19.06.13
 * Time: 16:15
 * To change this template use File | Settings | File Templates.
 */

namespace TechDivision\PBC\Entities;

require_once __DIR__ . "/TypedList.php";

class AssertionList extends TypedList
{

    public function __construct()
    {
        $this->itemType = 'TechDivision\PBC\Entities\Assertion';
    }
}