@extends('layout.marter')

@section('title', 'Danh sách Trái Cây')

@section('content')
<div class="container mt-4">
    <h3 class="text-center text-uppercase fw-bold text-success shadow-lg p-3 mb-3 bg-light rounded">
        DANH SÁCH TRÁI CÂY
    </h3>      

    <a href="{{ route('fruits.create') }}" class="btn btn-success mb-3">
        <i class="fas fa-plus"></i> Thêm trái cây mới
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form tìm kiếm -->
    <form action="{{ route('fruits.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Tìm kiếm trái cây..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i> Tìm kiếm
            </button>
        </div>
    </form>

    <!-- Kiểm tra nếu có dữ liệu -->
    @if($fruits->isNotEmpty())
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Trái Cây</th>
                    <th>Mô Tả</th>
                    <th>Danh Mục</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fruits as $fruit)
                <tr>
                    <td>{{ $fruit->id }}</td>
                    <td class="fw-bold">{{ $fruit->name }}</td>
                    <td>{{ $fruit->description }}</td>
                    <td>{{ $fruit->category->name ?? 'Không có danh mục' }}</td>
                    <td class="text-danger fw-bold">{{ number_format($fruit->price) }} VND</td>
                    <td>
                        <img src="{{ asset($fruit->image ?? 'images/default.jpg') }}" 
                             alt="{{ $fruit->name }}" width="100" class="rounded shadow">
                    </td>
                    <td>
                        <a href="{{ route('fruits.edit', $fruit->id) }}" class="btn btn-warning">✏️ Sửa</a>

                        <form action="{{ route('fruits.destroy', $fruit->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc muốn xóa trái cây này?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">❌ Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning text-center">
            <strong>⚠ Không tìm thấy trái cây nào!</strong>
        </div>
    @endif
</div>  
@endsection
