<?php namespace OweUBot\TelegramCommands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Actions;

class CommandsCommand extends Command
{
  /**
  * @var string Command Name
  */
  protected $name = "command";

  /**
  * @var string Command Description
  */
  protected $description = "List of the available commands";

  /**
  * @inheritdoc
  */
  public function handle($arguments) {

    // This will update the chat status to typing...
    $this->replyWithChatAction(['action' => Actions::TYPING]);

    // This will prepare a list of available commands and send the user.
    $commands = $this->getTelegram()->getCommands();

    // Build the list
    $response = 'Here are the available commands:' . PHP_EOL;
    foreach ($commands as $name => $command) {
        $response .= sprintf('/%s - %s' . PHP_EOL, $name, $command->getDescription());
    }

    // Reply with the commands list
    $this->replyWithMessage(['text' => $response]);
  }
}
