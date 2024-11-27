<?php

namespace Astrogoat\Yotpo\Settings;

use Helix\Lego\Settings\AppSettings;

class YotpoSettings extends AppSettings
{
    public string $app_key;
    public string $reviews_widget_instance_id;
    public string $seo_page_instance_id;
    public string $star_rating_instance_id;

    protected array $rules = [
        'app_key' => ['required'],
        'reviews_widget_instance_id' => ['nullable'],
        'seo_page_instance_id' => ['nullable'],
        'star_rating_instance_id' => ['nullable'],
    ];

    public static function sections(): array
    {
        return [
            [
                'title' => 'Instance IDs',
                'description' => 'The instance ID is what controls the which widget should be displayed.',
                'properties' => [
                    'reviews_widget_instance_id',
                    'seo_page_instance_id',
                    'star_rating_instance_id',
                ],
            ],
        ];
    }

    public function labels(): array
    {
        return [
            'reviews_widget_instance_id' => 'Reviews Widget Instance ID',
            'seo_page_instance_id' => 'SEO Page Instance ID',
            'star_rating_instance_id' => 'Star Rating Instance ID',
        ];
    }

    public function help()
    {
        return [
            'reviews_widget_instance_id' => '1. Go to Yotpo. 2. Click "On-Site Widgets" in the sidebar. 3. Click "Edit" on the "Reviews Widget". <br> 4. Click the "Upgrade widget" button. 5. Click "Show Instructions". 6. Click "Get the code". <br>7. Find the number from the "data-yotpo-instance-id=" and paste it into the field above.',
            'seo_page_instance_id' => '1. Go to Yotpo. 2. Click "On-Site Widgets" in the sidebar. 3. Click "Edit" on the "SEO Page" widget. <br> 4. Click the "Upgrade widget" button. 5. Click "Show Instructions". <br>6. Find the number from the "data-yotpo-instance-id=" and paste it into the field above.',
            'star_rating_instance_id' => '1. Go to Yotpo. 2. Click "On-Site Widgets" in the sidebar. 3. Click "Edit" on the "Star Rating" widget. <br> 4. Click the "Upgrade widget" button. 5. Click "Show Instructions". 6. Click "Get the code". <br>7. Find the number from the "data-yotpo-instance-id=" and paste it into the field above.',
        ];
    }

    public function description(): string
    {
        return 'The most advanced solutions for customer reviews, visual marketing, loyalty, referrals, and SMS marketing.';
    }
}
