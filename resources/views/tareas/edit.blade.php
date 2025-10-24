<!DOCTYPE html>
<html>
<head><title>Editar Tarea</title></head>
<body>
    <h1>Editar Tarea</h1>

    <form action="{{ route('tareas.update', $tarea->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Título:</label>
        <input type="text" name="titulo" value="{{ $tarea->titulo }}" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion">{{ $tarea->descripcion }}</textarea><br><br>

        <label>Estado:</label>
        <select name="estado">
            <option value="pendiente" {{ $tarea->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
            <option value="completada" {{ $tarea->estado == 'completada' ? 'selected' : '' }}>Completada</option>
        </select><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('tareas.index') }}">Volver</a>
</body>
</html>
