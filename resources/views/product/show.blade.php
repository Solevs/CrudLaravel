@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Detalles del Producto</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"> Volver</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group mb-3">
                        <strong>Descripción:</strong>
                        {{ $product->description }}
                    </div>
                    <div class="form-group mb-3">
                        <strong>Precio:</strong>
                        ${{ number_format($product->price, 2) }}
                    </div>
                    <div class="form-group mb-3">
                        <strong>Stock disponible:</strong>
                        {{ $product->stock }}
                    </div>
                    <div class="form-group mb-3">
                        <strong>Fecha de Creación:</strong>
                        {{ $product->created_at->format('d/m/Y H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection