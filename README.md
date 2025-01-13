# GYM Management System

## Overview
The GYM Management System is a web-based application designed to facilitate the management of a gym. This platform provides features for efficiently managing workouts, tasks, user accounts, and generating reports. Built using PHP and MySQL for the backend, and HTML and CSS for the frontend, this project aims to streamline gym operations, enhance member engagement, and improve administrative efficiency.

## Features

### Dashboard
The Dashboard serves as the central hub for managing all gym-related activities. It includes the following features:

#### Workouts
- **Manage Workouts:** Admins can view, add, update, and delete workouts. This feature allows trainers to customize workout routines for different members.
  
#### Tasks
- **Members Management:** Admins can manage member registrations, profiles, and memberships.
- **Schedule:** Allows for scheduling classes and appointments for trainers and members.
- **Charges:** Track and manage payments and fees associated with memberships and services.
  
#### Receipts
- **Account Management:** Administrators can view and manage member accounts, including payment history and outstanding balances.
- **Receipts Generation:** Automatically generate receipts for payments made by members, improving record-keeping and transparency.
  
#### Reports
- **Payment Reports:** Generate comprehensive reports on payments received, outstanding balances, and financial summaries to aid decision-making.

#### Users Management
- **User Management:** Admins can add new users (staff or trainers) and revoke access as needed. This helps maintain security and proper access control within the system.

## Technology Stack
- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL

## Installation
To set up the GYM Management System on your local machine, follow these steps:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Abdizalan/gym-management.git
   cd gym-management
   ```

2. **Setup the Environment**
   - Ensure you have a local server (e.g., XAMPP, WAMP, MAMP) installed.
   - Place the cloned directory into the server's `htdocs` or `www` directory.

3. **Import the Database**
   - Open phpMyAdmin and create a new database (`gym`).
   - Import the SQL file provided in the repository to create the necessary tables and initial data.

4. **Configure Database Connection**
   - Open the `config.php` file and update the database connection settings with your database credentials.

5. **Run the Application**
   - Start your local server and navigate to `http://localhost/gym-management` in your web browser to access the application.

## Usage
- After logging in as an admin, you will be directed to the Dashboard, where you can access different sections such as workouts, members, schedules, receipts, reports, and user management.
- Use the respective options to manage workouts, view member profiles, track payments, generate reports, and manage user accounts.

## Contributing
We welcome contributions to the GYM Management System. To contribute, please follow these steps:
1. Fork the repository.
2. Create a feature branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a Pull Request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Contact
For any inquiries or feedback regarding the GYM Management System, please contact:
- **Your Name**  
- **Email:** thiskopa@gmail.com  
- **GitHub:** (https://github.com/Abdizalan)