# Personal Website

A simple PHP-based personal website with an admin panel for editing content and a resume section.

## Features
- Responsive homepage with resume details
- About and Contact pages
- Admin panel for editing About and Resume content
- Modern navigation bar and dashboard styling
- MySQL database integration

## Folder Structure
```
personal_website/
├── about.php
├── admin/
│   ├── dashboard.php
│   ├── edit_about.php
│   ├── edit_resume.php
│   ├── index.php
│   └── logout.php
├── config.php (not included, see config.sample.php)
├── config.sample.php
├── contact.php
├── index.php
├── navbar.php
├── setup.sql
├── style.css
└── README.md
```

## Getting Started

1. **Clone the repository:**
   ```
   git clone https://github.com/yourusername/personal_website.git
   cd personal_website
   ```
2. **Set up the database:**
   - Create a new MySQL database.
   - Import `setup.sql` to create the required tables and sample data.
3. **Configure database connection:**
   - Copy `config.sample.php` to `config.php`.
   - Edit `config.php` with your actual database credentials.
4. **Run locally:**
   - Place the folder in your web server's root (e.g., `htdocs` for XAMPP).
   - Access via `http://localhost/personal_website/`.

## Admin Login
- Default username: `admin`
- Default password: `sid2512` (change in `admin/index.php` for security)

## Security Notes
- **Never commit `config.php` or any file with real credentials to public repositories.**
- Change the admin password after setup.
- For production, use password hashing and store credentials securely.

## Customization
- Edit `style.css` for custom styles.
- Update content via the admin panel.

## License
This project is for personal/educational use. Feel free to modify and use as you wish. 