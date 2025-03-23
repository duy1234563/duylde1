<header class="bg-success text-white text-center py-3">
    <h1>🍽️ Quản lý Thực Phẩm</h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="{{ route('fruits.index') }}">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fruits.index') }}">📋 Danh sách thực phẩm</a>
                    </li>
                    @if(Route::has('fruits.danhsach'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('fruits.danhsach') }}">📜 Menu thực phẩm</a>
                        </li>
                    @endif
                    @if(Route::has('fruits.create'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('fruits.create') }}">➕ Thêm thực phẩm</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
