<?php

namespace App\Http\Livewire;

use App\Models\ClientCardInfo;
use App\Models\ServiceCardForm;
use Livewire\Component;
use Livewire\WithPagination;

class OldClientCard extends Component
{
    public $queryString = ['clientId'];
    public $cards;
    public $clientId;
    public function render()
    {
        $this->cardForming();
        return view('livewire.old-client-card');
    }

    public function cardForming()
    {
        $cards = [];
        $forms = ServiceCardForm::where('is_active', 0)->get();
        $infos = json_decode(ClientCardInfo::where('client_id', $this->clientId)->first()->fields, 1);


        foreach($forms as $form)
        {
            $fields = json_decode($form->fields,1);

            foreach($fields as $key => $field)
            {
                $cards[$key]['question'] = $field['title'];
                foreach($infos as $info)
                {
                    switch ($field['type'])
                    {
                        case 'input':
                        case 'textarea':
                            if(isset($info[$key]))
                            {
                                $cards[$key]['answer'] = $info[$key];
                            }
                            break;

                        case 'checkbox':
                        case 'radio':
                            if(isset($info[$key]))
                            {
                                $answerArray = [];
                                if(count($info[$key]) > 0)
                                {
                                    foreach($info[$key] as $key1 => $item)
                                    {
                                        if(
                                            isset($field['fields'][$key1])
                                        )
                                        {
                                            $answerArray[] = $field['fields'][$key1];
                                        }
                                    }
                                }
                                $cards[$key]['answer'] = implode(', ', $answerArray);
                            }
                            break;
                    }
                }
            }
        }

        $this->cards = $cards;
    }
}
