<?php namespace OweUBot\TelegramCommands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Actions;
use \OweUBot\User;

class LogoutCommand extends Command
{
    /**
  * @var string Command Name
  */
  protected $name = "logout";

  /**
  * @var string Command Description
  */
  protected $description = "Logout from OweUBot";

  /**
  * @inheritdoc
  */
  public function handle($arguments) {
    // typing
    $this->replyWithChatAction(['action' => Actions::TYPING]);

    // get message
    $user = $this->getUpdate();

    // are we in a group?
    if($user["message"]["chat"]["type"] === 'group'){

      //get fields
      $fields = array();
      $fields["telegram_user_id"] = $user["message"]["from"]["id"];
      $fields["telegram_group_id"] = $user["message"]["chat"]["id"];
      $fields["first_name"] = $user["message"]["from"]["first_name"];
      $fields["last_name"] = $user["message"]["from"]["last_name"];

      // check if user already exist in the db
      $user = new User;
      $result = $user::where([
        'telegram_user_id' => $fields["telegram_user_id"],
        'telegram_group_id' => $fields["telegram_group_id"]
        ])->first();

      if($result && $result->exists){
        // new record
        $result->delete();
        // success message
        $this->replyWithMessage(['text' => 'Logout successfull']);
      } else {
        $this->replyWithMessage(['text' => 'You are already logout']);
      }

    } else {
      $this->replyWithMessage(['text' => 'OweUBot needs to run in a group to work']);
    }
  }
}
