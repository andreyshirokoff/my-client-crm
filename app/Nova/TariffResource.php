<?php

namespace App\Nova;

use App\Models\Tariff;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class TariffResource extends Resource
{
    public static $model = Tariff::class;

    public static $title = 'title';

    public static $search = [
        'id', 'title'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Title')
                ->sortable()
                ->rules('required'),

            Number::make('Price')
                ->sortable()
                ->rules('required', 'integer'),

            Number::make('Trial')
                ->sortable()
                ->rules('required', 'integer'),

            Number::make('Xml Id')
                ->sortable()
                ->rules('required', 'integer'),
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
