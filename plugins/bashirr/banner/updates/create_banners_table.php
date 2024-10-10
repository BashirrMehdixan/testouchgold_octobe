<?php namespace Bashirr\Banner\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateBannersTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration {
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('bashirr_banner_banners', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title');
            $table->string('title_color');
            $table->string('description_color');
            $table->string('banner_description');
            $table->string('banner_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('bashirr_banner_banners');
    }
};
