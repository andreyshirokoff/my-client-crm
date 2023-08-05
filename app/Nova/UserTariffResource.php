<?php

namespace App\Nova;

use App\Models\UserTariff;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;

class UserTariffResource extends Resource
{
    public static $model = UserTariff::class;

    public static $title = 'id';

    public static $search = [
        'id'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Number::make('User Xml Id')
                ->sortable()
                ->rules('required', 'integer'),

            Number::make('Tariff Xml Id')
                ->sortable()
                ->rules('required', 'integer'),

            Date::make('Date Start')
                ->sortable()
                ->rules('required', 'date'),

            Date::make('Date End')
                ->sortable()
                ->rules('required', 'date'),
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
