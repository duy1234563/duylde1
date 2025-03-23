@extends('layout.marter')

@section('content')
<div class="container">
    <h2>Chỉnh Sửa Trái Cây</h2>

    <!-- Hiển thị lỗi nếu có -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form chỉnh sửa trái cây -->
    <form action="{{ route('fruits.update', $fruit->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Tên trái cây</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $fruit->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $fruit->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $fruit->price) }}" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Danh mục</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $fruit->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập Nhật</button>
        <a href="{{ route('fruits.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
