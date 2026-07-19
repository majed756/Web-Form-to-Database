# Web-Form-to-Database
A dynamic front-end form connected to a backend PHP server for real-time MySQL data entry and retrieval.

### majed756/PHP-MySQL-Data-Pipeline: A foundational full-stack web application designed to capture user input, process it through a PHP backend, and permanently store and retrieve it using a MySQL database.

## 📖 About The Project

This project demonstrates the core mechanics of a dynamic, data-driven web application using **InfinityFree web**. Rather than serving static content, this application establishes a complete two-way data pipeline between a user interface and a backend server. 

The primary goal of this project is to illustrate how front-end forms communicate with back-end logic to achieve persistent data storage. It executes the foundational "Create" and "Read" functions of the CRUD (Create, Read, Update, Delete) lifecycle. When a user submits their information, the system actively logs it into a relational database and immediately queries that same database to dynamically render an updated, real-time list of all historical entries.

## 🚀 Key Concepts Demonstrated

*   **Client-Server Communication:** Passing user data from an HTML front-end to a backend server using HTTP `GET` requests.
*   **Backend Processing:** Utilizing PHP to intercept, sanitize, and route incoming client data safely.
*   **Persistent Data Storage:** Connecting to a MySQL database to insert new records into an auto-incrementing, structured table.
*   **Dynamic Page Rendering:** Querying the database to fetch existing records and using loops to dynamically generate HTML tables based on the live data.

## ⚙️ How It Works (The Data Flow)

1.  **Data Entry:** The user interacts with a simple front-end interface (`index.html`) to input their Name and Age.
2.  **Transmission:** Upon submission, the browser sends this data to the backend script (`n.php`).
3.  **Database Insertion:** The PHP script connects to the MySQL server and executes a `SELECT` and `INSERT` query to permanently store the new user record.
4.  **Data Retrieval & Display:** Finally, the script queries the database for *all* existing users and automatically draws an HTML table on the screen to display the updated directory.

## 🛠️ Technologies Used

*   **HTML5** (Front-end structure and form data collection)
*   **PHP** (Backend logic and database connection routing)
*   **MySQL** (Relational database management and persistent storage)
