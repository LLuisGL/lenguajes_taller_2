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
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tema</th>
                    <th>Descripción</th>
                    <th>Area</th>
                    <th>Fecha del registro</th>
                    <th>Fecha del cierre</th>
                    <th>Estado</th>
                    <th>Observación</th>
                    <th>¿Es usuario externo?</th>
                </tr>
            </thead>
            <tbody>
                @foreach($solicituds as $solicitud)
                    <tr>
                        <th scope="row">{{$solicitud->id}}</th>
                        <th class="fw-light">{{$solicitud->tema}}</th>
                        <th class="fw-light">{{$solicitud->descripcion}}</th>  
                        <th class="fw-light">{{$solicitud->area}}</th>
                        <th class="fw-light">{{$solicitud->created_at}}</th>
                        <th class="fw-light">{{$solicitud->updated_at}}</th>
                        <th class="fw-light">{{$solicitud->estado}}</th>
                        <th class="fw-light">{{$solicitud->observacion}}</th>
                        <th class="fw-light">{{$solicitud->usuario_externo}}</th>
                        <td>
                            <form action="{{ route('project.destroy', $solicitud->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>