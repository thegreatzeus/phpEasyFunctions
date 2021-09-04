# secondsToTime()  
###  A PHP function to convert seconds to time.  
**PHP Version: 4+**  

[3 optional boolean parameters are available. false on default.]  
1. $dropSecondsPart - if set to true removes the seconds part of time, if the input is larger than a minute and remainder seconds exist.  
2. $dropMinutesPart - if set to true removes the minutes part of time, if the input is larger than an hour and remainder minutes exist.  
3. $dropHoursPart - if set to true removes the hours part of time, if the input is larger than a day and remainder hours exist.  


## Examples:  

No optional parameters  
```php
secondsToTime(65) // 1 minute, 5 seconds  
secondsToTime(610) // 10 minutes, 10 seconds  
secondsToTime(3600) // 1 hour  
secondsToTime(100000) // 11 days, 13 hours, 46 minutes, 40 seconds  
```

dropSecondsPart set to true  
```php
secondsToTime(65, dropSecondsPart: true) // 1 minute  
secondsToTime(610, dropSecondsPart: true) // 10 minutes  
secondsToTime(3600, dropSecondsPart: true) // 1 hour  
secondsToTime(100000, dropSecondsPart: true) // 11 days, 13 hours, 46 minutes  
```

dropMinutesPart set to true  
```php
secondsToTime(65, dropMinutesPart: true) // 1 minute, 5 seconds  
secondsToTime(610, dropMinutesPart: true) // 10 minutes, 10 seconds  
secondsToTime(3600, dropMinutesPart: true) // 1 hour  
secondsToTime(100000, dropMinutesPart: true) // 11 days, 13 hours  
```

dropHoursPart set to true  
```php
secondsToTime(65, dropHoursPart: true) // 1 minute, 5 seconds  
secondsToTime(610, dropHoursPart: true) // 10 minutes, 10 seconds  
secondsToTime(3600, dropHoursPart: true) // 1 hour  
secondsToTime(100000, dropHoursPart: true) // 11 days  
```
