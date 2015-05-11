<?php namespace Definitely246\Pharos\Common;

class ValidationException extends \Exception
{
    public function __construct($message, $validator, $redirectUrl = null, $sessionMessage = null)
    {
        parent::__construct($message);

        $this->validator = $validator;
        $this->redirectUrl = $redirectUrl;
        $this->sessionMessage = $sessionMessage;
    }

    public function getValidator()
    {
        return $this->validator;
    }

    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    public function getSessionMessage()
    {
        return $this->sessionMessage;
    }
}