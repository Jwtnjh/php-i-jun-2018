# PHP FUNDAMENTALS I -- JUNE 2018

## For Friday 8 Jun 2018
http://collabedit.com/xbjkf

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


## ERRATA
* http://localhost:8888/#/2/8: 'hole number' s/be 'whole number'
* http://localhost:8888/#/2/13: `$person = new $person;` s/be `$person = new Person();`
