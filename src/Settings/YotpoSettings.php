<?php

namespace Astrogoat\Yotpo\Settings;

use Helix\Lego\Settings\AppSettings;

class YotpoSettings extends AppSettings
{
    public string $app_key;

    protected array $rules = [
        'app_key' => ['required'],
    ];

    public function description(): string
    {
        return 'The most advanced solutions for customer reviews, visual marketing, loyalty, referrals, and SMS marketing.';
    }
}
