<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MerDatabaseOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mer_database_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('OrderID')->nullable(false);
            $table->string('OrderNo', 30)->nullable(false);            
            $table->string('StyleNo', 20)->nullable(false);
            $table->string('ItemDescription', 50)->nullable(false);
            $table->char('PrintRequired', 1)->default('N');
            $table->char('EmbroideryRequired', 1)->default('N');
            $table->date('OrderDate')->nullable(false);
            $table->decimal('UnitPrice', 18, 2)->nullable(false);
            $table->integer('OrderQuantity')->nullable(false); 
            $table->integer('Tolerance')->nullable(false);
            $table->date('DeliveryDate');
            $table->date('RevisedDate');
            $table->string('FabricType', 50);
            $table->decimal('GSM', 18, 2)->nullable(false);
            $table->string('Yarn', 30);
            $table->decimal('SMV', 18, 2);
            $table->string('Note', 250);            
            $table->integer('CreatedBy')->nullable();
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
        Schema::dropIfExists('mer_database_orders');
    }
}
