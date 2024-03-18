const express = require('express');
const mysql = require('mysql');

const app = express();

// Create a connection to your MySQL database
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'password',
    database: 'restaurant'
});

// Connect to the database
db.connect((err) => {
    if (err) throw err;
    console.log('Connected to the database');
});

// Define a route for your homepage
app.get('/', (req, res) => {
    res.send('Welcome to the restaurant website!');
});

// Start the server
app.listen(3000, () => {
    console.log('Server started on port 3000');
});
