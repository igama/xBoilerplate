<?php
namespace otupman\xBoilerplate;
/**
 * @author Oliver Tupman <oliver.tupman@centralway.com>
 * Date: 07/06/2012
 * Time: 17:46
 */
use Composer\Script\Event;

class ComposerKickStart3
{
    public static function postInstall(Event $event) {
        $event->getIO()->ask("Is this working?");
    }
}
