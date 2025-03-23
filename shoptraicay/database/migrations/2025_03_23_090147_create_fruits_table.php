<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('fruits', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên sản phẩm
            $table->string('color')->nullable(); // Màu sắc (có thể null)
            $table->decimal('price', 8, 2); // Giá
            $table->integer('quantity')->default(0); // Số lượng, mặc định là 0
            $table->string('image')->nullable(); // Đường dẫn ảnh (có thể null)
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Khóa ngoại
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('fruits');
    }
};
