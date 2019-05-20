<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessregistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businessregistration', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('user_id')->nullable();
            $table->string('doc_name')->nullable();
            $table->string( 'proposed_name1');
            $table->string( 'proposed_name2');
            $table->string( 'proposed_name3');
            $table->string( 'business_nature');
            $table->date( 'commencement_date');
            $table->string( 'plot_no_lr');
            $table->string( 'street_name');
            $table->string( 'postal_address');
            $table->string( 'branch_address');
            $table->string( 'telephone');
            $table->string('email');
            $table->string( 'proprietor_partner1');
            $table->string( 'proprietor_partner2');
            $table->string( 'proprietor_partner3');
            $table->string( 'nationality_citizenship');
            $table->string( 'nationality_origin');
            $table->string('age');
            $table->string( 'gender');
            $table->string( 'place_residence');
            $table->string( 'other_business_occupation');
            $table->string( 'mobile_no');
            $table->boolean('document_status')->default(1);

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
        Schema::dropIfExists('businessregistration');
    }
}
