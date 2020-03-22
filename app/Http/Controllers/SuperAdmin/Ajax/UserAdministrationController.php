<?php

namespace App\Http\Controllers\SuperAdmin\Ajax;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return datatables()
            ->eloquent(User::query()->with('roles')->latest()->whereHas("roles",function($query){
                return $query->where('name','!=','SuperAdmin');
            }))
            ->addColumn('btn','superAdmin.usersAdministration.indexActions')
            ->addColumn('role',function(User $user){
                
                return $user->roles->first()->name;
            })
            ->rawColumns(['btn'])
            ->toJson();

    }

}
