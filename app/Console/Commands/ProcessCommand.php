<?php
namespace OweUBot\Console\Commands;

use Illuminate\Console\Command;
use Telegram;
use Exception;

class ProcessCommand extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:process';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process messages from the bot';
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
      try {
        $result = Telegram::commandsHandler(false);
        $this->info('Processati ' . count($result) . ' messaggi.');
      } catch (Exception $e) {
        $this->error('Errore: ' . $e->getMessage());
      }
    }
}
