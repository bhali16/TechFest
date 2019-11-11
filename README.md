# TechFest
TechFest19 Web and Mobile App Development Competition - CUI Attock

# Git Configuration
Download git Client : https://git-scm.com/

```
git config --global user.name "John Doe"
git config --global user.email johndoe@example.com
```

# How to initialize and Push your Project to TechFest Repo

### 1. Initialize the project directory as a Git repository.
```
git init
```

### 2. Add the files in your new local project repository.
```
git add .
```

### 3. Commit the files that you’ve in your Project (Local) repository.
```
git commit -m "Your Commit Description"
```

### 4. Copy the https URL of TechFest repo.
In the Command prompt, add the URL (https://github.com/bhali16/TechFest.git) for the remote repository where your local repository (Project) will be pushed.
```
git remote add origin https://github.com/bhali16/TechFest.git
git remote -v
```

### 5. Push the changes in your branch
Unique Branch Name Will be Provide by Organizer to every participant. 
```
git push origin localBranchName:YourBranchName
```

