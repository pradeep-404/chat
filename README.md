<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# About ChatBot

# Description

This is a chatbot built using Laravel for both frontend and backend. The chatbot is designed to provide an interactive experience using a typing effect while answering user queries. It also has a built-in search functionality to retrieve relevant information from its own database.

Technology Stack

Framework: Laravel 11

Backend: Laravel

Database: MySQL

Frontend: Laravel Blade & Tailwind CSS

Build Tool: Vite
## How It Works

# 1. Data Storage:

The chatbot uses a MySQL database to store structured data.

The database generates a JSON file that acts as a knowledge base for the chatbot.

The chatbot retrieves answers dynamically from the JSON data.

# 2. Chatbot Features:

Implements a typing effect for a natural conversation flow.

Can search within its database to fetch answers to user queries.

Supports multiple sections with predefined questions and answers.


# Example Data Structure (JSON Format)

```json
{
  "sections": [
    {
      "title": "iStart Programs",
      "questions": [
        {
          "question": "What is iStart Internship Program?",
          "answer": "The Government provides internship opportunities to Startups registered under i-Start by collaborating with companies in various sectors. A stipend of up to INR 20,000 per Startup member (subject to INR 1 Lakh) is provided during the internship."
        },
        {
          "question": "What is iStart Spotlight?",
          "answer": "iStart Spotlight involves capacity-building activities across districts, offering training on operations, human resources, marketing, and promotion."
        },
        {
          "question": "To whom additional booster is provided?",
          "answer": "Additional boosters are given for employment generation, product-based startups, and startups founded by women, transgender, and SC-ST founders."
        },
        {
          "question": "How much additional fund will be provided for Women Startup?",
          "answer": "Startups with more than 50% equity held by women founders will receive an additional INR 60,000."
        },
        {
          "question": "Is Scale up a Fund or Loan?",
          "answer": "The Scale-up Fund provides financial support as debt convertible to a grant."
        },
        {
          "question": "How much additional amount can be availed in Viability Grant?",
          "answer": "Startups that upgrade their Q-Rate score within the defined period can receive additional grants."
        },
        {
          "question": "Is the additional booster applicable for both fund types?",
          "answer": "The booster applies to either the Viability Grant or the Scale-up Fund."
        },
        {
          "question": "How much additional booster is available for Product-Based Startups?",
          "answer": "Product-based startups can receive a 10% booster on Viability Grant and Scale-up Fund."
        }
      ]
    },
    {
      "title": "iStart School Program",
      "questions": [
        {
          "question": "Who is eligible for the program?",
          "answer": "Students currently studying in classes 8th to 12th across registered schools in Rajasthan."
        },
        {
          "question": "I don't have a startup yet. Should I still enroll?",
          "answer": "Yes, there are two tracks: one for aspiring founders and one for active founders."
        },
        {
          "question": "Who has access to the Learning Management System?",
          "answer": "Students registered on the platform have access to content in both Hindi and English."
        },
        {
          "question": "Is there a cost to the program?",
          "answer": "The program is completely free and only requires internet access."
        },
        {
          "question": "Is there a limit to the number of founders who can participate?",
          "answer": "No, there is no limit on the number of participants."
        },
        {
          "question": "How many hours should I expect to put into this?",
          "answer": "The program is flexible, allowing students to spend as much time as they want."
        },
        {
          "question": "If I’m already doing a startup, why should I bother with this?",
          "answer": "The program offers insights on best practices and provides access to mentors and resources."
        },
        {
          "question": "If I’m working with other people, who should participate?",
          "answer": "Co-founders should participate, with one team leader representing the group."
        }
      ]
    }
  ]
}
```





## Installation & Setup
1 Clone the Repository:

```bash
git clone https://github.com/your-username/chatbot.git
```

2. Navigate to the Project Directory:
```bash

cd chatbot
```

3. Install Dependencies:

```bash
composer install
npm install
```

4. Set Up Environment Variables:

  ```bash
cp .env.example .env
```

5. Run Database Migrations , Start the Server:
  ```bash
php artisan migrate
php artisan serve
```

## Usage

Visit http://localhost:8000/chat to interact with the chatbot.

Ask queries and receive responses with a smooth typing animation.


![Description of Screenshot](path/to/your/screenshot.png)


## Security Vulnerabilities

If you discover a security vulnerability within projecct , please tell me 

## License
Feel free to contribute by submitting pull requests.
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
