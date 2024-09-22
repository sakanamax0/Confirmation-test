<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->string('last_name'); // 姓
        $table->string('first_name'); // 名
        $table->string('gender')->default('male'); // 性別（デフォルトは男性）
        $table->string('email')->unique(); // メールアドレス
        $table->string('phone'); // 電話番号
        $table->string('address'); // 住所
        $table->string('building')->nullable(); // 建物名
        $table->string('inquiry_type')->nullable(); // 問い合わせの種類
        $table->text('inquiry_content')->nullable(); // 問い合わせ内容
        $table->timestamps(); // 作成・更新日時
    });
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
