<?php namespace App\TelegramCommands;

use Telegram\Bot\Commands\Command;

class OweUCommand extends Command
{
  /**
  * @var string Command Name
  */
  protected $name = "oweu";

  /**
  * @var string Command Description
  */
  protected $description = "Main command, create a new credit for the specified user. Starts with /owe";

  /**
  * @inheritdoc
  */
  public function handle($arguments) {
    //var_dump($arguments);
    $this->replyWithMessage(['text' => 'Do it.']);
  }
}
