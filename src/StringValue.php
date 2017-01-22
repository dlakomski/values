<?php

namespace GW\Value;

interface StringValue extends CharsValue
{
    /**
     * @return StringValue
     */
    public function stripTags();

    /**
     * @return StringValue
     */
    public function trim(string $characterMask = " \t\n\r\0\x0B");

    /**
     * @return StringValue
     */
    public function trimRight(string $characterMask = " \t\n\r\0\x0B");

    /**
     * @return StringValue
     */
    public function trimLeft(string $characterMask = " \t\n\r\0\x0B");

    /**
     * @return StringValue
     */
    public function lower();

    /**
     * @return StringValue
     */
    public function upper();

    /**
     * @return StringValue
     */
    public function lowerFirst();

    /**
     * @return StringValue
     */
    public function upperFirst();

    /**
     * @return StringValue
     */
    public function upperWords();

    /**
     * @return StringValue
     */
    public function padRight(int $length, string $string = ' ');

    /**
     * @return StringValue
     */
    public function padLeft(int $length, string $string = ' ');

    /**
     * @return StringValue
     */
    public function padBoth(int $length, string $string = ' ');

    /**
     * @return StringValue
     */
    public function replace(string $search, string $replace);

    /**
     * @return StringValue
     */
    public function translate(array $pairs);

    /**
     * @return StringValue
     */
    public function replacePattern(string $pattern, string $replacement);

    /**
     * @return StringValue
     */
    public function replacePatternCallback(string $pattern, callable $callback);

    /**
     * @return StringValue
     */
    public function truncate(int $length, string $postfix = '...');

    public function length(): int;

    public function position(string $needle): ?int;

    public function lastPosition(string $needle): ?int;

    public function matchAllPatterns(string $pattern): ArrayValue;

    public function matchPatterns(string $pattern): ArrayValue;

    public function isMatching(string $pattern): bool;

    public function splitByPattern(string $pattern): ArrayValue;

    public function explode(string $delimiter): ArrayValue;

    public function contains(string $substring): bool;

    public function toString(): string;

    public function __toString(): string;
}
