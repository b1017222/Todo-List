ここの抜粋 https://qiita.com/sano1202/items/6021856b70e4f8d3dc3d

## マイグレーション

データベースのテーブル作成

/database/migrationsに作成される

```
php artisan make:migration {{ファイル名（行う操作名createとか）}} --create={{テーブル名}}
```

### Example

todosテーブルを作成する場合

```
php artisan make:migration create_todos_table --create=todos
```

## モデルの作成
データベースのテーブルに対応するモデル

/appに作成される

```
php artisan make:model {{モデル名}}
```

### Example

Todoモデルを作成する

```
php artisan make:model Todo
```
