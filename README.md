# DCMS Readme

installation guide :

1. execute query/dcms_basic_db.sql on mysql
2. change database setting on application/config/database.php
3. change short_url setting on application/config/short_url.php
4. change short_url setting on media/js/v1.1/thekamarel.js
5. change mail setting on application/config/mail_config.php
6. change fb api and fb secret on application/config/facebook.php
7. change twitter connection on application/config/twitter.php
8. change .htaccess
9. run cronjob for following url :
  * cronjob/FacebookStreamOwnPost      (2 mins)
  * cronjob/FacebookStreamFeed         (2 mins)
  * cronjob/NewFacebookConversation    (2 mins)
  * cronjob/TwitterMentions            (2 mins)
  * cronjob/TwitterHomeFeed            (2 mins)
  * cronjob/TwitterUserTimeline        (2 mins)
  * cronjob/TwitterDirectMessage       (2 mins)
  * cronjob/search/indexing            (1 hour)
  * cronjob/GenerateActivity           (2 mins)
  * cronjob/SendScheduledPost          (2 mins)
10. run elasticsearch service
11. go to dcms site. login with : 
  * username: robbi
  * password: robbi

Have fun!
