<?php namespace Zaweb\Gallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAttachmentsTable extends Migration
{

    public function up()
    {
        Schema::create('zaweb_gallery_attachments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zaweb_gallery_attachments');
    }

}
