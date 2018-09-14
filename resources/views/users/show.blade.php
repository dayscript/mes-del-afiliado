@extends ('layouts.layout')

@section ('content')

<h1>Usuario {{ $user->id }}</h1>

    <p>
        <a href="{{ route('users.index') }}" class="btn btn-info">Regresar a la lista de usuarios</a>
    </p>

<p>Nombre: {{ $user->first_name }}</p>
<p>Correo electronico: {{ $user->email }}</p>

<p>
	<a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
</p>