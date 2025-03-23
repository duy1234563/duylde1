@extends('layout.marter')

@section('title', 'Danh sách Trái Cây')

@section('content')
<div class="container mt-4">
    <h3 class="text-center text-uppercase fw-bold text-success shadow-lg p-3 mb-3 bg-light rounded">
        DANH SÁCH TRÁI CÂY
    </h3>      

    <!-- Form tìm kiếm -->
    <form action="{{ route('fruits.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Tìm kiếm trái cây..." value="{{ request('search') }}">
            <button type="submit" class="btn {{ request('search') ? 'btn-danger' : 'btn-success' }}">🔍 Tìm kiếm</button>
        </div>
    </form>

    @if($fruits->isEmpty())
        <div class="alert alert-warning text-center">
            <strong>⚠ Không có trái cây nào được tìm thấy!</strong>
        </div>
    @else
        <!-- Duyệt từng danh mục -->
        @foreach($fruits as $name => $fruitList)
            <h4 class="text-center fw-bold mt-4">{{ $name ?? 'Chưa phân loại' }}</h4>
            <hr class="border border-dark">

            <div class="row">
                @foreach($fruitList as $fruit)
                    <div class="col-md-6 d-flex align-items-center mb-3">
                        <a href="{{ route('fruits.show', $fruit->id) }}">
                            <img src="{{ asset($fruit->image ?: 'images/fruits/default.jpg') }}" 
                                alt="{{ $fruit->name }}" width="80" class="rounded shadow me-3">
                        </a>

                        <div>
                            <strong>{{ strtoupper($fruit->name) }}</strong>
                            <p class="text-muted">{{ $fruit->description }}</p>
                        </div>
                        <span class="ms-auto fw-bold text-success">{{ number_format($fruit->price) }} đ</span>
                    </div>
                @endforeach
            </div>
        @endforeach
    @endif

</div>  
@endsection
