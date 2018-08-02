# BACS 350 - Class Exercises

## Files for Exercises

### Web root

    index.php - Home page


### 1 - PHP Server

Build simple PHP hosting at Blue host; create profile page

    index.html - Verify hosting
    index.php - PHP script
    styles.css - CSS styles


### 2 - Shared Page Structure

Create header and footer code to be used in every file

    index.php - PHP script
    header.php - Start of page
    footer.php - End of page
    styles.css - CSS styles

Copy header, footer, styles to web-root

    Page Content

        php
            require 'header.php'
        main
            h1
            p
        php
            require 'header.php'

    Steps:
        1 Create home.html, 02/index.php
        2 Extract header and footer
        3 Create 02/index.php
        4 Use header and footer in index.php


### 3 - Subscriber List

Create header and footer code to be used in every file

    index.php - PHP script for form
    register.php - Confirm registration

    index.php
        php
            require 'header.php'
        main
            h1 Sign Up
            form action=name.php method=post
                div id=data
                    label name:
                    input type=text 
                div id=buttons
                    input type=sumbit value=register
        php
            require 'header.php'

    register.php
        php
            require 'header.php'
        main
            h1 Registered
            label name:
            span php echo $name

        php
            require 'header.php'


    Steps:
        1 Post name to view
        2 Add first name, last name
        3 Show full name
        4 Add email


### 4 - Exercise List

    index.php - PHP script for exercises
    exercises.php - Table of exercise links
    test.php - Testing page


### 5 - Get and Post Data

    index.php - PHP script for exercises
    register.php - Confirm registration
    test.php - Testing page


### 6 - Product Discount

    index.php - Discount form
    discount.php - Discount display


### 7 - MVC Controller

    index.php - Discount Controller
    discount_form.php - Discount form
    discount_view.php - Discount display


