# BEAR.Dotenv

Loads environment variables from .env to $_ENV and $_SERVER.

## Installation

Installation is via [Composer](https://getcomposer.org/):

```bash
composer require bear/dotenv
```

## Usage

```php
use BEAR\Dotenv;

(new Dotenv)->load($dir);
```

If the `.env.dist` file exists in the `$dir` directory, environment variables are created from it. If you customize locally, the `.env` file is loaded first.
If neither file is present, nothing is done. Environment variables must be provided by methods other than the dotenv library.



`.env.dist`が`$dir`ディレクトリにあれば読み込まれ環境変数が作られます。ローカルでカスタマイズする場合には`.env`を用意すれば優先して読み込まれます。
どちらのファイルも無ければ何もしません。環境変数はdotenvライブラリ以外の方法で用意されなければなりません。
