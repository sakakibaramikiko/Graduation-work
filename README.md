# 商品管理システム『GIFT 25thAnniversary』

## 概要
このシステムでは、自分自身が記録しておくTODOリストです。
商品の新規登録から編集、削除を行うことができます。
商品画像も同じように、登録から編集、削除を行うことができます。

## 主な機能
* ログイン・ログアウト機能
* 商品一覧画面
* 商品新規登録、編集、削除機能
* 商品画像新規登録、編集、削除機能

## 開発環境

    

    ```INI
    DB_PASSWORD=root
    ```

* APP_KEY生成

    ```console
    php artisan key:generate
    ```

* Composerインストール

    ```console
    composer install
    ```

* フロント環境構築

    ```console
    npm ci
    npm run build
    ```

* マイグレーション

    ```console
    php artisan migrate
    ```

* 起動

    ```console
    php artisan serve
    ```
