# Hugopit
An idea for a web based editor for [Hugo](http://gohugo.io)

I stumbled upon on the [Cockpit](http://www.getcockpit.com ) CMS, which is built in PHP and uses SQLite (or MongoDB) as database. I've found it very neat, as it has custom fields and other cool stuff and appears to be very fast. 

But I wondered if I could adapt it as an editor for [Hugo](http://gohugo.io), a static site generator built in Go. As a matter of fact, it worked better than expected. :)

I put together a [quick demo video](https://www.youtube.com/watch?v=jJzMCTH5z-c) to show my approach and how things worked. I used it's PHP API to create the .md files for Hugo. 

The project's code is all here, but you will need to install Hugo on your machine, of course. You also need to have the requirements for running Cockpit:

- PHP >= 5.4
- PDO + SQLite (or MongoDB)
- GD extension
- mod_rewrite enabled (on apache)


## Screenshots
1. Cockpit dashboard: [https://raw.githubusercontent.com/sjardim/Hugopit/master/cockpit-screenshot.png](https://raw.githubusercontent.com/sjardim/Hugopit/master/cockpit-screenshot.png)
2. Hugo website: [https://raw.githubusercontent.com/sjardim/Hugopit/master/hugo-screenshot.png](https://raw.githubusercontent.com/sjardim/Hugopit/master/hugo-screenshot.png)

## Why use it?
Although Cockpit appears to have great performance, it still depends on a server running PHP. With this solution, you can have the UX of a web based editor and use Hugo to create a static site that can run everywhere (Github pages, S3, etc). Nothing beats this approach in security (no files and database to worry about)

## Instructions

1. Download this repo contents
2. Create a new hugo site: `hugo new site mysite`
3. Replace `mysite` folder contents with the contents  you just downloaded
4. Run hugo server --watch

---
**Note**: I recorded the screen on my ultra wide monitor wich has a proportion of 21:9. I noticed after that it wasn't the best of ideas, specially if you watch it on a small monitor.
