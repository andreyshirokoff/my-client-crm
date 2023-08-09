<?php

namespace App\Nova;

use App\Models\ServicesTemplate;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class ServiceTemplateResource extends Resource
{
    public static $model = ServicesTemplate::class;

    public static $title = 'name';

    public static $search = [
        'id', 'description', 'name'
    ];
    public static function label()
    {
        return "Шаблоны для услуг";
    }

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Boolean::make('Услуга медецинская?', 'is_med')
                ->sortable()
                ->rules('required'),

            Text::make('Название услуги', 'name')
                ->sortable()
                ->rules('required'),

            Text::make('Описание', 'description')
                ->sortable()
                ->rules('nullable'),

            Text::make('Текст описания', 'description_text')
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

            Number::make('Рекомендуемое кол-во посещений', 'amount')
                ->sortable()
                ->rules('required', 'integer'),

            Text::make('Перечень полей', 'user_card')
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
