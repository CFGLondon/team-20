##Documentation
Please specify the smses sent to the server number in the following format:
Your location / Your disability / Your problem faced / Your name (optional)
#smsin.php
The meat of the program, does all the interfacing with the twilio API. Twilio API submits a query and it is parsed by this php code that calls all other subroutines.

#stringparse.php
This php file contains all subroutines used to parse strings into outputs for smsin

#mapsclass.php
This php file contains the maps class description for smsin to call on Google APIs to obtain locations.
