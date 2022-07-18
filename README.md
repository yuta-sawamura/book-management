# book-management

神戸情報大学院大学の最終課題

## 使用技術

- PHP 8.x
- Laravel 9.x
- MySQL 8.x
- Nginx
- Docker Compose

## 機能一覧

## Docker によるプロジェクト開始方法

ローカル端末に Docker のインストールが必要。(Docker Desktop for Mac)

コンテナ起動

```bash
$ docker-compose up -d
```

コンテナ停止

```bash
$ docker-compose down
```

php コンテナのアクセス

```bash
$ docker-compose exec php bash
```

mysql コンテナのアクセス

```bash
$ docker-compose exec db bash
```

動作確認
ブラウザに`http://localhost/`を入力しアクセス。図書管理システムの HTML が返されれば OK。
