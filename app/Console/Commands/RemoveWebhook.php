<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Telegram;
use Exception;

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
        $response = Telegram::removeWebhook();
        $this->info($response->getDecodedBody()["description"] . PHP_EOL);
      } catch (Exception $e) {
        $this->error('Error: ' . $e->getMessage());
      }
    }
}
