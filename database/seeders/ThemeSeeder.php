<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    public function run(): void
    {
        Theme::create([
                'name' => 'MyClient',
                'path' => 'css/themes/myClient.css',
        ]);
        Theme::create([
            'name' => 'Czarny',
            'path' => 'css/themes/czarny.css',
        ]);
        Theme::create([
            'name' => 'Jasny brąz',
            'path' => 'css/themes/jacnyBraz.css',
        ]);
        Theme::create([
            'name' => 'Srebrny',
            'path' => 'css/themes/srebny.css',
        ]);
        Theme::create([
            'name' => 'Brzoskwiniowy',
            'path' => 'css/themes/brzoskwiniowy.css',
        ]);
        Theme::create([
            'name' => 'Żółte złoto',
            'path' => 'css/themes/zolteZloto.css',
        ]);
        Theme::create([
            'name' => 'Granatowy',
            'path' => 'css/themes/granatowy.css',
        ]);
        Theme::create([
            'name' => 'Ciepły róż',
            'path' => 'css/themes/cieplyRoz.css',
        ]);
        Theme::create([
            'name' => 'Kobaltowy',
            'path' => 'css/themes/kobaltowy.css',
        ]);
        Theme::create([
            'name' => 'Fiolet',
            'path' => 'css/themes/fiolet.css',
        ]);
        Theme::create([
            'name' => 'Lawendowy',
            'path' => 'css/themes/lawendowy.css',
        ]);
        Theme::create([
            'name' => 'Red Lips',
            'path' => 'css/themes/redLips.css',
        ]);
        Theme::create([
            'name' => 'Miętowy',
            'path' => 'css/themes/mietowy.css',
        ]);
        Theme::create([
            'name' => 'Złoty',
            'path' => 'css/themes/zloty.css',
        ]);
        Theme::create([
            'name' => 'Butelkowy zielony',
            'path' => 'css/themes/butelkowyZielony.css',
        ]);
    }
}
