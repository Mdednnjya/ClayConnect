<p align="center"><a href="https://github.com/Mdennjya/ClayConnect" target="_blank"><img src="public/images/brand-nae.svg" width="200" alt="ClayConnect Logo"></a></p>

## About ClayConnect

UD. Putra Ilham, now rebranded as ClayConnect, is an arts and crafts store located in Malang City that specializes in the production and sale of various flower vases, pots, and other craft items with good quality and affordable prices. ClayConnect has been established for several years and has embarked on a long journey in the pottery craft industry, creating high-quality and unique products to meet customer needs.

This repository was created to help digitize and market ClayConnect, aiming to expand its reach and enhance its online presence. By building a dedicated website, we aim to make ClayConnect's products more accessible to a broader audience and provide a platform for better customer engagement.

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
- [Bootstrap](https://getbootstrap.com/) - The most popular HTML, CSS, and JS library in the world
- [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript) - The programming language of the Web
- [MySQL](https://www.mysql.com/) - The world's most popular open-source database
