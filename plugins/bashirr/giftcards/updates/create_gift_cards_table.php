<?php namespace Bashirr\GiftCards\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateGiftCardsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration {
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('bashirr_giftcards_gift_cards', function (Blueprint $table) {
            $table->id();
            $table->string('card_name');
            $table->string('slug');
            $table->longText('card_description');
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('bashirr_giftcards_gift_cards');
    }
};
