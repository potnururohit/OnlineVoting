# Online Voting System in PHP

This is a web-based application that allows registered users to vote in elections online. The system is written in PHP and uses a MySQL database to store user information, election data, and voting results.

## Installation

1. Clone the repository to your local machine or server:

## Installation

1. Clone the repository to your local machine or server:

git clone:https://github.com/potnururohit/OnlineVoting.git

2. Create a MySQL database and import the SQL file located in the `database` directory.

3. Edit the `config.php` file in the `includes` directory with your database credentials.

4. Upload the files to your web server.

## Usage

1. Users can register for an account by clicking on the "Register" link and filling out the registration form.

2. After registration, users can login to their account using their email and password.

3. The system will display any ongoing elections and allow users to vote for their preferred candidates.

4. Users can view the results of completed elections once they have been tallied.

## Features

- User authentication and authorization
- Secure password hashing using PHP's `password_hash()` function
- Responsive user interface using Bootstrap
- Dynamic generation of election ballots from the database
- Real-time vote counting and result display
- Administrator dashboard for managing elections and candidates

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
