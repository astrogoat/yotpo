<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('yotpo.reviews_widget_instance_id', '');
        $this->migrator->add('yotpo.seo_page_instance_id', '');
        $this->migrator->add('yotpo.star_rating_instance_id', '');
    }

    public function down()
    {
        $this->migrator->delete('yotpo.reviews_widget_instance_id');
        $this->migrator->delete('yotpo.seo_page_instance_id');
        $this->migrator->delete('yotpo.star_rating_instance_id');
    }
};
