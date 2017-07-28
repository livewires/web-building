# LiveWires - Pages

We've built a template in `html` and we've added styles with `css`, but a website, is more than just one page.

In my example I'm building a site about the properties on the Monopoly board, so I'm going to need to create some new pages for each side of the board starting off with the Kings Cross side.

Make a copy of the `index.htm` page and give a name based on the title of the page. If you are making a site about a tv show you might want a page about the characters, so you would call it `characters.htm`. Now go back to your web browser and enter in `livewires.dev/characters.htm` (obviously you should replace `characters.htm` with whatever you have chosen…).

Huzzah, you should have a new page, but it looks very similar to your home page. Open up your new file in a text editor and give it a new title, and you can start adding in new content.

There are some really handy tags to add specific types of content. You have already used the `<h1>` - `<h6>` tags to create headings, and `<p>…</p>` for paragraphs. However there are lots more:

Images:
`<img src=“image.jpg” alt=“Description of your image” />`

Lists:
```html
<ol>
	<li>One</li>
	<li>Two</li>
	<li>Three</li>
</ol>
```

Bullet points:
```html
<ul>
	<li>Point</li>
	<li>Another point</li>
	<li>Final point</li>
</ul>
```

## Linking between pages

Now we have two pages, with some great content, we need to give the visitors to your site a way of getting between the two pages. This is done with links.

We’re going to create a menu on our pages below the banner to allow visitors to navigate between the two pages.

Open up `index.htm` again and scroll down to the end of the `header` and the beginning on the `section`:

```html
…
        </header>

        <section>
…
```

Now in-between these two tags we’re going to create a new element called `nav` for navigation:

```html
</header>

<nav>
    <div class=“container”>
        <ul>
            <li><a href=“index.htm”>Home</a></li>
            <li><a href=“characters.htm”>The Characters</a></li>
        </ul>
    </div>
</nav>

<section>
```

Do you see that we added a list with a new tag in it? The `a` tag creates a link; the `href=“…”` tells the browser which file to link to, and then the text after what the visitor to your site sees:

```html
<a href=“FILE-TO-LINK-TO.htm”>Text that is displayed</a>
```

Make sure that the second link points to your new page. Save the file, up http://livewires.dev/ and see what appears. Click through the new links… what happens? The second link will take you through to your second page, but because you don’t the code on the second page you can’t get back.

Copy the `<nav>…</nav>` code and paste it in the same place in your second page. Save it, refresh the page and you have a list on both pages with your navigation.

It’s functional, but does’t look very good. Lets write some `CSS` to fix that.

In your `style` tag add this:

```css
nav {
    background-color: white;
    border-bottom: 1px solid #ff0000;
    padding: 10px;
}

    nav li {
        display: inline-block;
        padding: 10px;
    }

        nav li:first-child{
            padding-left: 0;
        }
```

Can you work out what this does? It says that the `nav` should have a white background, a red border at the bottom with 10px of padding all the way around. Then the list tags should all be displayed in a line with another 10 pixels around each of them. However the first list item should have no padding on the left side, so it is right on the edge of the navigation.

Make sure that this code is in both files.

---

[Go to sheet four: Improvements >](4-improvements.md)    
[Back to sheet two: Adding style >](2-style.md)

----

Got stuck? Have a look at [livewires.jamesdoc.com/03/](http://livewires.jamesdoc.com/03/) for an example of my Monopoly site. Right click in the browser and select `view source` to see the code.
