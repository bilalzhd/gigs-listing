# Laravel Listings Application

This is a simple Laravel application that allows users to create listings, view them on a paginated listing page, and view individual listings. Users must be authenticated in order to create listings or upload logos for their companies.

## Installation

1. Clone this repository: `git clone https://github.com/bilalzhd/gigs-listing.git`
2. Navigate to the project directory: `cd laragigs`
3. Install dependencies: `composer install`
4. Create a copy of the `.env.example` file: `cp .env.example .env`
5. Generate an application key: `php artisan key:generate`
6. Configure your database settings in the `.env` file.
7. Run database migrations: `php artisan migrate`

## Usage

To use the application, you can navigate to the following URLs:

- **Listings Index**: `/` - This page displays a paginated list of all available listings. Users can click on individual listings to view their details.
- **Single Listing**: `/listings/{id}` - This page displays the details of a single listing.
- **Create Listing**: `/listings/create` - This page allows authenticated users to create a new listing by filling out a form.
- **Store Listing**: `/listings/store` - This endpoint is used to store a new listing in the database after it has been created.
- **Login**: `/login` - This page allows users to login to their accounts.
- **Register**: `/register` - This page allows users to create a new account.
- **Upload Logo**: `/listings/{id}/logo` - This endpoint is used to upload a logo for a company associated with a listing.

## Authentication

This application includes basic authentication features, allowing users to login and register for accounts. Users must be authenticated in order to create listings or upload logos for their companies.

## License

This application is open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contributing

If you'd like to contribute to this project, please fork the repository and submit a pull request. Thanks for your support!
