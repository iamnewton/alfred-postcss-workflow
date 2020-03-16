# How to Contribute

:bangbang: This project has a [Code of Conduct](./CODE_OF_CONDUCT.md). By interacting with this repository, organization, and/or community you agree to abide by its terms.

Third-party patches are essential for keeping open-source software great.  In the spirit of keeping it as simple as possible to contribute changes that get things working in your environment, here are a few guidelines that contributors should follow.  As [Nicholas Gallagher](http://github.com/necolas/normalize.css/blob/master/CONTRIBUTING.md) put it in his contributing guidelines:

> Following these guidelines helps to communicate that you respect the time of the developers managing and developing […]. In return, they should reciprocate that respect in addressing your issue or assessing your patches and features.

## How do I… <a name="toc"></a>

1. [Get Started](#get-started)
2. [Create an Issue](#create-a-good-issue)
3. [Create a Feature Request](#creating-a-good-feature-request)
4. [Contribute Documentation](#contributing-to-documentation)
5. [Create a Pull Request](#create-a-pull-request)
6. [Additional Resources](#additional-resources)

## Get Started

1. Make sure you have a GitHub account.
2. Please ask the [CODEOWNERS](./CODEOWNERS) before making significant changes.  I'd hate for you to put in a lot of work for something that doesn't align with the vision of this project.
3. Search on Github within the repo for the issue or Pull Request. This means you have to read through the issue(s) in order to determine if your particular issue has already been created. Don't forget to look through the closed ones as well.
4. If the issue has not been fixed then try to reproduce the issue in a fresh clone of the repository off the master branch. Read below on [how to set up your environment](#create-a-pull-request).
5. Create a [reduced test case](http://css-tricks.com/reduced-test-cases/) as outlined by Chris Coyier of [CSS Tricks](http://css-tricks.com/).  Link to the [Code Pen](http://codepen.io), [JS Bin](http://jsbin.com), or whatever you use, as long as its publicly accessible.
6. Read our [branching strategy](#branching-strategy), [commit conventions](#commit-conventions) below for tips on how to contribute. We won't accept any pull request that doesn't adhere, so be forewarned.

If this seems like a lot or you aren't able to do all this setup, you might also be able to [edit the files directly](https://help.github.com/articles/editing-files-in-another-user-s-repository/) without having to do any of this setup. Yes, [even code](#create-a-pull-request).

## Create a Good Issue

The easiest way to contribute is to help improve the library by finding bugs within the system. Bugs are small, testable and demonstrate problems caused by the code. A good report will be able to easily outline the problem and provide steps to recreate. If you're going to submit a bug, please verify you've done everything on the list above. Don't be afraid to go into detail; no one ever said too much detail was a problem, and if they did, it wasn't us.

### Filling Out a Ticket

Now its time to submit a ticket. Bug reports should be thorough and not leave anyone wondering or questioning what you were thinking. No one should have to ask you anything or require further clarification. When creating a ticket, use the [Bug Report template](/issues/new?template=bug_report.md) to populate a lot of the information required. Below is a brief description of the parts of a bug report:

* **title** (required): should be concise and descriptive. Anyone should be able to know what you're issue is at a glance and doesn't need the complete issue in it; try to keep it under 80 characters.
* **description**: create a short summary of what is happening or what you're seeing.
* **to reproduce** (required): the steps you followed to find this bug. This will make life so much easier to help fix the issue. Don't make any assumptions that someone will be on the same page or do the same thing as you. Nice and direct steps of what happened, what you clicked on can ease the time for us to debug.
* **expected behavior** (required): let us know what you were expecting to happen. This may or may not align with the project, so be very detailed with this part; the more detail the better.
* **screenshots**: a picture is worth a thousand words.
* **device details** (required): for most of the information you can look at <https://www.whatsmybrowser.org>; for others check out below for how to find them.
    * **OS & version**: Always include the OS(es) and version(s) where you found the issue. If, for example its Mavericks, you can put OSX 10.9.1.
    * **Browser(s) Version(s)**: Which browsers have you tested this in? What version are you running?
    * **Node Version(s)**: Not always required, but if there is something erring in the console, this is quite helpful.
    * **NPM Version(s)**: Not always required, but if there is something erring in the console, this is quite helpful.
    * **Browser Resolution**: Include resolutions as more of a range rather than an absolute. For example, < 768px or >= 768px && <= 1024th
    * **Library Version**: Required; please include which version of this library you're using

### Example Ticket

Follow the example below and you'll be on the right path. Let's assume that a you're trying build a new page on your application and the icons aren't showing up:

```markdown
Title: Icons are not showing up

**Describe the bug**

Developing my application and when it loads up
the browser, I don't see any of the SVG icons loading up.

**To Reproduce**

1. Open http://example.com/new-app
2. There is a blue button in the right side of the toolbar that says "Edit"
3. Notice there should be a pencil icon, and there is nothing.

**Expected Behavior**

When loading any page that contains an icon, I expect the icon to load alongside
the other assets on the page, ie text, components, modules, etc

**OS**: OSX 10.8.3
**Browser(s) Version(s)**: All browsers, but founded initially in Chrome 38.0.2125.111
**Node Version(s)**: v.7.8.0
**NPM Version(s)**: 4.2.0
**Browser Resolution(s)**: initially found at 1920 x 2063, but appears >768
**Library Version**: 2.15.5

**Additional context**

- **Results**: Passed
- **Line(s) of Code**: n/a
- **Message**: n/a
- **Console Errors**: 404 error on "svg/symbol-defs.svg"
```

### Testing

It's helpful, but not required to run the test suite locally. If you have the time and energy it can increase the efficiency and decrease the effort required for us to fix things.

There are 2 sides to test, CSS and JS. For the CSS, you can can run `npm run lint:css` to check for syntax errors that may cause issues, or you can run `npm run test:css` to test the mixins and/or CSS. With regard to JS, the same applies; run `npm run lint:js` to check syntax errors and `npm run test:js` to test the JS components. You can also run linting and testing on both sides by running `npm run lint` and `npm test` respectively.

1. **Results**: If there is a fail in a particular test, include the name of the test, otherwise list as "Passed".
2. **Line(s) of Code**: Definitely not a requirement, but doesn't hurt if you've already pin pointed the issue.
3. **Message**: When the tests fail, a stack trace or message is typically output, so copy/paste that into the issue.

Now that you've created an issue, maybe you want to try your hand at fixing the issue? Set up your environment.

## Create a Good Feature Request

Another way to contribute is to help improve the library by suggesting new ideas within the system. While we may not accept every feature, it doesn't hurt to suggest improvements, but please stop and think about the intent of the project.  Maybe its better in another independent project, or maybe not; there is no harm in asking, or filling out a feature request.  Before you do submit, please look at my [road map](/roadmap.md) to see if I've already thought of your feature.  And remember, if I don't like the idea, doesn't mean you can't fork the project.

### Filling Out a Feature Request

Now its time to submit a ticket. Feature requests should be thorough and not leave anyone wondering or questioning what you were thinking. No one should have to ask you anything or require further clarification. When creating a ticket, use the [Feature Request template](/issues/new?template=feature_request.md) to populate a lot of the information required. Below is a brief description of the parts of a feature request:

* **Is your feature request related to a problem?**: A clear and concise description of what the problem is. Ex. I'm always frustrated when [...]
* **Describe the solution you'd like**: A clear and concise description of what you want to happen.  Acceptance criteria are important for us to ensure a proper and complete feature.
* **Describe alternatives you've considered**: A clear and concise description of any alternative solutions or features you've considered.
* **Additional context**: Add any other context or screenshots about the feature request here.

### Example Feature Request

Follow the example below and you'll be on the right path.

```markdown
Title: Progress bar component

**Is your feature request related to a problem? Please describe.**
Not related to a problem. I would like to see an indicator of impressions to ad requests
so that I can visualize the loss.

**Describe the solution you'd like**
I think a progress bar where the total value shown is the full width of
the contained area, and the part that is filled in is the impressions.

**Describe alternatives you've considered**
A funnel chart was considered but its too similar to Googles design and
Legal fears repercussions.

**Additional context**
N/A
```

## Contributing to Documentation

Documentation is a super important, critical part of this project. Docs are how we keep track of the what, how, and why of we're doing; it's how we stay on the same page about our policies. And it's how we tell others everything they need in order to be able to use this project -- or contribute to it. So thank you in advance.

Contributions of any size are welcome! Feel free to file a PR even if you're just rewording a sentence to be more clear, or fixing a spelling mistake!

To contribute:

* [Set up the project](#get-started).
* Edit or add any relevant documentation.
* Make sure your changes are formatted correctly and consistently with the rest of the documentation.
* Re-read what you wrote, and run a spellchecker on it to make sure you didn't miss anything. Check out [Grammerly](https://www.grammarly.com) for spelling and grammar mistakes as well as tone of writing.
* In your commit message(s), begin the first line with `chore(docs): `. For example: `chore(docs): Adding a doc contrib section to CONTRIBUTING.md`.
* Write clear, concise commit message(s) using the [convention described below](#commit-convention). Documentation commits should use `chore(docs): <message>`.
* Go to <https://github.com/iamnewton/alfred-postcss-workflow/pulls> and open a new pull request with your changes and fill out the template with the appropriate information.
* If your PR is connected to an open issue, add a line in your PR's description that says `Fixes: #123`, where `#123` is the number of the issue you're fixing.

Once you've filed the PR:

* One or more maintainers will use GitHub's review feature to review your PR.
* If the maintainer asks for any changes, edit your changes, push, and ask for another review.
* If the maintainer decides to pass on your PR, they will thank you for the contribution and explain why they won't be accepting the changes. That's ok! We still really appreciate you taking the time to do it, and we don't take that lightly.
* If your PR gets accepted, it will be marked as such with the `next-release` label, and merged soon after. Your contribution will be distributed to the masses next time the maintainers [tag a release](./MAINTAINING.md#tag-a-release)

## Create a Pull Request

If you're unfamiliar with the Github flow, please [read this guide](https://guides.github.com/introduction/flow/index.html) as an introduction. Make sure you reach out to someone on the team before you start any work to ensure that what you're doing is aligned with the teams' vision. Read Ilya Grigorik's great article [Don't "Push" Your Pull Requests](https://www.igvita.com/2011/12/19/dont-push-your-pull-requests/). The following passage sums up some great points:

> Contributions are always welcome, but surprise patches are mostly just a burden. Yes, you are offering your help, but someone else will have to maintain your code over the long term - get their buy-in first, avoid surprises. Even worse, a localized change to address a specific problem will often miss the full implications to the project: other existing use cases, future roadmap plans, or overall architectural decisions. A good idea can be implemented inappropriately for the specific project; it can be invalidated by another effort that you may not even be aware of; the timing may be wrong, and a dozen other reasons can conspire against you.

**IMPORTANT**: By submitting a patch, you agree to the same license as that used by the project.

For those of you willing to help out, that's great!!! Here's a quick how-to with regarding to submitting your changes to Github. This requires no need for access, rights or privileges and can be done without any help from a team member.

1. Fork It by pressing the "Fork" button in the top right corner.
2. Clone your newly forked repo (`git clone https://github.com/<github-user>/<repo>`).
3. Change into the directory you cloned (`cd <repo>`)
4. Add your fork as a remote (`git remote add <github-user> https://github.com/<github-user>/<repo>`) where `<github-user>` is your actual Github username and `<repo>` is the repository with which you're looking to contribute.
5. Create your feature branch (`git checkout -b <my-new-feature>`); checkout the guide below for our [branching strategy](#branching-strategy)
6. Commit your changes (`git commit`), following the [format suggested below](#commit-conventions). Please don't use the shortcut flag `git commit -m <message>` as there is more detail required than what is allowed by only using that flag.
7. Push to the branch (`git push <github-user> <my-new-feature>`)
8. Create a new Pull Request; make sure you fill in the Pull Request template.
	a. Most of the time the Reviewers sections provides suggestions and you should include them; in cases when it doesn't add the core team.
	b. Don't forget to [update the CODEOWNERS](#code-owners) file adding the directory and your name to the end of the list.

**IMPORTANT**: Every patch and subsequent message should have a bug attached. If there is no ticket, no work should be done.

### Gotchas

- Please avoid working directly on the `master` branch.
- Make commits of logical units.
- Check for unnecessary whitespace with `git diff --check` before committing.
- Make sure your commit messages are in the [proper format](http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html), also listed below in our guides.

### Branching Strategy

**ALL WORK REQUIRES A BRANCH. WE DO NOT PUSH DIRECTLY TO MASTER!**

There are a lot of [various](http://nvie.com/posts/a-successful-git-branching-model/) [opinions](https://docs.microsoft.com/en-us/vsts/git/concepts/git-branching-guidance) on [branching](https://www.atlassian.com/git/tutorials/comparing-workflows/feature-branch-workflow) [strategies](https://barro.github.io/2016/02/a-succesful-git-branching-model-considered-harmful/) and while all of them are great and have their place, they all tend to add a lot of overhead and maintenance with little value to the workflow. We prefer to use the simplified strategy known as [Github flow](https://guides.github.com/introduction/flow/). So when working with the library, there's no need to prefix it with `feature/` or `hotfix/` or anything like that; Github's PR-style workflow allows for quick and disposable branches. Create branches off `master` and use descriptive names such as `create-donut-chart`, `refactor-dropdown` so that users can easily see what's being worked on. 

#### Naming

Branch names should short, concise and easy to understand the work that is being done.  While not a necessity, setting up `<tab>` completion for git branches can speed up the discovery of branch names. The following tips are designed to speed up your workflow with the addition of tab completion.

* **Use only lower case letters**. Lowercasing makes it quicker to type by providing fewer letters to get working. Avoid upper case letters as it requires a higher level of dexterity that can decrease the speed of workflow
* **Use dashes instead of underscores**. The same is true as above, they're are easier to type and require less dexterity.
* **Don't prefix the branch name with any particular pattern**. Unless you regularly clean up your local branches, it's likely to increase the number of characters and tabbing through in order to complete the branch name you seek
* **Don't include the ticket number**. Adding it falls into the same faults as suggestion 2 above; it requires a lot more typing in order to tab complete through to the branch you may want

 When searching through a bunch of branches, `issue-123` doesn't provide any inherent value to the developer in hopes to find the feature they want to help out on; however seeing `modal-trigger-open` gives the developer some insight into what work is being done.

#### Example Branches

```
// good
git checkout -b fix-bug-x
git checkout -b new-component

// bad
git checkout -b JIRA_1234
git checkout -b tests
```

_The only exception, at the time of this writing, is for tagging and releasing_

### Commit Conventions

Commits should be small, concise and logical units of code. The goal is not to overwhelm reviewers with superfluous changes; do not add any unrelated changes to a commit in case the change needs to be reverted or backed out.  The entirety of your code should answer the question:

**Which problem am I trying to solve today?**

All changes should be connected and without 1 change your entire commit would fall apart. If you find that you can keep a commit out and your code still makes sense, runs successfully, and fixes an issue then you're likely in a good condition to commit some code and create a pull request. Contributors are required to follow the [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/) specification on all commit messages. If you're ready, follow below to create a good commit message in the proper format.

A few tips to consider:

* Absolutely no working directly on the master branch!!!
* Check for unnecessary whitespace with `git diff --check` before committing.
* And be sure to run git commit and NOT `git commit -m <message>` so that you can fill out the body of the message

#### Parts of a Commit

A commit should consist of a required title, optional but recommended body and an optional but recommended footer. Below is the desired format with an example:

```
<type>(<scope>): <subject>
<BLANK LINE>
<body>
<BLANK LINE>
<footer>
```

#### Example

```
fix(filter): patch Autocomplete output when query is empty

Show default options when no Autocomplete search input value is present.

Fixes #1234
```

#### Breakdown of message parts

##### Title

* The first line should be less than 50 characters (our git-hooks will warn about this) but no greater than 72.
* The <type> and <scope> should always be lowercase as shown in example.
* <type> is required
* <scope> is optional
* <subject> should be written in the imperative with present tense.
* Should contain no full stop (.).

###### Allowed type values

* feat (new feature for the user, not a new feature for build script)
* fix (bug fix for the user, not a fix to a build script)
* chore (updating tasks etc, changes to docs, linting warnings, adding tests; no production code change)

###### What is scope

<scope> should indicate the feature, component, or part that is being fixed. It should be very short but obvious.

The <scope> value can be omitted. The feature may not exist or be too complex to assign to a single component. If the <scope> is empty the parenthesis should not be added to the title.

##### Body

* optional, thorough descriptions are helpful for understanding commits
* wrap it to about 72 characters or so
* uses the imperative, present tense: “change” not “changed” nor “changes”; this convention matches up with commit messages generated by commands like git merge and git revert
* includes motivation for the change and contrasts with previous behavior
* it's more important that you include why these changes were made then listing out what was done
* must be separated by a blank line from title
* in some contexts, the first line is treated as the subject of an email and the rest of the text as the body. The blank line separating the summary from the body is critical (unless you omit the body entirely); tools like rebase can get confused if you run the two together. 
* further paragraphs come after blank lines.
* bullet points are okay, too
* typically a hyphen or asterisk is used for the bullet, followed by a single space, with blank lines in between, but conventions vary here
* use a hanging indent

##### Footer

* optional
* can reference which task it covers
* can cover breaking changes
* must be separated by a blank line

### Code Owners

#### What is it?

Code Owners is a powerful way to define individuals or teams that are responsible for code in a repository. When updating any bug or feature, be sure to update this file to include yourself for potential future reviews.

> Code owners are automatically requested for review when someone opens a pull request that modifies code that they own. Code owners are not automatically requested to review draft pull requests.
>
> When someone with admin or owner permissions has enabled required reviews, they also can optionally require approval from a code owner before the author can merge a pull request in the repository.

[Read more about on GitHub](https://help.github.com/en/articles/about-code-owners)

#### What does it look like?

All teams are required to add the file within the `.github/` directory on the root of the repository.  The format is the same as `.gitignore` which is followed by one or more GitHub usernames or team names using the standard @username or @org/team-name format. You can also refer to a user by an email address that has been added to their GitHub account, for example user@example.com.

```
# This is a comment.
# Each line is a file pattern followed by one or more owners.

# These owners will be the default owners for everything in
# the repo. Unless a later match takes precedence.
# Typically the owners team should be responsible for the
# entire repository.
* @org/team

# Order is important; the last matching pattern takes the most
# precedence. When someone opens a pull request that only
# modifies JS files, only maintainers and not the global
# owner(s) will be requested for a review.
*.js @org/maintainers

# You can even call out other teams for audits.
# In this example, @org/design owns any file in an that ends in
# .scss or .css anywhere in your repository. Typically
# all CODEOWNERS should have their (S)CSS audited by the UX
# design team.
*.scss @org/design
*.css @org/design
```

#### Why do I need one?

As you can see from the example above, it automates the need to ask developers to review code.  Even further, we can use [GitHub's branch protection](https://help.github.com/en/articles/configuring-protected-branches) to ensure that code isn't pushed through if the code owner(s) aren't consulted. The other side effect is providing outside contributors the knowledge of knowing whom to ask when looking to fix or improve library code.  One should always reach out to someone on the team before making significant changes. We'd hate for you to put in a lot of work for something that doesn't align with the vision of this project.

## Additional Resources

- [Reduced Test Cases](http://css-tricks.com/reduced-test-cases/)
- [General GitHub documentation](http://help.github.com/)
- [GitHub Send Pull Request Documentation](http://help.github.com/send-pull-requests/)
- [GitHub Using Pull Request Documentation](https://help.github.com/articles/using-pull-requests/)
- [Forking a Github Repo](http://help.github.com/fork-a-repo/)
