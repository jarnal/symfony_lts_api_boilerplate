<?php

namespace PeopleBundle\Exception;

use GlobalBundle\Exception\InvalidEntityFormException;

/**
 * Class InvalidFormException
 * @package TeamManager\PlayerBundle\Exception
 */
class InvalidUserFormException extends InvalidEntityFormException
{

    /**
     * @param string $message
     * @param null $form
     */
    public function __construct($message, $form = null)
    {
        parent::__construct($message, $form);
    }

}