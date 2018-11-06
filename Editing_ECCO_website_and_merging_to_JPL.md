## How to edit the ECCO website on the public github

**Step 1**, clone the _ECCO-GROUP_ copy of the website from the public github

```
git clone https://github.com/ECCO-GROUP/ECCO-website.git ECCO-website-GITHUB
```

**Step 2**, make edits to this local copy of the web site.  For example,

```
cd ECCO-website-GITHUB/
vim README.md 
git add README.md 
```

**Step 3**, commit changes to the local website copy and push to the ECCO-GROUP copy 

```
git commit -m "Readme edit test"
git push origin master
```  

## How to integrate ECCO website changes from the public github to the JPL github
using information from [this page](https://stackoverflow.com/questions/10065526/github-how-to-make-a-fork-of-public-repository-private)

Note: _This only can be done from within the lab's network_
 
**Step 4**, clone the JPL copy of the website into a different directory

```
git clone https://github.jpl.nasa.gov/18x/ecco.git ECCO-website-JPL
```
  
**Step 5**, Add a new remote called _ecco-website-public-github-YOURNAME_ here within your cloned ECCO-website-JPL repository.  Remote repositories are versions of your project that are hosted on the Internet or network somewhere. The 'remote add' command allows you to specify a shortname to a repository that you can reference easily, ```run git remote add <shortname> <url>```

```
cd ECCO-website-JPL/
git remote add ecco-website-public-github-YOURNAME https://github.com/ECCO-GROUP/ECCO-website.git
```

**Step 6**, Label this current working copy of the website _pull_request_YOURNAME_ because we will make a pull request to the JPL respository for a version of the website that incorporates the edits made on the public github repository.

```
git checkout -b pull_request_YOURNAME 
```

**Step 7**,Fetch from the public github repository and integrate those changes with the current working copy of the website

```
git pull ecco-website-public-github-YOURNAME master
```

**Step 8**, now that the local copy is updated, push the changes to 'origin' (JPL) with the name _pull_request_YOURNAME_

```
git push origin pull_request_YOURNAME
```  

**Step 9**, Someone at JPL merges the _pull_request_YOURNAME_ with the JPL github website _development_ branch and tests the web page rendering on the ECCO-DEVEL server.

**Step 10**, Someone at JPL merges the new _development_ branch with the _master_ branch, or rejects the changes and tells the author why the changes were rejected.


**Step 11**, Ou deploys to server
