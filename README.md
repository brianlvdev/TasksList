# 📝 TaskList

A simple to-do list web app built with PHP and SQLite. Add tasks, mark them as done and delete them.

## ✨ Features

- Add new tasks
- Mark tasks as completed (or undo)
- Delete tasks
- Tasks are saved in a local SQLite database

## 🛠️ Built with

PHP · SQLite · HTML · CSS

## 🚀 How to run

1. Make sure PHP is installed with the `pdo_sqlite` extension enabled.
2. Clone the repository:
   ```bash
   git clone https://github.com/brianlvdev/TasksList.git
   cd TasksList
   ```
3. Start the local server:
   ```bash
   php -S localhost:8000
   ```
4. Open `http://localhost:8000` in your browser.

## 📁 Project structure

```
├── index.php      # main page (lists tasks)
├── db.php         # database connection
├── adicionar.php  # adds a task
├── alternar.php   # marks a task as done/undone
├── excluir.php    # deletes a task
├── style.css      # styles
└── data/          # SQLite database (not tracked by Git)
```

## 🎯 About

Made as part of my studies in Information Systems, to practice PHP, databases and web development.
