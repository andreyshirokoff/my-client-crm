<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    function searchClient(Request $request)
    {

        $clients = Client::where('fullname', 'like', '%'.$request->input('fullname').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->where('phone', 'like', '%'.$request->input('phone').'%')
            ->skip($request->input('offset'))
            ->take($request->input('limit'))
            ->get();

        if(count($clients) > 0) return $clients;

        return 'ERROR';
    }
    function searchClientCount(Request $request)
    {

        $clients = Client::where('fullname', 'like', '%'.$request->input('fullname').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->where('phone', 'like', '%'.$request->input('phone').'%')
//            ->skip($request->input('offset'))
//            ->take($request->input('limit'))
            ->get();

        $count = $clients->count();
        if((int)$count > (int)$request->input('limit')) return $count;

        return 'ERROR';
    }
}
