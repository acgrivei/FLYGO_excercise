## HOW TO SETUP THE APP

* In the base path run ```./vendor/bin/sail up```. This will start the web and mysql containers.

* Enter the web container (using CLI ```docker exec -it web_server bash```) and run ```php artisan migrate```.

## HOW TO GET DATA

Call ```localhost/api/crosswords/date/{date}``` to get the crosswords for a given date
Call ```localhost/api/crosswords/all``` to get all of the crosswords

## ANSWERS TO QUESTIONS
* 1 Which infrastructure resources you would need to run the utility daily in an automated fashion?
* 2 How would you deploy your code to the infrastructure?
* 3 How would you automate your deployments so that each push to your default branch will trigger a deployment to your production environment
* 4 Is it possible to get the data about past crosswords? If yes, how would you build a solution to get all the historical crosswords data?