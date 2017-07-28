<?php

namespace App\Http\Controllers\auth;

use App\Repositories\Eloquent\Criteria\LatestFirst;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Role\RoleCreateRequest;
use App\Http\Requests\Role\RoleUpdateRequest;
use App\Repositories\Contracts\RoleRepository;

class RoleController extends Controller
{
    /**
     * @var Role
     */
    protected $role;

    /**
     * RoleController constructor.
     * @param RoleRepository $role
     */
    public function __construct(RoleRepository $role)
    {
        $this->role = $role;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($this->role->withCriteria(new LatestFirst())->all());

        return view('auth.roles.index', ['roles' => $this->role->all()]);
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
    public function store(RoleCreateRequest $request)
    {
        //$this->authorize('role', $role);

        $this->role->create([
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
     * @param RoleUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Role $role
     * @internal param int $id
     */
    public function update(RoleUpdateRequest $request, $id)
    {
        $this->role->update($id, [
            'name' => $request->name,
            'display_name' => $request->display_name,
            'description' => $request->description
        ]);

        return back()->with('message', $request->name . ' role has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->role->delete($id);

        return back()->with('message', request()->name . ' role has been successfully deleted!');
    }
}
