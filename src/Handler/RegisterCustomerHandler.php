<?php
namespace WorldFirst\CommmandBusDemo\Handler;

use App\User\Command\RegisterCustomerCommand;
use WorldFirst\CommmandBusDemo\Event\CustomerOnboarded;

/**
 * Class RegisterCustomerHandler
 */
final class RegisterCustomerHandler
{
    private $emitter;

    private $onboarder;

    /**
     * @param RegisterCustomerCommand $command
     */
    public function handle(RegisterCustomerCommand $command)
    {
        $customer = $this->onboarder->onboard($command->registrant());
        $this->emitter->emit(CustomerOnboarded::fromOnboardedCustomer($customer));
    }
}