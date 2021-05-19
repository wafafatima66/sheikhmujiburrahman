<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // $table->foreignId('GalleryAlbum_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('album_id');
            $table->foreign('album_id')->references('id')->on('gallery_albums')->onDelete('cascade');
            $table->string('photo_link');
            $table->string('photo_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_photos');
    }
}
