-- Create database
CREATE DATABASE IF NOT EXISTS personal_website_db;
USE personal_website_db;

-- Create pages table
CREATE TABLE IF NOT EXISTS pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL,
    content TEXT NOT NULL
);

-- Insert default About Us content
INSERT INTO pages (name, content) VALUES ('about', 'This is the default About Us content. You can edit this from the admin panel.')
    ON DUPLICATE KEY UPDATE content=VALUES(content); 

-- Create resume table
CREATE TABLE IF NOT EXISTS resume (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    education TEXT NOT NULL,
    experience TEXT NOT NULL,
    skills TEXT NOT NULL
);

-- Insert default resume data
INSERT INTO resume (name, email, education, experience, skills) VALUES (
    'Your Name',
    'your.email@example.com',
    'Your Education Details',
    'Your Work Experience',
    'Your Skills'
) ON DUPLICATE KEY UPDATE
    name=VALUES(name),
    email=VALUES(email),
    education=VALUES(education),
    experience=VALUES(experience),
    skills=VALUES(skills); 