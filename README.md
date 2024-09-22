<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://miro.medium.com/v2/resize:fit:590/0*I6C8hkAaHTaINXav.png" width="400" alt="Laravel Logo"></a></p>



# GraphQL Laravel Project

## Overview

This is a simple GraphQL API built with Laravel that allows users to interact with authors, books, categories. It provides a flexible and efficient way to query and manipulate data.

## Benefits of Using GraphQL

- **Flexible Data Retrieval**: GraphQL allows clients to request exactly the data they need, reducing over-fetching and under-fetching of data.

- **Single Endpoint**: Unlike REST APIs, which typically have multiple endpoints, GraphQL uses a single endpoint for all requests, simplifying client-server interactions.

- **Strongly Typed Schema**: GraphQL has a defined schema that specifies the types and structure of data, which helps catch errors early and improves documentation.

- **Efficient Queries**: Clients can combine multiple resource requests into a single query, minimizing the number of network requests needed to fetch data.

- **Real-time Capabilities**: With subscriptions, GraphQL can support real-time updates, making it easier to implement features like notifications or live data updates.

- **Strong Ecosystem**: A robust ecosystem of libraries and tools is available for integrating GraphQL with various frameworks, enhancing development efficiency.



## Technologies Used

- PHP
- Laravel
- GraphQL (Rebing/GraphQL)
- MySQL

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/almant12/graphqlLaravel.git
   cd graphqlLaravel
   ```
2. install the dependencies of the project:
    ```bash
   composer install
   ```
3. Generate the application key your Laravel project:
    ```bash
   php artisan key:generate
   ```
4. Clone your .env.example to .env:
      ```bash
   cp .env.example .env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```
5. Run the database migrations to set up your database tables:
     ```bash
   php artisan migrate
   ```
6. Run Seeder to populate your database with sample data:
    ```bash
   php artisan db:seed
   ```
7. Start the development server
   ```bash
   php artisan serve
   ```
