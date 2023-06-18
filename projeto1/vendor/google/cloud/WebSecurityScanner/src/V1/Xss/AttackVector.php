<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1/finding_addon.proto

namespace Google\Cloud\WebSecurityScanner\V1\Xss;

use UnexpectedValueException;

/**
 * Types of XSS attack vector.
 *
 * Protobuf type <code>google.cloud.websecurityscanner.v1.Xss.AttackVector</code>
 */
class AttackVector
{
    /**
     * Unknown attack vector.
     *
     * Generated from protobuf enum <code>ATTACK_VECTOR_UNSPECIFIED = 0;</code>
     */
    const ATTACK_VECTOR_UNSPECIFIED = 0;
    /**
     * The attack comes from fuzzing the browser's localStorage.
     *
     * Generated from protobuf enum <code>LOCAL_STORAGE = 1;</code>
     */
    const LOCAL_STORAGE = 1;
    /**
     * The attack comes from fuzzing the browser's sessionStorage.
     *
     * Generated from protobuf enum <code>SESSION_STORAGE = 2;</code>
     */
    const SESSION_STORAGE = 2;
    /**
     * The attack comes from fuzzing the window's name property.
     *
     * Generated from protobuf enum <code>WINDOW_NAME = 3;</code>
     */
    const WINDOW_NAME = 3;
    /**
     * The attack comes from fuzzing the referrer property.
     *
     * Generated from protobuf enum <code>REFERRER = 4;</code>
     */
    const REFERRER = 4;
    /**
     * The attack comes from fuzzing an input element.
     *
     * Generated from protobuf enum <code>FORM_INPUT = 5;</code>
     */
    const FORM_INPUT = 5;
    /**
     * The attack comes from fuzzing the browser's cookies.
     *
     * Generated from protobuf enum <code>COOKIE = 6;</code>
     */
    const COOKIE = 6;
    /**
     * The attack comes from hijacking the post messaging mechanism.
     *
     * Generated from protobuf enum <code>POST_MESSAGE = 7;</code>
     */
    const POST_MESSAGE = 7;
    /**
     * The attack comes from fuzzing parameters in the url.
     *
     * Generated from protobuf enum <code>GET_PARAMETERS = 8;</code>
     */
    const GET_PARAMETERS = 8;
    /**
     * The attack comes from fuzzing the fragment in the url.
     *
     * Generated from protobuf enum <code>URL_FRAGMENT = 9;</code>
     */
    const URL_FRAGMENT = 9;
    /**
     * The attack comes from fuzzing the HTML comments.
     *
     * Generated from protobuf enum <code>HTML_COMMENT = 10;</code>
     */
    const HTML_COMMENT = 10;
    /**
     * The attack comes from fuzzing the POST parameters.
     *
     * Generated from protobuf enum <code>POST_PARAMETERS = 11;</code>
     */
    const POST_PARAMETERS = 11;
    /**
     * The attack comes from fuzzing the protocol.
     *
     * Generated from protobuf enum <code>PROTOCOL = 12;</code>
     */
    const PROTOCOL = 12;
    /**
     * The attack comes from the server side and is stored.
     *
     * Generated from protobuf enum <code>STORED_XSS = 13;</code>
     */
    const STORED_XSS = 13;
    /**
     * The attack is a Same-Origin Method Execution attack via a GET parameter.
     *
     * Generated from protobuf enum <code>SAME_ORIGIN = 14;</code>
     */
    const SAME_ORIGIN = 14;
    /**
     * The attack payload is received from a third-party host via a URL that is
     * user-controllable
     *
     * Generated from protobuf enum <code>USER_CONTROLLABLE_URL = 15;</code>
     */
    const USER_CONTROLLABLE_URL = 15;

    private static $valueToName = [
        self::ATTACK_VECTOR_UNSPECIFIED => 'ATTACK_VECTOR_UNSPECIFIED',
        self::LOCAL_STORAGE => 'LOCAL_STORAGE',
        self::SESSION_STORAGE => 'SESSION_STORAGE',
        self::WINDOW_NAME => 'WINDOW_NAME',
        self::REFERRER => 'REFERRER',
        self::FORM_INPUT => 'FORM_INPUT',
        self::COOKIE => 'COOKIE',
        self::POST_MESSAGE => 'POST_MESSAGE',
        self::GET_PARAMETERS => 'GET_PARAMETERS',
        self::URL_FRAGMENT => 'URL_FRAGMENT',
        self::HTML_COMMENT => 'HTML_COMMENT',
        self::POST_PARAMETERS => 'POST_PARAMETERS',
        self::PROTOCOL => 'PROTOCOL',
        self::STORED_XSS => 'STORED_XSS',
        self::SAME_ORIGIN => 'SAME_ORIGIN',
        self::USER_CONTROLLABLE_URL => 'USER_CONTROLLABLE_URL',
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

