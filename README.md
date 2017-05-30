symfony-fileprofilerstorage-bug
===============================

Re-creating the issue (I wouldn't recommend running this with `memory_limit` set to -1)

- clone repo
- `composer install`
- `bin/console s:r`
- go to http://127.0.0.1:8000

You should see memory usage slowly increase until a fatal error is encountered.
