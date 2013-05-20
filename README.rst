Backlog
-------

- As a website owner, a new user has automatically a plan assigned with a github UUID not updatable.
- As a user, i could update myself by syncing with Github.
- As a user, i could import all my projects from Github.
    - If import failed we should notify the user
- As a user, i could import only a subset of my projects.
- As a user, i could ignore display of some projects and related analyses.

FAQ
---

- How to have use a real, non anemic domain model with the Symfony Form component and Doctrine.
    - Doctrine handles very well real domain model because it uses reflection to update directly class properties.
    - It is very hard to have a real domain model with Form component directly connected to domain entities. A recommended
    solution can be this one (http://verraes.net/2013/04/decoupling-symfony2-forms-from-entities/).
