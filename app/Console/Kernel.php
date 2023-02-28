<?php

namespace App\Console;

use App\Console\Commands\GenerarActivationCommand;
use App\Console\Commands\GenerarCorteCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    // Comando de cortes automatico
    
    protected $commands = [
        GenerarCorteCommand::class,
        GenerarActivationCommand::class
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('command:cortes')
        ->everyTwoHours();

        $schedule->command('command:active')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }


        
}
