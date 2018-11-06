## Mirroring a repository that contains Git Large File Storage objects
by Ian Fenty

_using information from [this page](https://help.github.com/articles/duplicating-a-repository/)_

Open Terminal.

Create a bare clone of the repository. Replace the example username with the name of the person or organization who owns the repository, and replace the example repository name with the name of the repository you'd like to duplicate.

```
git clone --bare https://github.jpl.nasa.gov/18x/ecco.git
````

Navigate to the repository you just cloned.

```
cd ecco.git
```

Pull in the repository's Git Large File Storage objects.

```
git lfs fetch --all
```

Mirror-push to the new repository.

```
git push --mirror https://github.com/ECCO-GROUP/ECCO-website.git
```

Push the repository's Git Large File Storage objects to your mirror.

```
git lfs push --all https://github.com/ECCO-GROUP/ECCO-website.git
```

Remove the temporary local repository you created in step 1.

```
cd ..
rm -fr ecco.git/
```
