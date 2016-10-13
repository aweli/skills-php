<?php

/**
 * This file is part of skills-php.
 * User: alexwerffeli
 * Date: 13.10.16
 * Time: 10:18
 */

namespace AppBundle\Service;

class SkillsFactory extends YamlService implements YamlServiceInterface
{

    /**
     * @inheritdoc
     */
    public function all()
    {
        return $this->data;
    }

}
