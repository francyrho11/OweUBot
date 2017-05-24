<?php namespace OweUBot\TelegramCommands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;
use \OweUBot\User;

use Telegram;

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
    // get message
    $update = $this->getUpdate();

    // are we in a group?
    if($update["message"]["chat"]["type"] === 'group'){

      $keyboard = [
        [ "\xE2\x9C\x85 Credit", "\xF0\x9F\x94\xB4 Debit"]
      ];

      $reply_markup = Telegram::replyKeyboardMarkup([
      	'keyboard' => $keyboard,
      	'resize_keyboard' => true,
      	'one_time_keyboard' => true,
        'selective' => true
      ]);

      $result = $this->replyWithMessage([
        'text' => "Do you want to add a credit or debit?",
        'reply_to_message_id' => $update["message"]["message_id"],
        'reply_markup' => $reply_markup
      ]);

      //print(print_r($result,true));


    } else {
      $this->replyWithMessage(['text' => 'OweUBot needs to run in a group to work']);
    }
  }
}
