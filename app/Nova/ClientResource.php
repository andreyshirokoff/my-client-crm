<?php

namespace App\Nova;

use App\Models\Client;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class ClientResource extends Resource
{
    public static $model = Client::class;

    public static $title = 'id';

    public static $search = [
        'id'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Firstname')
                ->sortable()
                ->rules('nullable'),

            Text::make('Lastname')
                ->sortable()
                ->rules('nullable'),

            Text::make('Fullname')
                ->sortable()
                ->rules('nullable'),

            Text::make('Email')
                ->sortable()
                ->rules('nullable', 'email', 'max:254'),

            Text::make('Phone')
                ->sortable()
                ->rules('nullable'),

            Text::make('Avatar')
                ->sortable()
                ->rules('nullable'),

            Text::make('Description')
                ->sortable()
                ->rules('nullable'),

            Number::make('Group Id')
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
