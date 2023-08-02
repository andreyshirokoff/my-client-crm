<?php

namespace App\Nova;

use App\Models\ClientCardInfo;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class ClientCardInfoResource extends Resource
{
    public static $model = ClientCardInfo::class;

    public static $title = 'id';

    public static $search = [
        'id', 'fields'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Number::make('Group Id')
                ->sortable()
                ->rules('required', 'integer'),

            Number::make('Client Id')
                ->sortable()
                ->rules('required', 'integer'),

            Text::make('Fields')
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
