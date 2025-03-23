<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Tắt kiểm tra khóa ngoại
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Xóa dữ liệu cũ
        Category::truncate();
        
        // Thêm dữ liệu mới
        Category::insert([
            ['id' => 1, 'name' => 'Hoa Quả'],
            ['id' => 2, 'name' => 'Thực Phẩm Khô'],
            ['id' => 3, 'name' => 'Rau Hữu Cơ'],
        ]);

        // Bật lại kiểm tra khóa ngoại
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
