<?php
namespace App\User\Command;

use Psr\Http\Message\RequestInterface;

/**
 * Class RegisterCustomerCommand
 * @package App\User\Command
 */
final class RegisterCustomerCommand
{
    private $registrant;

    /**
     * @return RegisterCustomerCommand
     */
    public static function fromRequest(RequestInterface $request): self
    {
        return new static();
    }

    /**
     * @return mixed
     */
    public function registrant()
    {
        return $this->registrant;
    }
}