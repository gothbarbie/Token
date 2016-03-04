Token
=====

Token is a helper-class for generating and storing and retrieving unique hashes in a `_SESSION`. It is intended to be used for Cross-Site-Request-Forgery (CSRF) protection.

## Examples
### generate() ###
PHP:
```php
<input type="hidden" name="csrf" value="<?php echo Token::generate(); ?>"/>
```
HTML:
```html
<input type="hidden" name="csrf" value=""/>
```

### exists() ###
PHP:
```php
<?php
if (Token::exists($_POST['csrf'])) { echo "A token is stored in _SESSION."; }
```

### check() ###
PHP:
```php
<?php
if (Token::check($_POST['csrf'])) { echo "Token matches stored value."; }
```
