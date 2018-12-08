<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateCounselorAccount
 * @noinspection PhpUndefinedMethodInspection
 */
class CreateUsersTable extends Migration
{
    /**
     * @var string
     */
    static $tableName = 'users';
    /**
     * @var Illuminate\Database\Schema\Builder
     */
    private $schema;

    /**
     * CreateCounselorAccount constructor.
     */
    public function __construct()
    {
        $this->schema = \Illuminate\Support\Facades\Schema::getFacadeRoot();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!$this->schema->hasTable(self::$tableName))
        {
            /** @var Illuminate\Database\Connection $db */
            $db = \Illuminate\Support\Facades\DB::getFacadeRoot();
            $this->schema->create(self::$tableName, function (Blueprint $table) use ($db) {
                $table->uuid('id');
                $table->string('credential', 100)->unique();
                $table->string('email', 100)->nullable();
                $table->string('name', 100);
                $table->enum('gender', ['male', 'female']);
                $table->enum('role', ['student', 'counselor']);
                $table->uuid('stamp');
                $table->string('avatar', 100)->nullable();
                $table->string('password', 60);
                $table->uuid('lost_password')->nullable();
                $table->rememberToken();
                $table->timestamp('created_at')->default($db->raw('CURRENT_TIMESTAMP'));
                $table->timestamp('updated_at')->default($db->raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
                $table->primary('id');
            });
        }
        else
        {
            echo 'Table Already Exists';
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->dropIfExists(self::$tableName);
    }
}
