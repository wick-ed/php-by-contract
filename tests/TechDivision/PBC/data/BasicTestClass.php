<?php

/**
 * Created by JetBrains PhpStorm.
 * User: wickb
 * Date: 19.06.13
 * Time: 15:15
 * To change this template use File | Settings | File Templates.
 */

use TechDivision\PBC\Entities\Assertion;
use TechDivision\PBC\Entities\AssertionList;
use TechDivision\PBC\Entities\ClassDefinition;
use TechDivision\PBC\Entities\FunctionDefinition;
use TechDivision\PBC\Entities\FunctionDefinitionList;
use TechDivision\PBC\Entities\ScriptDefinition;

/**
 * Class TestBert
 *
 * @invariant $this->motd === 'Welcome stranger!'
 */
class BasicTestClass
{
    /**
     * @var string
     */
    private $motd = 'Welcome stranger!';

    /**
     * @requires $param1 < 27
     *
     * @param integer $param1
     * @param string $param2
     * @param Exception $param3
     *
     * @return string
     */
    public function concatSomeStuff($param1, $param2, Exception $param3)
    {
        return (string) $param1 . $param2 . $param3->getMessage();
    }

    /**
     * @requires $param1 == 'null'
     *
     * @param string $param1
     *
     * @return array
     */
    public function stringToArray($param1)
    {
        return array($param1);
    }

    /**
     * @requires $ourString === 'stranger'
     *
     * @param string $ourString
     *
     * @ensures $pbcResult === 'Welcome stranger'
     *
     * @return string
     */
    public function stringToWelcome($ourString)
    {
        return "Welcome " . $ourString;
    }

    /**
     *
     */
    public function iBreakTheInvariant()
    {
        $this->motd = 'oh no!!!';
    }

    /**
     *
     */
    public function iDontBreakTheInvariant()
    {
        $this->motd = 'Welcome stranger!';
    }
}