<?php

namespace App\Http\Livewire;

use App\Models\GroupTariff;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UsrSignatureIndex extends Component
{
    public ?string $sign = '';
    public function render()
    {
        return view('livewire.usr-signature-index');
    }

    public function submitForm()
    {
        dd($this->sign);

        if(strlen($this->sign) > 5)
        {
            $decoded_image = base64_decode($this->sign);
            $fileName = $this->generateRandomCode().'jpg';
            file_put_contents('/storage/'.$fileName, $decoded_image);

            $groupTariff = GroupTariff::where('owner_id', Auth::user()->id)->first();
            $groupTariff->update([
                'sign_path' => $fileName,
            ]);


            return redirect(request()->header('Referer'));
        }

        return false;
    }
    private function generateRandomCode($length = 16)
    {
        $bytes = random_bytes($length);
        return substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $length);
    }
}
