<?php
declare(strict_types = 1);

namespace MHorwood\Jukebox\classes;

use ReflectionClass;

class AsciiColorizer {

    public $argsBOLD = 1;
    public $argsDARK = 2;
    public $argsITALIC = 3;
    public $argsUNDERLINE = 4;
    public $argsBLINK = 5;
    public $argsREVERSE = 7;
    public $argsCONCEALED = 8;

    public $argsBLACK = 30;
    public $argsRED = 31;
    public $argsGREEN = 32;
    public $argsYELLOW = 33;
    public $argsBLUE = 34;
    public $argsMAGENTA = 35;
    public $argsCYAN = 36;
    public $argsLIGHT_GRAY = 37;
    public $argsDARK_GRAY = 90;
    public $argsLIGHT_RED = 91;
    public $argsLIGHT_GREEN = 92;
    public $argsLIGHT_YELLOW = 93;
    public $argsLIGHT_BLUE = 94;
    public $argsLIGHT_MAGENTA = 95;
    public $argsLIGHT_CYAN = 96;
    public $argsWHITE = 97;

    public $argsBACKGROUND_DEFAULT = 49;
    public $argsBACKGROUND_BLACK = 40;
    public $argsBACKGROUND_RED = 41;
    public $argsBACKGROUND_GREEN = 42;
    public $argsBACKGROUND_YELLOW = 43;
    public $argsBACKGROUND_BLUE = 44;
    public $argsBACKGROUND_MAGENTA = 45;
    public $argsBACKGROUND_CYAN = 46;
    public $argsBACKGROUND_LIGHT_GRAY = 47;
    public $argsBACKGROUND_DARK_GRAY = 100;
    public $argsBACKGROUND_LIGHT_RED = 101;
    public $argsBACKGROUND_LIGHT_GREEN = 102;
    public $argsBACKGROUND_LIGHT_YELLOW = 103;
    public $argsBACKGROUND_LIGHT_BLUE = 104;
    public $argsBACKGROUND_LIGHT_MAGENTA = 105;
    public $argsBACKGROUND_LIGHT_CYAN = 106;
    public $argsBACKGROUND_WHITE = 107;

    private static $constants = [];

    /**
     * @param string $text
     * @param array|null $colors
     *
     * @return string
     * @throws ColorException
     * @throws \ReflectionException
     */
    public function colorize(string $text, array $colors = null): string {
        if ($colors === null) {
            return $text;
        }

        foreach ($colors as $color) {
            if (!$this->colorExists($color)) {
                throw new ColorException('Unknown color ' . $color . ', use constans of class Color');
            }
        }

        $result = \chr(27) . '[0m' . \chr(27) . '[' . implode(';', $colors) . 'm' . $text . \chr(27) . '[0m';

        return $result;
    }

    /**
     * @param int $color
     *
     * @return bool
     * @throws \ReflectionException
     */
    public function colorExists(int $color): bool {
        if (empty(self::$constants)) {
            $oClass = new ReflectionClass(__CLASS__);
            self::$constants = $oClass->getConstants();
        }

        return \in_array($color, self::$constants, true);
    }

    /**
     * @return string
     */
    public function getEOL(): string {
        return PHP_EOL;
    }

    /**
     * @param string $text
     *
     * @return string
     */
    public function processFinalText(string $text): string {
        return $text;
    }
}
