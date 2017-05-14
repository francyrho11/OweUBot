<?php namespace App\TelegramCommands;

use Telegram\Bot\Commands\Command;

class HelpCommand extends Command
{
  /**
  * @var string Command Name
  */
  protected $name = "help";

  /**
  * @var string Command Description
  */
  protected $description = "First steps to get you started";

  /**
  * @inheritdoc
  */
  public function handle($arguments) {
    $this->replyWithMessage(['text' => 'Hi! My name is OweUBot. A simple Telegram bot for keeping track of small favors you owe or debts that you\'re owed.I\'m just born so I don\'t have any commands yet. Stay tuned!']);
  }
}
