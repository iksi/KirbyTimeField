# Kirby time field

Time field for kirby that doesn’t use selects but just a regular input field.

## Installation

`git submodule add https://github.com/iksi/kirby-time-field.git site/fields/time`  
Or place a `time` folder in `site/fields` with the repository’s contents.

## Usage

You can define the time field in your blueprint as you would normally do, only the format differs and uses [php time formats](http://php.net/manual/en/datetime.formats.time.php).

```YAML
time:
  label: Time
  type: time
  format: H:i
  default: now
```
