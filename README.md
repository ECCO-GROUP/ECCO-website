ECCO
===

#### Estimating the Circulation and Climate of the Ocean (ECCO)

This repository houses the code for the [ECCO Website](https://ecco.jpl.nasa.gov)


## Contact Information
Title | Name | Office Number | Email
----- | ---- | ------------- | -----
Site Owner | [Ian Fenty](https://gateway.jpl.nasa.gov/Person.aspx?accountname=JPL\ifenty) | (818) 393-1506) | Ian.Fenty@jpl.nasa.gov
Site Owner | [Ichiro Fukumori](https://gateway.jpl.nasa.gov/Person.aspx?accountname=JPL\fukumori) | (818) 354-6965 | Ichiro.Fukumori@jpl.nasa.gov
Server Admin | [Ou Wang](https://gateway.jpl.nasa.gov/Person.aspx?accountname=JPL\owang) | (818) 393-3204 | Ou.Wang@jpl.nasa.gov
 

## Technical Information

### System Environments

Environment | Platform | URL | System Admin (SA)
----------- | -------- | --- | -----------------
Development | [Nextgen](https://webhosting.jpl.nasa.gov) | [https://ecco-dev.jpl.nasa.gov](https://ecco-dev.jpl.nasa.gov) | [jplit-web@jpl.nasa.gov](jplit-web@jpl.nasa.gov)
Production | Custom Server | [https://ecco.jpl.nasa.gov](https://ecco.jpl.nasa.gov) | [Ou Wang](mailto:Ou.Wang@jpl.nasa.gov)

### Git Branching Model

Branch and merge often. Keeping things organized in your Github repository also helps keep your website equally organized and stable. 

This project follows the successful branching model described here: [http://nvie.com/posts/a-successful-git-branching-model/](http://nvie.com/posts/a-successful-git-branching-model/)

### Git Branches

Branch | Description
------ | -----------
| development | This is set up as the default branch for the repo. All changes should be made in this branch or on branches derived from this branch.
master | This branch is treated as the production code. Always strive to keep this branch pristine by testing code in the development branch to remove bugs _before_ merging the code from the development branch into master.

## Development Workflow

1. Make updates or corrections to the _development_ branch.
2. Deploy code in the _development_ branch to the development environment for review.
3. Test [development website](http://ecco-dev.jpl.nasa.gov/), repeat steps 1 and 2 as necessary.
4. When testing is complete and ready for production release, merge the _development_ branch into _master_ branch via a [pull request](https://github.jpl.nasa.gov/18x/ecco/pulls).
5. Create a [release](https://github.jpl.nasa.gov/18x/ecco/releases) for the master branch so that the version of code that is being deployed to production is tagged in case it needs to be referenced in the future. There are notes at the bottom of this page that detail creating a release.
6. Deploy code in the _master_ branch to the production environment.
7. Test the [production website](http://ecco.jpl.nasa.gov/) to ensure everything is working as expected. If something is broken, start at step 1.

## Deployment Notes

Deploying to the development or production environment can be accomplished by following some simple steps:

#### Deployment Preparation:

1. Download a .ZIP of the repository via Github.
2. Unpack the .ZIP file
3. Some files in the ZIP file do not need to be published. Delete the following files and folders, if they exist, from the files that were unpacked from the ZIP file:
	1. .git
	2. .gitattributes
	3. .gitignore
	4. README.md
4. Now that the files are cleaned up, we can deploy the files and folders to the development or production environment as needed:

#### Deploying to _Development_ environment:

1. Map a network drive to the Development Hosting acount. On Mac, using Finder, using Go, Connect to Server, map a drive using `smb://websites/ecco-dev`. On windows, simply create a network drive by mapping `\\websites\ecco-dev`. Once connected, deploy the files prepared above to the `www` folder.

#### Deploying to _Production_ environment:

1. We need merge the "development" branch code with the "master" branch because we treat "master" as our production code"
2. Create a new [pull request](https://github.jpl.nasa.gov/18x/ecco/pulls) with the base set to "master" and the compare set to "development"

## Other helpful information

#### Creating a pull request

When creating a pull request, the base is the branch that you're merging to, and compare is the branch that contains the code you want to merge. So to merge development into master, set the base to master, and the compare to development. After the pull request is created, you'll have to complete the pull request to finalize the merging of code to master.

More information about using pull requests can be found in Githubs documentation: [https://help.github.com/articles/about-pull-requests/](https://help.github.com/articles/about-pull-requests/)

#### Creating a release for Production

Now that you're ready to publish to production, let's start by creating a "release" in github to mark a point in time in the repository that we released code to prouduction.
1. Go to the [ECCO Releases page](https://github.jpl.nasa.gov/18x/ecco/releases) and note the current version number. For example, it may be something like "v1.10"
2. Click "Draft new release" which will take you here: [https://github.jpl.nasa.gov/18x/ecco/releases/new](https://github.jpl.nasa.gov/18x/ecco/releases/new)
3. Enter a version number for the new release. We increment the second number to describe content updates, bug fixes, addition of files, etc.. We increment the first number for major site updates, e.g. a full site redesign. So if the current version is v1.10, the next version number could be v1.11. It's just a label, don't need to overthink this.
4. Be sure that "master" 

More information about creating releases can be found in Github's documentation: [https://help.github.com/articles/creating-releases/](https://help.github.com/articles/creating-releases/)
