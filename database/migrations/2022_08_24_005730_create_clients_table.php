<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        create table client
        (
            id         int unsigned not null primary key,
            fullname   varchar(200) null,
            email      varchar(200) null,
            cellphone  varchar(14)  null,
            created_at timestamp    not null,
            updated_at timestamp    not null,
            deleted_at timestamp    null,
            constraint cliente_celular_uindex
                unique (cellphone),
            constraint cliente_id_uindex
                unique (id)
        );
        */

        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname', 200)->nullable();
            $table->string('email', 200)->unique()->nullable();
            $table->string('cellphone', 14)->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->softDeletes();
            $table->unique('cellphone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
};