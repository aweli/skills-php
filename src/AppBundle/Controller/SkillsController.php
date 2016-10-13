<?php
/**
 * This file is part of skills-php.
 * User: alexwerffeli
 * Date: 13.10.16
 * Time: 10:42
 */

namespace AppBundle\Controller;


use AppBundle\Service\YamlServiceInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SkillsController extends Controller
{
    /**
     * @Route("/skills", name="skills")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $skillsFactory = $this->getSkillsFactory();

        $skills = $skillsFactory->all();

        return new Response(json_encode($skills));
    }

    /**
     * @return YamlServiceInterface
     */
    private function getSkillsFactory()
    {
        return $this->get('app.service.skill');
    }

}
