# Web-Form-to-Database
A dynamic front-end form connected to a backend PHP server for real-time MySQL data entry and retrieval.



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

<img width="277" height="242" alt="image" src="https://github.com/user-attachments/assets/0304192b-6b47-4818-acdb-a3ac7bf16e87" />


3.  **Transmission:** Upon submission, the browser sends this data to the backend script (`n.php`).

<img width="456" height="352" alt="image" src="https://github.com/user-attachments/assets/aed86340-2553-4e9d-be28-602057ba635a" />


4.  **Database Insertion:** The PHP script connects to the MySQL server and executes a `SELECT` and `INSERT` query to permanently store the new user record.

<img width="1891" height="577" alt="image" src="https://github.com/user-attachments/assets/0f357503-2ae2-4f0b-b7b3-c0a349cd8e45" />


5.  **Data Retrieval & Display:** Finally, the script queries the database for *all* existing users and automatically draws an HTML table on the screen to display the updated directory.

<img width="462" height="426" alt="image" src="https://github.com/user-attachments/assets/ec249d37-0fbc-4c8c-b0f8-beff265faa07" />


## 🛠️ Technologies Used

*   **HTML5** (Front-end structure and form data collection)
*   **PHP** (Backend logic and database connection routing)
*   **MySQL** (Relational database management and persistent storage)
