q2a-userid-display-override
===========================

Overrides the userid display in Question2Answer

DETAILS:
This plugin simple provides an override to a core function in Question2Answer which displays the user's username
so that instead of showing the User Id stored in the users table, it displays the Full Name from the userprofile
table.  If the Full Name doesn't exist, the code reverts to displaying the User Id instead.

The plugin is based on code referenced here:
http://www.question2answer.org/qa/19625/display-the-users-full-names-instead-their-username-handle?show=19625#q19625

INSTALLATION:
* Download from GitHub.
* Copy to your Question2Answer site's qa-plugin folder

KNOWN ISSUES:
* there is a conflict between this change and the Q2A Badges plugin by NoahY that will lead to the badge widget
  not being displayed for users where their full name is displayed instead of their user handle (ie, they've
  entered a full name and this plugin is active).

PRE-REQUISITES:
* none
