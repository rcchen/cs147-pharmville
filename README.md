CS147 Project (Fall 2012)
================
This is the main repository for the CS147 project.

Getting things up and running
----------------
1. Clone the repo by running the following command in the directory you want to keep the project file in
	`git clone https://github.com/rcchen/cs147-pharmville.git`
2. Do your edits and things
	`git add .`
	`git commit -m "Insert message here"`
	`git push`
3. If you have conflicts when pushing, send out a message to the group so we can figure out what things should be merged. Auto-merge should be sufficient in most cases though.

Framework of application (in-progress)
----------------
* /css - stylesheets, SCSS, SASS
* /img - any images being used. Be sure to compress to JPG
* /js - Javascript dependencies cached locally
* config.php - DB connection information

Tips and guidelines
----------------
* Be sure to put things in the proper locations. This will make life a lot easier in the long run where things are easier to clean up.
* When defining file paths, make sure they are all relative paths (eg. img/background.jpg as opposed to foobar.com/img/background.jpg) so things will not break if the main directory is moved around
* Avoid redundant calls. For example, there is no need to include_once('config.php') on every page if you are already doing include_once('header.php') all over the place to have consistent headers. Instead, call include_once('config.php') at the top of include_once('header.php'). This way if something changes there is only once place to change, not eleven.
