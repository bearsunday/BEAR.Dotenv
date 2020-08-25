# BEAR.Dotenv

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bearsunday/BEAR.Dotenv/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bearsunday/BEAR.Dotenv/?branch=master)
[![Build Status](https://travis-ci.org/bearsunday/BEAR.Dotenv.svg?branch=master)](https://travis-ci.org/bearsunday/BEAR.Dotenv)
[![Build Status](https://scrutinizer-ci.com/g/bearsunday/BEAR.Dotenv/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bearsunday/BEAR.Dotenv/build-status/master)

Loads environment variables from .env to $_ENV and $_SERVER.

## Installation

Installation is via [Composer](https://getcomposer.org/):

```bash
composer require bear/dotenv
```

## Usage

```php
use BEAR\Dotenv\Dotenv;

(new Dotenv)->load($dir);
```

If the `.env.dist` file exists in the `$dir` directory, environment variables are created from it. If you customize locally, the `.env` file is loaded first.
If neither file is present, nothing is done. In that case, the environment variables must be provided by means other than the dotenv library.

`.env.dist`が`$dir`ディレクトリにあれば読み込まれ環境変数が作られます。ローカルでカスタマイズする場合には`.env`を用意すれば優先して読み込まれます。
どちらのファイルも無ければ何もしません。その場合、環境変数はdotenvライブラリ以外の方法で用意されなければなりません。
