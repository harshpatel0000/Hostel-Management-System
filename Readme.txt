# 🏨 Hostel Management System (HMS)

A full-stack web application built with **PHP** and **MySQL** that digitizes and automates the day-to-day operations of a college hostel — student registration, room allotment, course management, and administrative oversight — replacing manual, paper-based record keeping.

> Developed as an academic project (Project-2, Subject Code 3360707) by the Computer Engineering Department, **R.C. Technical Institute, Ahmedabad**, for the 2022–23 academic year.

## 📖 Abstract

Hostel record-keeping done manually is slow, error-prone, and hard to audit — student admissions, room allotments, and fee tracking are all maintained in physical registers. This project computerizes those workflows: adding, updating, viewing, and removing student records; managing room allotment and availability; and giving hostel administrators a single dashboard to oversee everything, cutting down on paperwork and turnaround time.

## ✨ Features / Modules

**User (Student) Side**
- Self-registration and secure login
- Change password / forgot password recovery flow
- Browse available rooms and check seat availability
- Book a hostel room, specifying course, food preference, duration, and correspondence/permanent address details
- View and print room & personal booking details
- Edit personal profile
- Personal access-log history (login audit trail)

**Admin Side**
- Secure, separate admin login and session handling
- Dashboard summarizing total students, rooms, and courses
- Add, edit, and manage rooms (with seater capacity and per-student fees)
- Add, edit, and manage courses
- View, manage, and search registered students (with student-level detail view)
- Admin profile management
- System-wide access log for auditing user and admin logins

## 🎯 Objectives

- Make student data collection, storage, and retrieval fast and reliable
- Track hostellers and applicants distinctly, and process room allotment systematically
- Reduce time, paperwork, and information-handling costs
- Bring transparency to the allotment process
- Provide a simple, GUI-driven interface usable without technical training
- Keep hostel data secure and centralized

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP (server-side scripting) |
| Database | MySQL (via phpMyAdmin) |
| Frontend | HTML5, CSS3, Bootstrap |
| Scripting | JavaScript, jQuery |
| UI Libraries | Bootstrap Select, DataTables, Chart.js, Font Awesome |
| Server / Environment | Apache via XAMPP |
| IDE used | Visual Studio Code |

## 🏗️ System Design

**Actors:** Admin and User (Student) — see the use-case model, where the Admin manages rooms, student entries, payments, student logs, and room details, and the User interacts through login and self-service booking/profile flows.

**Core entities (from the ER model):** `user`, `admin`, `rooms`, `courses`, and `hostel` (booking/registration), related through registration, creation, and "belongs to" relationships — e.g. a user registers into the hostel with a selected room, and rooms belong to courses/allotment records maintained by the admin.

**Data flow:** the Admin manages courses, rooms, and student registration data; the User registers, logs in, books a room, and edits their profile — all flowing through the respective PHP modules into the MySQL tables described below.

## 📂 Project Structure

```
HMS/
├── SQL File/
│   └── hostel.sql              # Database schema & seed data
└── hostel/
    ├── admin/                  # Admin portal (dashboard, rooms, courses, students)
    │   ├── includes/           # Admin config, header, sidebar, login check
    │   ├── css/ js/ fonts/ img/
    │   └── *.php
    ├── includes/               # Shared config, header, sidebar, login check
    ├── css/ js/ fonts/ img/
    ├── index.php                # Landing / login page
    ├── login.php / registration.php
    ├── dashboard.php
    ├── book-hostel.php
    ├── room-details.php
    └── my-profile.php
```

## 🗄️ Database Schema

The `hostel.sql` file (inside `SQL File/`) creates the following tables:

| Table | Purpose |
|---|---|
| `admin` | Stores admin login credentials |
| `adminlog` | Admin login/access audit trail |
| `courses` | Course code, short name, and full name of each program |
| `rooms` | Room number, seater capacity, and per-student fee |
| `registration` | Full hostel booking record — room, course, fees, food status, stay duration, correspondence & permanent address, guardian/emergency contact details |
| `userregistration` | Student account details (name, gender, contact, email, password, registration date) |
| `userlog` | Student login/access audit trail |
| `states` | Reference list of Indian states used in address dropdowns |

## ⚙️ Installation & Setup

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) / WAMP / LAMP (Apache + PHP + MySQL)
- A web browser

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/<your-username>/HMS.git
   ```

2. **Move the project into your server's web root**
   - XAMPP: copy the `hostel` folder into `C:/xampp/htdocs/`
   - WAMP: copy it into `C:/wamp64/www/`

3. **Set up the database**
   - Start Apache and MySQL from your control panel
   - Open `phpMyAdmin` (`http://localhost/phpmyadmin`)
   - Create a new database named **`hostel`**
   - Import the schema from `SQL File/hostel.sql`

4. **Configure the database connection**
   Both `hostel/includes/config.php` and `hostel/admin/includes/config.php` connect using:
   ```php
   $dbuser = "root";
   $dbpass = "";
   $host   = "localhost";
   $db     = "hostel";
   ```
   Update these credentials if your local MySQL setup differs.

5. **Run the application**
   - User portal: `http://localhost/hostel/`
   - Admin portal: `http://localhost/hostel/admin/`

> 🔒 **Note:** The database seed data (`SQL File/hostel.sql`) includes a demo admin and demo user account for local testing. Change these credentials immediately if you ever deploy this project anywhere beyond your local machine.

## ✅ Testing

The project was validated with functional test cases covering the core flows:

| Flow | Input | Expected Result |
|---|---|---|
| Registration | Details filled into the registration form | Account created; user can log in |
| Login | Email/registration number + password | User is authenticated into the system |
| Manage courses & rooms | Admin actions via dashboard UI | Courses/rooms created, edited, or removed successfully |
| Book hostel | Room, course, and personal details | Booking is recorded against the student |
| Logout | Logout button | Session is terminated for user/admin |

## 🚀 Future Enhancements

- Online fee payment and dues tracking
- Mess bill calculation and management
- Visitor log and complaint/grievance registration
- Automated notice board and email notifications for approvals
- Waiting-list automation for room allotment

## 👥 Project Team

Developed by 6th Semester Diploma in Computer Engineering students at R.C. Technical Institute, Ahmedabad (2022–23), under the guidance of **Rutvi S. Sheth**:

- Patel Vedkumar (206400307202)
- Nandasana Yash (206400307198)
- Zalavadiya Yash (206400307203)
- Patel Harsh (206400307221)

## 📚 References

- [W3Schools](https://www.w3schools.com)
- [SitePoint](https://www.sitepoint.com)
- [GeeksforGeeks](https://www.geeksforgeeks.org)
- [Stack Overflow](https://stackoverflow.com)

## 🤝 Contributing

Contributions are welcome! To contribute:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/your-feature`)
3. Commit your changes (`git commit -m "Add your feature"`)
4. Push to the branch (`git push origin feature/your-feature`)
5. Open a Pull Request

## 📄 License

This project is open source. Add a `LICENSE` file (e.g. MIT License) to the repo to make the terms of use explicit for anyone forking or contributing.