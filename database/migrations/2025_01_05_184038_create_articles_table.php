<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('judul'); // Kolom untuk judul artikel
            $table->text('konten'); // Kolom untuk konten artikel
            $table->string('gambar')->nullable();
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('judul'); // Menghapus kolom 'judul' jika rollback
        });
    }
};
