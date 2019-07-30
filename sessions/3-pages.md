# Creating new pages

We've built a template in `html` and we've added styles with `css`, but a website is more than just one page.

If you are writing a site about a book or a TV show, you might want a page about the characters… if you a writing about a sports team perhaps a page about the players… if a game perhaps a page about the storyline in it…

Make a copy of the `index.htm` page and give a name based on the title of the page. If you are making a site about a tv show you might want a page about the characters, so you would call it `characters.htm`.

Change the page title in the `<header>`

Go back to your web browser and navigate to your new file `localhost/characters.htm` (obviously you should replace `characters.htm` with the file name you have chosen…).

Huzzah, you should have a new page, but it looks very similar to your home page. Open up your new file in a text editor and give it a new title, and you can start adding in new content.

As you add content to your page there other some other tags that might be helpful:

**Images:**
```html
<img src="image.jpg" alt="Description of your image" />
```

**Lists:**
```html
<ol>
	<li>One</li>
	<li>Two</li>
	<li>Three</li>
</ol>
```

**Bullet points:**
```html
<ul>
	<li>Point</li>
	<li>Another point</li>
	<li>Final point</li>
</ul>
```

## Linking between pages

Now we have two pages, with some great content, we need make a way to get between the two pages. This is done with links.

Links are `HTML` tags with attributes, they look like this:

```html
<a href="file-name.htm">
  Text to display in the link
</a>
```

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
  <div class="container">
    <ul>
      <li><a href="index.htm">Home</a></li>
      <li><a href="characters.htm">The Characters</a></li>
    </ul>
  </div>
</nav>

<section>
```

Do you see that we added a list with a new tag in it? The `a` tag creates a link; the `href="…"` tells the browser which file to link to, and then the text after what the visitor to your site sees:

```html
<a href="new-page.htm">Text that is displayed</a>
```

Make sure that the second link points to your new page. Save the file, refresh the browser. Click through the new links… what happens? The second link will take you through to your second page, but because you don’t the code on the second page you can’t get back.

Copy the `<nav>…</nav>` code and paste it in the same place in your second page. Save it, refresh the page and you have a list on both pages with your navigation.

It’s functional, but does’t look very good. Lets write some `CSS` to fix that.

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
