#Requirements:
Linux Operating System , Apache2,MySQL and PHP ( i.e. LAMP)
##Installations:
###Commands to install Apache2 :
We can install Apache easily using Ubuntu's package manager, apt. 
we can get started by typing these commands:  
**sudo apt-get update  
sudo apt-get install apache2**  
Afterwards, your web server is installed.
You can do a spot check right away to verify that everything went as planned by visiting your server's public IP address in your web browser or just type 127.0.0.1 i.e. localhost in your browser  
###Commands to install MySQL:  
To install MySQL,run this command :  
**sudo apt-get install mysql-server php5-mysql**   
During the installation, your server will ask you to select and confirm a password for the MySQL "root" user.  
We need to tell MySQL to create its database directory structure where it will store its information. You can do this by typing:  
**sudo mysql_install_db**  
Now database is installed
###To install PHP:  
**sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt**  
This should install PHP without any problems.  
Now **LAMP** is installed.  
##Database creation:  
You have 1st create database you want to use,run the following command to open mysql terminal  
**mysql -u root -p**  
It will prompt for password.  
After successful login run the DDL query *CREATE Database database_name*  
Your database will be created.  
###How to run :  
Copy all the files to the path ***/var/www/html***  
Then restart Apache Server by this command :**sudo service apache2 restart**  
When you type 127.0.0.1 or your public ip it should show the index.html by default.
##Database configuration :  
There is a **config.ini** file , please set your *hostname,database name user name & password* there  



