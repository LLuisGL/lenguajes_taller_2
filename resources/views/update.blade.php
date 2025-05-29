<p class="fs-1">Listado de proyectos</p>
    <form action="{{ route('project.update', $solicitud->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
            <input type="text" class="form-control" id="id" name="id" value="{{$solicitud->id}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tema</label>
            <input type="text" class="form-control" name="tema" id="tema" value="{{$solicitud->tema}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$solicitud->descripcion}}">
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
            <input type="text" class="form-control" id="observacion" name="observacion" value="{{$solicitud->observacion}}">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="usuario_externo" name="usuario_externo">
            <label class="form-check-label" for="usuario_externo">¿Es usuario externo?</label>
        </div>
        <button type="submit" class="mt-3 btn btn-primary">Guardar</button>
    </form>
</div>