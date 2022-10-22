<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: resources/tadah.proto

namespace App\Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>Tadah.Operation</code>
 */
class Operation
{
    /**
     * Generated from protobuf enum <code>OPEN_JOB = 0;</code>
     */
    const OPEN_JOB = 0;
    /**
     * Generated from protobuf enum <code>CLOSE_JOB = 1;</code>
     */
    const CLOSE_JOB = 1;
    /**
     * Generated from protobuf enum <code>EXECUTE_SCRIPT = 2;</code>
     */
    const EXECUTE_SCRIPT = 2;
    /**
     * Generated from protobuf enum <code>RENEW_TAMPA_JOB_LEASE = 3;</code>
     */
    const RENEW_TAMPA_JOB_LEASE = 3;
    /**
     * Generated from protobuf enum <code>CLOSE_ALL_JOBS = 4;</code>
     */
    const CLOSE_ALL_JOBS = 4;
    /**
     * Generated from protobuf enum <code>CLOSE_ALL_TAMPA_PROCESSES = 5;</code>
     */
    const CLOSE_ALL_TAMPA_PROCESSES = 5;
    /**
     * Generated from protobuf enum <code>THUMBNAIL = 6;</code>
     */
    const THUMBNAIL = 6;

    private static $valueToName = [
        self::OPEN_JOB => 'OPEN_JOB',
        self::CLOSE_JOB => 'CLOSE_JOB',
        self::EXECUTE_SCRIPT => 'EXECUTE_SCRIPT',
        self::RENEW_TAMPA_JOB_LEASE => 'RENEW_TAMPA_JOB_LEASE',
        self::CLOSE_ALL_JOBS => 'CLOSE_ALL_JOBS',
        self::CLOSE_ALL_TAMPA_PROCESSES => 'CLOSE_ALL_TAMPA_PROCESSES',
        self::THUMBNAIL => 'THUMBNAIL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

