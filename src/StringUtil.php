<?php

namespace Hilalahmad\StringUtil;

class StringUtil
{
    /**
     * Reverse a string.
     *
     * @param string $input
     * @return string
     */
    public static function reverseString($input)
    {
        return strrev($input);
    }

    /**
     * Extract a substring from a string.
     *
     * @param string $input
     * @param int $start
     * @param int $length
     * @return string
     */
    public static function extractSubstring($input, $start, $length)
    {
        return substr($input, $start, $length);
    }

    /**
     * Count occurrences of a character in a string.
     *
     * @param string $input
     * @param string $char
     * @return int
     */
    public static function countOccurrences($input, $char)
    {
        return substr_count($input, $char);
    }

    /**
     * Reverse a string while preserving word order.
     *
     * @param string $input
     * @return string
     */
    public static function reverseWithWords($input)
    {
        $words = explode(' ', $input);
        $reversedWords = array_map('strrev', $words);
        return implode(' ', $reversedWords);
    }

    /**
     * Replace a substring with another in a string.
     *
     * @param string $input
     * @param string $search
     * @param string $replace
     * @return string
     */
    public static function replaceSubstring($input, $search, $replace)
    {
        return str_replace($search, $replace, $input);
    }

    /**
     * Count occurrences of each character in a string.
     *
     * @param string $input
     * @return array
     */
    public static function countCharacterOccurrences($input)
    {
        $charCount = array_count_values(str_split($input));
        ksort($charCount);
        return $charCount;
    }

    /**
     * Check if a string starts with a specific substring.
     *
     * @param string $input
     * @param string $prefix
     * @return bool
     */
    public static function startsWith($input, $prefix)
    {
        return strncmp($input, $prefix, strlen($prefix)) === 0;
    }

    /**
     * Check if a string ends with a specific substring.
     *
     * @param string $input
     * @param string $suffix
     * @return bool
     */
    public static function endsWith($input, $suffix)
    {
        return substr_compare($input, $suffix, -strlen($suffix)) === 0;
    }

    /**
     * Convert a string to title case.
     *
     * @param string $input
     * @return string
     */
    public static function toTitleCase($input)
    {
        return ucwords(strtolower($input));
    }

    /**
     * Remove HTML and PHP tags from a string.
     *
     * @param string $input
     * @return string
     */
    public static function stripTags($input)
    {
        return strip_tags($input);
    }

    /**
     * Generate a random string of a specified length.
     *
     * @param int $length
     * @return string
     */
    public static function generateRandomString($length = 10)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    /**
     * Find the position of the first occurrence of a substring in a string (case-insensitive).
     *
     * @param string $haystack
     * @param string $needle
     * @return int|false
     */
    public static function strposIgnoreCase($haystack, $needle)
    {
        return stripos($haystack, $needle);
    }

    /**
     * Check if a string is a palindrome.
     *
     * @param string $input
     * @return bool
     */
    public static function isPalindrome($input)
    {
        $cleanedInput = preg_replace('/[^a-zA-Z0-9]/', '', $input);
        $reversedInput = strrev($cleanedInput);
        return strtolower($cleanedInput) === strtolower($reversedInput);
    }

    /**
     * Pad a string to a certain length with another string.
     *
     * @param string $input
     * @param int $length
     * @param string $padString
     * @param int $padType
     * @return string
     */
    public static function padString($input, $length, $padString = ' ', $padType = STR_PAD_RIGHT)
    {
        return str_pad($input, $length, $padString, $padType);
    }

    /**
     * Encode a string to Base64.
     *
     * @param string $input
     * @return string|false
     */
    public static function base64Encode($input)
    {
        return base64_encode($input);
    }

    /**
     * Decode a Base64 encoded string.
     *
     * @param string $input
     * @return string|false
     */
    public static function base64Decode($input)
    {
        return base64_decode($input);
    }

    /**
     * Convert a string to camelCase.
     *
     * @param string $input
     * @return string
     */
    public static function toCamelCase($input)
    {
        $input = ucwords(str_replace(['_', '-'], ' ', $input));
        return lcfirst(str_replace(' ', '', $input));
    }

    /**
     * Truncate a string to a specified length and add an ellipsis if needed.
     *
     * @param string $input
     * @param int $length
     * @param string $ellipsis
     * @return string
     */
    public static function truncateString($input, $length, $ellipsis = '...')
    {
        if (strlen($input) <= $length) {
            return $input;
        }

        return rtrim(substr($input, 0, $length)) . $ellipsis;
    }

    /**
     * Convert newlines in a string to HTML line breaks.
     *
     * @param string $input
     * @return string
     */
    public static function nl2br($input)
    {
        return nl2br($input);
    }

    /**
     * Find and replace multiple occurrences of a substring with an array of replacements.
     *
     * @param string $input
     * @param array $searchReplace
     * @return string
     */
    public static function multiReplace($input, array $searchReplace)
    {
        return str_replace(array_keys($searchReplace), array_values($searchReplace), $input);
    }

    /**
     * Convert a string to a slug (URL-friendly version).
     *
     * @param string $input
     * @return string
     */
    public static function toSlug($input)
    {
        $slug = strtolower(trim($input));
        $slug = preg_replace('/[^a-z0-9-]/', '-', $slug);
        $slug = preg_replace('/-+/', '-', $slug);
        return $slug;
    }

    /**
     * Reverse words in a string while maintaining word order and punctuation.
     *
     * @param string $input
     * @return string
     */
    public static function reverseWords($input)
    {
        $words = preg_split('/(\s+)/', $input, -1, PREG_SPLIT_DELIM_CAPTURE);
        return implode('', array_map('strrev', $words));
    }

    /**
     * Convert a string to a leetspeak (1337 5p34k) version.
     *
     * @param string $input
     * @return string
     */
    public static function toLeetspeak($input)
    {
        $leetMap = ['a' => '4', 'e' => '3', 'l' => '1', 'o' => '0', 's' => '5', 't' => '7'];
        return strtr(strtolower($input), $leetMap);
    }

    /**
     * Count the number of words in a string.
     *
     * @param string $input
     * @return int
     */
    public static function countWords($input)
    {
        return str_word_count($input);
    }

    /**
     * Extract emails from a string.
     *
     * @param string $input
     * @return array
     */
    public static function extractEmails($input)
    {
        preg_match_all('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', $input, $matches);
        return $matches[0];
    }

    /**
     * Convert a string to a format suitable for a URL slug.
     *
     * @param string $input
     * @return string
     */
    public static function toUrlSlugFormat($input)
    {
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $input);
        $slug = preg_replace('/[^a-zA-Z0-9 -]/', '', $slug);
        $slug = strtolower(str_replace(' ', '-', $slug));
        return trim($slug, '-');
    }

     /**
     * Encode HTML entities in a string.
     *
     * @param string $input
     * @return string
     */
    public static function encodeHtmlEntities($input)
    {
        return htmlentities($input, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Decode HTML entities in a string.
     *
     * @param string $input
     * @return string
     */
    public static function decodeHtmlEntities($input)
    {
        return html_entity_decode($input, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Extract hashtags from a string.
     *
     * @param string $input
     * @return array
     */
    public static function extractHashtags($input)
    {
        preg_match_all('/#(\w+)/', $input, $matches);
        return $matches[1];
    }

    /**
     * Convert a string to a simplified ASCII representation.
     *
     * @param string $input
     * @return string
     */
    public static function toAscii($input)
    {
        return preg_replace('/[^\x20-\x7E]/u', '', iconv('UTF-8', 'ASCII//TRANSLIT', $input));
    }

    /**
     * Swap the case of each character in a string.
     *
     * @param string $input
     * @return string
     */
    public static function swapCase($input)
    {
        return strtr($input, 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    }

    /**
     * Remove duplicate characters from a string.
     *
     * @param string $input
     * @return string
     */
    public static function removeDuplicates($input)
    {
        return implode('', array_unique(str_split($input)));
    }

    /**
     * Convert a string to Morse code.
     *
     * @param string $input
     * @return string
     */
    public static function toMorseCode($input)
    {
        $morseCode = [
            'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 'F' => '..-.', 'G' => '--.', 'H' => '....',
            'I' => '..', 'J' => '.---', 'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.', 'O' => '---', 'P' => '.--.',
            'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-', 'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-',
            'Y' => '-.--', 'Z' => '--..',
            '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--', '4' => '....-', '5' => '.....', '6' => '-....',
            '7' => '--...', '8' => '---..', '9' => '----.',
            '.' => '.-.-.-', ',' => '--..--', '?' => '..--..', ' ' => '/'
        ];

        $input = strtoupper($input);
        $result = '';
        for ($i = 0; $i < strlen($input); $i++) {
            $char = $input[$i];
            if (isset($morseCode[$char])) {
                $result .= $morseCode[$char] . ' ';
            }
        }

        return rtrim($result);
    }

    /**
     * Convert a string to a soundex key.
     *
     * @param string $input
     * @return string
     */
    public static function toSoundex($input)
    {
        return soundex($input);
    }

    /**
     * Replace spaces in a string with a specified delimiter.
     *
     * @param string $input
     * @param string $delimiter
     * @return string
     */
    public static function replaceSpacesWithDelimiter($input, $delimiter = '_')
    {
        return str_replace(' ', $delimiter, $input);
    }

    /**
     * Remove non-alphanumeric characters from a string.
     *
     * @param string $input
     * @return string
     */
    public static function removeNonAlphanumeric($input)
    {
        return preg_replace('/[^a-zA-Z0-9]/', '', $input);
    }
}
