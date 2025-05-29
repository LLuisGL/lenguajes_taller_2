<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lenguajes de Programación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
    <div>
        <a href="/create" type="button" class="btn active" aria-pressed="true">Crear</a>
        <a href="/edite" type="button" class="btn active" aria-pressed="true">Editar</a>
    </div>
    <div>
        <form action="{{route('project.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tema</label>
                <input type="text" class="form-control" name="tema" id="tema">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Area</label>
                <select id="area" name="area" class="form-select">
                    <option value="TI">TI</option>
                    <option value="Contabilidad">Contabilidad</option>
                    <option value="Operativo">Operativo</option>
                    <option value="Gerente">Gerente</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Estado</label>
                <select id="estado" name="estado" class="form-select">
                    <option value="Solicitado">Solicitado</option>
                    <option value="Aprobado">Aprobado</option>
                    <option value="Rechazado">Rechazado</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Observación</label>
                <input type="text" class="form-control" id="observacion" name="observacion">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="usuario_externo" name="usuario_externo">
                <label class="form-check-label" for="usuario_externo">¿Es usuario externo?</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>