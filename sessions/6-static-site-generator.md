# LiveWires - Web Development
## Static Site Generating

There are several methods of reducing the amount of code you write for new pages. One method is [server side includes](5-server-side-includes.md), when you are building complicated websites, often with the content coming out of databases, then the server generates the page each time someone goes to that URL.

Another method is by using a static site generator. A static site generator will take page templates and your content and generate the HTML and CSS for you once. That can then be uploaded straight onto the server. The setup is a little bit more complicated than what we do in the [server side includes](5-server-side-includes.md) worksheet, but this is a more upto date method of doing the kind of website that we are building.

### Clone the builder

The first step is to make a copy of the generator on the computer that you're using.

Open a program called `Terminal`. It's a box to type instructions to the computer rather than clicking on buttons.

The first instruction we're going to give is to copy the files from [github.com/livewires/static-site-builder](https://github.com/livewires/static-site-builder). That command is:

```bash
git clone git@github.com:livewires/static-site-builder.git ~/projects/static-site/
```

This command will create a new folder called `static-site`.

Next up we need to tell the terminal to go into this new folder with:

```bash
cd ~/projects/static-site/
```

Finally, we need to download all of the additional files that the static site generator needs to run:

```bash
npm install
```

### Test it

We're going to test that everything works correctly. Open back up the terminal and type

```bash
npm run dev
```

This command tells Node Package Manager (NPM) to look in `package.json` and run the `dev` script. The `dev` script will then generate our static site using a generator called **Metalsmith**.

It should output something that looks like this:

```bash
[17:10:43] Using gulpfile ~/…/gulpfile.js
[17:10:43] Starting 'dev'...
[17:10:43] Starting 'clean'...
[17:10:43] Finished 'clean' after 8.37 ms
[17:10:43] Starting 'style'...
[17:10:43] Starting 'metal'...
[17:10:43] Finished 'metal' after 183 ms
[17:10:43] Finished 'style' after 186 ms
[17:10:43] Starting 'watch'...
Serving "build" at http://127.0.0.1:8080
Ready for changes
```

It's now looking at everything that is in the `build` folder and serving it up. You should be able to go to [http://127.0.0.1:8080](http://127.0.0.1:8080) and see a super simple website with a couple of pages.

### How it all works

There are four folders that we care about here:

1. `build`
2. `content`
3. `src`
4. `templates`

We've already seen the `build` folder - that's where your generated site lives.

The `content` folder contains your page content. The documents are formatted with [Markdown](https://daringfireball.net/projects/markdown/). Have a look at the `index.md` file. There are two sections. The first section contains the page variables:

```md
---
title: Home
template: page.hbt
---
```

This gives the page a title and then tells the Metalsmith to use the page template `page.hbt`

The second section is all of the page content 

```md
All this is build using a static site generator. Your challenge is to see if you can get your site to be built using this tool.

[Find out more about how this works...](about.html)
```

Each new `.md` file in this folder will generate a new page.

The `template` folder is the next thing we need to look at. It contains the file `page.hbt`, this is the file that the markdown files reference. It is the template that Metalsmith uses to generate the page from. It looks a little different from the pages that we have been working with:

```handlebars
{{> header}}

<h2>{{title}}</h2>

<article>
    {{{contents}}}
</article>

{{> footer}}
```

As you can see there is a little bit of `HTML` that we've been used to, but there are some odd tags with `{{` and `}}` in there. These are tags which tell Metalsmith which content to put where.

The simple one is this line:

```handlebars
<h2>{{title}}</h2>
```

That says create an `<h2>` and put the content of the variable `title` in it. Look back at the top of the `markdown` file and you'll see the `title` variable.

The `{{{contents}}}` tag takes everything else in the `markdown` file and adds the HTML itself to generate the rest of the page.

You'll notice at the top and the bottom of the page are the tags `{{> header}}` and `{{> footer}}`. These tags are used to include other files. In the `templates` folder is a subfolder called `partials` and you'll see files called `_header.hbt` and `_footer.hbt`. All of these files get smashed together to create the page.

The final folder is `src`. This folder contains the source files that you are using, specifically and `css`, `javascript` and images.

When you change _any_ of the files in these folders, Metalsmith will run and generate your site all over again. Hit refresh in your browser and see your changes straight away.

### Adapt your site

Take the files that you have made so far and see if you can your `html` files converted.
