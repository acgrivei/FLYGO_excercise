## HOW TO SETUP THE APP

* In the base path run ```./vendor/bin/sail up```. This will start the web and mysql containers.
***You can also just run the docker-compose.yaml script.***

* Enter the web container (using CLI ```docker exec -it web_server bash```) and run ```php artisan migrate```.

## WHERE TO LOOK
* I've created a migration to store the data in ```database/migrations/2023_08_07_134150_create_crosswords_table.php```
* I've added api routes in ```routes/api.php```
* I've created a model ```app\Models\Crossword.php``` which defines the structure of the data
* I've build a controller to get the data from the DB in ```app\Http\CrosswordController.php```

## HOW TO GET DATA

* Call ```localhost/api/crosswords/date/{date}``` to get the crosswords for a given date
* Call ```localhost/api/crosswords/all``` to get all of the crosswords

## ANSWERS TO QUESTIONS
* 1 Which infrastructure resources you would need to run the utility daily in an automated fashion?
**Answer:** On top of the infrastructure needed to run the docker containers, in order to automate the utility,
a scheduler such as cron or Artisan Scheduler has to be configured and deployed.

* 2 How would you deploy your code to the infrastructure?
**Answer:** Currently we are using Portainer to create service stacks. This automatically pulls builds from GitLab and
deploys them to production. It also takes care of any needed migrations.

* 3 How would you automate your deployments so that each push to your default branch will trigger a deployment to
your production environment
**Answer:** I would set up a CI pipeline that automatically builds and tests the code whenever changes are pushed to the
repository. Currently we are using GitLab CI/CD, but also other tools could be used to automate this process.

* 4 Is it possible to get the data about past crosswords? If yes, how would you build a solution to get all the
historical crosswords data?
**Answer:** I have already implemented it. I have added a mysql database.
The ```localhost/api/crosswords/all``` call will get all of the crosswords from the DB.

## PS
* The app could have been greatly simplified if required but I have chosen to use Laravel Sail to do a quick setup
for the exercise.
* There could be some permissions issues in the project, as I built the app on fast forward, so just go wild with them
if it's not working as it should.