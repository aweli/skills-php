<?php
/**
 * This file is part of skills-php.
 * User: alexwerffeli
 * Date: 13.10.16
 * Time: 10:17
 */

namespace AppBundle\Service;

use AppBundle\Exception\YamlParseException;
use Symfony\Component\Yaml\Yaml;

class YamlService
{

    protected $data;

    /**
     * YamlService constructor.
     * @param string $file
     */
    public function __construct($file)
    {
        $this->data = $this->getYaml($file);
    }

    /**
     * @param $file
     * @return mixed
     * @throws \Exception
     */
    private function getYaml($file)
    {
        $file = sprintf('%s.yml', $file);

        if (!is_readable($file)) {
            throw new YamlParseException($file);
        }
        return  Yaml::parse(file_get_contents($file));
    }

}
