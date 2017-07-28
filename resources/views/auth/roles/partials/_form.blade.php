<form action="{{ isset($role->id) ? route('roles.update', $role->id) : route('roles.store') }}" class="form-horizontal" method="POST">
    {{ csrf_field() }}
    {{ isset($role->id)  ? method_field('PUT') : method_field('POST') }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label">{!! trans('roles.name') !!}</label>
        <input name="name" id="nameId" class="form-control" value="{{ old('name') ? old('name') : (isset($role->name) ? $role->name : '') }}"/>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        <label for="description" class="control-label">{!! trans('roles.description') !!}</label>
        <textarea name="description" id="descriptionId" class="form-control" rows="5">{{ old('description') ? old('description') : (isset($role->description) ? $role->description : '') }}</textarea>
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" name="save" type="button" class="btn btn-primary">{!! trans('roles.save') !!}</button>
        <a href="{{ route('roles.index') }}" name="save" type="button" class="btn btn-default">{!! trans('roles.cancel') !!}</a>
    </div>

</form>