<?php

namespace App\Nova;

use App\Models\Service;
use App\Models\UserGroup;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;

class ServiceResource extends Resource
{
    public static $model = Service::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name'
    ];

    public static function label()
    {
        return 'Список лечения';
    }

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            BelongsTo::make('Группа пользователя', 'groupId', UserGroupResource::class)
                ->sortable()
                ->rules('required', 'integer'),

            Text::make('Название', 'name')
                ->sortable()
                ->rules('required'),

            Text::make('Описание', 'description')
                ->sortable()
                ->rules('nullable'),

            Text::make('Противопоказания', 'contraindications')
                ->sortable()
                ->rules('nullable'),

            Text::make('Показания', 'indicators')
                ->sortable()
                ->rules('nullable'),

            Text::make('Рекомендации', 'recommendation')
                ->sortable()
                ->rules('nullable'),

            Number::make('Рекомендуемая сумма', 'amount')
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
