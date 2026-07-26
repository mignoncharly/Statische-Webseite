# Charly Auto École

PHP website for a driving school, including schedules, packages, registration, contact, and partner information.

## Repository structure

Reusable page sections are separated into PHP files; site styling is defined in style.css and images are under Images/.

## Local development

Prerequisites: PHP and any database configured by the project.

    php -S localhost:8000

Review the database initialization and connection files before running the application, and keep local credentials outside version control.

## Repository hygiene

- Do not commit credentials, local environment files, virtual environments, generated caches, or build output.
- Keep project documentation factual and update it alongside behavioral or deployment changes.
- Preserve database and project-data files unless their removal has been reviewed separately.
