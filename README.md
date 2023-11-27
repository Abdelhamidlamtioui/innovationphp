# Comprehensive Content, User Permissions, and Information Management System

## Overview
This PHP and MySQL-based system is designed for managing posts, user permissions, and user information. It enables users to create, read, update, and delete posts, manage user permissions, and handle personal user data like names, ages, and phone numbers.

## Key Features
- **Posts Management**: Add, view, update, and delete posts.
- **User Permissions Management**: Create user roles with specific permissions, view and edit these permissions, and remove users.
- **User Information Management**: Manage user details including names, ages, and phone numbers.

## Main Components
- Database Connection Scripts (`connexion.php`, `connexion_post.php`, `connexion-user-permission.php`): Establish connections to the MySQL database.
- Post-related Scripts (`add_post.php`, `view_post.php`, `update_post.php`, `delete_post.php`): Manage posts.
- Permission-related Scripts (`add-permission.php`, `view-users-permission.php`, `edit-permission.php`, `delete-user.php`): Handle user permissions.
- User Information-related Scripts (`add.php`, `edit.php`, `delete.php`): Manage user information.

## Code Explanation
### Adding a New User
The `add.php` script is a key component of the user information management system. Here's a breakdown of its functionality:

- **Form Data Handling**: The script processes data submitted from a form, capturing user input like first name, last name, age, and phone number.
- **Database Interaction**: It constructs an SQL query to insert this data into the `userinfo` table in the database.
- **Execution and Feedback**: The script executes the SQL query and provides feedback. On successful data insertion, it redirects to `first.php` with a success message. If the query fails, it displays an error message.

### Security Note
The current implementation does not use prepared statements, which are recommended for preventing SQL injection attacks. Future contributions could focus on enhancing the security of these database interactions.

## Requirements
- PHP 7.x or later.
- MySQL Database.
- A web server (e.g., Apache or Nginx).

## Setup and Installation
1. Place the files in your web server's directory.
2. Set up your MySQL database and import any necessary SQL files to create the tables.
3. Modify the database connection files with your database credentials.
4. Access the project functionalities through your web server URL.
