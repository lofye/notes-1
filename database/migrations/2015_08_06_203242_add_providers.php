<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Provider;

class AddProviders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Provider::create(['name' => 'Youtube', 'copyright_email' => 'someone@youtube.com']);
        Provider::create(['name' => 'Vimeo', 'copyright_email' => 'someone@vimeo.com']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
