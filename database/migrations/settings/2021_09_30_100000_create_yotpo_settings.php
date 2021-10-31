<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateYotpoSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('yotpo.enabled', false);
        $this->migrator->add('yotpo.app_key', '');
    }

    public function down()
    {
        $this->migrator->delete('yotpo.enabled');
        $this->migrator->delete('yotpo.app_key');
    }
}
