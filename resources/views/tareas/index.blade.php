<!DOCTYPE html>
<html>
<head>
    <title>Listado de Tareas</title>
</head>
<body>
    <h1>Tareas</h1>
    <a href="{{ route('tareas.create') }}">Nueva tarea</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Fecha creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $t)
            <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->titulo }}</td>
                <td>{{ $t->descripcion }}</td>
                <td>{{ $t->estado }}</td>
                <td>{{ $t->created_at }}</td>
                <td>
                    <a href="{{ route('tareas.edit', $t->id) }}">Editar</a>

                    <form 
                        action="{{ route('tareas.destroy', $t->id) }}" 
                        method="POST" 
                        style="display:inline;"
                        onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
