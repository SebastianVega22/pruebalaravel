<!DOCTYPE html>
<html>
<head><title>Crear Tarea</title></head>
<body>
    <h1>Nueva Tarea</h1>

    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="titulo" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion"></textarea><br><br>

        <label>Estado:</label>
        <select name="estado">
            <option value="pendiente">Pendiente</option>
            <option value="completada">Completada</option>
        </select><br><br>

        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('tareas.index') }}">Volver</a>
</body>
</html>
