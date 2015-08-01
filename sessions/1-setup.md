# Live Wires - Setup

Before doing anything you need to know what your website is going to be about. Have a think… The demo is all about Monopoly, but you can pick anything you want. Here are a couple of ideas:

- What goes on at LiveWires
- Your family
- Minecraft

Copy `resources/starting-block.html` into your folder and rename it to `index.html`. This is really important because `index` tells your computer that it is the homepage for your website. Any other pages you create can be called anything else.

Now go to http://livewires.dev/ in your browser. You should have a page that says ‘You win!’

## Building a template

Almost all websites have three things on them; a `header`, a `footer` and some main content. Lets add them in to our index page. Open up the `index.html` file in a text editor like GEdit or Notepad.

Remove everything between the `<body>` … `</body>` tags and replace it with:

```
<header>
		<hgroup>
				<h1>Site name</h1>
				<h2>Page name</h2>
		</hgroup>
</header>
```

Now save your file and refresh the page in your browser (`Ctrl + R`). You should now have two large titles. You should obviously now go and replace `Site name` and `Page name` with your own site name and page title.

Seeing as we have the top of the page we should add the bottom:

```
<footer>
    <p>Made by [your-name] at Live Wires</p>
</footer>
```

Finally between the two we need to add the introduction text for your page:

```
<section>
   <p>Welcome to…</p>
</section>
```

When you refresh your page you now have some black text on a white background… Not very exciting. The next worksheet is about adding style.

----

Got stuck? Have a look at livewires.jamesdoc.com/01/ for an example of my Monopoly site. Right click in the browser and select `view source` to see the code.
