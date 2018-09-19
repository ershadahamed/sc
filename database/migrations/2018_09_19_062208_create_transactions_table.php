<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('references');
            $table->unsignedInteger('paid_by');
            $table->decimal('amount_paid', 8, 2);
            $table->decimal('amount_to_pay', 8, 2);
            $table->unsignedInteger('order_id')->nullable();
            $table->string('status', 30);
            $table->text('remarks')->nullable();
            $table->string('internal_ref');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
