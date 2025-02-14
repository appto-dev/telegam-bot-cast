<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * Describes an inline message sent by a <a href="/bots/webapps">Web App</a> on
 * behalf of a user.
 */
final class SentWebAppMessage implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Identifier of the sent inline message. Available only if there is an inline
         * keyboard attached to the message.
         * @var string
         */
        public ?string $inline_message_id,
    ) {
    }
}
