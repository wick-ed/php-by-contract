<?php
/**
 * Created by JetBrains PhpStorm.
 * User: wickb
 * Date: 20.06.13
 * Time: 10:31
 * To change this template use File | Settings | File Templates.
 */
namespace TechDivision\PBC\Entities\Definitions;

use TechDivision\PBC\Entities\Lists\AssertionList;
use TechDivision\PBC\Entities\Lists\AttributeDefinitionList;
use TechDivision\PBC\Entities\Lists\FunctionDefinitionList;

/**
 * Class InterfaceDefinition
 */
class InterfaceDefinition
{
    /**
     * @var string
     */
    public $docBlock;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $extends;

    /**
     * @var array
     */
    public $constants;

    /**
     * @var AssertionList
     */
    public $invariantConditions;

    /**
     * @var FunctionDefinitionList
     */
    public $functionDefinitions;

    /**
     * Default constructor
     */
    public function __construct()
    {
        $this->docBlock = '';
        $this->name = '';
        $this->extends = '';
        $this->constants = array();
        $this->invariantConditions = new AssertionList();
        $this->functionDefinitions = new FunctionDefinitionList();
    }
}