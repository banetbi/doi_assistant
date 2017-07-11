#DOI Assistant
This web application is written to assist library staff in processing ProQuest ETD submissions, creating metadata for batch uploading to Digital Commons and assigning DOIs to both ETD submissions and batch spreadsheets. This is very early work and requires web server/PHP knowledge to get running.

To Install:
1. Clone the repo into your web root
2. Copy the .env.example file to .env
3. Update the .env file with your configuration options
4. Run composer update to install required libraries
5. Run php artisan migrate to create the database tables
6. Install supervisor to run the queue. Instructions at https://laravel.com/docs/5.4/queues#supervisor-configuration

To Process ProQuest Submissions:
1. In the web directory run php artisan etds:discover, which will find any newly submitted ETDs
2. Run php artisan etds:generate-batch-upload, which will generate a Digital Commons batch upload file with DOIs assigned. This file will be emailed to the email specified in the config.
