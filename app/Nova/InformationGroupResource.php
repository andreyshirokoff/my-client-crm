<?php

namespace App\Nova;

use App\Models\InformationGroup;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class InformationGroupResource extends Resource
{
    public static $model = InformationGroup::class;

    public static $title = 'id';

    public static $search = [
        'id'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Number::make('Group Id')
                ->sortable()
                ->rules('required', 'integer'),

            Text::make('Type')
                ->sortable()
                ->rules('nullable'),

            Number::make('User Id')
                ->sortable()
                ->rules('required', 'integer'),

            Text::make('Text')
                ->sortable()
                ->rules('nullable'),
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
