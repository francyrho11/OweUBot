<?php namespace TelegramBot\TelegramCommands;

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
  protected $description = "Comando di benvenuto, eseguito di default";

  /**
  * @inheritdoc
  */
  public function handle($arguments) {
    $this->replyWithMessage(['text' => 'Hi! My name is OweUBot. I\'m just born so I don\'t have any commands yet. Stay tuned!']);
  }
}
