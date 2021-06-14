<?php

namespace App\Console;

use App\Console\Commands\kuai_san;
use App\Console\Commands\kuai_che;
use App\Console\Commands\lhc;
use App\Console\Commands\ssc;
use App\Console\Commands\statistics;
use App\Console\Commands\create_lottery_record;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(kuai_san::class, [])->everyMinute();
        $schedule->command(kuai_che::class, [])->everyMinute();
        $schedule->command(ssc::class, [])->everyMinute();
        $schedule->command(lhc::class, [])->everyMinute();
        // 期号生成
        $schedule->command(create_lottery_record::class, [])->dailyAt('23:00');
        // 统计昨天报表
        $schedule->command(statistics::class, [2])->dailyAt('00:01');

        // 每3分钟执行
        $schedule->command(kuai_san::class, [5])->everyThreeMinutes();
        $schedule->command(kuai_che::class, [7])->everyThreeMinutes();
        $schedule->command(ssc::class, [9])->everyThreeMinutes();
        $schedule->command(lhc::class, [12])->everyThreeMinutes();
        // 每5分钟执行
        $schedule->command(kuai_san::class, [6])->everyFiveMinutes();
        $schedule->command(kuai_che::class, [8])->everyFiveMinutes();
        $schedule->command(ssc::class, [10])->everyFiveMinutes();
        $schedule->command(lhc::class, [13])->everyFiveMinutes();


    }
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
