<?php
/**
 * Created by JetBrains PhpStorm.
 * User: wickb
 * Date: 26.06.13
 * Time: 09:44
 * To change this template use File | Settings | File Templates.
 */

class Config
{
    public function __construct()
    {
        $this->config = array(
            'AutoLoader' => array(
                'omit' => array('TechDivision\PBC'),
                'projectRoot' => realpath('../../')
            ),
            'Parser' => array(
                'enforceDefaultTypeSafety' => true
            )
        );
    }

    /**
     * @param null $aspect
     *
     * @return array
     */
    public function getConfig($aspect = NULL)
    {
        if (!is_null($aspect) && isset($this->config[$aspect])) {

            return $this->config[$aspect];

        } else {

            return $this->config;
        }
    }
}
