# CSRF Protection Project

### Overview

This project aims to implement protection against **Cross-Site Request Forgery (CSRF)** attacks in web applications. CSRF is a type of attack that tricks a user into performing actions without their consent, potentially compromising the user's data or causing unwanted operations. This project demonstrates how to prevent such attacks and secure user actions in web applications.

---

## Table of Contents

1. [Introduction](#introduction)
2. [CSRF Attack Explanation](#csrf-attack-explanation)
3. [How CSRF Protection Works](#how-csrf-protection-works)
4. [Project Features](#project-features)
5. [Installation](#installation)
6. [Usage](#usage)
7. [Testing the CSRF Protection](#testing-the-csrf-protection)
8. [Contributing](#contributing)
9. [License](#license)

---

## Introduction

In modern web development, security is a top priority. CSRF is one of the common vulnerabilities that can allow an attacker to perform unauthorized actions on behalf of the user. The goal of this project is to demonstrate how to implement effective CSRF protection using techniques like tokens and SameSite cookies.

---

## CSRF Attack Explanation

CSRF attacks exploit the trust a web application has in the user's browser. This occurs when an attacker tricks the victim into making an unwanted request, using the victim's credentials (like cookies or session data), to perform an action in a web application where the victim is already authenticated.

Example:

-   A user is logged into a banking application.
-   An attacker sends a request to transfer funds from the user's account to their own, and the request is automatically executed because the browser sends the user's credentials along with the request.

### Consequences:

-   Unwanted changes to user accounts (e.g., changing email, password, or other sensitive information).
-   Unauthorized transactions.

---

## How CSRF Protection Works

To prevent CSRF attacks, we use the following techniques:

1. **Anti-CSRF Tokens**: Each request that modifies data should include a unique token that verifies the request's authenticity. The server generates this token and embeds it in the HTML of the page or within cookies.
2. **SameSite Cookies**: The `SameSite` cookie attribute helps mitigate CSRF by restricting how cookies are sent with cross-site requests.
3. **Referer Header Validation**: Checking the `Referer` header can help ensure that requests come from the same domain as the application.

By validating the CSRF token with each user request, the server ensures that the request is valid and not a potential attack.

---

## Project Features

-   CSRF protection using **anti-CSRF tokens**.
-   Use of **SameSite cookie attribute** for secure cookies.
-   Implementation of **Referer header validation**.
-   Example code for both backend and frontend to demonstrate CSRF protection.
-   A simple web application with user authentication and protected routes.

---

## Installation

To set up this project, you need to follow these steps:

### Prerequisites:

-   PHP or any backend language capable of handling tokens and cookies.
-   A web server (e.g., Apache, Nginx).
-   A browser for testing CSRF protection.

### Step-by-step Installation:

1. Clone the repository:
    ```bash
    git clone https://github.com/dhirar231/csrf_proj
    cd csrf-protection-project
    ```
