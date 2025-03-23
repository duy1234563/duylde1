@extends('layout.marter')

@section('title', 'Chi tiết Thực Phẩm')

@section('content')
<div class="container mt-4">
    <h3 class="text-center text-uppercase fw-bold text-danger shadow-lg p-3 mb-3 bg-light rounded">
        CHI TIẾT THỰC PHẨM
    </h3>      

    <div class="row">
        <!-- Hình ảnh thực phẩm -->
        <div class="col-md-6 text-center">
            <img src="{{ asset($fruit->image ?? 'images/default.jpg') }}" 
                 alt="{{ $fruit->name }}" class="img-fluid rounded shadow-lg">
        </div>

        <!-- Thông tin thực phẩm -->
        <div class="col-md-6">
            <h4 class="fw-bold text-primary">{{ strtoupper($fruit->name) }}</h4>
            <p class="text-muted">{{ $fruit->description }}</p>
            <span class="fw-bold text-danger fs-4">{{ number_format($fruit->price) }} đ</span>

            <!-- Nút quay lại -->
            <div class="mt-3">
                <a href="{{ route('fruits.index') }}" class="btn btn-secondary">← Quay lại</a>
            </div>
        </div>
    </div>
</div>
@endsection
