# udemy Larevel講座 第3弾

## ダウンロード方法

git clone

git clone https://github.com/osugisan/uReserve.git

git clone ブランチを指定してダウンロードする場合

git clone -b ブランチ名 https://github.com/osugisan/uReserve.git

もしくはzipファイルでダウンロードする

## インストール方法
```
cd uReserve
composer install
npm install
npm run dev
```

.envファイルの中をご利用の環境に合わせて変更する

DB_CONNECTION=mysql
DB_HOST=mariadb
DB_PORT=3306
DB_DATABASE=uReserve
DB_USERNAME=sail
DB_PASSWORD=sail

開発環境でDBを起動した後に

```php
php artisan migrate:fresh --seed
```

を実行する。（DBテーブルとダミーデータが追加されればおけ）

```php
php artisan key:generate
```

と入力し、キーを生成後確認する

## インストール後の実施事項
```
//画像のリンク
php artisan storage:link
```
