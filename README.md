# Hugopit
An idea for a web based editor for (Hugo)[http://gohugo.io] (draft idea)

I stumbled upon on the [Cockpit](http://www.getcockpit.com ) CMS, which is built in PHP and uses SQLite (or MongoDB) as database. I've found it very neat, as it has custom fields and other cool stuff and appears to be very fast. 

But I wondered if I could adapt it as an editor for (Hugo)[http://gohugo.io], a static site generator built in Go. As a matter of fact, it worked better than expected. :)

I put together a (quick demo video)[https://www.youtube.com/watch?v=jJzMCTH5z-c] to show my approach and how things worked. I used it's PHP API to create the .md files for Hugo. 

The project's code is all here, but you will need to install Hugo on you maching, of course. You also need to have the requirements for running Cockpit:

- PHP >= 5.4
- PDO + SQLite (or MongoDB)
- GD extension
- mod_rewrite enabled (on apache)

## Why use it?
Although Cockpit appears to have great performance, it still depends on a server running PHP. With this solution, you can have the UX of a web based editor and use Hugo to create a static site that can run everywhere (Github pages, S3, etc). Not beats this approach in security (no files and database to worry about)

---
**Note**: I recorded the screens on my ultra wide monitor with a proportion of 21:9. I realised now it wasn't the best of ideas, specially if you watch it on a small monitor.
