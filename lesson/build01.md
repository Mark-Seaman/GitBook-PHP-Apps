# Lesson #1 - Setup PHP Server

## Build

### Step 1 - Make a directory to save your code
* From Windows Explorer create a new folder
* New Folder: Documents/BACS_350/web-root
* From Windows start menu type Brackets
* Save your page in Documents/BACS_350/web-root/index.html

```
<h1>My Home Page</h1>
<p>I am up and running</p>
```

### Step 2 - Create exercise file
* Create a new folder Documents/BACS_350/web-root/exercise
* Create a simple web page Documents/BACS_350/web-root/exercise/ex01.php

```
<h1>Exercise #1</h1>
<p>This is a simple php page that contains HTML.</p>
```

### Step 3 - Test your page
* Double-click on Documents/BACS_350/web-root/index.html
* Your page should look correct

### Step 4 - Add some dynamic logic
* Create a line of text within the HTML

```
<?php
    echo 'My name is Enigo Montoya'
   ?>
```

### Step 5 - Setup a server
* Go to https://bluehost.com
* Sign up for an account (cost is $3.75/month)
* Test your new server by visiting the webpage

### Step 6 - Push files to server
* Run FileZilla from Windows start menu
* Configure FileZilla to connect with new server
* Send file index.html to remote server
* Test by going to the server page URL
