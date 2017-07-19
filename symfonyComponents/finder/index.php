<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$files = Finder::create()
    ->in(__DIR__)
    ->name('*.txt')
    ->contains('{example-key}');

foreach($files as $file)
{
    // $contents = File::get($file->getRealPath());
    $contents = file_get_contents($file->getRealPath());
 
    $updated = str_replace('{example-key}', 'UPDATED', $contents);

    // File::put($file->getRealPath(), $updated);
    file_put_contents($file->getRealPath(), $updated);
}
