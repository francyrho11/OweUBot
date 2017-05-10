<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class RemoveWebhook extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:removewebhook';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove ';
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
      try {
        $response = \Telegram::removeWebhook();
        $this->info($response);
      } catch (\Exception $e) {
        $this->error('Error: ' . $e->getMessage());
      }
    }
}
