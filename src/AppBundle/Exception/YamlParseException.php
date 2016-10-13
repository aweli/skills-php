<?php

/**
 * This file is part of skills-php.
 * User: alexwerffeli
 * Date: 13.10.16
 * Time: 11:24
 */

namespace AppBundle\Exception;

class YamlParseException extends \Exception
{


    /**
     * YamlParseException constructor.
     * @param string $file
     */
    public function __construct($file)
    {
        $message = sprintf('File `%s` cannot be located.', $file);
        parent::__construct($message);
    }
}
