# 🛒 Grocery Project (PHP + MySQL CRUD)

This project is a simple **Grocery Items Management System** built using **PHP**, **MySQL**, and **XAMPP**.  
It demonstrates the basic **CRUD** operations — Create, Read, Update, and Delete — using a grocery items database.

---

## ⚙️ Features
- ✅ Connects to a MySQL database using PDO  
- 📝 Insert new grocery items  
- 🗑️ Delete existing grocery items  
- ✏️ Update grocery items  
- 🔍 Fetch single and all records  
- 📋 Display all records in a clean HTML table  

---

## 🧩 Database Information
**Database name:** `grocery_store`  
**Table name:** `grocery_items`  

| Column Name       | Data Type    | Description                   |
|-------------------|--------------|--------------------------------|
| item_id           | INT (PK, AI) | Unique ID for each item        |
| item_name         | VARCHAR(100) | Name of grocery item           |
| category          | VARCHAR(50)  | Category (e.g., Dairy, Grains) |
| quantity          | INT          | Number of units available      |
| price             | DECIMAL(10,2)| Price per unit                 |
| supplier          | VARCHAR(100) | Supplier name                  |
| expiration_date   | DATE         | Expiration date                |

---

## 📂 Project Files

| File Name            | Purpose |
|-----------------------|----------|
| **dbconfig.php**      | Database connection configuration |
| **insert_item.php**   | Insert new grocery items |
| **delete_item.php**   | Delete an existing grocery item |
| **update_item.php**   | Update grocery item details |
| **fetch_all.php**     | Fetch and print all items using `fetchAll()` |
| **fetch_single.php**  | Fetch and print one item using `fetch()` |
| **display_table.php** | Render database results into an HTML table |
| **grocery_items.sql** | SQL schema and sample data |

---

## 💻 How to Run Locally

1. Install **XAMPP** and start **Apache** and **MySQL**.
2. Copy the project folder to:  
   `C:\xampp\htdocs\grocery_project`
3. Import `grocery_items.sql` to **phpMyAdmin** → database name: `grocery_store`.
4. Open your browser and go to:  
   - `http://localhost/grocery_project/display_table.php` → to view the items  
   - `http://localhost/grocery_project/insert_item.php` → to insert  
   - `http://localhost/grocery_project/update_item.php` → to update  
   - `http://localhost/grocery_project/delete_item.php` → to delete  

---

## 🧠 Author
**MARC OLIVER BONEZA**  
UCOS Student – PHP/MySQL Activity  
