# validate_url  
###  A PHP function to validate user inputted URLs  
**PHP Version: 4+**  

## Examples:  
```php
validate_url("google.com") // true  
validate_url("ftp://google.com") // true  
validate_url("https://google.com") // true  
validate_url("www.google.com") // true  
validate_url("google.com:443") // true  
validate_url("https://google.com:443") // true  
validate_url("googlecom") // false  
```
