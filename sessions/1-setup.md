# LiveWires - Setup

> These worksheets are assuming that you are running a web server locally, if you are setting this up on your home computer you will need to have Apache, MySQL and PHP installed. There are many ways to get this set up, if you haven’t done this look at installing [XAMPP](https://www.apachefriends.org/).  

Before doing anything you need to know what your website is going to be about. Have a think… The demo is all about Monopoly, but you can pick anything you want. Here are a couple of ideas:

- What goes on at LiveWires
- Your family
- Minecraft
- You favourite bands / TV show

Copy `startingblock.html` into your folder and rename it to `index.html`. This is really important because `index` tells your computer that it is the homepage for your website. Any other pages you create can be called anything else.

Now go to [http://livewires.dev/](http://livewires.dev) in your browser. You should have a page that says ‘starting block…’

## Building a template

Almost all websites have three things on them; a `header` and a `footer`. Lets add them in to our `index.html`. Open up the `index.html` file in a text editor like [GEdit](https://wiki.gnome.org/Apps/Gedit), [Sublime Text](http://www.sublimetext.com/) or [Notepad++](https://notepad-plus-plus.org/).

Remove everything between the `<body>` … `</body>` tags and replace it with:

```
<header>
		<hgroup>
				<h1>Site name</h1>
				<h2>Page name</h2>
		</hgroup>
</header>
```

Now save your file (`Ctrl + S`)and refresh the page in your browser (`Ctrl + R`). You should now have two large titles. You should obviously now go and replace `Site name` and `Page name` with your own site name and page title.

Seeing as we have the top of the page we should add the bottom:

```
<footer>
    <p>Made by [your-name] at LiveWires</p>
</footer>
```

Finally between the `header` and the `footer` we need to add the introduction text for your page:

```
<section>
   <p>Welcome to…</p>
</section>
```

When you refresh your page you now have some black text on a white background… Not very exciting. The next worksheet is about adding style.


----

Got stuck? Have a look at [livewires.jamesdoc.com/01/](http://livewires.jamesdoc.com/01/) for an example of my Monopoly site. Right click in the browser and select `view source` to see the code.
