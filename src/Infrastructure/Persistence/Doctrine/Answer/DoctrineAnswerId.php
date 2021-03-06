<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 30-12-2018
 * Time: 21:36
 */

namespace App\Infrastructure\Persistence\Doctrine\Answer;


use App\Domain\Answer\AnswerId;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\StringType;

class DoctrineAnswerId extends StringType
{
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return (string) $value;
    }

    /**
     * Converts a value from its database representation to its PHP representation
     * of this type.
     *
     * @param mixed $value The value to convert.
     * @param \Doctrine\DBAL\Platforms\AbstractPlatform $platform The currently used database platform.
     *
     * @return mixed The PHP representation of the value.
     * @throws \Exception
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return new AnswerId($value);
    }
}