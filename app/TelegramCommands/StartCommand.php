<?php namespace App\TelegramCommands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Actions;

class StartCommand extends Command
{
    /**
  * @var string Command Name
  */
  protected $name = "start";

  /**
  * @var string Command Description
  */
  protected $description = "Start command to get you started";

  /**
  * @inheritdoc
  */
  public function handle($arguments) {
    // This will send a message using `sendMessage` method behind the scenes
    $this->replyWithMessage(['text' => 'Hello! Welcome to our bot, Here are our available commands:']);

    // This will update the chat status to typing...
    $this->replyWithChatAction(['action' => Actions::TYPING]);

    // This will prepare a list of available commands and send the user.
    $commands = $this->getTelegram()->getCommands();

    // Build the list
    $response = '';
    foreach ($commands as $name => $command) {
        $response .= sprintf('/%s - %s' . PHP_EOL, $name, $command->getDescription());
    }

    // Reply with the commands list
    $this->replyWithMessage(['text' => $response]);
  }
}
