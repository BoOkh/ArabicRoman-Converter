<?php
/**
 * Class Converter
 */
class Converter
{
    /**
     * @var array <p>Arabic numbers</p>
     */
    private static $romanNumbers = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];

    /**
     * @var array <p>Roman numbers</p>
     */
    private static $romanValues = ["M","CM","D","CD","C","XC","L","XL","X","IX","V","IV","I"];

    /**
     * <p>Convert Arabic numerals to Roman numerals</p>
     * @param $number <p>The number to convert</p>
     * @return string <p>Converted value</p>
     */
    public static function convert($number)
    {
        $converted = '';
        $i = 0;
        while ($number > 0 ) {
            while (($number - self::$romanNumbers[$i]) >= 0) {
                $number -= self::$romanNumbers[$i];
                $converted .= self::$romanValues[$i];
            }
            $i++;
        }
        return $converted;
    }
}