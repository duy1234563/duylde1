<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fruit; // Đảm bảo Model `Fruit` tồn tại

class FruitSeeder extends Seeder
{
    public function run()
    {
        $fruits = [
            ['name' => 'Táo Đỏ', 'category_id' => 1, 'price' => 30000, 'image' => 'imgthucpham/hinh1.png', 'quantity' => 20],
            ['name' => 'Lê Hàn Quốc', 'category_id' => 1, 'price' => 35000, 'image' => 'imgthucpham/hinh2.png', 'quantity' => 15],
            ['name' => 'Nho Đen', 'category_id' => 1, 'price' => 50000, 'image' => 'imgthucpham/hinh3.png', 'quantity' => 25],
            ['name' => 'Nấm Đông Cô Khô', 'category_id' => 2, 'price' => 45000, 'image' => 'imgthucpham/hinh4.png', 'quantity' => 30],
            ['name' => 'Măng Khô', 'category_id' => 2, 'price' => 60000, 'image' => 'imgthucpham/hinh5.png', 'quantity' => 10],
            ['name' => 'Táo Tàu Khô', 'category_id' => 2, 'price' => 40000, 'image' => 'imgthucpham/hinh6.png', 'quantity' => 12],
            ['name' => 'Cải Thìa', 'category_id' => 3, 'price' => 15000, 'image' => 'imgthucpham/hinh7.png', 'quantity' => 18],
            ['name' => 'Rau Muống', 'category_id' => 3, 'price' => 12000, 'image' => 'imgthucpham/hinh8.png', 'quantity' => 22],
            ['name' => 'Cải Bó Xôi', 'category_id' => 3, 'price' => 18000, 'image' => 'imgthucpham/hinh9.png', 'quantity' => 28],
            ['name' => 'Bắp Cải', 'category_id' => 3, 'price' => 25000, 'image' => 'imgthucpham/hinh10.png', 'quantity' => 35],
        ];

        foreach ($fruits as $fruit) {
            Fruit::create($fruit);
        }
    }
}
