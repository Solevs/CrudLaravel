@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Nuevo Producto</div>

                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <input type="text" name="description" class="form-control" id="description" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Precio</label>
                            <input type="number" name="price" step="0.01" class="form-control" id="price" required>
                        </div>

                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock / Cantidad</label>
                            <input type="number" name="stock" class="form-control" id="stock" required>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Guardar Producto</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection