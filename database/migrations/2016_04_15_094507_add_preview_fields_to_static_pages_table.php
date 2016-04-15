<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPreviewFieldsToStaticPagesTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('static_pages', function(Blueprint $table) {

            $table->string('preview_file_name')->nullable();
            $table->integer('preview_file_size')->nullable()->after('preview_file_name');
            $table->string('preview_content_type')->nullable()->after('preview_file_size');
            $table->timestamp('preview_updated_at')->nullable()->after('preview_content_type');

        });

    }

    /**
     * Revert the changes to the table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('static_pages', function(Blueprint $table) {

            $table->dropColumn('preview_file_name');
            $table->dropColumn('preview_file_size');
            $table->dropColumn('preview_content_type');
            $table->dropColumn('preview_updated_at');

        });
    }

}