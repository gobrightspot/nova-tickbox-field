# Laravel Nova Tickbox Field

![Status: ABANDONED](https://img.shields.io/badge/Status-ABANDONED-red.svg?style=flat)
[![No Maintenance Intended](http://unmaintained.tech/badge.svg)](http://unmaintained.tech/) 

## Deprecation Notice⚠️

> GoBrightspot is no longer maintaining this project. Please fork it to continue development.

## Introduction

In the Nova Index view, the Boolean field will display a green dot for True and a red dot for false. We wanted to be able to label the data on the Index view to 'Yes' and 'No'. You, surprisingly, can't do that in Nova (as of v2.0.1) hopefully they'll add that soon and our package will no longer be necessary, until then, enjoy.

## Installation

```
composer require gobrightspot/nova-tickbox-field
```

## Basic Usage

```
use Brightspot\Nova\Fields\Tickbox\Tickbox;

...

public function fields(Request $request)
{
    return [
        Tickbox::make('Are you a duck?', 'is_a_duck')
    ];
}
```

## Custom Labels

```
public function fields(Request $request)
{
    return [
        Tickbox::make('Are you a duck?', 'is_a_duck')->labels('Definitely a duck', 'Probably not a duck');
    ];
}
```

## Only Customize the True Label

```
public function fields(Request $request)
{
    return [
        Tickbox::make('Are you a duck?', 'is_a_duck')->trueLabel('Definitely a duck');
    ];
}
```

## Only Customize the False Label

```
public function fields(Request $request)
{
    return [
        Tickbox::make('Are you a duck?', 'is_a_duck')->falseLabel('Probably not a duck');
    ];
}
```
