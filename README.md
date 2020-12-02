# libera
libera, a website for a Philippines-based laundry delivery service--created for HackFest 2020 online hackathon.

## Website link
http://liberaph.club/

## Installation
1. Install [XAMPP](https://www.apachefriends.org/index.html)
2. In XAMPP Control Panel, start Apache and MySql
3. Goto browser (any browser) and type 'localhost/phpmyadmin'
4. On the left side, click new
5. Enter 'maps' in the 'Database name' textbox
6. Press Create
7. Making sure that you are in the maps database, look for Import between Operations and Export
5. Click import, then press choose file
6. Select the 'maps.sql' from the download folder and press Go
7. Move 'libera-main' folder to 'C:\xampp\htdocs'
8. Goto browser (any browser) and type 'localhost/libera-main/index.php'
9. You're in the Home page! Feel free to test it. (also dont forget to sign in) :)

## Issues
When starting Apache service in XAMPP, you might get a problem stating `Port 80 in use by "Unable to open process" with PID 4!`.

To fix this, simply set Apache to listen on a different port. This can be done by clicking on the "Config" button on the same line as the "Apache" module, select the "httpd.conf" file in the dropdown, then change the "Listen 80" line to "Listen 8080". Save the file and close it.

Now it avoids Port 80 and uses Port 8080 instead without issue. **The only additional thing you need to do is make sure to put localhost:8080 in the browser (instead of just localhost)** so the browser knows to look on Port 8080.

Solution taken from [Stack Overflow](https://stackoverflow.com/questions/23317372/xampp-port-80-in-use-by-unable-to-open-process-with-pid-4).

## Project Status
Ongoing

## Contributors
**Team ITX**
  - Horeb Barriga
  - Edwin Bartlett
  - Jan Anne Ebon
  - Dan Jeryll Almaden
