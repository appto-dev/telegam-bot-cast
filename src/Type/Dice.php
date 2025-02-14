<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object represents an animated emoji that displays a random value.
 */
final class Dice implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Emoji on which the dice throw animation is based
         * @var string
         */
        public string $emoji,
        /**
         * Value of the dice, 1-6 for "", "" and "" base emoji, 1-5 for "" and "" base
         * emoji, 1-64 for "" base emoji
         * @var int
         */
        public int $value,
    ) {
    }
}
