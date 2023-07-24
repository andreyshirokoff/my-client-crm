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
        dd($request->input('logofile'));

        UserGroup::where('id', Auth::user()->group_id)->first()
            ->update([
                'name' => $this->salonTitle,
                'logo_path' => str_replace("storage/", "", $path),
                'can_edit_card' => $this->checkBoxCanEditCard,
                'can_edit_control' => $this->checkBoxCanEditControl,
                'can_remove_signed_docs' => $this->checkBoxCanRemoveSignedDocs,
                'show_phone' => $this->checkBoxShowPhone,
//                'footer' => $this->footer,
//                'non_medical' => $this->nonMedical,
//                'medical' => $this->medical,
//                'note_user' => $this->note,
            ]);

        Auth::user()->update(['theme_id' => $request->input('selectedThemeId')]);
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
