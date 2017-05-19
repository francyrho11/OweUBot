<?php namespace App\TelegramCommands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;

class OweUCommand extends Command
{
  /**
  * @var string Command Name
  */
  protected $name = "oweu";

  /**
  * @var string Command Description
  */
  protected $description = "Main command, create a new debt or credit";

  /**
  * @inheritdoc
  */
  public function handle($arguments) {
    //var_dump($arguments);
    $keyboard = Keyboard::make()
    ->inline()
    ->row(
        Keyboard::inlineButton(['text' => 'Test', 'callback_data' => 'data']),
        Keyboard::inlineButton(['text' => 'Btn 2', 'callback_data' => 'data_from_btn2'])
    );

    $this->replyWithMessage([
      'text' => 'Hello World',
      'reply_markup' => $keyboard
    ]);
  }
}
