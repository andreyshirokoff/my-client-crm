<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Service;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardPageController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at')->paginate(5);
        return view('index', compact('news'));
    }

    public function searchClient()
    {
        return view('client_search');
    }

    public function settings()
    {
        return view('ustawienia');
    }

    public function submitVisual(Request $request)
    {
        //dd($request->input('selectedThemeId'));
        if($request->hasFile('logofile'))
        {
            $file = $request->file('logofile');
            $storagePath = 'logos';
            $filePath = $file->store($storagePath, '');
            UserGroup::where('id', Auth::user()->group_id)->first()
                ->update([
                    'logo_path' => str_replace("logos/", "", $filePath),
                ]);
        }

        UserGroup::where('id', Auth::user()->group_id)->first()
            ->update([
                'name' => $request->input('salonTitle'),
                'can_edit_card' => $request->input('checkBoxCanEditCard') ?? '0',
                'can_edit_control' => $request->input('checkBoxCanEditControl') ?? '0',
                'can_remove_signed_docs' => $request->input('checkBoxCanRemoveSignedDocs') ?? '0',
                'show_phone' => $request->input('checkBoxShowPhone') ?? '0',
                'footer' => $request->input('footer'),
                'non_medical' => $request->input('nonMedical'),
                'medical' => $request->input('medical'),
                'note_user' => $request->input('note'),
            ]);

        Auth::user()->update(['theme_id' => (int)$request->input('selectedThemeId')]);

        return redirect('/dashboard/ustawienia');

    }

    public function treatmentCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'min:3',
        ], [
            //'input_field.required' => 'Поле :attribute обязательно для заполнения.',
            'title.min' => 'Pole :attribute musi mieć co najmniej :min znaków.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Service::create([
            'name' => $request->input('title'),
            'group_id' => Auth::user()->group_id,
            'is_med' => $request->input('is_med'),
            'description' => $request->input('description'),
            'contraindications' => $request->input('contraindications'),
            'indicators' => $request->input('indications'),
            'recommendation' => $request->input('recommendations'),
            'amount' => $request->input('amount'),
        ]);

        return redirect('/dashboard/ustawienia');
    }

    public function rodoReset(Request $request)
    {
        UserGroup::where('id', Auth::user()->group_id)->first()
            ->update([
                'name' => 'test-text',
                'logo_path' => '',
                'can_edit_card' => '0',
                'can_edit_control' => '0',
                'can_remove_signed_docs' => '0',
                'show_phone' => '0',
                'footer' => '',
                'non_medical' => '',
                'medical' => '',
                'note_user' => '',
            ]);
        Auth::user()->update(['theme_id' => '1']);
        return redirect('/dashboard/ustawienia');
    }

    private function generateRandomCode($length = 16)
    {
        $bytes = random_bytes($length);
        return substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $length);
    }

    public function createClient()
    {
        return view('client_create');
    }

    public function documentSearch()
    {
        return view('document_search');
    }
}
