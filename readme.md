# Jobs markup demo

A static HTML files for jobs website.

## Installation

Execute in the following order:

- install XAMPP

XAMPP instalation link: https://www.ionos.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/

- copy application files to *XAMPP install dir*/htdocs/jobs

- run XAMPP Control panel - located in *XAMPP install dir*/xampp-control.exe

- run Apache and MySQL from XAMPP Control Panel

Click the start buttons on the corresponding rows.
Wait until the module names' background color turns green.
If the background color remains yellow or red, you can check the *Logs* for the details.

- restore the application database

Open a browser window and navigate to *http://localhost/phpmyadmin/index.php*.
Click *Import*. Click *Choose File* and navigate to *XAMPP install dir*/htdocs/jobs/db to select the database file (*jobsdb.sql*).
Leave all default options and click *Execute*. Wait for the script to complete.

- open a new browser window and navigate to *http://localhost/jobs/index.php* to access the user application

- open a new browser window and navigate to *http://localhost/jobs/edits.php* to access the admin application
