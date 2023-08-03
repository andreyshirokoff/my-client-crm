<?php

namespace App\Nova;

use App\Models\GroupBoot;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class GroupBootResource extends Resource
{
    public static $model = GroupBoot::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'description', 'photo'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            Number::make('Price')
                ->sortable()
                ->rules('required', 'numeric'),

            Number::make('Days')
                ->sortable()
                ->rules('required', 'integer'),

            Text::make('Description')
                ->sortable()
                ->rules('required'),

            Text::make('Photo')
                ->sortable()
                ->rules('required'),
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
