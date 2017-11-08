<?php
namespace App\User\Command;

use WorldFirst\CommmandBusDemo\OnboardedCustomer;

/**
 * Class EmailOnboardedCustomerCommand
 * @package App\User\Command
 */
final class EmailOnboardedCustomerCommand
{
    /**
     * @param OnboardedCustomer $customer
     *
     * @return EmailOnboardedCustomerCommand
     */
    public static function fromOnboardedCustomer(OnboardedCustomer $customer): self
    {
        return new static();
    }
}