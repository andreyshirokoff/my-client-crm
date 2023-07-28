<?php

namespace App\Nova;

use App\Models\News;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Panel;

class NewsResource extends Resource
{
    public static $model = News::class;

    public static function label()
    {
        return 'Новости';
    }

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'slug'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Заголовок статьи', 'name')->sortable()->required(),
            Slug::make('Системное имя (ссылка)','slug')->from('name')->sortable()->required(),

            Panel::make('SEO', [
                Text::make('Заголовок', 'title')->sortable()->nullable(),
                Text::make('Описание', 'description')->sortable()->nullable(),
                Text::make('Ключевые слова', 'keywords')->sortable()->nullable(),
            ]),

            Panel::make('Content', [
                Image::make('Изображение', 'avatars')->disk('public')->nullable(),
                Trix::make('Контент', "body")->nullable(),
            ]),

        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }
}
