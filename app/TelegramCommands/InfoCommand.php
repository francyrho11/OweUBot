<?php namespace App\TelegramCommands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Actions;

class InfoCommand extends Command
{
    /**
  * @var string Command Name
  */
  protected $name = "info";

  /**
  * @var string Command Description
  */
  protected $description = "OweUBot info and available commands";

  /**
  * @inheritdoc
  */
  public function handle($arguments) {
    // This will send a message using `sendMessage` method behind the scenes
    $this->replyWithMessage(['text' => 'Hi! My name is OweUBot. A simple Telegram bot for keeping track of small favors you owe or debts that you\'re owed.']);

    // This will update the chat status to typing...
    $this->replyWithChatAction(['action' => Actions::TYPING]);

    // Trigger command
    $this->triggerCommand('command');
  }
}
