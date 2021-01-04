<?php
namespace App\Repository;

use App\Interfaces\BillerInterface;
use App\Interfaces\BillingNotifierInterface;



class StripeBiller implements BillerInterface
{
    public function __construct(BillingNotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }
    public function bill(array $user, $amount)
    {
        // Bill the user via Stripe...
        $this->notifier->notify($user, $amount);
    }
}