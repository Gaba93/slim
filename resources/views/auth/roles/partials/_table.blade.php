<table class="table table-condensed">
    <thead>
    <tr>
        <th>{!! trans('roles.project_roles') !!}</th>
        <th>{!! trans('roles.description') !!}</th>
        <th>{!! trans('roles.user') !!}</th>
        <th>{!! trans('roles.teams') !!}</th>
        <th>{!! trans('roles.actions') !!}</th>
    </tr>
    </thead>
    <tbody>
        @each('auth.roles.partials._roles', $roles, 'role')
    </tbody>
</table>