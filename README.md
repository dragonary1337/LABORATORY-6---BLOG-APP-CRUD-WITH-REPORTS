# Sun Blog App

A Laravel blog app for creating, viewing, editing, and deleting blog posts. It also provides date-filtered reports that can be downloaded as PDF or CSV files.

## Features

- Create, view, edit, and delete posts
- Filter post reports by start and end date
- Export filtered reports as PDF or CSV
- Responsive interface styled with Bootstrap

## Requirements

- PHP 8.3 or later
- Composer
- Node.js and npm

## Setup

Clone the repository and enter the project directory:

```bash
git clone https://github.com/dragonary1337/LABORATORY-6---BLOG-APP-CRUD-WITH-REPORTS.git
cd LABORATORY-6---BLOG-APP-CRUD-WITH-REPORTS
```

Create the SQLite database file, then install and configure the application:

```bash
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
composer run setup
```

The setup script installs dependencies, creates `.env` if needed, generates the application key, runs migrations, and builds the frontend assets.

## Run locally

In one terminal, start Laravel:

```bash
php artisan serve
```

In another terminal, start Vite:

```bash
npm run dev
```

Open [http://localhost:8000](http://localhost:8000).

## Pages

| Page | URL |
|---|---|
| Blog posts | `/posts` |
| Create a post | `/posts/create` |
| Post reports | `/posts/reports` |

Use the date filters on the reports page before exporting to PDF or CSV.

## Tests

Run the test suite with:

```bash
php artisan test
```

## Screenshots
![Calculator screenshot 1](<1.png>)
![Calculator screenshot 2](<2.png>)
![Calculator screenshot 3](<3.png>)

