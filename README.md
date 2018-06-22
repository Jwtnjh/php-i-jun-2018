# PHP FUNDAMENTALS I -- JUNE 2018

## For Fri 22 Jun 2018
http://collabedit.com/9eek8

* Charles
  * Lab: Embedded PHP
  * NOTE: mainly HTML with a bit of PHP
* James
  * Lab: PHP Form String
  * NOTE: PHP generates all the HTML
* Kandace
  * Lab: Secure Input Handling
* Scott
  * Lab: Escaping Exercise
 
## SESSIONS
* Use `session_status() == PHP_SESSION_ACTIVE` to confirm a session is running
  * http://php.net/manual/en/function.session-status.php

## Q& A
* Q: What is `??`
* A: Null Coalesce Operator: https://wiki.php.net/rfc/isset_ternary

## For Thu 21 Jun 2018
http://collabedit.com/8vpxx

* Scott
  * Lab: F-Type Functions
  * Lab: Read Directories
* Charles
  * Lab: file_get_contents()
* James
  * Lab: file_put_contents()
* Kandace
  * Lab: Write Array Lab

## For Wed 20 Jun 2018
http://collabedit.com/kf3t7
* EVERYBODY
  * Look over the links to these function families:
    * String functions
    * Array functions
    * Date and time functions
    * Filter functions
    * Options and info functions
  * Please present your 2 favorite functions from each family
  * Look over the OrderApp source code and come back with any questions
* Charles
  * Lab: Defining and Calling a Function
* James
  * Lab: Recursive Function Exercise
* Kandace:
  * Lab: Two Functions

## For Wed 20 Jun 2018

* EVERYBODY
  * Look over the links to these function families:
    * String functions
    * Array functions
    * Date and time functions
    * Filter functions
    * Options and info functions
  * Everybody: please present your 2 favorite functions from each family
  * Look over the OrderApp source code and come back with any questions

* Charles
```
 <?php

  function reverseString($str){
     $newStr = "";
     $length = strlen($str);
     
     for($i = ($length -1); $i >= 0; $i --){
          
        $newStr .= $str[$i];       
          
     }

     return $newStr;
     
}

echo reverseString("function");
```
  
* James
  * Lab: Recursive Function Exercise
  
```
<?php

function fib($int){
    static $fibTable = array();

    return empty($fibTable[$int]) 
               ? ($fibTable[$int] = ($int>1) ? (fib($int-2) + fib($int-1)) : 1) 
               : $fibTable[$int];
};

$output  = fib(5).',';
$output .= fib(4).',';
$output .= fib(3).',';
$output .= fib(2).',';
$output .= fib(1);

echo $output.PHP_EOL;

$output  = fib(1).',';
$output .= fib(2).',';
$output .= fib(3).',';
$output .= fib(4).',';
$output .= fib(5);

echo $output.PHP_EOL;
```
  
  
* Kandace:
  * String Functions:
      1. preg_split    -> Useful when you want to select part of a string and convert it to an array. For instance, I used this once to select everything after ; in a string and put it into an array.
      2. stripslashes  -> Sometimes you may have to escape special characters like apostrphe's to add them to the DB, and you may need to strip the slashes from the string to use it in the html body.
      
  * Array Functions:
      1. in_array      -> Check to see if a values exists in an array.
      2. array_slice   -> Create a new array from selected values in an array. Extract a slice of the array.
      
      
  * Date & Time Functions:
      1. getdate       -> Get the Date/Time information.
      2. gmdate        -> Format a Date accordingly to your timezone
      
      
  * Filter Functions:
      1. filter_var    -> Filters a variable with a specified filter.
      2. filter_list   -> Checks if variable of specified type exists.
      
      
  * Options and Info Functions:
      1. phpinfo       -> Get all PHP info.
      2. ini_set       -> Set the value of configuration.      
      
  * Lab: Two Functions
    https://github.com/klsweat/php_cert_course/tree/master/workspaces/DefaultWorkspace/sandbox/public/homework_4
    
  
 
## CHARLES
  * String Functions:
      1.str-shuffle - Randomly shuffles a string.
      2.strrchr- Find the last occurence of a character in a string.
  * Arrays Functions:
      1. array_push - Appends elements into an array. Good for creating arrays using loops.
      2. array_intersect - Allows to check if two arrays have the same values.  
  * Date & Time Functions:
      1. getdate - Returns an array of information from of the time stamp, or current time if there is no time stamp.
      2. strptime - Allows you to parse time and date information.  
  * Filter Functions:
      1. ctype_graph - checks if all characters in a string create visible output
      2. ctype_alnum - checks if all items in a string are either characters or digits. 
  * Options and info functions:
      1. get_defined_constants - Creates an array with the names of all the constants and their values
      2. ini_restore - Restores the value of a configuration 
 
## JAMES
  * String Functions:
      1. explode    — Split a string by a string.  ( Good for processing .csv or .tab data ) 
      2. strip_tags — Strip HTML and PHP tags from a string.  Useful in controlling code injection.
  * Array Functions:
      1. count      — Count all elements in an array, or something in an object.  Already 
      2. list       — Assign variables as if they were an array.  Looks to be handy when manipulating SQL results.
  * Date & Time Functions:
      1. date_diff  - returns the difference between 2 dates.  Multiple return formats.
      2. checkdate  - Validate a Gregorian date
  * Filter Functions:
      1. FILTER_SANITIZE_ENCODED - URL-encode string, optionally strip or encode special characters.
      2. FILTER_SANITIZE_STRING  - Strip tags, optionally strip or encode special characters. 
  * Options and Info Functions:
      1. get_loaded_extensions - Returns an array with the names of all modules compiled and loaded
      2. gc_mem_caches         - Reclaims memory used by the Zend Engine memory manager
  
    
        
## KANDACE

## SCOTT
```
    //String 1 - crypt
$testString = 'Hello';
$testSalt = '12345';
$testEncrypt =  crypt($testString, $testSalt);

echo $testEncrypt;
echo PHP_EOL;

    //String 2 - Trim
$testString = ' Hello   ';
$startAndEnd = '|';
$testTrim =  trim($testString);

echo $startAndEnd;
echo $testString;
echo $startAndEnd;
echo PHP_EOL;

echo $startAndEnd;
echo $testTrim;
echo $startAndEnd;
echo PHP_EOL;

    //Array 1 - array_search — Searches the array for a given value and returns the first corresponding key if successful
    //Array 2 - array_sum — Calculate the sum of values in an array
    //Date Time 1 - date_create — Returns new DateTime object (Alias of DateTime::__construct())
    //Date Time 2 - date_diff — Returns the difference between two DateTime objects (Alias of DateTime::diff())
    //Filter 1 - filter_has_var — Checks if variable of specified type exists
    //Filter 2 - filter_input — Gets a specific external variable by name and optionally filters it
    //Options Info 1 - ini_get_all — Gets all configuration options
    //Options Info 2 - get_included_files — Returns an array with the names of included or required files
```
  
## For Mon 18 Jun 2018
http://collabedit.com/kf3t7

* WEEKEND FREE!!!
* NO HOMEWORK :-)

## For Fri 15 Jun 2018
http://collabedit.com/cvbep

* Scott
  * Lab: Foreach Loop
* Charles
  * Lab: For Loop
* James
  * Lab: While Loop
* Kandace
  * Lab: Do...While Loop

## For Wed 13 Jun 2018
http://collabedit.com/hxx2v

* Left Off With: http://localhost:8888/#/4/29

## HOMEWORK FOR WED
* Charles
  * Lab: First Program
  * Lab: Conditional If-Else Exclusive OR
* James
  * Lab: Additional Crew Members
  * Lab: Conditional If-ElseIf
* Kandace:
  * Lab: Conditional If
  * Lab: Switch Construct
* Scott:
  * Lab: Conditional If-Else Equality

## For Friday 8 Jun 2018
http://collabedit.com/xbjkf

### HOMEWORK FOR MONDAY
* Charles:
  * Lab: The Mixed Array 1
* James:
  * Lab: The Mixed Array 2
* Kandace:
  * Lab: The Multi Array
* Scott:
  * Lab: The Multi Configuration Array

### Class Discussion
* Pre-defined constants: http://php.net/manual/en/reserved.constants.php
* PHP environment settings: http://php.net/manual/en/ini.list.php
* NOTE: need to review overriding the default precision (php.ini) if needed
* Sample code:
```
echo "Welcome to the <b>very cool</b> world of PHP";
```
* If needed, you can override the default memory allocation of 128M using the php.ini param `memory_limit`
```
ini_set('memory_limit', '1G'); // sets memory only for this 1 request to 1 GB
```

### Code Examples
* PHP string functions are oriented towards Latin1 8-bit characters
```
<?php
$thai = 'สวัสดีคุณเป็นอย่างไร?';  // unicode (multi-byte)
$eng  = 'hello how are you?';

echo strlen($thai);  // 61
echo PHP_EOL;
echo strlen($eng);  // 18
echo PHP_EOL;
echo 'Max Int: ' . PHP_INT_MAX;
echo PHP_EOL;
echo 'OS: ' . PHP_OS;
echo PHP_EOL;
$max = PHP_INT_MAX;
$maxPlusOne = PHP_INT_MAX;
var_dump($max);  // int
var_dump($maxPlusOne);  // int
$maxPlusOne++;
var_dump($maxPlusOne); // float/double
echo PHP_EOL;
$negative = -242;
var_dump($negative); // int
echo PHP_EOL;
$nothing = NULL;
var_dump($nothing); // NULL
echo PHP_EOL;
var_dump($unknown); // Notice + NULL
echo PHP_EOL;
```
* heredoc and nowdoc
```
<?php
$four = 'Twelve';
$seven = 'two';
$text = <<<TAG
$four score and $seven years ago our fathers brought forth on this continent, a new nation, conceived in Liberty, and dedicated to the proposition that all men are created equal.

Now we are engaged in a great civil war, testing whether that nation, or any nation so conceived and so dedicated, can long endure. We are met on a great battle-field of that war. We have come to dedicate a portion of that field, as a final resting place for those who here gave their lives that that nation might live. It is altogether fitting and proper that we should do this.

But, in a larger sense, we can not dedicate—we can not consecrate—we can not hallow—this ground. The brave men, living and dead, who struggled here, have consecrated it, far above our poor power to add or detract. The world will little note, nor long remember what we say here, but it can never forget what they did here. It is for us the living, rather, to be dedicated here to the unfinished work which they who fought here have thus far so nobly advanced. It is rather for us to be here dedicated to the great task remaining before us—that from these honored dead we take increased devotion to that cause for which they gave the last full measure of devotion—that we here highly resolve that these dead shall not have died in vain—that this nation, under God, shall have a new birth of freedom—and that government of the people, by the people, for the people, shall not perish from the earth.
TAG;

echo $text;
echo PHP_EOL;
echo PHP_EOL;
$text = <<<'TAG'
$four score and $seven years ago our fathers brought forth on this continent, a new nation, conceived in Liberty, and dedicated to the proposition that all men are created equal.

Now we are engaged in a great civil war, testing whether that nation, or any nation so conceived and so dedicated, can long endure. We are met on a great battle-field of that war. We have come to dedicate a portion of that field, as a final resting place for those who here gave their lives that that nation might live. It is altogether fitting and proper that we should do this.

But, in a larger sense, we can not dedicate—we can not consecrate—we can not hallow—this ground. The brave men, living and dead, who struggled here, have consecrated it, far above our poor power to add or detract. The world will little note, nor long remember what we say here, but it can never forget what they did here. It is for us the living, rather, to be dedicated here to the unfinished work which they who fought here have thus far so nobly advanced. It is rather for us to be here dedicated to the great task remaining before us—that from these honored dead we take increased devotion to that cause for which they gave the last full measure of devotion—that we here highly resolve that these dead shall not have died in vain—that this nation, under God, shall have a new birth of freedom—and that government of the people, by the people, for the people, shall not perish from the earth.
TAG;

echo $text;
```
* Mixing HTML and PHP:
```
<!-- NOTE: this syntax is easier: -->
<?php echo "Welcome to the <b>very cool</b> world of PHP"; ?>
<!-- or you can mix PHP and HTML like this: -->
<?= 'Welcome to the '; ?><b><?= 'very cool'; ?></b><?= ' world of PHP'; ?>

```
* Mixing HTML and PHP:
```
<!DOCTYPE>
<head>
    <title>HTML and PHP</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.27" />
</head>

<body>
<?php echo "Welcome to the <b>very cool</b> world of PHP"; ?>

</body>

</html>
```
* Type juggling
```
<?php
// Assignment
$foo = '10';
$value = 5;

// Output response
echo $value + $foo;
echo PHP_EOL;
var_dump($foo);

echo PHP_EOL;
// this would be a best practice
echo $value + (int) $foo;

// example of using data coercion as a security measure
// expected:
echo '<br>';
$age = $_GET['age'] ?? 0;
echo 'You are this many years old: ' . (int) $age;
```
* Data coercion
```
<?php
$test = '12345';
$int  = (int) $test;
$float = (float) $test;
$bool  = (bool) $test;
$obj  = (object) $test;
$array = (array) $test;
var_dump($test,$int,$float,$bool,$obj,$array);
```

## For Mon 11 Jun 2018
http://collabedit.com/5yce7

### HOMEWORK FOR MONDAY
* Charles:
  * Lab: The Mixed Array 1
* James:
  * Lab: The Mixed Array 2
* Kandace:
  * Lab: The Multi Array
* Scott:
  * Lab: The Multi Configuration Array

### CLASS DISCUSSION
* PHP Documentor Project: https://phpdoc.org/

#### CHARLES
```
//An astronaut array assignment
$astronaut = ['firstName' => 'Mark', 'Watney', 5 => 'Botanist'];

// Access the last name value
echo $astronaut[0] . '<br>';
```

#### JAMES
```
// An astronaut array assignment
$astronaut = ['firstName' => 'Mark', 6 => 'Watney', 5 => 'Botanist', 'STS395'];
// Access the last element value
echo $astronaut[7] . '';
```

### KANDACE

```
/* LAB 3*/
// Build the crew
$astronaut1 = ['firstName' => 'Mark', 'lastName' => 'Watney', 'specialty' => 'Botanist'];
$astronaut2 = ['firstName' => 'Melissa', 'lastName' => 'Lewis', 'specialty' => 'Commander'];
$astronaut3 = ['firstName' => 'Beth', 'lastName' => 'Johanssen', 'specialty' => 'Computer Specialist'];
$mission = ['STS395' => [$astronaut1, $astronaut2, $astronaut3]];

// Access the Computer Specialist's first name
echo $mission['STS395'][2]['firstName'];
```

#### SCOTT
Lab 1: 0
Lab 2: 7
Lab 3: `echo $mission['STS395'][2]['specialty'];`
Lab 4: `echo $config['router']['routes']['market']['options']['defaults']['action'];`

## ERRATA
* http://localhost:8888/#/2/8: 'hole number' s/be 'whole number'
* http://localhost:8888/#/2/13: `$person = new $person;` s/be `$person = new Person();`
* http://localhost:8888/#/3/4: language in comment is a little ... hmmmmm....
* http://localhost:8888/#/4/19: as written: won't work.  Need to change like so:
```
$foo = 11;
if( $foo > 10 ) {
    $foo = 10;
} else {
    $foo = null;
}
var_dump($foo);

// The ternary does NOT yield the same results
$foo = 11;
$foo = ($foo > 10) ? $foo : null;
var_dump($foo);

// rewritten: works the same now
$foo = 11;
$foo = ($foo > 10) ? 10 : null;
var_dump($foo);
```
* http://localhost:8888/#/4/48: "mose cases" s/be "most cases"
* http://localhost:8888/#/5/14: won't work as written
```
<?php
function formatCurrency(float $value, string $arg='$') {
    switch ($arg) {
        case 'euro' :
        case '€' :
            return number_format($value, 2, ',', ' ') . '€';
        case 'pound' :
        case '£' :
            return '£' . number_format($value, 2, '.', ',');
        case 'dollar' :
        case '$' :
            return '$' . number_format($value, 2, '.', ',');
    }
    return NULL;
}
echo formatCurrency(9999, 'baht') ?? 'Unknown';
```
* "framwork"
* Embedded PHP in HTML: for $attribs array, missing type => text
* http://localhost:8888/#/7/13: need to switch optional param to the end of fn sig
