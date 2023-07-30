<?php

namespace App\Nova;

use App\Models\Service;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class ServiceResource extends Resource
{
    public static $model = Service::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Number::make('Group Id')
                ->sortable()
                ->rules('required', 'integer'),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            Text::make('Description')
                ->sortable()
                ->rules('nullable'),

            Text::make('Description Text')
                ->sortable()
                ->rules('nullable'),

            Text::make('Contraindications')
                ->sortable()
                ->rules('nullable'),

            Text::make('Indicators')
                ->sortable()
                ->rules('nullable'),

            Text::make('Recommendation')
                ->sortable()
                ->rules('nullable'),

            Number::make('Amount')
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
