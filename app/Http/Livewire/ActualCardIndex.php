<?php

namespace App\Http\Livewire;

use App\Models\ServiceCardForm;
use Livewire\Component;

class ActualCardIndex extends Component
{
    public $groupId;
    protected $queryString = ['groupId'];

    public ?string $field = '';
    public $fieldsArr = [];

    public $returnFields = [];

    public $rules = [
        'field' => 'required|min:10'
    ];

    public $type;
    public $title;
    public $order;

    protected $listeners = ['addNewFields' => 'addNewFields'];

    public function render()
    {
        return view('livewire.actual-card-index');
    }

    public function submitForm()
    {
        $isSCF = ServiceCardForm::where('group_id', $this->groupId)
            ->where('is_active', 1)
            ->first();
        if(isset($isSCF->id))
        {
            $ServicesFormSave = ServiceCardForm::where('id', $isSCF->id)->update([
                //'group_id' => $this->groupId,
                'fields' => json_encode($this->fieldsArr),
            ]);
        }
        else
        {
            $ServicesFormSave = ServiceCardForm::create([
                'is_active' => 1,
                'group_id' => $this->groupId,
                'fields' => json_encode($this->fieldsArr),
            ]);
        }

//        $ServicesFormSave->save();
        return redirect(request()->header('Referer'));
    }

//    public function showFormItem()
//    {
//        $this->dispatchBrowserEvent('event-add-field');
//    }


    public function addNewFields($props)
    {
        $type = $props['type'];
        $title = $props['title'];
        $order = (int)$props['order'];
        //dd($order);

        $key = uniqid();
        $fields1 = [];
        if(isset($props['fields'])) $fields1 = json_decode($props['fields'], 1);
        $isRequired = $props['is_required']; //here

        switch($type)
        {
            case 'input':
                $this->fieldsArr[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                    'is_required' => $isRequired, //here
                ];
                break;

            case 'textarea':
                $this->fieldsArr[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                    'is_required' => $isRequired, //here
                ];
                break;

            case 'checkbox':
                $this->fieldsArr[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                    'fields' => $fields1,
                    'is_required' => $isRequired, //here
                ];
                break;

            case 'radio':
                $this->fieldsArr[$key] = [
                    'type' => $type,
                    'title' => $title,
                    'order' => $order,
                    'fields' => $fields1,
                    'is_required' => $isRequired, //here
                ];
                break;
        }

        uasort($this->fieldsArr, function ($a, $b) {
            return $b['order'] - $a['order'];
        });


        $this->field = json_encode($this->fieldsArr);
//        $this->fieldsArr = $fields;
    }

    public function deleteConfirm($firstKey, $secondKey = 0)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Jesteś pewien?',
            'text' => '',
            'firstKey' => $firstKey,
            'secondKey' => $secondKey,
        ]);
    }
    public function deleteFromDb($keys)
    {
        $firstKey = $keys[0];
        $secondKey = $keys[1];

        $returnFields = $this->returnFields;

        foreach($returnFields as $key => $returnField)
        {
            $returnFields[$key] = json_decode($returnField,1);
        }

        if($secondKey != 0)
        {

            foreach($returnFields as $key => $returnField)
            {

                if(isset($returnField[$firstKey]['fields'][$secondKey]))
                {

                    unset($returnField[$firstKey]['fields'][$secondKey]);
                }
                if(!count($returnField[$firstKey]['fields']) > 0)
                {
                    unset($returnField[$firstKey]);
                }
                if(!count($returnField) > 0)
                {
                    ServiceCardForm::where('id', $key)->delete();
                }
                else
                {
                    ServiceCardForm::where('id', $key)->update([
                        'fields' => json_encode($returnField),
                    ]);
                }
            }
        }
        else
        {
            foreach($returnFields as $key => $returnField)
            {
                if(isset($returnField[$firstKey]))
                {

                    unset($returnField[$firstKey]);
                }
                //dd($returnField[$firstKey]);
                if(!count($returnField) > 0)
                {

                    ServiceCardForm::where('id', $key)->delete();
                }
                else
                {
                    //dd($key);
                    $res = ServiceCardForm::where('id', $key)->update([
                        'fields' => json_encode($returnField),
                    ]);
                    //dd($res);

                }
            }
        }

        return redirect(request()->header('Referer'));
    }

    public function deleteFromPage($firstKey, $secondKey = 0)
    {
        $fieldsArr = $this->fieldsArr;
        if($secondKey != 0)
        {
            if(isset($fieldsArr[$firstKey]['fields'][$secondKey]))
            {

                unset($fieldsArr[$firstKey]['fields'][$secondKey]);
            }
            if(!count($fieldsArr[$firstKey]['fields']) > 0)
            {
                unset($fieldsArr[$firstKey]);
            }
            if(!count($fieldsArr) > 0)
            {
                $fieldsArr = [];
            }
        }
        else
        {
            if(isset($fieldsArr[$firstKey]))
            {
                unset($fieldsArr[$firstKey]);
            }
            if(!count($fieldsArr) > 0)
            {
                $fieldsArr = [];
            }
        }

        $this->fieldsArr = $fieldsArr;
    }



    public function showAddModal()
    {
        $this->dispatchBrowserEvent('event-add-field');
        //$this->emitTo(ModalFieldsAdd::class, 'showForm');
    }

    public function mount()
    {
        $ServicesForm = ServiceCardForm::where('group_id', $this->groupId)
            ->where('is_active', 1)
            ->get();
//        dd($ServicesForm);
//        $this->returnFields = $ServicesForm->pluck('fields')->toArray();

        $this->returnFields = $ServicesForm->mapWithKeys(function ($service) {
            return [$service->id => $service->fields];
        })->toArray();

//        dd($servicesArray);
//        $servicesArray = $ServicesForm->mapWithKeys(function ($item) {
//            return [$item->id => $item->fields];
//        })->toArray();
    }
}
