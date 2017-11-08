<?php
namespace App\User\Controller;

use App\User\Command\RegisterCustomerCommand;
use GuzzleHttp\Psr7\Response;
use League\Tactician\CommandBus;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Teapot\StatusCode;

/**
 * Class Register
 */
final class RegisterController
{
    /**
     * @var CommandBus
     */
    private $commandBus;

    /**
     * Register constructor.
     * @param CommandBus $commandBus
     */
    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function registerUser(RequestInterface $request): ResponseInterface
    {
        $registerUserCommand = RegisterCustomerCommand::fromRequest($request);
        $this->commandBus->handle($registerUserCommand);

        new Response(StatusCode::CREATED);
    }
}