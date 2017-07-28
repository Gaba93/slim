<div class="col-md-4">
    <form class="form" name="roleSearchForm" id="roleSearchFormId" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="searchRole" placeholder="Search">
        </div>
    </form>
</div>
<div class="cl-md-8 text-right">
    <a class="btn btn-default" name="createRoleButton" id="createRoleButtonId" href="{{ route('roles.create') }}">{!! trans('roles.create') !!}</a>
</div>