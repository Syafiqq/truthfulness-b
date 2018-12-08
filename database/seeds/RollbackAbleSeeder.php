<?php

use Illuminate\Support\Arr;

/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 23 November 2018, 10:51 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
abstract class RollbackAbleSeeder extends \Illuminate\Database\Seeder
{
    private $rollback = false;

    public function with(bool $rollback = false): RollbackAbleSeeder
    {
        $this->rollback = $rollback;

        return $this;
    }

    public function call($class, $silent = false)
    {
        $classes = Arr::wrap($class);

        foreach ($classes as $class)
        {


            if ($this->rollback)
            {
                if ($silent === false && isset($this->command))
                {
                    $this->command->getOutput()->writeln("<info>RollingBack:</info> $class");
                }
                $this->resolve($class)->__revoke();
            }
            else
            {
                if ($silent === false && isset($this->command))
                {
                    $this->command->getOutput()->writeln("<info>Seeding:</info> $class");
                }
                $this->resolve($class)->__invoke();
            }
        }

        return $this;
    }

    private function __revoke()
    {
        if (!method_exists($this, 'roll'))
        {
            throw new InvalidArgumentException('Method [roll] missing from ' . get_class($this));
        }

        return isset($this->container)
            ? $this->container->call([$this, 'roll'])
            : $this->roll();
    }

    protected function resolve($class): RollbackAbleSeeder
    {
        if (isset($this->container))
        {
            $instance = $this->container->make($class);

            $instance->setContainer($this->container);
        }
        else
        {
            $instance = new $class;
        }

        if (isset($this->command))
        {
            $instance->setCommand($this->command);
        }

        return $instance;
    }


}

?>
