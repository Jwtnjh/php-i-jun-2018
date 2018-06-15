<?php
## SCOTT
/*
Lab: Foreach Loop

An launch sequence application needs to iterate a launch checklist.
1. Build a launch checklist with the six items
2. Iterate the launch checklist using a foreach loop, using keys and values.
3. Conditionally test for a particular list item and build an output string.
4. Echo the output.
*/

//Build the checklist: using the "progressive" approach towards assigning values
/*
$checklist[] = ['listitem' => 'helmet', 'itemtype' => 'gear'];
$checklist[] = ['listitem' => 'oxygen tank', 'itemtype' => 'gear'];
$checklist[] = ['listitem' => 'astronaut ice cream', 'itemtype' => 'food'];
$checklist[] = ['listitem' => 'Tang', 'itemtype' => 'food'];
$checklist[] = ['listitem' => 'laptop power cord', 'itemtype' => 'gear'];
$checklist[] = ['listitem' => 'Tesla Roadster', 'itemtype' => 'gear'];
*/

// or using the "config" approach to assign initial values:
$checklist = [
	['listitem' => 'helmet', 'itemtype' => 'gear'],
	['listitem' => 'oxygen tank', 'itemtype' => 'gear'],
	['listitem' => 'astronaut ice cream', 'itemtype' => 'food'],
	['listitem' => 'Tang', 'itemtype' => 'food'],
	['listitem' => 'laptop power cord', 'itemtype' => 'gear'],
	['listitem' => 'Tesla Roadster', 'itemtype' => 'gear'],
];

$snacks = '';
$notSnacks = '';

//Did we pack snacks for the flight?
foreach($checklist as $checklistItem){
	if($checklistItem['itemtype'] ==='food'){
	  $snacks .= "The {$checklistItem['listitem']} is edible.". "\n";
	} else {
	  $notSnacks .= "The {$checklistItem['listitem']} is {$checklistItem['itemtype']}.". "\n";
	}
}

if($snacks !== ''){
	echo 'We remembered the snacks! ' . $snacks;
} else {
	echo 'We forgot the snacks! Get in the roadster and run to the store!';
}

if($notSnacks !== ''){
	echo 'Items that are not food: ' . $notSnacks;
} else {
	echo 'We forgot the gear!';
}
