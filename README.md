# Timezone Clock

PHP package for getting Moscow time and GMT time in HH:MM:SS format.

## Requirements
PHP >= 8.1

## Installation

```bash
composer require your-vendor-name/timezone-clock
```

## Usage

```
<?php

require 'vendor/autoload.php';

use IlyaKazakov\TimeHelper;

echo "Moscow time: " . TimezoneClock::getMoscowTime() . "\n";
echo "GMT time: " . TimezoneClock::getGMTTime() . "\n";
```