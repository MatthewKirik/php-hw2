<a name="readme-top"></a>

<!-- ABOUT THE PROJECT -->
## Authorization form

A simple authorization form on PHP.


<!-- GETTING STARTED -->
## Getting Started

To get a local copy and running follow these simple steps.

### Prerequisites

Install a local web server and a MySQL server on your machine. You can use software like XAMPP or WAMP for this, which will install both a web server and a MySQL server for you.

### Installation

1. Clone this repository:
   ```sh
   git clone git@github.com:GenesisEducationKyiv/php-course-hw-2-gurug-prog.git
   ```
2. Save the PHP code to the htdocs directory of your local web server (for XAMPP on Windows, this is usually C:\xampp\htdocs).
3. Create a new database, then create a new table named 'users' with three columns: id (INT, AUTO_INCREMENT, PRIMARY), username (VARCHAR), and password_hash (VARCHAR).
4. Set environment variables with database connection parameters:
   ```
    HW2_MYSQL_HOSTNAME - the hostname of your local MySQL Server (usually: localhost)
    HW2_MYSQL_USERNAME - the login to connect to your local MySQL Server (usually: root)
    HW2_MYSQL_PASSWORD - the password paired with login
    HW2_MYSQL_SCHEMA - schema name (database name) hosted by your MySQL Server
   ```
5. Start your local web server and MySQL server.
6. Open a web browser and go to http://localhost/index.php to access the login and registration form.


<!-- AUTHOR -->
## Author

Ivan Baturkin IP-03 student

<p align="right">(<a href="#readme-top">back to top</a>)</p>
