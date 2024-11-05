(A workshop task for CS2TP students.)

# Module Selector

> [!CAUTION]
> This project is in the early stages of development and contains bugs.

When completed, this Laravel 10 project will allow students at Aston studying Computer Science and related courses to select final year modules. Teaching staff will be able to create and edit their modules, and see a list of enrolled students.

We are an agile team, and work in sprints. **We're currently in sprint 2** - [check out what we're working on](#🏃-sprint-2-in-progress)!

# Getting Started
Follow the [setup instructions](./Documentation/LocalDevSetup.md) to get started.


# :world_map: Roadmap
### Sprint 1 [COMPLETE]
Identify requirements and define the database schema.
- [x] Define functional requirements
- [x] Define non-functional requirements
- [x] Create simple [Entity Relationship Diagram](./Documentation/EntityRelationshipDiagram.png) to define database structure


## :runner: Sprint 2 [IN-PROGRESS]
This sprint, we're focusing on creating the Student and Module MVC structures.
- [x] Create Student MVC and migration
- [x] Create Module MVC and migration
- [x] Create module_student table
- [x] Randomly assign students to modules
- [ ] [Comment all key files](./Documentation/WorkshopTasks.md#👥-task-1-team-understand-and-comment-the-project-code)
- [ ] Fix [bugs and known issues](#🐛-bugs-and-known-issues)

### :clock2: Future sprints
- Add Staff
- Add login functionality
- Create different account types for students and staff
- Allow students to assign themselves to, or remove themselves from, modules
- Allow staff to create and edit modules

# :bug: Bugs and known issues
- [students table missing the 'degreecourse' column](./Documentation/WorkshopTasks.md#🐛-1-students-table-missing-the-degreecourse-column)
- [modules table missing the 'description' column](./Documentation/WorkshopTasks.md#🐛-2-modules-table-missing-the-description-column)
- [studentlisting and studentprofile views do not display the degree course](./Documentation/WorkshopTasks.md#🐛-3-studentlisting-and-studentprofile-views-do-not-display-the-degree-course)
- [The studentlisting view does not display surnames](./Documentation/WorkshopTasks.md#🐛-4-the-studentlisting-view-does-not-display-surnames)
- [studentprofile view can't load, throws an error AND 6. moduledetails view can't load, throws an error](./Documentation/WorkshopTasks.md#🐛-5-studentprofile-view-cant-load-throws-an-error-and-6-moduledetails-view-cant-load-throws-an-error)
- [moduledetails view does not display a list of enrolled students](./Documentation/WorkshopTasks.md#🐛-7-moduledetails-view-does-not-display-a-list-of-enrolled-students)
- [moduledetails view does not display the module description](./Documentation/WorkshopTasks.md#🐛-8-moduledetails-view-does-not-display-the-module-description)
- [modulelisting view does not display the number of enrolled students](./Documentation/WorkshopTasks.md#🐛-9-modulelisting-view-does-not-display-the-number-of-enrolled-students)
