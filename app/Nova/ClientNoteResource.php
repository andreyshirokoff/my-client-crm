<?php

namespace App\Nova;

use App\Models\ClientNote;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class ClientNoteResource extends Resource
{
    public static $model = ClientNote::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'notatka'
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            Number::make('Client Id')
                ->sortable()
                ->rules('required', 'integer'),

            Number::make('Service Id')
                ->sortable()
                ->rules('required', 'integer'),

            Text::make('Notatka')
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
