# Laravel Chat Application

This is a real-time chat application built with Laravel 10, PostgreSQL, and Redis. Users can create chat rooms, send messages in real-time, and enjoy a seamless chat experience.

## Table of Contents

* Installation
* Usage
* Features
* Environment Configuration
* Testing
* Documentation
* Deployment
* Version Control
* Contributing
* License

## Installation

Follow these steps to set up the development environment using Laravel Sail:

1. **Clone the Repository:** 
  'git clone git@github.com:MamunHoque/LaravelChatApplication.git && cd LaravelChatApplication`
2. Run cp .env.example .env

3. **Start Laravel Sail:** sail up -d

4. **Access the Application:**
    Open your web browser and visit `http://localhost:8080`.

## Usage

* Register or log in to start using the chat application.
* Create chat rooms, join existing ones, and engage in real-time conversations.
* Explore features like message history, user presence, and notifications.

## Features

* User Authentication
* Chat Room Management (Create, Update, Delete)
* Real-time Messaging with WebSocket
* Message History with Pagination
* User Presence and "Last Seen" Feature
* Real-time Notifications

## Environment Configuration

* Laravel: v10.x
* PostgreSQL: v13.x
* Redis: v6.x

## Testing

To run tests using PHPUnit:

bashCopy code`sail test`


## Documentation

API documentation is available at [API Documentation](#).

## Deployment

1. **Laravel Sail Deployment:** sail up -d

2. **Access the Application:**
   Visit `http://localhost` in your browser.

## Version Control

This project uses Git for version control. Please maintain a clean Git history and provide meaningful commit messages.

### Contributing

Feel free to contribute to this project by opening issues or submitting pull requests. Your contributions are welcome!

### License

This project is licensed under the [MIT License](#).
