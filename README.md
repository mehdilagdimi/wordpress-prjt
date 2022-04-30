# wordpress-prjt

Wordpress Installation process : 

    Download and unzip the WordPress package if you haven’t already.
    
    Create a database for WordPress on your web server, as well as a MySQL (or MariaDB) user who has all privileges for accessing and modifying it.
    
    (Optional) Find and rename wp-config-sample.php to wp-config.php, then edit the file (see Editing wp-config.php) and add your database information.
    
    Note: If you are not comfortable with renaming files, step 3 is optional and you can skip it as the install program will create the wp-config.php file for you.
    
    Upload the WordPress files to the desired location on your web server:
    
    If you want to integrate WordPress into the root of your domain (e.g. http://example.com/), move or upload all contents of the unzipped WordPress directory (excluding the WordPress directory itself) into the root directory of your web server.
    
    If you want to have your WordPress installation in its own subdirectory on your website (e.g. http://example.com/blog/), create the blog directory on your server and upload the contents of the unzipped WordPress package to the directory via FTP.
    
    Note: If your FTP client has an option to convert file names to lower case, make sure it’s disabled.
    
    Run the WordPress installation script by accessing the URL in a web browser. This should be the URL where you uploaded the WordPress files.
    
    If you installed WordPress in the root directory, you should visit: http://example.com/
    
    If you installed WordPress in its own subdirectory called blog, for example, you should visit: http://example.com/blog/
