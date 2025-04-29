# 🎬 Netflix Clone - PHP & MySQL Web App

This project is a simple **Netflix-style dynamic website** built using **PHP**, **MySQL**, and **HTML/CSS**. It allows users to **view, add, edit, and delete movies** using a user-friendly interface styled to resemble Netflix.

---

## 🚀 Features

- View a grid of movies with posters, titles, genres, and years
- Add new movies with details and image URLs
- Edit movie information
- Delete movies from the list
- Responsive Netflix-inspired card UI

---

## 🧰 Tech Stack

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL
- **Tool**: XAMPP (Apache + MySQL)

---

## 📂 Folder Structure

```
netflix/
├── index.php         # Main page displaying all movies
├── db.php            # Database connection
├── add.php           # Add new movie
├── update.php        # Edit existing movie
├── delete.php        # Delete movie
└── README.md         # Project documentation
```

---

## 🛠️ Setup Instructions

### 1. Start Apache & MySQL via XAMPP

### 2. Create the Database

- Go to: `http://localhost/phpmyadmin`
- Create a database named: `netflix_clone`
- Run this SQL to create the `movies` table:

```sql
CREATE TABLE movies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    genre VARCHAR(100),
    release_year INT,
    description TEXT,
    image_url VARCHAR(255)
);
```

### 3. Place the Project Folder

- Move your project folder `netflix/` to:  
  `C:\xampp\htdocs`

### 4. Configure Database Connection in `db.php`

```php
$conn = new mysqli("localhost", "root", "", "netflix_clone", 3307);
```

> Change the port if needed (default is 3306).

### 5. Open in Browser

Navigate to:
```
http://localhost/netflix/index.php
```

---

## 📸 Screenshots

> Add screenshots here showing the movie grid, add/edit forms, etc.

---

## ✍️ Authors

- Shrihari Kasar

---

## 📄 License

This project is open-source and free to use for learning and personal development.