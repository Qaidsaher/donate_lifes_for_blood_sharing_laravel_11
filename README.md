# Donate Lives for Blood Sharing

A Laravel 11 application designed to connect blood donors with those in need, facilitate appointment scheduling, and manage blood donation processes efficiently.

## Features

- **User Authentication:** Secure registration and login for donors and admins.
- **Appointment Management:** Schedule and manage blood donation appointments.
- **Admin Dashboard:** Comprehensive dashboard for managing appointments and donor information.
- **Role-Based Access:** Different permissions for donors and admins.
- **Responsive Design:** Built with Tailwind CSS for a modern and user-friendly interface.

## Installation

### Prerequisites

Ensure you have the following installed:
- PHP >= 8.2
- Composer
- Npm 
- Sqlite or other supported database

### Getting Started

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/Qaidsaher/donate_lives_for_blood_sharing_laravel_11.git
    cd donate_lives_for_blood_sharing_laravel_11
    ```

2. **Install Dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Set Up Environment File:**

    Copy the example environment file and configure your environment settings:

    ```bash
    cp .env.example .env
    ```

    Edit the `.env` file to set up your database and other environment configurations.

4. **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

5. **Run Migrations:**

    ```bash
    php artisan migrate
    ```

6. **Build Assets:**

    ```bash
    npm run dev
    ```

7. **Start the Development Server:**

    ```bash
    php artisan serve
    ```

    Access the application at `http://localhost:8000`.

## Usage

- **Register:** Create an account as a donor or admin.
- **Log In:** Access your dashboard based on your role.
- **Schedule an Appointment:** Use the interface to book and manage blood donation appointments.
- **Manage Donations:** Admins can view and manage all appointments and donor information.

## Contributing

We welcome contributions to improve the project! To contribute:

1. **Fork the Repository**
2. **Create a New Branch:**

    ```bash
    git checkout -b feature/your-feature
    ```

3. **Commit Your Changes:**

    ```bash
    git commit -am 'Add some feature'
    ```

4. **Push to the Branch:**

    ```bash
    git push origin feature/your-feature
    ```

5. **Open a Pull Request**

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For questions or feedback, please reach out to [saherqaid2020@gmail.com](mailto:saherqaid2020@gmail.com).
