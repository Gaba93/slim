<tr>
    <td>{{ $role->name }}</td>
    <td>{{ $role->description }}</td>
    <td></td>
    <td></td>
    <td>
        <form action="{{ route('roles.destroy',$role->id) }}" method="post">
            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm" name="edit" >{!! trans('roles.edit') !!}</a>

            <input type="hidden" name="name" value="{{ $role->name }}" />
            <button type="submit" class="btn btn-danger btn-sm" name="delete">{!! trans('roles.delete') !!}</button>

            {{ csrf_field() }}
            {{ method_field('DELETE') }}
        </form>
    </td>
</tr>