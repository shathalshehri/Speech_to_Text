# Speech-to-Text Interface and Database Integration

## Project Overview

This project demonstrates a system for converting speech into text and storing it in a database. It utilizes a web-based interface to capture and process voice commands, which are then interpreted and logged into a MySQL database. The system supports commands like "open" and "close," integrating smoothly with both front-end and server-side technologies.

## Tasks Completed

### 1. Development of Speech-to-Text User Interface

A web-based interface has been created to capture and convert voice input into text. This interface uses HTML and JavaScript to handle voice recording, text conversion, and communication with the server.

### 2. Database Integration

A PHP script processes the text data received from the web interface. It determines whether the text includes commands such as "open" or "close" and logs these commands into a MySQL database.

## How It Works

### User Interface

- **Voice Recording**: Users interact with the web interface to record voice input.
- **Text Conversion**: The voice data is converted to text and sent to the server.

### Server-Side Processing

- **Text Handling**: The PHP script processes the incoming text.
- **Command Identification**: The script identifies commands ("open" or "close") and records them in the database.

### Database Storage

- **Data Logging**: Commands are stored as 1 for "open" and 0 for "close" in the `speech_to_text_data` table of the MySQL database.

## Code and Configuration

### Web Interface (HTML + JavaScript)

The web interface efficiently captures and transmits voice input using JavaScript.

### PHP Script (`speech_to_text.php`)

This script processes text data from the web interface, identifies commands, and logs them in the database.

### Database Setup

Ensure your MySQL database includes a table named `speech_to_text_data` to store the text and command data.

## Example Usage

- **Voice Command "open"**: Processes and stores as 1 in the database.
- **Voice Command "close"**: Processes and stores as 0 in the database.

## Project Demo

View the project in action with the following demo GIFs:

- **Voice Command "open"**:
  
  ![Voice Command "open" Demo](https://github.com/shathalshehri/Speech_to_Text/blob/main/open.gif)

- **Voice Command "close"**:
  
  ![Voice Command "close" Demo](https://github.com/shathalshehri/Speech_to_Text/blob/main/close.gif)

## Troubleshooting

- **Database Connection Issues**: Check database credentials and connection settings.
- **Text Conversion Issues**: Ensure the speech-to-text interface is operating correctly and transmitting data.


