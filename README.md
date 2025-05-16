# Timezone Clock

PHP package for getting Moscow time and GMT time in HH:MM:SS format.

## Requirements
PHP >= 8.1

## Installation

```bash
composer ilya-kazakov/time-helper
```

## Usage

```
<?php

require __DIR__ . '/vendor/autoload.php';

use IlyaKazakov\TimeHelper\TimeHelper;

echo "Moscow time: " . TimeHelper::getMoscowTime() . "\n";
echo "GMT time: " . TimeHelper::getGMTTime() . "\n";
```