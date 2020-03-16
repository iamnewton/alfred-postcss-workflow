# How to Maintain

:bangbang: This project has a [Code of Conduct](./CODE_OF_CONDUCT.md). By interacting with this repository, organization, and/or community you agree to abide by its terms.

If you're one of the important members on the team of Contributors, Maintainers or Owners and you're looking for a guide on how we do things around here, please read on.

## How do I… <a name="toc"></a>

* [Use This Guide](#introduction)?
* [Provide Support on Issues](#provide-support-on-issues)
* [Label Issues](#label-issues)
* [Clean Up Issues and PRs](#clean-up-issues-and-prs)
* [Create a Pull Request](#create-a-pull-request)
* [Review Pull Requests](#review-pull-requests)
* [Merge Pull Requests](#merge-pull-requests)
* [Prepare a Release](#prepare-a-release)

## Introduction

All types of contributions are encouraged and valued. See the [table of contents](#toc) for the different ways to help and details about how this project handles them!  Please make sure to read the relevant section before making your contribution! It will make it a lot easier for us maintainers to make the most of it and smooth out the experience for all involved.

We look forward to your contributions. ✨

## Provide Support on Issues

Helping out other users with their questions is a really awesome way of contributing to any community. It's not uncommon for most of the issues on projects being support-related questions by users trying to understand something they ran into, or find their way around a known bug.

Sometimes, the `support` label will be added to things that turn out to actually be other things, like bugs or feature requests. In that case, suss out the details with the person who filed the original issue, add a comment explaining what the bug is, and change the label from `support` to `fix` or `feat`. If you can't do this yourself, @mention a maintainer so they can do it.

In order to help other folks out with their questions:

* Go to the issue tracker and [filter open issues by the `support` label](https://github.com/iamnewton/alfred-postcss-workflow/issues?q=is%3Aopen+is%3Aissue+label%3Asupport).
* Read through the list until you find something that you're familiar enough with to give an answer.
* Respond to the issue with whatever details are needed to clarify the question, or get more details about what's going on.
* Once the discussion wraps up and things are clarified, either close the issue, or ask the original issue filer (or a maintainer) to close it for you.

Some notes on picking up support issues:

* Avoid responding to issues you don't know you can answer accurately.
* As much as possible, try to refer to past issues with accepted answers. Link to them from your replies with the `#123` format.
* Be kind and patient with users -- often, folks who have run into confusing things might be upset or impatient. This is ok. Try to understand where they're coming from, and if you're too uncomfortable with the tone, feel free to stay away or withdraw from the issue. (note: if the user is outright hostile or is violating the CoC, [refer to the Code of Conduct](./CODE_OF_CONDUCT.md) to resolve the conflict).

## Label Issues

One of the most important tasks in handling issues is labeling them usefully and accurately. All other tasks involving issues ultimately rely on the issue being classified in such a way that relevant parties looking to do their own tasks can find them quickly and easily.

In order to label issues, [open up the list of unlabeled issues](https://github.com/iamnewton/alfred-postcss-workflow/issues?q=is%3Aopen+is%3Aissue+no%3Alabel) and, **from newest to oldest**, read through each one and apply issue labels according to the table below. If you're unsure about what label to apply, skip the issue and try the next one: don't feel obligated to label each and every issue yourself!

Label | Apply When | Notes
--- | --- | ---
`blocked` | Added to issues or pull requests that are blocked by either some other feature or bug fix required to complete the work | Can be combined with other labels such as `fix`, `feat` and `critical`.
`chore` | Added to issues or pull requests that affect any of the documentation, tests or attempt to refactor the project. | These issues should not change code such that a version bump would be required.
`critical` | Added to `fix` issues if the problem described makes the code completely unusable in a common situation. |
`duplicate` | Added to issues or PRs that refer to the exact same issue as another one that's been previously labeled. | Duplicate issues should be marked and closed right away, with a message referencing the issue it's a duplicate of (with `#123`)
`feat` | Added to [feature requests](#request-a-feature), PRs, or documentation issues that are purely additive: the code or docs currently work as expected, but a change is being requested or suggested. |
`fix` | Cases where the code (or documentation) is behaving in a way it wasn't intended to. | If something is happening that surprises the *user* but does not go against the way the code is designed, it should use the `feat` label.
`good first issue` | Applied by [Contributors](./CONTRIBUTING.md#permissions) or higher to issues that they consider good introductions to the project for people who have not contributed before. These are not necessarily "easy", but rather focused around how much context is necessary in order to understand what needs to be done for this project in particular. | Existing project members are expected to stay away from these unless they increase in priority.
`help wanted` | Applied by [Contributors](./CONTRIBUTING.md#permissions) or higher to issues and PRs that they would like to get outside help for. Generally, this means it's lower priority for the maintainer team to itself implement, but that the community is encouraged to pick up if they so desire | Never applied on first-pass labeling.
`in progress` | Applied by [Contributors](./CONTRIBUTING.md#permissions) or higher to PRs that are pending some work before they're ready for review. | The original PR submitter should @mention the team member that applied the label once the PR is complete.
`needs clarification` | Applied by [Contributors](./CONTRIBUTING.md#permissions) or higher to issues or PRs that require a bit more information in order to move forward. | The original submitter should @mention the team member that applied the label once clarification has been provided.
`next release` | Applied by [Maintainers](./CONTRIBUTING.md#permissions) or higher to PRs that have been approved and are tagged for the next release. | Generally we don't hold up PRs as we release as soon as possible, but in cases where we can't, this is handy to call out.
`support` | This issue is either asking a question about how to use the project, clarifying the reason for unexpected behavior, or possibly reporting a `bug` but does not have enough detail yet to determine whether it would count as such. | The label should be switched to `fix` if reliable reproduction steps are provided. Issues primarily with unintended configurations of a user's environment are not considered bugs, even if they cause crashes.
`wontfix` | Labelers may apply this label to issues that clearly have nothing at all to do with the project or are otherwise entirely outside of its scope/sphere of influence. [Committers](#join-the-project-team) may apply this label and close an issue or PR if they decide to pass on an otherwise relevant issue. | The issue or PR should be closed as soon as the label is applied, and a clear explanation provided of why the label was used. Contributors are free to contest the labeling, but the decision ultimately falls on committers as to whether to accept something or not.

## Clean Up Issues and PRs

Issues and PRs can go stale after a while; maybe they're abandoned; maybe the team will not have time to address them any time soon.  In these cases, they should be closed until they're brought up again or the interaction starts over.

To clean up issues and PRs:

* Search the issue tracker for issues or PRs, and add the term `updated:<=YYYY-MM-DD`, where the date is 30 days before today.
* Go through each issue *from oldest to newest*, and close them if **all of the following are true**:
  * not opened by a maintainer
  * not marked as `critical`
  * not marked as `good first issue` or `help wanted` (these might stick around for a while, in general, as they're intended to be available)
  * no explicit messages in the comments asking for it to be left open
  * does not belong to a milestone
* Leave a message when closing saying "Cleaning up stale issue. Please reopen or ping us if and when you're ready to resume this. See https://github.com/iamnewton/alfred-postcss-workflow/blob/latest/MAINTAINING.md#clean-up-issues-and-prs for more details."

## Create a Pull Request

If you're unfamiliar with the Github flow, please [read this guide](https://guides.github.com/introduction/flow/index.html) as an introduction. Make sure you reach out to someone on the team before you start any work to ensure that what you're doing is aligned with the teams' vision. Read Ilya Grigorik's great article [Don't "Push" Your Pull Requests](https://www.igvita.com/2011/12/19/dont-push-your-pull-requests/). The following passage sums up some great points:

> Contributions are always welcome, but surprise patches are mostly just a burden. Yes, you are offering your help, but someone else will have to maintain your code over the long term - get their buy-in first, avoid surprises. Even worse, a localized change to address a specific problem will often miss the full implications to the project: other existing use cases, future roadmap plans, or overall architectural decisions. A good idea can be implemented inappropriately for the specific project; it can be invalidated by another effort that you may not even be aware of; the timing may be wrong, and a dozen other reasons can conspire against you.

1. Clone the repo (`git clone https://github.com/iamnewton/alfred-postcss-workflow`)
2. If you've cloned previously, then get latest changes (`git checkout master; git pull origin master`).
3. Create your feature branch (`git checkout -b <my-new-feature>`); checkout the
   guide below for our branching strategy.
4. Commit your changes (`git commit`), following the format suggested below. Please don't use the shortcut flag `git commit -m <message>` as there is more detail required than what is allowed by only using that flag.
5. Push to the branch (`git push origin <my-new-feature>`)
6. Create a new Pull Request; make sure you fill in the Pull Request template.

**IMPORTANT**: Every patch and subsequent message should have a bug attached. If there is no ticket, no work should be done.

### Gotchas

- Please avoid working directly on the `master` branch.
- Make commits of logical units.
- Check for unnecessary whitespace with `git diff --check` before committing.
- Make sure your commit messages are in the [proper format](http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html), also listed below in our guides.

## Review Pull Requests

While anyone can comment on a PR, add feedback, etc, PRs are only *approved* by team members with Contributor or higher permissions.

PR reviews use [GitHub's own review feature](https://help.github.com/articles/about-pull-request-reviews/), which manages comments, approval, and review iteration.

*ALL PULL REQUESTS* being approved must:

* be approved by at least 2 reviewers, one of which should come from a code owner from within the [CODEOWNERS](./CODEOWNERS) file, unless submitted by a Maintainer or above.
* be up-to-date and have no conflicts with the master branch.
* be covered by a test either by a previously-failing test, an existing test that covers the entire functionality of the submitted code, or new tests that verify any new/changed behavior.
* have all tests pass and follow established conventions.
* not drop the test coverage percentages, unless the specific case is considered reasonable by maintainers.
* pass our linting suite 100% with no errors on both the JavaScript and SCSS side

:notebook_with_decorative_cover: All of the above are generally covered by our [branch protection rules](https://help.github.com/en/github/administering-a-repository/about-protected-branches) so nothing extra is required from the reviewer.

Some notes about reviewing:

* You may ask for minor changes ("nitpicks"), but consider whether they are really blockers to merging: try to err on the side of "approve, with comments".
* Please make sure you're familiar with the code or documentation being updated, unless it's a minor change (spellchecking, minor formatting, etc). You may @mention another project member who you think is better suited for the review, but still provide a non-approving review of your own. Check the [CODEOWNERS](./CODEOWNERS.md) file for a list of people you can mention when in doubt.
* Be extra kind: people who submit code/doc contributions are putting themselves in a pretty vulnerable position, and have put time and care into what they've done (even if that's not obvious to you!) -- always respond with respect, be understanding, but don't feel like you need to sacrifice your standards for their sake, either; please don't be a jerk about it.

:notebook_with_decorative_cover: Be sure to check out the list of browsers and devices we support listed below when testing out a PR. All features should function the same in each one, but don't necessarily require that they all match in design.

## Merge Pull Requests

**Permission Required**: [Maintainer](./CONTRIBUTING.md#permissions)

After a pull request has been given the green light, it's time to prepare for the deployment.

### Preparation

1. Merge your feature branch into master by pressing the button on GitHub's interface. Use the **Squash and merge** button in case there are other options. It's okay to merge multiple features and release once for those different features.
2. Ensure that the title of the PR is in the form of [conventional commits](https://conventionalcommits.org/). If you named the title of your PR in this format then it should follow through when you go to merge.
3. Read below for versioning.

## Prepare A Release

**Permission Required**: [Owner](./CONTRIBUTING.md#permissions)

At the time of this writing the process for releasing is not fully automated and requires some manual work; please read below for how we do it.

For reference, we use [SemVer](https://semver.org/) for its versioning providing us an opt-in approach to releases. This means we add a version number according to the spec, as you see below. So rather than force developers to consume the latest and greatest, they can choose which version to consume and test any newer ones before upgrading. Please the read the spec as it goes into further detail.

Given a version number **MAJOR.MINOR.PATCH**, increment the:

* **MAJOR** version when you make incompatible API changes.
* **MINOR** version when you add functionality in a backward-compatible manner.
* **PATCH** version when you make backward-compatible bug fixes.

Additional labels for pre-release and build metadata are available as extensions to the **MAJOR.MINOR.PATCH** format.
