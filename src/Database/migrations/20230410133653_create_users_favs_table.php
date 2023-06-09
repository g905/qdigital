<?php

use \QD\Database\Migration\Migration;

class CreateUsersFavsTable extends Migration {

    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up() {
        $this->schema->create('users_favs', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('book_id');
            $table->timestamps();
        });
    }

    public function down() {
        $this->schema->drop('users_favs');
    }

}
