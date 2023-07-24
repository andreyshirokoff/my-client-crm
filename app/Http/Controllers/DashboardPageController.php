<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
//        dd($request->hasFile('logofile'));

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
                'can_edit_card' => $request->input('checkBoxCanEditCard'),
                'can_edit_control' => $request->input('checkBoxCanEditControl'),
                'can_remove_signed_docs' => $request->input('checkBoxCanRemoveSignedDocs'),
                'show_phone' => $request->input('checkBoxShowPhone'),
                'footer' => $request->input('footer'),
                'non_medical' => $request->input('nonMedical'),
                'medical' => $request->input('medical'),
                'note_user' => $request->input('note'),
            ]);

        Auth::user()->update(['theme_id' => $request->input('selectedThemeId')]);
        
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
