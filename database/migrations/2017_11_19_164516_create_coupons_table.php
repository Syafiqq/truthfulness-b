<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateCouponsTable
 */
class CreateCouponsTable extends Migration
{

    /**
     * @var string
     */
    static $tableName = 'coupons';
    /**
     * @var Illuminate\Database\Schema\Builder
     */
    private $schema;

    /**
     * CreateCouponsTable constructor.
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
                $table->string('coupon', 20)->unique();
                $table->uuid('assignee');
                $table->enum('usage', ['student', 'counselor']);
                $table->timestamp('created_at')->default($db->raw('CURRENT_TIMESTAMP'));
                $table->primary('id');
                $table->foreign('assignee')
                    ->references('id')->on(CreateUsersTable::$tableName)
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        if ($this->schema->hasTable(self::$tableName))
        {
            $this->schema->table(self::$tableName, function (Blueprint $table) {
                $table->dropForeign('coupons_assignee_foreign');
            });
        }
        else
        {
            echo 'Table Not Exists';
        }

        $this->schema->dropIfExists(self::$tableName);
    }

}
