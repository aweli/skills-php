<?php
/**
 * This file is part of skills-php.
 * User: alexwerffeli
 * Date: 13.10.16
 * Time: 10:42
 */

namespace AppBundle\Controller;


use AppBundle\Service\YamlServiceInterface;
use FOS\RestBundle\Controller\FOSRestController;

class ApiController extends FOSRestController
{

    public function getSkillsAction()
    {
        $skillsFactory = $this->getSkillsFactory();

        return $skillsFactory->all();
    }

    /**
     * @return YamlServiceInterface
     */
    private function getSkillsFactory()
    {
        return $this->get('app.service.skill');
    }

}
