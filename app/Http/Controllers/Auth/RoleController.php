<?php

namespace App\Http\Controllers\auth;

use App\Http\Requests\Role\RoleCreateRequest;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Role $role
     * @return \Illuminate\Http\Response
     */
    public function index(Role $role)
    {
        return view('auth.roles.index', ['roles' => $role->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RoleCreateRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleCreateRequest $request, Role $role)
    {
        //$this->authorize('role', $role);

        $role->create([
            'name' => $request->name,
            'display_name' => $request->display_name,
            'description' => $request->description
        ]);

        return back()->with('message', $request->name . ' role has been successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('auth.roles.create', ['role' => Role::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
