<div class="box box-info padding-1">
    <div class="box-body">
        @if ($errors->any())
            {{-- errores del parte servidor form --}}
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}"
                placeholder="nombre">
            <div class="invalid-feedback">Introduce el nombre</div>
        </div>
        <div class="form-group">
            <label for="Apellidos">Apellidos:</label>
            <input type="text" class="form-control" name="Apellidos" id="Apellidos" value="{{ $user->Apellidos }}"
                placeholder="Apellidos">
            <div class="invalid-feedback">Introduce los apellidos</div>
        </div>
        <div class="form-group">
            <label for="DNI">DNI</label>
            <input type="text" class="form-control" name="DNI" id="DNI" value="{{ $user->DNI }}"
                placeholder="DNI">
            <div class="invalid-feedback">Introduce el DNI</div>
        </div>
        <div class="form-group">
            <label for="email">email:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}"
                placeholder="email">
            <div class="invalid-feedback">Introduce el email</div>
        </div>
        <div class="form-group">
            <label for="Direccion">Direccion:</label>
            <input type="text" class="form-control" name="Direccion" id="Direccion" value="{{ $user->Direccion }}"
                placeholder="Direccion">
            <div class="invalid-feedback">Introduce la direccion</div>
        </div>
        <div class="form-group">
            <label for="ProvinciaLocalidad">Provincia:</label>
            <input type="text" class="form-control" name="ProvinciaLocalidad" id="ProvinciaLocalidad"
                value="{{ $user->ProvinciaLocalidad }}" placeholder="Provincia">
            <div class="invalid-feedback">Introduce la Provincia</div>
        </div>
        <div class="form-group">
            <label for="Telefono">Telefono:</label>
            <input type="text" class="form-control" name="Telefono" id="Telefono" value="{{ $user->Telefono }}"
                placeholder="Telefono">
            <div class="invalid-feedback">Introduce el telefono</div>
        </div>
        <div>
            <label for="Foto">Foto perfil:</label>
            <input type="file" class='form-control' name='Foto' value="" accept="image/*">
            {!! $errors->first('Foto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
