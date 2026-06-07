# AWS-2-Tier-Student-Registration-Portal-Deployment
Cloud-hosted Student Registration Portal deployed on AWS EC2 using Apache, PHP, MariaDB, and Linux.
-- Project Summary --

This project demonstrates the deployment of a cloud-hosted Student Registration Portal using AWS EC2, Apache HTTP Server, PHP, and MariaDB. The application enables students to register through a web interface, while the backend database securely stores and manages registration data. The project was developed to gain practical experience in cloud infrastructure deployment, Linux server administration, web hosting, database integration, and troubleshooting.

-- Problem Statement --

Educational institutions often require a centralized system to collect student information. The goal of this project was to deploy a simple registration portal on a cloud server and establish communication between the frontend application and the backend database.

-- Architecture --

User
  │
  ▼
Student Registration Form (PHP/HTML)
  │
  ▼
Apache Web Server
  │
  ▼
MariaDB Database
  │
  ▼
AWS EC2 Instance

-- Technologies Used --

| Technology               | Purpose               |
| ------------------------ | --------------------- |
| AWS EC2                  | Cloud Server Hosting  |
| Amazon Linux             | Operating System      |
| Apache HTTP Server       | Web Server            |
| PHP                      | Backend Processing    |
| HTML/CSS                 | Frontend Development  |
| MariaDB/MySQL            | Database              |
| Linux Commands           | Server Administration |
| KodeKloud AWS Playground | Learning Environment  |

-- Project Objectives --

Launch and configure an AWS EC2 instance.
Install and configure Apache Web Server.
Host a web application on AWS.
Create and manage a MariaDB database.
Connect PHP application with database.
Store student registration details.
Verify successful deployment using public IP access.

-- Step-by-Step Implementation --
Step 1: Launch AWS EC2 Instance

I created an EC2 instance using Amazon Linux and configured the necessary settings.

Tasks Performed
Selected Amazon Linux AMI.
Chose t3.micro instance type.
Created security group.
Allowed HTTP traffic on Port 80.
Allowed SSH traffic on Port 22.
Successfully launched the instance.
Skills Learned
AWS EC2
Security Groups
Public and Private IP concepts
Step 2: Connect to the Server

After launching the instance, I connected to it using EC2 Instance Connect.

Tasks Performed
Accessed Linux terminal.
Verified server connectivity.
Executed administrative commands.
Skills Learned
Linux Terminal
Remote Server Access
Step 3: Install Apache Web Server

I installed Apache to host the web application
Commands Used:
sudo yum install httpd -y
sudo systemctl start httpd
sudo systemctl enable httpd
Verification

Created a test page:
<h1>My AWS Server is Working</h1>
Accessed the page through the EC2 Public IP.

Skills Learned
Apache Installation
Service Management
Web Hosting Basics
Step 4: Install MariaDB Database

I installed and configured MariaDB on the server.

Tasks Performed
Installed MariaDB.
Started database service.
Connected to MariaDB shell.
Created database.
Commands Used:
CREATE DATABASE studentdb;
USE studentdb;
Skills Learned
Database Administration
SQL Commands
Step 5: Create Student Table

Created a table to store student information.

Example Structure
CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
course VARCHAR(50)
);
Skills Learned
Table Design
Data Modeling
Step 6: Develop Student Registration Form

Created a registration form using HTML and PHP.

Features
Student Name
Email Address
Course Selection
Registration Button
Skills Learned
HTML Forms
User Input Handling
Step 7: Database Integration

Connected the PHP application with MariaDB.

Tasks Performed
Established database connection.
Captured form inputs.
Inserted records into database.
Example Process
User fills form
      ↓
PHP receives data
      ↓
Database connection established
      ↓
Data stored in MariaDB
Skills Learned
PHP Database Connectivity
SQL Query Execution
Step 8: Deployment Testing

Performed end-to-end testing.

Validation Steps
Opened application using Public IP.
Submitted registration form.
Verified database records.
Confirmed successful deployment.
Result

The application was successfully deployed and accessible through the AWS EC2 public address.

Challenges Faced
Challenge 1

Apache service configuration issues.

Solution

Verified service status and restarted Apache using systemctl commands.

Challenge 2

Database selection errors.

Example:
ERROR 1046: No database selected
Solution

Used:
USE studentdb;
before executing queries.

Challenge 3

HTML and PHP file deployment issues.

Solution

Verified file locations under:
/var/www/html/
and corrected syntax errors.

-- Key Learning Outcomes --

Through this project I gained practical experience in:

AWS EC2 Deployment
Linux Administration
Apache Web Server Configuration
Database Management
PHP Development
Cloud Hosting
Application Deployment
Troubleshooting and Debugging

-- Future Enhancements --

Responsive UI using Bootstrap
User Authentication
Email Notifications
AWS RDS Integration
HTTPS Configuration
Load Balancer Integration
Auto Scaling Deployment

-- Project Outcome --

Successfully deployed a Student Registration Portal on AWS EC2.
Configured Apache Web Server and MariaDB database.
Integrated PHP frontend with backend database.
Verified end-to-end functionality by storing student records.
Gained hands-on experience in AWS cloud deployment, Linux administration, and web hosting.

-- Skills Demonstrated --

Cloud
AWS EC2
Security Groups
Public IP Configuration

Linux
Linux Commands
Server Administration
Service Management

Web Development
HTML
CSS
PHP

Database
MariaDB
SQL Queries
Database Connectivity

DevOps Concepts
Application Deployment
Troubleshooting
Infrastructure Setup
