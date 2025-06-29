# 💬 Message Board System

This is a simple PHP and MySQL-based **Message Board** project. It allows users to submit their name, email, and a message through a web form. Submitted messages are stored in a MySQL database and displayed on the same page.

---

## 📁 Project Structure


---

## ⚙️ Features

- 💾 Stores messages with name, email, content, and date
- 📝 Displays all submitted messages on the same page
- 📅 Automatically sets the date the message was posted
- 🌐 Simple and clean HTML + CSS design
- 🛠️ Runs on XAMPP / localhost setup

---

## 🚀 How to Run Locally

### 📌 Requirements:
- [XAMPP](https://www.apachefriends.org/index.html) or any LAMP/WAMP stack
- Web browser (e.g., Chrome, Firefox)

### 🧑‍💻 Steps:

1. **Place the Project Folder:**
   - Move `message-board/` to:  
     `C:\xampp\htdocs\`

2. **Start XAMPP:**
   - Open the XAMPP Control Panel
   - Start **Apache** and **MySQL**

3. **Import the SQL Database:**
   - Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a new database: `message_board_db`
   - Click the new DB ➜ Go to the **Import** tab
   - Import `message_tbl.sql` (included in the project folder)

4. **Open the App in Your Browser:**
   - Visit: [http://localhost/message-board](http://localhost/message-board)

---

## 🧱 Database Structure

**Database Name**: `message_board_db`  
**Table Name**: `message_tbl`

| Column Name      | Type         | Description                         |
|------------------|--------------|-------------------------------------|
| `Message_ID`     | INT (PK)     | Auto-increment primary key          |
| `Full_Name`      | TEXT         | Name of the user                    |
| `Email`          | VARCHAR(50)  | Email address of the user           |
| `Message_Content`| TEXT         | The message content                 |
| `Date_posted`    | DATE         | Automatically set to current date   |

---

## 🧑 Author

**Claire Egypto**  
GitHub: [@your-username](https://github.com/your-username)

---

## 📝 License

This project is for educational purposes only.
