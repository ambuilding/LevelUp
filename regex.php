<?php

$message = "Listen, Centauri. I'm not any of those guys, I'm a kid from a trailer park. Okay, Centauri?";
if (strpos($message, 'Centauri') !== false) {
	var_dump('We found it');
}


$message = "Listen, centauri. I'm not any of those guys, I'm a kid from a trailer park. Okay, Centauri?";
if (stristr($message, 'Centauri') !== false) {
	var_dump('We found it');
}


$message = "Listen, Centari. I'm not any of those guys, I'm a kid from a trailer park. Okay, Centauri?";
preg_match_all('/Centau?ri/', $message, $matches); //preg_match -> only match the first one

var_dump($matches);


$message = "Listen, Centari. I'm not any of those guys, I'm a kid from a trailer park. Okay, Centauri?";
$replaced = preg_replace('/Centau?ri/', 'Dniya', $message);

var_dump($replaced);


$message = "foo    ,bar, baz";
//$array = explode(',', $message);
//$array = preg_split('/ ?, ?/', $message);
$array = preg_split('/\s*, \s*/', $message);

var_dump($array);


$comments = [
	'Always trust Centauri.',
	'You almost got me killed.',
	'You are the man now, dog.',
	"Listen, Centari. I'm not any of those guys, I'm a kid from a trailer park."
];

// $comments = array_filter($comments, function ($comment)
// {
// 	return preg_match('/Centau?ri/i', $comment);
// });
 $comments = preg_grep('/Centau?ri/i', $comments);

var_dump($comments);


$string = "This website is stupid. Your speaking style is idiotic. Your knowledge is crap. This is so stupid. You're an IDIOT.";
echo preg_replace('/stupid|idiot(?:ic)?|crap/i', 'amazing', $string);


$stringg = '$name = "Quaid"; my name is Quaid.';
$result = preg_replace('/(?<=\$)name/', 'VARIABLE', $stringg);

var_dump($result);
