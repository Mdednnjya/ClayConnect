<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo"></a></p>

## About Laravel

Laravel is a web application framework known for its elegant syntax and enjoyable development experience. It simplifies common tasks in web projects, such as routing, dependency injection, and database management. Laravel also offers features like background job processing, real-time event broadcasting, and more, making it suitable for large and robust applications.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Make sure you have the following installed on your local machine:

- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) and npm (usually comes with Node.js)
- [Git](https://git-scm.com/)

### Installation

Follow these steps to set up the project locally:

1. **Clone the repository**

    ```sh
    git clone https://github.com/Mdennjya/ClayConnect.git
    cd ClayConnect
    ```

2. **Install dependencies**

    Use Composer to install PHP dependencies:

    ```sh
    composer install
    ```

    Use npm to install JavaScript dependencies:

    ```sh
    npm install
    ```

3. **Set up environment variables**

    Copy the example environment file and set your own variables:

    ```sh
    cp .env.example .env
    ```

    Edit the `.env` file to match your environment. You can use any text editor for this purpose.

4. **Generate application key**

    ```sh
    php artisan key:generate
    ```

5. **Run database migrations**

    Make sure your database is set up and configured in your `.env` file, then run:

    ```sh
    php artisan migrate
    ```

6. **Start the development server**

    ```sh
    php artisan serve
    ```

    The application will start on `http://localhost:8000`.

7. **Compile assets**

    To compile the assets, run:

    ```sh
    npm run dev
    ```

### Additional Steps (Optional)

- **Seeder (if applicable)**

    If the project includes database seeders, you can run them with:

    ```sh
    php artisan db:seed
    ```

- **Running Tests**

    To run the tests, use:

    ```sh
    php artisan test
    ```

## Deployment

To deploy the project, you will need to follow these steps on your server:

1. Clone the repository on the server
2. Set up environment variables
3. Install dependencies (`composer install` and `npm install`)
4. Run database migrations (`php artisan migrate`)
5. Compile assets (`npm run prod`)

## Built With

- [Laravel](https://laravel.com/) - The PHP framework for web artisans
- [Node.js](https://nodejs.org/) - JavaScript runtime built on Chrome's V8 JavaScript engine
