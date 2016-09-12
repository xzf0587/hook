<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    class CreateProfilesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('profiles', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('nickname')->nullable();
                $table->date('birthday')->default('1900-01-01');
                $table->enum('gender', ['male', 'female', 'unknown'])->default('male');
                $table->tinyInteger('status')->default(0);
                $table->timestamps();
                $table->softDeletes();

                // 用户帐号
                $table->bigInteger('user_id')->unsigned()->nullable();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

                // 索引
                $table->index(['name', 'user_id']);

            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::drop('profiles');
        }
    }
