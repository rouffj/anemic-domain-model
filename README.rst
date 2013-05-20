Backlog
-------

* As a website owner, a new user has automatically a plan assigned with a github UUID not updatable.
* As a user, I could update myself by syncing with Github.
* As a user, I could import all my projects from Github (If import failed we should notify the user).
* As a user, I could import only a subset of my projects.
* As a user, I could ignore display of some projects and related analyses.

FAQ
---

**How can I have access to the ~50min training video?**

* You should be here in Hackday session @ SensioLabs :). Normally all hackday trainings videos are dedicated for SensioLabs employees, I will ask if i can publish the video.

**How to maintain a real, non anemic domain model if my project uses Symfony Form component and/or Doctrine?**

* Doctrine handles very well real domain model because it uses reflection to update directly class properties.
* It is very hard to have a real domain model with Form component directly connected to domain entities. A recommended solution can be this one (http://verraes.net/2013/04/decoupling-symfony2-forms-from-entities/).
