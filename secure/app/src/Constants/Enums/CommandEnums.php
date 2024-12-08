<?php

enum CommandEnums: string
{
    case ATELIER_TOTAL = 'Total des ateliers';

    public static function toFormChoices(): array
    {
        return [
            self::ATELIER_TOTAL->value => self::ATELIER_TOTAL,
        ];
    }

    public static function toCommand(CommandEnums $commandEnums): string
    {
        return match($commandEnums) {
            self::ATELIER_TOTAL => 'php bin/console app:total',
            default => throw new Exception("Unknown command enum '{$commandEnums}'"),
        };
    }
}