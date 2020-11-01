# Kata training

## Requirements

It requires docker and docker-compose.

## Installation

Type:

`docker-compose -f infrastructure/docker/docker-compose.yml run php bash`

And after that:

`composer install`

And you are ready for kata session by using command:

`generator/bin/kata k:t:g` which is alias for full command `generator/bin/kata kata:training:generate`

And you will see list of available trainings which you can use by running:

`generator/bin/kata k:t:g "Name from list"`

Or generate random kata training by:

`generator/bin/kata k:t:r` which is alias for full command `generator/bin/kata kata:training:random`

After that check `KATA.md` file and try to solve problem which was described there.

Phpspec, behat and phpunit is in `bin` directory, so it is easy to use. For instance:

`bin/phpspec d SomeClassName`
