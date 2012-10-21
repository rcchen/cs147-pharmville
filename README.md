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
4. Remember to call 'git pull' before committing so you always have the latest version of the repo. In fact, it is a good idea to do this before you start working on something so you don't end up reimplementing a function someone has written already.

Framework of application (in-progress)
----------------
* /css - stylesheets, SCSS, SASS
* /img - any images being used. Be sure to compress to JPG
* /js - Javascript dependencies cached locally
* config.php - DB connection information

Random Tools
----------------
* /iPhoneApp - this directory contains an XCode project that is set up to load a UIWebView that is pointing to the location of our mobile application (currently http://corgiland.com/cs147). Running the application will launch an iPhone simulator that is prepped for the web application already, so you can see how this will look on the phone without the status bar and other browser stuff getting in the way. Can't push it to a physical device though :|

Tips and guidelines
----------------
* Be sure to put things in the proper locations. This will make life a lot easier in the long run where things are easier to clean up.
* When defining file paths, make sure they are all relative paths (eg. img/background.jpg as opposed to foobar.com/img/background.jpg) so things will not break if the main directory is moved around
* Avoid redundant calls. For example, there is no need to include_once('config.php') on every page if you are already doing include_once('header.php') all over the place to have consistent headers. Instead, call include_once('config.php') at the top of include_once('header.php'). This way if something changes there is only once place to change, not eleven.
* Issue tracking is handled by Github. Just open up issues there when they occur. We might end up using that as a to-do scheduler as well.
