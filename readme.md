SUWDC Group Social Network

1st shot at "What should this be"

## Major Features

* Members
    * Member Types
        * Admin
        * Member (Developer)
        * Organizer
    * Member Profiles
        * Personal Info
        * Bio
        * Skills (tags)
        * Picture
        * Experience/Projects/Links
* News/Events/Schedule
    * SUWDC Meetup Schedule
    * Local tech-related events
    * Job Openings, etc...
* Discussion Forum
    * Technical Questions
* Posts
	* By Authors/Members
* Static Pages
	* Learning Resources
	* Local Companies
	* SUWDC Projects


## First Sprint

* [x] Basic Development Setup/Config
* [ ] Minimal Layouts/Templates/etc...
    * [x] Global Layout/Partials
    * [ ] Pages
        * [ ] Home Page
        * [ ] Sign Up/Sign In
        * [ ] Edit Profile
        * [ ] Members
        * [ ] Member
* [ ] 1st shot at models/relationships
    * [ ] User
    * [ ] UserProfile
    * [ ] Skill
    * [ ] Foo
    * [ ] Bar
* [ ] Member Sign Up and Profile Completion
    * [ ] Name
    * [ ] Contact
    * [ ] Bio
    * [ ] Skills


#### User

- first_name
- last_name
- email
- password
- Has many skills
- Has one profile
- Has many roles
- Fields:
    * Foo
    * Bar

#### UserRole

- name
- Belongs to many users

#### UserProfile

- bio
- website_url
- github_username
- linked_in_url
- is_for_hire
- Belongs to user
- Has many MiscLinks ?

#### Skill

- name
- Belongs to many users