<?php

namespace Simon;

use Simon\Resources;

class Bootstrap extends \Finix\Bootstrap
{
    public static function init()
    {
        spl_autoload_register(array('\Simon\Bootstrap', 'autoload'));
        self::initializeResources();
    }

    public static function pharInit()
    {
        spl_autoload_register(array('\Simon\Bootstrap', 'pharAutoload'));
        self::initializeResources();
    }

    private static function initializeResources()
    {
        if (self::$initialized)
            return;

        \Finix\Resource::init();

        Resources\User::init();
        Resources\Application::init();
        Resources\Identity::init();
        Resources\Authorization::init();
        Resources\PaymentInstrument::init();
        Resources\BankAccount::init();
        Resources\PaymentCard::init();
        Resources\Transfer::init();
        Resources\Dispute::init();
        Resources\Evidence::init();
        Resources\Webhook::init();
        Resources\Verification::init();
        Resources\Settlement::init();
        Resources\Reversal::init();
        Resources\Processor::init();
        Resources\InstrumentUpdate::init();
        \Finix\Resources\InstrumentUpdate::init();
        Resources\Merchant::init();

        self::$initialized = true;
    }
}