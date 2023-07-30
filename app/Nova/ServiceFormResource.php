<?php

namespace App\Nova;

use App\Models\ServicesForm;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class ServiceFormResource extends Resource
{
    public static $model = ServicesForm::class;

    public static $title = 'id';

    public static $search = [
        'id'
    ];

    public static function label()
    {
        return 'Вопросы для лечения';
    }

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            BelongsTo::make('Название лечения', 'serviceId', ServiceResource::class)
                ->sortable()
                ->rules('required', 'integer'),

            Text::make('Поля', 'fields')
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
