<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->integer('num_people');
            $table->date('trip_date');
            $table->decimal('total_price', 10, 2);
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
