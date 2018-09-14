@extends ('layouts.app')

@section ('content')

	<h1>Usuarios</h1>

	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Correo electronico</th>
			<th>Acciones</th>
		</tr>
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->first_name }}</td>
			<td>{{ $user->email }}</td>
			<td>
				<a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Ver</a>
				<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
<!-- 				<a href="{{ route('users.destroy', $user->id )}}"data-method="delete" class="btn btn-danger">Eliminar</a>  -->
			</td>
		</tr>
		@endforeach
	</table>

	{{ $users->links() }}

	<p><a href="{{ route('users.create') }}" class="btn btn-primary">Crear Usuario</a></p>
@stop