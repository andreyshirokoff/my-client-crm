<?php

namespace App\Nova;

use App\Models\ClientService;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class ClientServiceResource extends Resource
{
    public static $model = ClientService::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'note'
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            Text::make('Note')
                ->sortable()
                ->rules('required'),
        ];
    }

    public function cards(Request $request)
    {
        return [];
    }

    public function filters(Request $request)
    {
        return [];
    }

    public function lenses(Request $request)
    {
        return [];
    }

    public function actions(Request $request)
    {
        return [];
    }
}
