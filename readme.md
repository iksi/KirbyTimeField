# Kirby time field

Better time field for kirby that doesn’t use selects but just a regular input field.

## Installation

`git submodule add https://github.com/iksi/kirby-time-field.git site/fields/time`  
Or place a `time` folder in `site/fields` with the repository’s contents.

## Usage

You can define the time field in your blueprint as you would normally do. You can choose between a 12 or 24 hour format.

```YAML
time:
  label: Time
  type: time
  format: 24
  default: now
```
