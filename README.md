# TODO

一個使用 **Laravel 10** 開發的簡易 TODO / 任務管理網站，提供前台任務瀏覽與新增功能，以及後台任務管理、編輯、刪除與條件搜尋功能。

## Features

- 查看 TODO / 任務清單
- 新增 TODO
- 後台管理介面
- 編輯既有任務
- 刪除任務
- 支援依以下欄位搜尋任務：
  - Name
  - Title
  - Content
  - Note

## Tech Stack

- **Backend:** PHP 8.1+, Laravel 10
- **Frontend:** Blade, HTML, CSS, JavaScript
- **Build Tool:** Vite
- **Database:** MySQL
- **HTTP Client:** Axios

## Project Structure

```text
TODO/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   ├── AdminHomeController.php
│   │   ├── AdminTasksController.php
│   │   └── AdminSearchTasksController.php
│   └── Models/
│       └── Task.php
├── database/
│   └── migrations/
├── public/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── .env.example
├── composer.json
└── package.json
```

## Task Data

每筆 TODO 主要包含以下欄位：

| Field | Description |
| --- | --- |
| `id` | 任務 ID |
| `name` | 建立者 / 名稱 |
| `title` | 任務標題 |
| `content` | 任務內容 |
| `note` | 備註 |
| `created_at` | 建立時間 |
| `updated_at` | 更新時間 |

## Routes

主要前台路由：

```text
GET   /                  查看任務清單
GET   /tasks/create      新增任務頁面
POST  /tasks             建立任務
```

主要後台路由：

```text
GET     /admin
GET     /admin/tasks
GET     /admin/tasks/create
POST    /admin/tasks
GET     /admin/tasks/{id}/edit
PATCH   /admin/tasks/{id}
DELETE  /admin/tasks/{id}

GET     /admin/tasks/search
POST    /admin/tasks/search
```

## Installation

### 1. Clone Repository

```bash
git clone https://github.com/LiaoZike/TODO.git
cd TODO
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Create Environment File

Linux / macOS：

```bash
cp .env.example .env
```

Windows：

```powershell
copy .env.example .env
```

接著產生 Laravel application key：

```bash
php artisan key:generate
```

### 4. Configure Database

修改 `.env` 中的資料庫設定：

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo
DB_USERNAME=root
DB_PASSWORD=
```

請依自己的 MySQL 環境調整帳號與密碼。

### 5. Run Migration

```bash
php artisan migrate
```

### 6. Install Frontend Dependencies

```bash
npm install
npm run dev
```

### 7. Start Laravel

```bash
php artisan serve
```

預設可從以下位置開啟：

```text
http://127.0.0.1:8000
```

## Security

專案已透過 `.gitignore` 排除 `.env`，實際的資料庫密碼、API Key 或其他敏感資訊不應提交至 Git Repository。

請只提交：

```text
.env.example
```

不要提交：

```text
.env
```

## Purpose

本專案主要作為 Laravel 基礎 CRUD、Route、Controller、Model、Blade View 與資料庫操作的練習專案。

---

Developed by [LiaoZike](https://github.com/LiaoZike)
