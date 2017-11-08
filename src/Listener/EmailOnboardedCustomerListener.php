<?php
namespace WorldFirst\CommmandBusDemo\Listener;
use App\User\Command\EmailOnboardedCustomerCommand;
use League\Tactician\CommandBus;
use WorldFirst\CommmandBusDemo\Event\CustomerOnboarded;

/**
 * Class EmailOnboardedCustomerListener
 */
final class EmailOnboardedCustomerListener
{
    /**
     * @var CommandBus
     */
    private $commandBus;

    /**
     * @param CustomerOnboarded $event
     */
    public function handle(CustomerOnboarded $event)
    {
        $command = EmailOnboardedCustomerCommand::fromOnboardedCustomer(
            $event->customer()
        );
        $this->commandBus->handle($command);
    }
}