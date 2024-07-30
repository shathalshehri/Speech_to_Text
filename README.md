# Speech-to-Text Interface and Database Integration

## Project Overview

This project demonstrates a sophisticated system for converting speech to text and storing it in a database. Utilizing voice commands, it allows for control of hardware through an ESP32 microcontroller, integrating seamlessly with web and server-side technologies.

## Tasks Completed

### 1. Development of a Speech-to-Text User Interface

A user-friendly web interface has been created to record voice input and convert it into text. This interface employs HTML and JavaScript to capture speech, process it, and transmit the text to a server for further action.

### 2. Database Integration for Text Storage

A PHP script has been implemented to handle the text data from the web interface. The script determines whether the text includes commands such as "open" or "close," and records these commands in a MySQL database.

## How It Works

### User Interface

- **Voice Recording**: Users interact with the web interface to initiate and stop voice recording.
- **Text Conversion**: The recorded voice is converted to text and sent to the server.

### Server-Side Processing

- **Text Handling**: The PHP script processes the incoming text data.
- **Command Identification**: The script identifies commands ("open" or "close") and logs them in the database.

### Database Storage

- **Data Logging**: Commands are recorded as 1 for "open" and 0 for "close" in the `speech_to_text_data` table within the MySQL database.

## Code and Configuration

### Web Interface (HTML + JavaScript)

The web interface is designed to capture and transmit voice input efficiently using JavaScript.

### PHP Script (`speech_to_text.php`)

This script processes the text data from the web interface, identifies commands, and stores them in the database.

### Database Setup

Ensure your MySQL database includes a table named `speech_to_text_data` to store the text and command data.

## Example Usage

- **Voice Command "open"**: Converts to text, processed, and stored as 1 in the database.
- **Voice Command "close"**: Converts to text, processed, and stored as 0 in the database.

## Project Demo

View the project in action with the following demo GIFs:

- **Voice Command "open"**:
  
  ![Voice Command "open" Demo](https://github.com/shathalshehri/Speech_to_Text/blob/main/open.gif)


- **Voice Command "close"**:
  
  ![Voice Command "close" Demo](https://github.com/shathalshehri/Speech_to_Text/blob/main/close.gif)

## Troubleshooting

- **Database Connection Issues**: Verify database credentials and connection settings.
- **Text Conversion Issues**: Ensure the speech-to-text interface is functioning correctly and transmitting data accurately.



