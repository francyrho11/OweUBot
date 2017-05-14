<?php namespace App\TelegramCommands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Actions;

class SignupCommand extends Command
{
    /**
  * @var string Command Name
  */
  protected $name = "signup";

  /**
  * @var string Command Description
  */
  protected $description = "Signup to OweUBot (name, last name and telegram id saved)";

  /**
  * @inheritdoc
  */
  public function handle($arguments) {

    //var_dump($this->getUpdate());

    // This will send a message using `sendMessage` method behind the scenes
    // $this->replyWithMessage(['text' => 'Hello! Welcome to OweUBot, here are the available commands:']);
    //
    // // This will update the chat status to typing...
    // $this->replyWithChatAction(['action' => Actions::TYPING]);
    //
    // // This will prepare a list of available commands and send the user.
    // $commands = $this->getTelegram()->getCommands();
    //
    // // Build the list
    // $response = '';
    // foreach ($commands as $name => $command) {
    //     $response .= sprintf('/%s - %s' . PHP_EOL, $name, $command->getDescription());
    // }
    //
    // // Reply with the commands list
    // $this->replyWithMessage(['text' => $response]);
  }
}
