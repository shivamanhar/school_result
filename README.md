# school_result
Project Name: School Result / Board Result

Descripation : This application is school or small collage project use. MCA or BE.
                (1) It is one admin login where enter student result or mark sheet. update and print out in pdf formate:
                (2) Student find result through roll number in online.

How to install 
Step - 1:

	Create one data base in MySql and import board_result.sql file.

Step - 2:

Go to board_result>application>config here find a config.php file and change somting.

Line number-17

	$config['base_url']	= 'http://localhost/type_here_folder_name';

Make new folder so change new name "type_here_folder_name".

Close this file 

Step - 3:

Go to board_result>application>config here find a database.php file and change somting.
Line number - 51

	$db['default']['hostname'] = 'localhost';
	
	$db['default']['username'] = 'root';
	
	$db['default']['password'] = '';
	
	$db['default']['database'] = 'board_result';
	

Fist change Username "root" type your username and database name in "board_result" if same name so don't change it.
and finaly if create any password so change password name.

Step - 4

Go to board_result->.httaccess file change this file.

Find this line /

		<IfModule mod_rewrite.c>
    		RewriteEngine On
    		RewriteBase /board_result/
    
    and change "board_result" this is a folder name where save you project:

If you have any problem in deploy this application. you can contact me:

My Email : shivamanhar@gmail.com
