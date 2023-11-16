<h1 align="center">string-util PHP Package</h1>

<p align="center">
   <em>string-util is a versatile PHP library designed to simplify and enhance string manipulation tasks in your PHP projects. Whether you're working on web development, data processing, or any other application requiring robust string handling, this utility provides a comprehensive set of functions.</em>
</p>

<p align="center">
  <a href="https://github.com/hilalahmad0101/php-string-util/issues">
    <img src="https://img.shields.io/github/issues/fullstack124/php-string-util" alt="GitHub issues">
  </a>
  <a href="https://github.com/hilalahmad0101/php-string-util/stargazers">
    <img src="https://img.shields.io/github/stars/fullstack124/php-string-util" alt="GitHub stars">
  </a>
  <a href="https://packagist.org/packages/hilalahmad0101/php-string-util">
    <img src="https://img.shields.io/packagist/dt/fullstack124/php-string-util" alt="Total Downloads">
  </a>
  <a href="https://github.com/hilalahmad0101/php-string-util/blob/main/LICENSE">
    <img src="https://img.shields.io/github/license/fullstack124/php-string-util" alt="License">
  </a>
</p>
 
 ###### 20+ function you can use it in your project make your project string better

## Installation

You can install this package using Composer, a popular PHP package manager:

```bash
composer require hilalahmad/string-util
```
 
## Basic Usage

Here's an example of how to use the HttpClient package to send a GET request:

```bash
use Hilalahmad\StringUtil\StringUtil;
  
$stringToReverse = "Hello, World!";
$reversedString = StringUtil::reverseString($stringToReverse);
echo "Reversed String: $reversedString\n";

$substring = StringUtil::extractSubstring($stringToReverse, 0, 5);
echo "Substring: $substring\n";

$charToCount = "l";
$occurrences = StringUtil::countOccurrences($stringToReverse, $charToCount);
echo "Occurrences of '$charToCount': $occurrences\n";

$startsWithResult = AdvancedStringUtil::startsWith($stringToReplace, "The");
echo "Starts with 'The': " . ($startsWithResult ? "Yes" : "No") . "\n";

$endsWithResult = AdvancedStringUtil::endsWith($stringToReplace, "dog.");
echo "Ends with 'dog.': " . ($endsWithResult ? "Yes" : "No") . "\n";

$titleCaseString = AdvancedStringUtil::toTitleCase("this is a title");
echo "Title Case: $titleCaseString\n";

$strippedString = AdvancedStringUtil::stripTags("<p>This is <b>bold</b> text.</p>");
echo "Stripped Tags: $strippedString\n";

$randomString = AdvancedStringUtil::generateRandomString(8);
echo "Random String: $randomString\n";

$needle = "brown";
$pos = AdvancedStringUtil::strposIgnoreCase($stringToReplace, $needle);
echo "Position of '$needle': $pos\n";

$palindromeString = "A man, a plan, a canal: Panama";
$isPalindrome = AdvancedStringUtil::isPalindrome($palindromeString);
echo "Is Palindrome: " . ($isPalindrome ? "Yes" : "No") . "\n";

$paddedString = AdvancedStringUtil::padString("Hello", 10, '*');
echo "Padded String: $paddedString\n";

$base64Encoded = AdvancedStringUtil::base64Encode("Hello, World!");
echo "Base64 Encoded: $base64Encoded\n";

$base64Decoded = AdvancedStringUtil::base64Decode($base64Encoded);
echo "Base64 Decoded: $base64Decoded\n";

$camelCaseString = AdvancedStringUtil::toCamelCase("convert_this_string");
echo "CamelCase String: $camelCaseString\n";

$longString = "This is a long string that needs truncation.";
$truncatedString = AdvancedStringUtil::truncateString($longString, 20);
echo "Truncated String: $truncatedString\n";

$stringWithNewlines = "This is a\nstring with\nnewlines.";
$htmlString = AdvancedStringUtil::nl2br($stringWithNewlines);
echo "HTML Line Breaks: $htmlString\n";

$multiReplaceString = "Replace spaces with underscores and dots with dashes.";
$searchReplaceArray = [' ' => '_', '.' => '-'];
$replacedString = AdvancedStringUtil::multiReplace($multiReplaceString, $searchReplaceArray);
echo "Multi-Replaced String: $replacedString\n";

$slugString = "Convert This String to a URL-friendly Slug";
$slug = AdvancedStringUtil::toSlug($slugString);
echo "Slug: $slug\n";


$reversedWordsString = AdvancedStringUtil::reverseWords("Reverse these words!");
echo "Reversed Words: $reversedWordsString\n";

$leetspeakString = AdvancedStringUtil::toLeetspeak("Leetspeak is fun!");
echo "Leetspeak: $leetspeakString\n";

$wordCount = AdvancedStringUtil::countWords("Count the words in this sentence.");
echo "Word Count: $wordCount\n";

$stringWithEmails = "Contact us at info@example.com or support@company.com";
$emails = AdvancedStringUtil::extractEmails($stringWithEmails);
echo "Extracted Emails: " . implode(', ', $emails) . "\n";

$urlSlugString = "Convert this string to a URL-friendly slug!";
$urlSlug = AdvancedStringUtil::toUrlSlugFormat($urlSlugString);
echo "URL Slug: $urlSlug\n";

// Example usage:
$htmlEntitiesString = "<b>Encode</b> & decode entities!";
$encodedHtml = AdvancedStringUtil::encodeHtmlEntities($htmlEntitiesString);
echo "Encoded HTML Entities: $encodedHtml\n";

$decodedHtml = AdvancedStringUtil::decodeHtmlEntities($encodedHtml);
echo "Decoded HTML Entities: $decodedHtml\n";

$hashtagsString = "Check out #PHP and #WebDevelopment!";
$hashtags = AdvancedStringUtil::extractHashtags($hashtagsString);
echo "Extracted Hashtags: " . implode(', ', $hashtags) . "\n";

$asciiString = "Convert to ASCII üñïçødë";
$asciiRepresentation = AdvancedStringUtil::toAscii($asciiString);
echo "ASCII Representation: $asciiRepresentation\n";

$caseSwapString = "SwapCase";
$swappedCase = AdvancedStringUtil::swapCase($caseSwapString);
echo "Swapped Case: $swappedCase\n";

$duplicatesString = "Remove duplicate characters";
$noDuplicates = AdvancedStringUtil::removeDuplicates($duplicatesString);
echo "Remove Duplicates: $noDuplicates\n";

$morseCodeString = "Hello, World!";
$morseCode = AdvancedStringUtil::toMorseCode($morseCodeString);
echo "Morse Code: $morseCode\n";

$soundexString = "Soundex";
$soundexKey = AdvancedStringUtil::toSoundex($soundexString);
echo "Soundex Key: $soundexKey\n";

$delimiterReplaceString = "Replace spaces with delimiter";
$delimiterReplaced = AdvancedStringUtil::replaceSpacesWithDelimiter($delimiterReplaceString);
echo "Replace Spaces: $delimiterReplaced\n";

$nonAlphanumericString = "Remove special characters!@#";
$removedNonAlphanumeric = AdvancedStringUtil::removeNonAlphanumeric($nonAlphanumericString);
echo "Remove Non-Alphanumeric: $removedNonAlphanumeric\n";
```

### Generate Share Links in HTML
- You can now directly embed the generated share links with custom styles into your HTML code:
## Contribution

If you'd like to contribute to this package or report issues, please check the  <a href="https://github.com/fullstack124/php-string-util/issues"> Github repo</a> for more details.
 
## License
This package is open-source and is licensed under the MIT License. 
 
