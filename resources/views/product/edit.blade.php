@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Producto</div>

                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <input type="text" name="description" class="form-control" id="description" value="{{ $product->description }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Precio</label>
                            <input type="number" name="price" step="0.01" class="form-control" id="price" value="{{ $product->price }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" id="stock" value="{{ $product->stock }}" required>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success">Actualizar Cambios</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection