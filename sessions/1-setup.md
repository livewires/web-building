# Getting going: A basic page with tags…

> These worksheets are assuming that you are running a web server locally, if you are setting this up on your home computer you will need to have Apache, MySQL and PHP installed. There are many ways to get this set up, if you haven’t done this look at installing [XAMPP](https://www.apachefriends.org/).  

Before doing anything you need to know what your website is going to be about. Have a think… The demo is all about Monopoly, but you can pick anything you want. Here are a couple of ideas:

- A game you're playing?
- A TV show or film?
- A sports team?
- A band?

Open up Visual Studio Code or Sublime Text (or your preferred text editor) and  create a new file called `index.htm` file.

The `index.htm` file is really important; it tells your computer that it is the homepage for your website. Any other pages you create can be called anything else.

`index.htm` should like this:

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Page title</title>
  </head>

  <body>

  </body>

</html>
```

Now open a browser and open up the file in your browser. You should have an empty page…

## Tags

`HTML` is a markup language. That's what the `ML` stands for in `HTML`. It provides structure to content… if you look at this page some of the text are headings… other bits of the text are paragraphs. `HTML` allows us to create that structure for a web browser to understand.

Content is surrounded by tags that tell the browser what type of content they are…

Here is an example of a paragraph tag:

```html
<p>
  This is a paragraph. Really!
</p>
```

A tag is made up of three parts:

1. An opening tag
2. The tag contents
3. A closing tag

Can you see the three parts in the paragraph tag? There is the opening tag: `<p>`, the closing tag: `</p>`, and the contents in the middle.

Any text that you want to appear on your page needs to be added to your `HTML` as the contents of the `<body>` tag.

Let's try adding a paragraph to our page now. Your `<body>` tag should now look like this:

```html
<body>
  <p>
    This is a paragraph. Really!
  </p>
</body>
```

As you can see tags like `<body>` can have other tags as their content.

Save your file, and go to your web browser, open your `index.htm` file. Refresh the web page and you should see the your text appear on screen.

## A few more tags…

There are a couple of other tags that you can use… try adding them to your `<body>` tag:

1. `<h1>` is a big heading…
2. `<h2>` is a smaller heading. You can go all the way down to `<h6>`
3. `<hr />` is a self closing tag. It just creates a divider on your page.

## Challenge

For your first page write some text with headings (`<h1>`, `<h2>`, etc), paragraphs (`<p>`) and dividers (`<hr />`);

---


[Go to the next sheet: Building a template >](1.1-templating.md)
