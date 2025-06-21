<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# Laravel Blade CRUD アプリ

これは Laravel Sail + Blade を使用して作成したシンプルな投稿管理アプリです。  
Docker環境で起動し、一覧表示・新規作成・編集・削除までの一連のCRUD操作が可能です。

---

## ✅ 機能

- 投稿一覧表示
- 投稿作成（バリデーションあり）
- 投稿編集（入力内容の保持）
- 投稿削除（削除確認付き）
- エラーメッセージの日本語対応（`resources/lang/ja/validation.php`）
- Laravel Sail + phpMyAdmin（ポート: 8881）環境構成

---

## 🛠 使用技術

- Laravel 12.x
- Bladeテンプレート
- Laravel Sail（Dockerベースの開発環境）
- phpMyAdmin（DB操作補助）
- MySQL

---

## 🚀 起動方法

```bash
./vendor/bin/sail up -d
```
