<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;

/**
 * This object describes the source of a transaction, or its recipient for outgoing
 * transactions. Currently, it can be one of
 *  - <a href="#transactionpartneruser">TransactionPartnerUser</a>
 *  - <a href="#transactionpartnerfragment">TransactionPartnerFragment</a>
 *  - <a href="#transactionpartnertelegramads">TransactionPartnerTelegramAds</a>
 *  - <a href="#transactionpartnertelegramapi">TransactionPartnerTelegramApi</a>
 *  - <a href="#transactionpartnerother">TransactionPartnerOther</a>
 *
 * @version Telegram Bot API 7.11
 */
final class TransactionPartner implements TelegramTypeInterface
{
}
