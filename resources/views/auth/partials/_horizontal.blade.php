<div class="col-md-3">

    <div class="list-group">
        <a href="{{ route('roles.index') }}" class="list-group-item {{ request()->is('roles*') ? 'active' : '' }}">{!! trans('roles.roles') !!}</a>
        <a href="{{ route('permissions.index') }}" class="list-group-item {{ request()->is('permissions') ? 'active' : '' }}">{!! trans('roles.permissions') !!}</a>
        <a href="{{ route('teams.index') }}" class="list-group-item {{ request()->is('teams') ? 'active' : '' }}">{!! trans('roles.teams') !!}</a>
    </div>
</div>