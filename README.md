# Speech-to-Text Interface and Database Integration

## Project Overview

This project demonstrates a user interface for converting speech to text and saving the resulting text to a database. The system uses voice commands to control hardware via an ESP32 microcontroller. 

## Tasks Completed

### 1. Build a User Interface for Speech-to-Text

A web-based user interface has been developed to convert speech input into text. This interface uses HTML and JavaScript for recording voice and converting it to text. The text output is then sent to the server for processing.

### 2. Save the Text Output to a Database

The speech-to-text data is processed by a PHP script that inserts the converted text into a MySQL database. The PHP script handles the POST request from the web interface, determines commands based on the text, and stores the result in the database.

## How It Works

1. **User Interface**: 
   - Users interact with the web interface to start and stop voice recording.
   - The recorded voice is converted to text and sent to the server.

2. **Server-Side Processing**:
   - The PHP script receives the text data from the web interface.
   - The script determines whether the text contains commands like "open" or "close".
   - It then inserts the command into the database.

3. **Database Storage**:
   - The command (`1` for "open" and `0` for "close") is stored in a MySQL database table named `speech_to_text_data`.

## Code and Configuration

### Web Interface (HTML + JavaScript)

The web interface records voice input and sends it to the server using JavaScript. 

### PHP Script (`speech_to_text.php`)

This script processes the incoming text, determines the command, and saves it to the database.

### Database Configuration

Ensure your database is set up with a table named `speech_to_text_data` to store the text and commands.

## Example Usage

- **Voice Command "open"**: Converts to text, processed, and stored as `1` in the database.
- **Voice Command "close"**: Converts to text, processed, and stored as `0` in the database.

## Troubleshooting

- **Database Connection Issues**: Check database credentials and connection settings.
- **Text Conversion Issues**: Ensure the speech-to-text interface is correctly recording and sending data.
