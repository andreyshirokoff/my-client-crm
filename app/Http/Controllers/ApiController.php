<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use App\Models\Tariff;
use App\Models\User;
use App\Models\UserGroup;
use App\Models\UserTariff;
use Bitrix\Translate\Controller\Asset\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $statusRequest = [];

        $isAuth = 0;
        $login = $request->input('login');
        $password = $request->input('password');

        $admin = User::where('roles', 'administrator')
            ->where('email', $login)
            ->where('password', $password)
            ->first();

        if($admin) $isAuth = 1;

        if(($request->input('method') !== false || $request->input('method') !== null) && $isAuth == 1)
        {
            switch($request->input('method')) {
                case 'user.list':
                    $users = User::all();

                    if($users !== false)
                    {
                        $statusRequest = $this->statusRequest('OK', 'The users are successfully returned', $users->toArray());
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'This table is not available');
                    }

                    break;

                case 'tariff.list':
                    $tariffs = Tariff::all();

                    if($tariffs !== false)
                    {
                        $statusRequest = $this->statusRequest('OK', 'The tariffs are successfully returned', $tariffs->toArray());
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'This table is not available');
                    }


                    break;

                case 'userTariff.list':
                    $userTariffs = Tariff::all();

                    if($userTariffs !== false)
                    {
                        $statusRequest = $this->statusRequest('OK', 'The user_tariffs are successfully returned', $userTariffs->toArray());
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'This table is not available');
                    }


                    break;

                case 'tariff.get':
                    $id = $request->input('ID');

                    if($id)
                    {
                        $tariff = Tariff::where('id', $id)->first()->toArray();

                        if(count($tariff) > 0)
                        {
                            $statusRequest = $this->statusRequest('OK', 'The tariff is successfully returned', $tariff);
                        }
                        else
                        {
                            $statusRequest = $this->statusRequest('ERROR', 'This tariff does not exist');
                        }
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'The ID field is empty');
                    }

                    break;

                case 'userTariff.get':
                    $id = $request->input('ID');

                    if($id)
                    {
                        $tariff = UserTariff::where('id', $id)->first()->toArray();

                        if(count($tariff) > 0)
                        {
                            $statusRequest = $this->statusRequest('OK', 'The user_tariff is successfully returned', $tariff);
                        }
                        else
                        {
                            $statusRequest = $this->statusRequest('ERROR', 'This user_tariff does not exist');
                        }
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'The ID field is empty');
                    }

                    break;

                case 'tariff.firstOrNew':
                    $fields = json_decode($request->input('fields'), 1);
                    if(isset($fields['xml_id']))
                    {
                        $tariff = Tariff::firstOrNew(['xml_id' => $fields['xml_id']]);

                        if(isset($tariff->xml_id))
                        {
                            if(isset($fields['title'])) $tariff->title = $fields['title'];
                            if(isset($fields['price'])) $tariff->price = $fields['price'];
                            if(isset($fields['trial'])) $tariff->trial = $fields['trial'];
                            if(isset($fields['is_test'])) $tariff->is_test = $fields['is_test'];
                            if(isset($fields['is_actual'])) $tariff->is_actual = $fields['is_actual'];

                            $tariff->save();
                            if(isset($tariff->id))
                            {
                                $statusRequest = $this->statusRequest('OK', 'The tariff is successfully updated or added', ['ID' => $tariff->id]);
                            }
                            else
                            {
                                $statusRequest = $this->statusRequest('ERROR', 'The row id did not get');
                            }

                        }
                        else
                        {
                            $statusRequest = $this->statusRequest('ERROR', 'Something went wrong');
                        }
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'The "fields" field is empty');
                    }

                    break;

                case 'userTariff.firstOrNew':
                    $fields = json_decode($request->input('fields'), 1);
                    if(isset($fields['xml_id']))
                    {
                        $userTariff = UserTariff::firstOrNew(['xml_id' => $fields['xml_id']]);
                        if(isset($userTariff->xml_id))
                        {
                            if(isset($fields['user_id'])) $userTariff->user_id = $fields['user_id'];
                            if(isset($fields['user_xml_id']))
                            {
                                $userTariff->user_xml_id = $fields['user_xml_id'];
                                if(!isset($fields['user_id']))
                                {
                                    $user = User::where('xml_id', $fields['user_xml_id'])->first();
                                    $userTariff->user_id = $user->id;
                                }
                            }
                            if(isset($fields['tariff_id'])) $userTariff->tariff_id = $fields['tariff_id'];
                            if(isset($fields['tariff_xml_id']))
                            {
                                $userTariff->tariff_xml_id = $fields['tariff_xml_id'];
                                if(!isset($fields['tariff_id']))
                                {
                                    $tariff = Tariff::where('id', $fields['tariff_xml_id'])->first();
                                    $userTariff->tariff_id = $tariff->id;
                                }
                            }
                            if(isset($fields['date_start'])) $userTariff->date_start = $fields['date_start'];
                            if(isset($fields['date_end'])) $userTariff->date_end = $fields['date_end'];
                            if(isset($fields['is_active'])) $userTariff->is_active = $fields['is_active'];

                            $userTariff->save();
                            if(isset($user->id))
                            {
                                $statusRequest = $this->statusRequest('OK', 'The user tariff is successfully updated or added', ['ID' => $user->id]);
                            }
                            else
                            {
                                $statusRequest = $this->statusRequest('ERROR', 'The row id did not get');
                            }

                        }
                        else
                        {
                            $statusRequest = $this->statusRequest('ERROR', 'Something went wrong');
                        }
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'The "fields" field is empty');
                    }

                    break;



//                case 'packet.list':
//                    $packets = Packet::all();
//
//                    if($packets !== false)
//                    {
//                        $statusRequest = $this->statusRequest('OK', 'The packets are successfully returned', $packets->toArray());
//                    }
//                    else
//                    {
//                        $statusRequest = $this->statusRequest('ERROR', 'This table is not available');
//                    }
//
//                    break;

                case 'user.get':
                    $id = $request->input('ID');

                    if($id)
                    {
                        $users = User::where('id', $id)->first()->toArray();

                        if(count($users) > 0)
                        {
                            $statusRequest = $this->statusRequest('OK', 'The user is successfully returned', $users);
                        }
                        else
                        {
                            $statusRequest = $this->statusRequest('ERROR', 'This user does not exist');
                        }
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'The ID field is empty');
                    }

                    break;

                case 'user.firstOrNew':
                    $fields = json_decode($request->input('fields'), 1);
                    if(
                        isset($fields['xml_id'])
                    )
                    {
                        $user = User::firstOrNew(['xml_id' => $fields['xml_id']]);

                        if(isset($user->xml_id))
                        {
                            if(isset($fields['name'])) $user->name = $fields['name'];
                            if(isset($fields['last_name'])) $user->last_name = $fields['last_name'];
                            if(isset($fields['fullname'])) $user->fullname = $fields['fullname'];
                            if(isset($fields['avatar'])) $user->avatar = $fields['avatar'];
                            if(isset($fields['password'])) $user->password = $fields['password'];
                            if(isset($fields['email'])) $user->email = $fields['email'];
                            if(isset($fields['phone'])) $user->phone = $fields['phone'];
                            if(isset($fields['is_main'])) $user->is_main = $fields['is_main'];
                            if(isset($fields['group_id'])) $user->group_id = $fields['group_id'];
                            if(isset($fields['roles'])) $user->roles = $fields['roles'];
                            if(isset($fields['status'])) $user->status = $fields['status'];
                            if(isset($fields['theme_id'])) $user->theme_id = $fields['theme_id'];

                            $user->save();
                            if(isset($user->id))
                            {
                                $statusRequest = $this->statusRequest('OK', 'The user is successfully updated or added', ['ID' => $user->id]);
                            }
                            else
                            {
                                $statusRequest = $this->statusRequest('ERROR', 'The row id did not get');
                            }

                        }
                        else
                        {
                            $statusRequest = $this->statusRequest('ERROR', 'Something went wrong');
                        }
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'Pass the "fields" json-array field which has required keys: "xml_id"');
                    }

                    break;

                case 'userGroup.create':
                    $fields = json_decode($request->input('fields'), 1);
                    if(count($fields) > 0)
                    {
                        $userGroup = UserGroup::create($fields);
                        if($userGroup->id)
                        {
                            $statusRequest = $this->statusRequest('OK', 'The user is successfully updated or added', ['ID' => $userGroup->id]);
                        }
                        else
                        {
                            $statusRequest = $this->statusRequest('ERROR', 'Something went wrong');
                        }
                    }
                    else
                    {
                        $statusRequest = $this->statusRequest('ERROR', 'The "fields" field is empty');
                    }

                    break;



//                case 'packet.get':
//                    $id = $request->input('ID');
//
//                    if($id)
//                    {
//                        $packet = Packet::where('id', $id)->first()->toArray();
//
//                        if(count($packet) > 0)
//                        {
//                            $statusRequest = $this->statusRequest('OK', 'The packet is successfully returned', $packet);
//                        }
//                        else
//                        {
//                            $statusRequest = $this->statusRequest('ERROR', 'This packet does not exist');
//                        }
//                    }
//                    else
//                    {
//                        $statusRequest = $this->statusRequest('ERROR', 'The ID field is empty');
//                    }
//
//                    break;

                default:
                    $statusRequest = $this->statusRequest('ERROR', "You didn't pass the method or this method doesn't exits");
                    break;
            }
        }
        else
        {
            if(($request->input('method') !== false || $request->input('method') !== null) && $isAuth == 0)
            {
                $statusRequest = $this->statusRequest('ERROR', 'You have to get the auth');
            }
            elseif(($request->input('method') === false || $request->input('method') === null))
            {
                $statusRequest = $this->statusRequest('ERROR', 'You have to pass the method');
            }
        }


        return response()->json($statusRequest, 201);
    }

    public function statusRequest($status, $message, $array = [])
    {
        return ['STATUS' => $status, 'MESSAGE' => $message, 'ARRAY' => $array];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
