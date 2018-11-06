ECCO-Website
============

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

### Preliminary: 
1. If you are going make changes to the _development_ branch by editing files on a local machine (not the JPL github website), you must first update your local copy of the _development_ branch.  To do this you have two options:
	1. From the "Github Desktop" program, make sure that the 'current branch' option in the toolbar is set to _development_ and then click on the 'fetch origin' button immediately to the right.  
 	1. From the command line, navigate to the head directory of the _development_ repository and type 'git pull'.

### Edit/Deploy/Commit/Push/Merge: 

1. Make updates or corrections to the _development_ branch, or a branch derived from development that has been merged with development.
2. Deploy code in the _development_ branch to the development environment for review.
3. Test [development website](http://ecco-dev.jpl.nasa.gov/), repeat steps 1 and 2 as necessary.
4. When testing is complete and ready for production release, merge the _development_ branch into the _master_ branch via a [pull request](https://github.jpl.nasa.gov/18x/ecco/pulls).
	1. Important: verify that the _development_ and _master_ branches are identical after the merge.  To do that, begin another pull request and you should see "There isn’t anything to compare. master is up to date with all commits from development. Try switching the base for your comparison."
5. Create a [release](https://github.jpl.nasa.gov/18x/ecco/releases) for the master branch so that the version of code that is being deployed to production is tagged in case it needs to be referenced in the future. There are notes at the bottom of this page that detail creating a release.
6. Deploy code in the _master_ branch to the production environment.
7. Test the [production website](http://ecco.jpl.nasa.gov/) to ensure everything is working as expected. If something is broken, start at step 1.

## Deployment Notes

Deploying to the development or production environment can be accomplished by following some simple steps:

### Deployment Preparation:

These instructions detail how you attain a copy of the website files by downloading a .ZIP from Github for deployment to either the development or production environment.

**NOTE: If you have the cloned the files from this repo onto your local computer, there is _no_ need to download the ZIP file, but you _MUST_ ensure that you have the correct codebase for the environment that you are deploying to. Namely, if you are deploying to the development environment, you must have the _development_ branch checked out on your computer. And if you are deploying to the production environment, the _master_ branch would need to be checked out on your computer.** Refer to the Github [help site](https://help.github.com/) on how to clone and checkout branches.

**Downloading ZIP file:**

1. Within Github, select the appropriate branch for the environment that you are deploying to:
	1. Select ***development*** if you are deploying to the development environment
	2. Select ***master*** if you are deploying to the production environment
2. Download the .ZIP file of the website code to your computer.
2. Unpack the .ZIP file.
8. Deploy the files and folders to the development or production environment using the instructions below.

### Environment specific deployment instructions:

#### Deploying to _Development_ environment:

Map a network drive to the Development Hosting acount:

  1. On Mac, using Finder, within the menu bar navigate to Go &rarr; Connect to Server, map a drive using:

		smb://websites/ecco-dev
		
  2. On Windows, using File Explorer, create a network drive by mapping to:

		\\websites\ecco-dev

Once connected, deploy the development files, prepared using the instructions noted earlier in this document, to the `www` folder in the hosting account

#### Deploying to _Production_ environment:

The production ECCO website is hosted on a custom server. Send the prepared files to Ou Wang via [LFT](https://lft.jpl.nasa.gov) so that he can install them on the production server.

#### Post-deployment clean up instructions:

Some files in our code repository do not need to be published to the hosting platforms as they are only used for development purposes. Delete the following files and folders from the hosting platform, if they exist:

1. .git
2. .gitattributes
3. .gitignore
4. README.md

## Other helpful information

#### Creating a pull request

When creating a pull request, the base is the branch that you're merging to, and compare is the branch that contains the code you want to merge. So to merge development into master, set the base to master, and the compare to development. After the pull request is created, you'll have to complete the pull request to finalize the merging of code to master.

More information about using pull requests can be found in Githubs documentation: [https://help.github.com/articles/about-pull-requests/](https://help.github.com/articles/about-pull-requests/)

#### Creating a release for Production

Now that you're ready to publish some code to production, let's start by creating a "release" in github to mark a point in time in the repository that we released code to one of our environments:

1. Go to the [ECCO Releases page](https://github.jpl.nasa.gov/18x/ecco/releases) and note the current version number. For example, it may be something like "v1.10"
2. Click "Draft new release" which will take you here: [https://github.jpl.nasa.gov/18x/ecco/releases/new](https://github.jpl.nasa.gov/18x/ecco/releases/new)
3. Enter a new version number for the new release. We increment the second number of content updates, bug fixes, items. We increment the first number for major site updates like a site redesign. So if the current version is v1.10, the next version number could be v1.11. It's just a label, don't need to overthink this.
4. Be sure that "master" is selected for the target branch.
5. Fill in a title and describe the release.
6. Click "Publish release" to create the release.

**If you want to mark a release for the development environment, simply choose the _development_ branch instead and choose a version number accordingly**

More information about creating releases can be found in Github's documentation: [https://help.github.com/articles/creating-releases/](https://help.github.com/articles/creating-releases/)
