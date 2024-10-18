<div class="col-4">
    <div class="card">
        <h5 class="card-header text-center">{{ $titulo }}</h5>
        <div class="card-body">
            <h5 class="card-title">Elige la converción a realizar:</h5>

            <form action="/proceso{{ $tipo }}" method="POST">
                @csrf
                <select name="TipoC" class="form-select" id="" required>
                <option value="" >Selecciona...</option>
                <option value="1">{{ $conversion1 }}</option>
                <option value="2">{{ $conversion2 }}</option>
            </select>

            <label for="">Ingresa la cantidad:</label>
            <div class="col-5">
                <input name="Cantidad" type="text" class="form-control col-2" required>
            </div>
            
            <button class="btn btn-primary text-ceenter" type="submit">Calcular</button>
            </form>
        </div>
    </div>
</div>