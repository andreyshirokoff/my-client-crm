<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    function searchClient(Request $request)
    {

        $result = Client::where('fullname', 'like', '%'.$request->input('fullname').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->where('phone', 'like', '%'.$request->input('phone').'%')
            ->skip($request->input('offset'))
            ->take($request->input('limit'))
            ->get();

        if(count($result) > 0) return $result;

        return false;
    }
}
