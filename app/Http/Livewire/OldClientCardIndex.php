<?php

namespace App\Http\Livewire;

use App\Models\ClientCardInfo;
use App\Models\ServiceCardForm;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\OldClientCard;

class OldClientCardIndex extends Component
{
    use WithFileUploads;

    public $queryString = ['clientId'];
    public $cards;
    public $clientId;
    public $file;
    public $name;
    public $pathFromDb;
    public function render()
    {
        $this->cards = OldClientCard::where('client_id', $this->clientId)
            ->orderBy('id', 'desc')
            ->get();
        return view('livewire.old-client-card-index');
    }

    public function submitForm()
    {
        $validatedData = $this->validate([
            'name' => 'string|min:3',
            'file' => 'file|max:5018',
        ]);

        $path = $validatedData['file']->store('storage/old_cards');

        $path = str_replace('storage/old_cards/', '', $path);

        OldClientCard::create([
            'name' => $this->name,
            'path' => $path,
            'client_id' => $this->clientId,
        ]);

        return redirect(request()->header('Referer'));
    }

    public function downloadFile($filePath)
    {
        return response()->download(public_path($filePath));
    }

//    public function cardForming1()
//    {
//        $cards = [];
//        $forms = ServiceCardForm::where('is_active', 0)->get();
//        $infos = json_decode(ClientCardInfo::where('client_id', $this->clientId)->first()->fields, 1);
//
//
//        foreach($forms as $form)
//        {
//            $fields = json_decode($form->fields,1);
//
//            foreach($fields as $key => $field)
//            {
//                $cards[$key]['question'] = $field['title'];
//                foreach($infos as $info)
//                {
//                    switch ($field['type'])
//                    {
//                        case 'input':
//                        case 'textarea':
//                            if(isset($info[$key]))
//                            {
//                                $cards[$key]['answer'] = $info[$key];
//                            }
//                            break;
//
//                        case 'checkbox':
//                        case 'radio':
//                            if(isset($info[$key]))
//                            {
//                                $answerArray = [];
//                                if(count($info[$key]) > 0)
//                                {
//                                    foreach($info[$key] as $key1 => $item)
//                                    {
//                                        if(
//                                            isset($field['fields'][$key1])
//                                        )
//                                        {
//                                            $answerArray[] = $field['fields'][$key1];
//                                        }
//                                    }
//                                }
//                                $cards[$key]['answer'] = implode(', ', $answerArray);
//                            }
//                            break;
//                    }
//                }
//            }
//        }
//
//        $this->cards = $cards;
//    }
}
