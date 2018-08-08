# ECCO
===

####Estimating the Circulation and Climate of the Ocean (ECCO)

This repository houses the code for the [ECCO Website](https://ecco.jpl.nasa.gov)


## Contact Information
Title | Name | Office Number | Email
----- | ---- | ------------- | -----
Site Owner | Ian Fenty | (818) 393-1506) | Ian.Fenty@jpl.nasa.gov
Site Owner | Ichiro Fukumori | (818) 354-6965 | Ichiro.Fukumori@jpl.nasa.gov
 | Ou Wang | (818) 393-3204 | Ou.Wang@jpl.nasa.gov
 

## Technical Information

### System Environments

Environment | Platform | URL | System Admin (SA)
----------- | -------- | --- | -----------------
Development | [Nextgen](https://webhosting.jpl.nasa.gov) | [https://ecco-dev.jpl.nasa.gov](https://ecco-dev.jpl.nasa.gov) | [jplit-web@jpl.nasa.gov](jplit-web@jpl.nasa.gov)
Production | Private VM | [https://ecco.jpl.nasa.gov](https://ecco.jpl.nasa.gov) | [Ou Wang](mailto:Ou.Wang@jpl.nasa.gov)

### Deployment Information

Deploying to the development or production environment can be accomplished by following the following steps:

1. Download a .ZIP of the repository via Github.
2. Unpack the .ZIP file
3. Some files in the ZIP file do not belong on the development and production sites.
	4. Delete the following files and folders, if they exist, from the ZIP file that was unpacked in step 2:
     5. .git
	  4. .gitattributes
	  5. .gitignore
	  6. README.md
8. Now that the files are cleaned up, deploy the files and folders to either the development or production environment as needed.

### Git Notes

Branch and merge often. Keeping things organized in your Github repository also helps keep your website equally organized and stable. 

This project follows the successful branching model described here: [http://nvie.com/posts/a-successful-git-branching-model/](http://nvie.com/posts/a-successful-git-branching-model/)